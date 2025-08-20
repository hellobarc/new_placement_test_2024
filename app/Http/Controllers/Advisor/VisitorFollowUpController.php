<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\{
    User,
    VisitorLog,
    FollowUp,
    CourseBundle,
    VisitorInfo,
};
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

class VisitorFollowUpController extends Controller
{
    private $api_cros_url;
    private Client $client;

    public function __construct()
    {
        $this->api_cros_url = env('API_CROS_URL', 'https://barcportal.com/api');
        $this->client = new Client();
    }
    public function followup($studentId,$pagination_page){
        $advisorID = Auth::user()->id;

        $getData = VisitorLog::where('assign_advisor', $advisorID)
        ->whereNot('purpose_of_visit','mock')
        ->whereNot('purpose_of_visit','ielts_registration')
        ->whereNot('status', 'declined')
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('advisor.student.follow-up', compact('getData', 'studentId','pagination_page'));
    }
    public function storeFollowUp(Request $request,$student_id){
        // dd($request);
        $request->validate([
            'admission_status' => 'required|string',
        ]);

        $studentId = $student_id;
        $adviserID = Auth::user()->id;
        // dd($adviserID);
        $remarks = $request->input('remarks');
        $admission_status = $request->input('admission_status');
        $currentFollowUpDate = date('Y-m-d');
        $nextFollowUpDate = $request->input('next_follow_up_date');

        FollowUp::updateOrCreate(['student_id' => $studentId],[
            'student_id' => $studentId,
            'adviser_id' => $adviserID,
            'remarks' => $remarks,
            'admission_status' => $admission_status,
            'current_follow_up_date' => $currentFollowUpDate,
            'next_follow_up_date' => $nextFollowUpDate
        ]);

        return redirect()->route('advisor.home',['page' => request('page', $request->pagination_page)])->with('success', 'Data Saved Successfully');

    }
    public function followUpEditView($id){
        $data = FollowUp::find($id);
        return view('advisor.student.follow-up-edit', compact('data'));
    }
    public function followUpEdit(Request $request){
        // dd($request);

        $id = $request->input('id');
        $admission_status = $request->input('admission_status');
        $remarks = $request->input('remarks');
        $nextFollowUpDate = $request->input('next_follow_up_date');

        FollowUp::where('id',$id)
        ->update([
            'admission_status' => $admission_status,
            'remarks' => $remarks,
            'next_follow_up_date' => $nextFollowUpDate
        ]);

        return redirect()->back()->with('success', 'Follow Up Edited Successfully');
    }

