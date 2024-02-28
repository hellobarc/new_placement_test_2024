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

        // dd($request);
        $request->validate([
            'full_name' => 'required|string|max:50',
            'contact_number' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'occupation' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'location' => 'required|string|max:50',
            'organization' => 'required|string|max:50',
            'date_of_birth' => 'required',
            'education' => 'required|string|max:50',
            'how_you_know' => 'required|string|max:50',
            'expected_country' => 'required|string|max:50',
            'expected_score' => 'required|int|max:50',
            'purpose_of_ielts' => 'required|string|max:50',
            'purpose_of_visit' => 'required|string|max:50',
            'assign_advisor' => 'required|int|max:50'
        ]);

        $fullName = $request->input('full_name');
        $contact_number = $request->input('contact_number');
        $email = $request->input('email');
        $occupation = $request->input('occupation');
        $address = $request->input('address');
        $locaion = $request->input('location');
        $organization = $request->input('organization');
        $date_of_birth = $request->input('date_of_birth');
        $education = $request->input('education');
        $how_you_know = $request->input('how_you_know');
        $expected_country = $request->input('expected_country');
        $expected_score = $request->input('expected_score');
        $purpose_of_ielts = $request->input('purpose_of_ielts');
        $purpose_of_visit = $request->input('purpose_of_visit');
        $branch_recomendation = $request->input('branch_recomendation');
        $assign_advisor = $request->input('assign_advisor');

        if($purpose_of_visit == 'ielts_registration' || $purpose_of_visit =='mock'){
            $visitorLog = VisitorLog::create([
                'full_name' => $fullName,
                'email' => $email,
                'mobile' => $contact_number,
                'purpose_of_visit' => $purpose_of_visit,
                'status' => 'unapproved',
                'assign_advisor' => 7
            ]);
        }
        else{
            $visitorLog = VisitorLog::create([
                'full_name' => $fullName,
                'email' => $email,
                'mobile' => $contact_number,
                'purpose_of_visit' => $purpose_of_visit,
                'status' => 'unapproved',
                'assign_advisor' => $assign_advisor
            ]);
        }
        

        VisitorInfo::create([
            'visitor_log_id' => $visitorLog->id,
            'purpose_of_ielts' => $purpose_of_ielts,
            'contact_number' => $contact_number,
            'occupation' => $occupation,
            'address' => $address,
            'location' => $locaion,
            'education' => $education,
            'organization' => $organization,
            'date_of_birth' => $date_of_birth,
            'expected_country' => $expected_country,
            'expected_score' => $expected_score,
            'how_you_know' => $how_you_know,
            'branch_recomendation' => $branch_recomendation

        ]);

        $advisorID = $request->assign_advisor;
        Helpers::AdvisorEventPushNotification($advisorID);

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

    // Notification Event Test
    public function notify(){
        $advisorID = Auth::user()->id;
        $getData = VisitorLog::where('assign_advisor', $advisorID)
        ->get();

        $notification = event(new PushNotification($getData));

        
    }

    public function adivserStatusUpdate(Request $request){

        $id = $request->input('id');
        $status = strtolower($request->input('status'));

        VisitorLog::where('id', $id)
        ->update([
            'status' => $status
        ]);
        
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

        $nextAdvisorId;
        $getAllAdvisors = User::where('type', 3)->get();

        $allAssignedUserarrId = [];
        
       
        $assignedAdvisors = VisitorLog::select('assign_advisor')->groupBy('assign_advisor')->get();
        foreach($assignedAdvisors as $rows){
            $allAssignedUserarrId [] = $rows->assign_advisor;
        }
        
        if(count($getAllAdvisors) == count($assignedAdvisors)){
            $perAdvisorAssign = DB::table('users')
                            ->select('users.id', DB::raw('COUNT(visitor_logs.assign_advisor) AS jobs_count'))
                            ->join('visitor_logs', 'users.id', '=', 'visitor_logs.assign_advisor')
                            ->groupBy('users.id')->get();
            $minUserId = [];
            $hello = [];
            
            foreach($perAdvisorAssign as $rows){
                array_push($hello, $rows->jobs_count);
            }
          
            $minValue = min($hello);
           
            foreach($perAdvisorAssign as $rows){
                if($minValue == $rows->jobs_count){
                    $minUserId []= $rows->id;
                }
            }
            $nextAdvisorId = $minUserId[0];
            VisitorLog::updateOrCreate(
                [
                    'id'=>$studentId,
                ],
                [
                    'assign_advisor' => $nextAdvisorId,
                ]);
                Helpers::AdvisorEventPushNotification($nextAdvisorId);
            return redirect('/advisor/home');
            
        }else{
            foreach($getAllAdvisors as $adviser){
              
                if(in_array($adviser->id, $allAssignedUserarrId)){
                }
                else{
                  
                   VisitorLog::updateOrCreate(
                    [
                        'id'=>$studentId,
                    ],
                    [
                        'assign_advisor' => $adviser->id,
                    ]);
                    Helpers::AdvisorEventPushNotification($adviser->id);
                    return redirect('/advisor/home');
                   break;
                }
            }   
        }
    }


    public function storeFollowUp(Request $request,$student_id){
        // dd($request);
        $request->validate([
            'remarks' => 'required|string',
            'admission_status' => 'required|string',
            'next_follow_up_date' => 'required'
        ]);

        $studentId = $student_id;
        $adviserID = Auth::user()->id;
        // dd($adviserID);
        $remarks = $request->input('remarks');
        $admission_status = $request->input('admission_status');
        $currentFollowUpDate = date('Y-m-d');
        $nextFollowUpDate = $request->input('next_follow_up_date');

        FollowUp::create([
            'student_id' => $studentId,
            'adviser_id' => $adviserID,
            'remarks' => $remarks,
            'admission_status' => $admission_status,
            'current_follow_up_date' => $currentFollowUpDate,
            'next_follow_up_date' => $nextFollowUpDate
        ]);


        return redirect()->back()->with('success', 'Data Saved Successfully');

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

}