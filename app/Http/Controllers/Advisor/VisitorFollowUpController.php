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
};
class VisitorFollowUpController extends Controller
{
    public function followup($studentId){
        $advisorID = Auth::user()->id;

        $getData = VisitorLog::where('assign_advisor', $advisorID)
        ->whereNot('purpose_of_visit','mock')
        ->whereNot('purpose_of_visit','ielts_registration')
        ->whereNot('status', 'declined')
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('advisor.student.follow-up', compact('getData', 'studentId'));
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
