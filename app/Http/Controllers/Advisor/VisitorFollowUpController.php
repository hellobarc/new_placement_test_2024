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
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class VisitorFollowUpController extends Controller
{
    private $api_cros_url;
    private Client $client;
    
    public function __construct()
    {
        $this->api_cros_url = env('API_CROS_URL', 'http://barcportal.com/api');
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
        //dd($request->all());
        
        if($request->total_enrolled_course){
            $enrolled_course = $request->total_enrolled_course;
        }else{
            $package_course = $request->total_enrolled_package_course;
            if($package_course == 'a1-b2'){
                $enrolled_course = ['a1','a2','b1','b2'];
            }elseif($package_course == 'a2-b2'){
                $enrolled_course = ['a2','b1','b2'];
            }elseif($package_course == 'a2-c1'){
                $enrolled_course = ['a2','b1','b2','c1'];
            }elseif($package_course == 'b1-b2'){
                $enrolled_course = ['b1','b2'];
            }elseif($package_course == 'b1-c1'){
                $enrolled_course = ['b1','b2','c1'];
            }elseif($package_course == 'b2-c1'){
                $enrolled_course = ['b2','c1'];
            }
        }
        
        if($enrolled_course == null){
            return redirect()->route('advisor.home')->withErrors('Courses are not selected');
        }else{
            try{
                $student_id = $request->student_id;
                
    
                VisitorInfo::updateOrCreate([
                        'visitor_log_id' => $student_id,
                    ],
                    [
                        'total_enroll_course' => json_encode($enrolled_course),
                    ]);

                $student_info = VisitorInfo::where('visitor_log_id', $student_id)->with('studentInfo')->first();

                $response = $this->client->post("{$this->api_cros_url}/store/student/placement-test",[
                    'json' => [
                        "full_name"=>$student_info->studentInfo->full_name,
                        "email"=>$student_info->studentInfo->email,
                        "date_of_birth"=>$student_info->date_of_birth,
                        "desired_score"=>$student_info->expected_score,
                        "placement_test_score"=>$request->placement_test_score,
                        "contact_number"=>$student_info->studentInfo->mobile,
                        "emergency_contact"=>$student_info->emergency_number,
                        "address"=>$student_info->division." ".$student_info->district." ".$student_info->upazilla." ".$student_info->thana,
                        "parent_name"=>NULL,
                        "parent_phone"=>$student_info->studentInfo->mobile,
                        "parent_type"=>'Gardian',
                        "current_registered_course"=>$enrolled_course[0],
                        "total_enrolled_course"=>json_encode($enrolled_course),
                    ],
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ]
                ]);
                
                return redirect()->route('advisor.home')->with('success', 'Student total enrolled course uploaded');
            }catch (GuzzleException $e) {
                dd($e->getMessage());
                Log::error("bKash Token Error: " . $e->getMessage());
                return null;

            }
        }
    }
}
