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


class FrontDeskController extends Controller{
    public function changeAdvisor(Request $request,$id){
        $advisorId = $request->assign_advisor;
        VisitorLog::where('id',$id)
        ->update([
            'assign_advisor' => $advisorId,
            'status' => 'unapproved'
        ]);

        Helpers::AdvisorEventPushNotification($advisorId);
        return redirect()->route('front.student.list')->with('success','Student Assigned To Adviser');
    }
}