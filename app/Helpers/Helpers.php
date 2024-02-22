<?php

namespace App\Helpers;

use Carbon\Carbon;
use Auth;
use App\Models\{
    User,
    Module,
    VisitorInfo,
    VisitorLog
};

use App\Events\{
    PushNotification
};

class Helpers {
    public static function find_module($module_id)
    {
        $module = Module::find($module_id);
        $module_name = $module->name;
        return $module_name;
    }

    public static function AdvisorNotification($advisor_id){
        $data = VisitorLog::where('assign_advisor', $advisor_id)
                ->where('status', 'unapproved')
                ->count();

                return $data;
    }

    public static function AdvisorEventPushNotification($advisorID){
        // $advisorID = $request->assign_advisor;
        $getData = VisitorLog::where('assign_advisor', $advisorID)
        ->where('status', 'unapproved')
        ->get();

        $notification = event(new PushNotification($getData));
    }
}