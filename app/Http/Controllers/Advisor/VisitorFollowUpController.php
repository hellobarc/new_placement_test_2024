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
            'admission_status' => 'required|string',
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

        return redirect()->route('advisor.home')->with('success', 'Data Saved Successfully');

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
        FollowUp::updateOrCreate(['id'=>$id],[
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
        // if($request->this_month_search == 'on'){
            
        // }
        // elseif($request->next_month_search == 'on'){
        //     $getData = FollowUp::where('adviser_id', $adviserID)->whereNot('admission_status', 'next_month')->get();
        // }
        // elseif($request->two_month_search == 'on'){
        //     $getData = FollowUp::where('adviser_id', $adviserID)->whereNot('admission_status', 'two_month')->get();
        // }
        // elseif($request->three_month_search == 'on'){
        //     $getData = FollowUp::where('adviser_id', $adviserID)->whereNot('admission_status', 'three_month')->get();
        // }
        // elseif($request->four_month_search == 'on'){
        //     $getData = FollowUp::where('adviser_id', $adviserID)->whereNot('admission_status', 'four_month')->get();
        // }
        // elseif($request->later_admit_search == 'on'){
        //     $getData = FollowUp::where('adviser_id', $adviserID)->whereNot('admission_status', 'later_admit')->get();
        // }
        // dd($getData);
        return view('advisor.student.search-follow-up-list', compact('getData'));
    }
}
