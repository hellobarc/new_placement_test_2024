<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\{
    VisitorLog,
    VisitorInfo,
};
use App\Models\TestSubmission\TestSubmissionLog;
use DB;
use App\Helpers\Helpers;
class ManageVistorController extends Controller
{
    public function dayWiseVisitorList()
    {
        return view('manager.day-wise-visitor');
    }
    public function storeDayWiseVisitorList(Request $request)
    {
        $data = $request->all();
        
        $date = $data['date'];
        // $allData = VisitorLog::whereDate('created_at', $date)->with('userInfo', 'totalUser', 'followUp')->orderBy('id', 'desc')->paginate(20);
        $allData = TestSubmissionLog::whereDate('created_at', $date)->with('student')->orderBy('id', 'desc')->paginate(20);
        $countData = count($allData);
        //dd($allData);
        return view('manager.day-wise-visitor-list', compact('allData', 'countData', 'date'));
    }
    public function allVisitorList()
    {
        $allData = VisitorLog::with('userInfo', 'totalUser', 'followUp')->orderBy('id', 'desc')->paginate(50);
        return view('manager.all-visitor-list', compact('allData'));
    }
    public function empolyFeedbackGet()
    {
         $mushumi_value = DB::table('employ_voting')->where('name', 'Mushumi')->sum('value');
         $tanjin_value = DB::table('employ_voting')->where('name', 'Tanjin')->sum('value');
         $mahfuj_value = DB::table('employ_voting')->where('name', 'Mahfuj')->sum('value');
         $riad_value = DB::table('employ_voting')->where('name', 'Riad')->sum('value');
         $muktadir_value = DB::table('employ_voting')->where('name', 'Muktadir')->sum('value');
         $shoma_value = DB::table('employ_voting')->where('name', 'Shoma')->sum('value');
         $arman_value = DB::table('employ_voting')->where('name', 'Armaan')->sum('value');
         $minar_value = DB::table('employ_voting')->where('name', 'Minar')->sum('value');
         
        return view('manager.get-all-executive-commity', compact('mushumi_value','tanjin_value','mahfuj_value','riad_value','muktadir_value','shoma_value','minar_value','arman_value'));
    }
    public function manageChangeAdvisor()
    {
        $getData = VisitorLog::orderBy('id', 'desc')->paginate(10);
        $getAdvisorList = User::where('type', 3)->get();
        return view('manager.manage-change-advisor', compact('getData', 'getAdvisorList'));

    }
    public function changeAdvisor(Request $request,$id){
        //dd($request->all());
        $advisorId = $request->assign_advisor;
        VisitorLog::where('id',$id)
        ->update([
            'assign_advisor' => $advisorId,
            'status' => 'unapproved',
            'adviser_notification' => 'not_seen',
            'front_desk_notification' => 'not_seen',
        ]);

        Helpers::AdvisorEventPushNotification($advisorId);
        return redirect()->route('manager.manage-change.advisor')->with('success','Student Assigned To Adviser');
    }
    public function search(Request $request)
    {
        //$allData = VisitorLog::with('userInfo', 'totalUser', 'followUp')->orderBy('id', 'desc')->paginate(50);
        $search = $request->input('search');
        
        $allData = VisitorLog::where('mobile', 'like', "%$search%")->orWhere('email','like', "%$search%")->with('userInfo', 'totalUser', 'followUp')->orderBy('id', 'desc')->paginate(10);
        return view('manager.search', compact('allData'));
    }
}
