<?php

namespace App\Http\Controllers;
Use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Events\{
    PushNotification
};
use App\Models\{
    VisitorInfo,
    User,
    VisitorLog,
    FollowUp,
    Upazilla,
    District,
    Division,
    MetropolitanAreaThana,
    SurveyLog,
};
use Auth;
use DB;
use Mail;
use App\Mail\AdvisorEmailNotification;
use Validator;
class VisitorController extends Controller
{

    public function storeVisitorInfo(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(),[
            'full_name'             => 'required|string|max:50',
            'contact_number'        => 'required|string|max:50|unique:visitor_logs,mobile',
            'purpose_of_visit'      => 'required|string|max:50',
            'assign_advisor'        => 'required|int|max:50',
            'visit_branch'          => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $purpose_of_visit   = $request->input('purpose_of_visit');
        $fullName           = $request->input('full_name');
        $contact_number     = $request->input('contact_number');
        $assign_advisor     = $request->input('assign_advisor');
        $visit_branch     = $request->input('visit_branch');
        $form_input_time    = time();
        if($request->input('email')){
            $email        = $request->input('email');
        }else{
            $email = 'hellobarc@gmail.com';
        }
        $getUser = User::where('id', $assign_advisor)->first();
        //dd($getUser->type);
        if(($purpose_of_visit == 'mock' || $purpose_of_visit == 'ielts_registration') && $getUser->type != 'mock'){
            return redirect()->back()->withErrors('Please select IELTS Department');
        }elseif(($purpose_of_visit == 'course' || $purpose_of_visit == 'others') && $getUser->type != 'advisor'){
            return redirect()->back()->withErrors('Please select a advisor');
        }else{
            $visitorLog = VisitorLog::create([
                'assign_advisor'            => $assign_advisor,
                'full_name'                 => $fullName,
                'email'                     => $email,
                'mobile'                    => $contact_number,
                'purpose_of_visit'          => $purpose_of_visit,
                'visit_branch'              => $visit_branch,
                'status'                    => 'unapproved',
                'adviser_notification'      => 'not_seen',
                'front_desk_notification'   => 'not_seen',
                'status'                    => 'unapproved',
                'time_log'                  => $form_input_time
            ]);
            VisitorInfo::create([
                'visitor_log_id'            => $visitorLog->id,
            ]);
            SurveyLog::create([
                'student_id' => $visitorLog->id,
                'completed_part' => 1,
                'status' => 'pending',
            ]);
            $advisorID = $request->assign_advisor;
            // Helpers::AdvisorEventPushNotification($advisorID);
            $advisor = User::find($assign_advisor);
            $email_visitor_info = [
                'full_name'                 => $fullName,
                'email'                     => $email,
                'mobile'                    => $contact_number,
                'purpose_of_visit'          => $purpose_of_visit,
            ];

            // Mail::to($advisor->email)->send(new AdvisorEmailNotification($email_visitor_info, "BARC New Visitor Info"));

            return redirect()->back()->with('success', 'Student Information Submitted to the Selected Advisor');
        }
    }
    public function studentDetails($student_id, $step, $pagination_page){
        $getDetails = VisitorInfo::where('visitor_log_id', $student_id)->with('studentInfo')->first();
        $expected_country_arr = json_decode($getDetails->expected_country);
        $school_goes_arr = json_decode($getDetails->school_goes);
        $area_of_improve = json_decode($getDetails->topics_improvement);
        $area_of_strength = json_decode($getDetails->topics_strengths);
        $total_enroll_course_arr = json_decode($getDetails->total_enroll_course);
        $allDivisions = Division::all();
        $allDistricts = District::all();
        $allUpazillas = Upazilla::all();
        $allMetropolitanThanas = MetropolitanAreaThana::select('upazilla_id')->with('Upazilla')->distinct()->get();
        return view('advisor.student.studentDetails', compact('getDetails',
        'expected_country_arr',
        'school_goes_arr',
        'total_enroll_course_arr',
        'step',
        'area_of_improve',
        'area_of_strength',
        'allDivisions',
        'allDistricts',
        'allUpazillas',
        'allMetropolitanThanas', 'pagination_page'));
    }
    public function GetDistricts(Request $request){
        $divisionName = $request->params['divisionName'];
        $divisionId = Division::where('name', $divisionName)->first();
        $DistrictsUnderDivision = District::where('division_id', $divisionId->id)->get();

        return response()->json([
            'districts' => $DistrictsUnderDivision
        ]);
    }
    public function GetUpazillas(Request $request){
        $districtName = $request->params['districtName'];
        $districtId = District::where('name', $districtName)->first();
        $UpazillaUnderDistrict = Upazilla::where('district_id', $districtId->id)->get();

        return response()->json([
            'upazillas' => $UpazillaUnderDistrict
        ]);
    }
    public function GetThana(Request $request){
        // dd($request->input());
        $upazillaName = $request->params['upazillaName'];
        $upazillaId = Upazilla::where('name', $upazillaName)->first();
        $thanasUnderUpazilla = MetropolitanAreaThana::where('upazilla_id', $upazillaId->id)->get();

        return response()->json([
            'thanas' => $thanasUnderUpazilla
        ]);
    }
    public function studentAllDetails($student_id){
        $getDetails = VisitorInfo::where('visitor_log_id', $student_id)->with('studentInfo')->first();
        $expected_country_arr = json_decode($getDetails->expected_country);
        $school_goes_arr = json_decode($getDetails->school_goes);
        $area_of_improve = json_decode($getDetails->topics_improvement);
        $area_of_strength = json_decode($getDetails->topics_strengths);
        $total_enroll_course_arr = json_decode($getDetails->total_enroll_course);
        $allDivisions = Division::all();
        $allDistricts = District::all();
        $allUpazillas = Upazilla::all();
        $allMetropolitanThanas = MetropolitanAreaThana::get();
        return view('advisor.student.student-all-details', compact('getDetails',
        'expected_country_arr',
        'school_goes_arr',
        'total_enroll_course_arr',
        'area_of_improve',
        'area_of_strength',
        'allDivisions',
        'allDistricts',
        'allUpazillas',
        'allMetropolitanThanas'))->with('message', 'Student all information uploaded successfully');
    }
    public function studentDetailsUpdate(Request $request,$id)
    {
        //dd($request->all());
        $step = $request->step;
        $pagination_page = $request->pagination_page;
        if($step == 1){
            $visitorLog = VisitorLog::updateOrCreate(['id'=> $request->student_id],[
                'full_name'                 => $request->full_name,
                'email'                     => $request->email,
                'mobile'                    => $request->contact_number,
                'purpose_of_visit'          => $request->purpose_of_visit,
            ]);
        return redirect()->route('student.Details', ['student_id'=>$request->student_id, 'step'=>2, 'pagination_page'=>$pagination_page]);
        }elseif($step == 2){
            if($request->how_you_know == 'student_reference'){
                $refer_stu_name = $request->refer_stu_name;
                $refer_phone_number = $request->refer_phone_number;
                $refer_batch_name = $request->refer_batch_name;
            }else{
                $refer_stu_name = NULL;
                $refer_phone_number = NULL;
                $refer_batch_name = NULL;
            }
            VisitorInfo::updateOrCreate([
                'id' => $id,
                'visitor_log_id' =>$request->student_id,
            ],[
                'how_you_know' => $request->how_you_know,
                'refer_stu_name' => $refer_stu_name,
                'refer_phone_number' => $refer_phone_number,
                'refer_batch_name' => $refer_batch_name,
                'specific_course' => $request->type_course,
            ]);
            SurveyLog::updateOrCreate(['student_id'=>$request->student_id],[
                'completed_part' => 2,
            ]);
            return redirect()->route('student.Details', ['student_id'=>$request->student_id, 'step'=>3, 'pagination_page'=>$pagination_page]);
        }elseif($step == 3){
            VisitorInfo::updateOrCreate([
                'id' => $id,
                'visitor_log_id' =>$request->student_id,
            ],[
                'purpose_of_ielts' => $request->purpose_of_ielts,
                'ielts_taken' => $request->ielts_taken,
                'expected_score' => $request->expected_score,
                'expected_country' => json_encode($request->expected_country),
                'ielts_enough_time' => $request->ielts_enough_time,
                'topics_improvement' => json_encode($request->topics_improvement),
                'topics_strengths' => json_encode($request->topics_strengths),
                'first_current_level' => $request->your_current_level,
            ]);
            SurveyLog::updateOrCreate(['student_id'=>$request->student_id],[
                'completed_part' => 3,
            ]);
            return redirect()->route('student.Details', ['student_id'=>$request->student_id, 'step'=>4, 'pagination_page'=>$pagination_page]);
        }elseif($step == 4){
            VisitorInfo::updateOrCreate([
                'id' => $id,
                'visitor_log_id' =>$request->student_id,
            ],[
                'occupation' =>$request->occupation,
                'education' =>$request->education,
                'organization' =>$request->organization,
                'date_of_birth' =>$request->date_of_birth,
                'location' =>NULL,
                'division' =>$request->division,
                'district' =>$request->district,
                'upazilla' =>$request->upazilla,
                'thana' =>$request->thana,
                'blood_group'=> $request->blood_group,
                'emergency_number'=> $request->emergency_number,
                'nid_passport_number'=> $request->nid_passport_number,
                'comments_from_student' => $request->comments_from_student,
                'feedback_from_advisor' => $request->feedback_from_advisor
            ]);
            SurveyLog::updateOrCreate(['student_id'=>$request->student_id],[
                'completed_part' => 4,
                'status' => 'completed',
            ]);
            return redirect()->route('student.all.Details', ['student_id'=>$request->student_id])->with('message', 'Student all information uploaded successfully');
        }

    }
    public function statusChanged(Request $request, $id){
        $changedStatus = $request->input('status');

        VisitorLog::where('id', $id)
        ->update([
            'status' => $changedStatus
        ]);

    }
    public function AdviserNotificationCount(){
        $advisorID = Auth::user()->id;
        $notificationCount = VisitorLog::where('assign_advisor',$advisorID)
        ->where('adviser_notification','not_seen')->count();

        return $notificationCount;
    }
    public function adivserUpdateStudentStatus(Request $request){

        $id = $request->input('id');
        $status = strtolower($request->input('status'));

        VisitorLog::where('id', $id)
        ->update([
            'status' => $status
        ]);

        // Helpers::FrontEventPushNotification();
        return redirect('/advisor/home');
    }
    public function mockStatusUpdate(Request $request){

        $id = $request->input('id');
        $status = strtolower($request->input('status'));

        VisitorLog::where('id', $id)
        ->update([
            'status' => $status
        ]);

        return redirect('/mock-student-list');
    }
    public function DeclineStudentAssign($studentId){
        VisitorLog::where('id', $studentId)
                    ->update([
                        'status' => 'declined',
                        'adviser_notification' => 'not_seen',
                        'front_desk_notification' => 'not_seen'
                    ]);
        // Helpers::FrontEventPushNotification();
        return redirect('/advisor/home');
    }
    public function timeOutDeclined(){
        $adviserId = Auth::user()->id;

        VisitorLog::where('assign_advisor', $adviserId)
                    ->where('status', 'unapproved')
                    ->update([
                        'status' => 'declined'
                    ]);
        // Helpers::FrontEventPushNotification();
        return redirect()->back()->with('success','Unapproved Students Declined');
    }
    //Notification status Change
    public function frontNotification(){
        VisitorLog::where('front_desk_notification', 'not_seen')
                    ->update([
                        'front_desk_notification' => 'seen'
                    ]);
        return redirect()->back();
    }
    public function AdviserNotification(){
        $advisorID = Auth::user()->id;
        VisitorLog::where('assign_advisor',$advisorID)
        ->where('adviser_notification', 'not_seen')
                    ->update([
                        'adviser_notification' => 'seen'
                    ]);
        return redirect()->back();
    }
    public function frontNotificationCount(){
        $notificationCount = VisitorLog::where('status', 'declined')
        ->where('front_desk_notification','not_seen')
        ->count();

        return $notificationCount;
    }
    public function mockNotificationCount(){
        $advisorID = Auth::user()->id;
        $notificationCount = VisitorLog::where('assign_advisor', $advisorID)
        ->where('adviser_notification','not_seen')
        ->count();

        return $notificationCount;
    }
    public function MockNotificationChange(){
        $advisorID = Auth::user()->id;
        VisitorLog::where('assign_advisor',$advisorID)
        ->where('adviser_notification', 'not_seen')
                    ->update([
                        'adviser_notification' => 'seen'
                    ]);
        return redirect()->back();
    }
    public function getUserInfoByUserContact(Request $request){
        $data = $request->all();
        $contact_number = $data['contact_number'];
        $getData = VisitorLog::where('mobile', $contact_number)->first();
        return response()->json(['find_data'=>$getData, 200]);
    }

}
