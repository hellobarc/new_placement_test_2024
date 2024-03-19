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
    FollowUp
};
use Auth;
use DB;


class VisitorController extends Controller
{

    public function storeVisitorInfo(Request $request){

        $request->validate([
            'full_name' => 'required|string|max:50',
            'contact_number' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'purpose_of_visit' => 'required|string|max:50',
            'assign_advisor' => 'required|int|max:50'
        ]);
        $purpose_of_visit   = $request->input('purpose_of_visit');
        $fullName           = $request->input('full_name');
        $contact_number     = $request->input('contact_number');
        $email              = $request->input('email');
        $assign_advisor     = $request->input('assign_advisor');
        $form_input_time    = time();
        $how_you_know       = $request->input('how_you_know');
        if($how_you_know == 'student_reference'){
            $refer_stu_name     = $request->input('refer_stu_name');
            $refer_phone_number = $request->input('refer_phone_number');
            $refer_batch_name   = $request->input('refer_batch_name');
        }else{
            $refer_stu_name     = NULL;
            $refer_phone_number = NULL;
            $refer_batch_name   = NULL;
        }
        if($purpose_of_visit == 'basic_english'||$purpose_of_visit == 'spoken'||$purpose_of_visit == 'ielts_courses'||$purpose_of_visit == 'online_courses'||$purpose_of_visit == 'others'){
            $occupation         = $request->input('occupation');
            $address            = $request->input('address');
            $location            = $request->input('location');
            $organization       = $request->input('organization');
            $date_of_birth      = $request->input('date_of_birth');
            $education          = $request->input('education');
            $expected_country   = $request->input('expected_country');
            $expected_score     = $request->input('expected_score');
            $purpose_of_ielts   = $request->input('purpose_of_ielts');
            //others
             $ielts_test_center     = NULL;
             $ielts_exam_type       = NULL;
             $category_of_ielts     = NULL;
             $ielts_can_id          = NULL;
             $ielts_exam_date       = NULL;
             $comments_from_student = NULL;
             $feedback_from_advisor = NULL;
        }elseif($purpose_of_visit == 'mock'){
            $occupation         = $request->input('occupation');
            $address            = $request->input('address');
            $location            = $request->input('location');
            $organization       = NULL;
            $date_of_birth      = NULL;
            $education          = NULL;
            $expected_country   = NULL;
            $expected_score     = NULL;
            $purpose_of_ielts   = $request->input('purpose_of_ielts');
            //others
             $ielts_test_center     = NULL;
             $ielts_exam_type       = NULL;
             $category_of_ielts     = NULL;
             $ielts_can_id          = NULL;
             $ielts_exam_date       = NULL;
             $comments_from_student = NULL;
             $feedback_from_advisor = NULL;
        }elseif($purpose_of_visit == 'ielts_registration'){
            $occupation         = NULL;
            $address            = NULL;
            $location           = NULL;
            $organization       = NULL;
            $date_of_birth      = NULL;
            $education          = NULL;
            $expected_country   = NULL;
            $expected_score     = NULL;
            $purpose_of_ielts   = NULL;
            //others
             $ielts_test_center     = $request->input('ielts_test_center');
             $ielts_exam_type       = $request->input('ielts_exam_type');
             $category_of_ielts     = $request->input('category_of_ielts');
             $ielts_can_id          = NULL;
             $ielts_exam_date       = NULL;
             $comments_from_student = NULL;
             $feedback_from_advisor = NULL;
        }elseif($purpose_of_visit == 'ielts_certificate'){
            $occupation         = NULL;
            $address            = NULL;
            $location           = NULL;
            $organization       = NULL;
            $date_of_birth      = NULL;
            $education          = NULL;
            $expected_country   = NULL;
            $expected_score     = NULL;
            $purpose_of_ielts   = NULL;
            //others
             $ielts_test_center     = NULL;
             $ielts_exam_type       = NULL;
             $category_of_ielts     = NULL;
             $ielts_can_id          = $request->input('ielts_can_id');
             $ielts_exam_date       = $request->input('ielts_exam_date');
             $comments_from_student = NULL;
             $feedback_from_advisor = NULL;
        }
        $visitorLog = VisitorLog::create([
            'assign_advisor'            => $assign_advisor,
            'full_name'                 => $fullName,
            'email'                     => $email,
            'mobile'                    => $contact_number,
            'purpose_of_visit'          => $purpose_of_visit,
            'status'                    => 'unapproved',
            'adviser_notification'      => 'not_seen',
            'front_desk_notification'   => 'not_seen',
            'status'                    => 'unapproved',
            'time_log'                  => $form_input_time
        ]);
                
        VisitorInfo::create([
            'visitor_log_id'            => $visitorLog->id,
            'occupation'                => $occupation,
            'address'                   => $address,
            'location'                  => $location,
            'organization'              => $organization,
            'date_of_birth'             => $date_of_birth,
            'education'                 => $education,
            'expected_country'          => $expected_country,
            'expected_score'            => $expected_score,
            'purpose_of_ielts'          => $purpose_of_ielts,
            'refer_stu_name'            => $refer_stu_name,
            'refer_phone_number'        => $refer_phone_number,
            'refer_batch_name'          => $refer_batch_name,
            'ielts_test_center'         => $ielts_test_center,
            'ielts_exam_type'           => $ielts_exam_type,
            'category_of_ielts'         => $category_of_ielts,
            'ielts_can_id'              => $ielts_can_id,
            'ielts_exam_date'           => $ielts_exam_date,
            'comments_from_student'     => $comments_from_student,
            'feedback_from_advisor'     => $feedback_from_advisor,
            'how_you_know'              => $how_you_know,
        ]);

        $advisorID = $request->assign_advisor;
        // Helpers::AdvisorEventPushNotification($advisorID);

        return redirect()->back()->with('success', 'Student Information Submitted to the Selected Advisor');
    } 


    public function studentDetails($id){
        $getDetails = DB::table('visitor_infos')
        ->join('visitor_logs', 'visitor_infos.visitor_log_id', '=', 'visitor_logs.id')
        ->first();

        return view('studentDetails', compact('getDetails'));
    }
    
    public function studentDetailsUpdate(Request $request,$id){
        VisitorInfo::updateOrCreate(
            ['visitor_log_id' => $id],
            [
                'comments_from_student' => $request->comments_from_student,
                'feedback_from_advisor' => $request->feedback_from_advisor
            ]
            );

        return redirect()->route('student.Details', ['id' => $id]);
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

}