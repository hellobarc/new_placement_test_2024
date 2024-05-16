<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    VisitorLog,
    FollowUp,
    CourseBundle,
};

class CheckTimeController extends Controller
{
    public function checkTime(){
    //    dd('check staus');
        $presentTime = time();

        $checkTimeForStudents = VisitorLog::where('status', 'unapproved')
                                ->where('advisor_type', 3)
                                ->get();

        $curr_min = date("i", $presentTime);
        $curr_sec = date("s", $presentTime);
        
        $curr_total_sec = ($curr_min*60) + $curr_sec;

        foreach($checkTimeForStudents as $students){
            $sess_min = date("i", $students->time_log);
            $sess_sec = date("s", $students->time_log);
            $sess_total_sec = ($sess_min*60) + $sess_sec;
            $time_elapsed = $curr_total_sec - $sess_total_sec;
            
            if($time_elapsed >= 600){
            VisitorLog::where('id', $students->id)
                        ->update([
                            'status' => 'declined'
                        ]);
            }
        }
        
    }
}