    public function followUpDelete(Request $request, $id){
        FollowUp::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Follow Up Deleted');
    }
    public function followUpList()
    {
        $adviserID = Auth::user()->id;
        $getData = FollowUp::where('adviser_id', $adviserID)->whereNot('admission_status', 'admitted')->with('student')->get();
        return view('advisor.student.follow-up-list', compact('getData'));
    }
    public function updateFollowUp(Request $request, $id)
    {
        $remarks = $request->input('remarks');
        $admission_status = $request->input('admission_status');
        $currentFollowUpDate = date('Y-m-d');
        $nextFollowUpDate = $request->input('next_follow_up_date');
        $adviserID = Auth::user()->id;
        //dd($request->student_id);
        FollowUp::updateOrCreate(
            [
                'student_id'=>$request->student_id
            ],
            [
            'student_id' => $request->student_id,
            'adviser_id' => $adviserID,
            'remarks' => $remarks,
            'admission_status' => $admission_status,
            'current_follow_up_date' => $currentFollowUpDate,
            'next_follow_up_date' => $nextFollowUpDate
        ]);

        return redirect()->route('advisor.home')->with('success', 'Data Saved Successfully');
    }
    public function followUpSearch(Request $request)
    {
        //dd($request->all());
        $adviserID = Auth::user()->id;
        $month_search = $request->month_search;
        $getData = FollowUp::where('adviser_id', $adviserID)->where('admission_status', $month_search)->get();
        return view('advisor.student.search-follow-up-list', compact('getData'));
    }
    public function studentTotalEnrolledCourse(Request $request)
    {
        // Step 1: Validate incoming request fields
        //dd($request->all());
        $request->validate([
            'student_id'                        => 'required|exists:visitor_infos,visitor_log_id',
            'placement_test_score'              => 'nullable|numeric|min:0|max:100',
            'total_enrolled_course'             => 'nullable|array',
            'total_enrolled_course.*'           => 'in:a1,a2,b1,b2,c1',
            'total_enrolled_package_course'     => 'nullable|string|in:a1-b2,a2-b2,a2-c1,b1-b2,b1-c1,b2-c1',
        ]);

        // Step 2: Determine enrolled course(s)
        $enrolled_course        = $request->total_enrolled_course;

        if (!$enrolled_course) {
            $package_course     = $request->total_enrolled_package_course;
            $course_map = [
                'a1-b2'         => ['a1', 'a2', 'b1', 'b2'],
                'a2-b2'         => ['a2', 'b1', 'b2'],
                'a2-c1'         => ['a2', 'b1', 'b2', 'c1'],
                'b1-b2'         => ['b1', 'b2'],
                'b1-c1'         => ['b1', 'b2', 'c1'],
                'b2-c1'         => ['b2', 'c1'],
            ];
            $enrolled_course = $course_map[$package_course] ?? null;
        }

        if (!$enrolled_course || empty($enrolled_course)) {
            return redirect()->route('advisor.home')->withErrors('Courses are not selected.');
        }

        try {
            $student_id = $request->student_id;

            // Step 3: Save to local DB
            VisitorInfo::updateOrCreate(
                ['visitor_log_id'       => $student_id],
                ['total_enroll_course'  => json_encode($enrolled_course)]
            );

            $student_info               = VisitorInfo::where('visitor_log_id', $student_id)
                                        ->with('studentInfo')
                                        ->firstOrFail();

            // Step 4: Validate API Payload
            $validationData = [
                'full_name'                 => $student_info->studentInfo->full_name,
                'email'                     => $student_info->studentInfo->email,
                'date_of_birth'             => $student_info->date_of_birth,
                'desired_score'             => $student_info->expected_score,
                'placement_test_score'      => $request->placement_test_score,
                'contact_number'            => $student_info->studentInfo->mobile,
                'emergency_contact'         => $contact_number = $student_info->emergency_number ?? $student_info->studentInfo->mobile,
                'address'                   => trim("{$student_info->division} {$student_info->district} {$student_info->upazilla} {$student_info->thana}"),
                'parent_name'               => null,
                'parent_phone'              => $student_info->studentInfo->mobile,
                'parent_type'               => 'Gardian',
                'current_registered_course' => $enrolled_course[0],
                'total_enrolled_course'     => $enrolled_course,
            ];
            //dd($validationData);
            $validator = Validator::make($validationData, [
                'full_name'                 => 'required|string|max:255',
                'email'                     => 'required|email|max:255',
                'date_of_birth'             => 'required|date|before:today',
                'desired_score'             => 'nullable|numeric|min:0|max:9',
                'placement_test_score'      => 'nullable|numeric|min:0|max:100',
                'contact_number'            => 'required|string|min:8|max:20',
                'emergency_contact'         => 'nullable|string|min:8|max:20',
                'address'                   => 'required|string|max:500',
                'parent_name'               => 'nullable|string|max:255',
                'parent_phone'              => 'required|string|min:8|max:20',
                'parent_type'               => 'required|in:Gardian,Father,Mother,Relative,Other',
                'current_registered_course' => 'required|in:a1,a2,b1,b2,c1',
                'total_enrolled_course'     => 'required|array|min:1',
                'total_enrolled_course.*'   => 'in:a1,a2,b1,b2,c1',
            ]);

            if ($validator->fails()) {
                return redirect()->route('advisor.home')->withErrors($validator->errors());
            }

            // Step 5: Send data to remote API
            $response = $this->client->post("{$this->api_cros_url}/store/student/placement-test", [
                'json' => array_merge($validationData, [
                    'total_enrolled_course'     => json_encode($enrolled_course),
                ]),
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() === 201) {
                return redirect()->route('advisor.home')->with('success', 'Student total enrolled course uploaded.');
            }

            // If API returns non-201
            $errorBody = json_decode($response->getBody()->getContents(), true);
            $errorMessage = $errorBody['message'] ?? 'Student info not sent to portal! Try again.';

            Log::error('API Error', [
                'status' => $response->getStatusCode(),
                'response' => $errorBody
            ]);

            return redirect()->route('advisor.home')->withErrors($errorMessage);

        } catch (GuzzleException $e) {
            $errorResponse = 'No response available';
            $errorJson = null;
            $errorMessage = $e->getMessage();

            if ($e instanceof RequestException && $e->hasResponse()) {
                $response = $e->getResponse();
                $errorResponse = (string) $response->getBody();

                if (strpos($response->getHeaderLine('Content-Type'), 'application/json') !== false) {
                    $errorJson = json_decode($errorResponse, true);

                    if (isset($errorJson['message'])) {
                        $errorMessage = $errorJson['message'];
                    } elseif (isset($errorJson['error']) && is_string($errorJson['error'])) {
                        $errorMessage = $errorJson['error'];
                    } elseif (isset($errorJson['error']['message'])) {
                        $errorMessage = $errorJson['error']['message'];
                    } else {
                        $errorMessage = json_encode($errorJson);
                    }
                }
            }

            Log::error('API request failed', [
                'exception_message' => $e->getMessage(),
                'response_body' => $errorResponse,
            ]);

            return redirect()->route('advisor.home')->withErrors('Remote API failed: ' . $errorMessage);
        }
    }
}
