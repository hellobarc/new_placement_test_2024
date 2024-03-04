<?php

namespace App\Helpers;

use Carbon\Carbon;
use Auth;
use App\Models\{
    User,
    Module,
    VisitorInfo,
    VisitorLog,
    Course
};

use App\Events\{
    PushNotification,
    FrontDeskNotification
};
use App\Models\ManageTest\{
    TestPassage,
    TestAudio,
};
use App\Models\TestSubmission\TestSubmissionLog;
class Helpers {
    public static function find_module($module_id)
    {
        $module = Module::find($module_id);
        $module_name = $module->name;
        return $module_name;
    }

    public static function AdvisorNotification($advisor_id){
        $data = VisitorLog::where('assign_advisor', $advisor_id)
                ->whereNot('purpose_of_visit','mock')
                ->whereNot('purpose_of_visit','ielts_registration')
                ->where('status', 'unapproved')
                ->where('adviser_notification','not_seen')
                ->count();

                return $data;
    }

    public static function AdvisorEventPushNotification($advisorID){
        $getData = VisitorLog::where('assign_advisor', $advisorID)
                        ->whereNot('purpose_of_visit','mock')
                        ->whereNot('purpose_of_visit','ielts_registration')
                        ->where('status', 'unapproved')
                        ->where('adviser_notification','not_seen')
                        ->get();

        $notification = event(new PushNotification($getData));
    }


    public static function FrontNotification(){
        $data = VisitorLog::where('status', 'declined')
                ->where('front_desk_notification','not_seen')
                ->count();

                return $data;
    }

    public static function FrontEventPushNotification(){
        $getData = VisitorLog::where('status', 'declined')
                        ->where('front_desk_notification','not_seen')
                        ->orderBy('updated_at', 'desc')
                        ->get();

        $notification = event(new FrontDeskNotification($getData));
    }
    public static function examCompleted($student_id, $advisor_id)
    {
        $data = TestSubmissionLog::where('student_id', $student_id)->where('advisor_id', $advisor_id)
            ->where('status', 'completed')->first();
        return $data;
    }
    public static function find_test_passage($test_id, $section_id)
    {
        $find_data = TestPassage::where('test_id', $test_id)->where('section_id', $section_id)->first();
        return $find_data;
    }
    public static function find_assessment_test_audio($test_id, $section_id)
    {
        $find_data = TestAudio::where('test_id', $test_id)->where('section_id', $section_id)->first();
        return $find_data;
    }
    public static function overall_rubricks($score){
        switch($score){
            case ($score == 0):
                return "Beginner";
            break;
            case ($score > 0 && $score < 8):
                return "A-";
            break;
            case ($score < 8 && $score > 0):
                return "A-";
            break;
            case ($score >=8 && $score < 16):
                return "A1";
            break;
            case ($score >=16 && $score < 25):
                return "A2";
            break;
            case ($score >=25 && $score < 37):
                return "B1";
            break;
            case ($score >=37 && $score < 45):
                return "B2";
            break;
            case ($score >=45 ):
                return "C1";
            break;
            default:
            return "Undefined";
        }
    }
    public static function module_rubricks($score){
        switch($score){
            case ($score == 0):
                return "Beginner";
            break;
            case ($score > 0 && $score < 4):
                return  "A-";
            break;
            case ($score >=4 && $score < 6):
                return  "A1";
            break;
            case ($score >=6 && $score < 9):
                return "A2";
            break;
            case ($score >=9 && $score < 12 ):
                return "B1";
            break;
            case ($score >=12 && $score < 14):
                return "B2";
            break;
            case ($score >=14):
                return "C1";
            break;
            default:
            return "Undefined";
        }
    }
    public static function cefr_level($score)
    {
        switch($score){
            case ($score == 0 && $score < 4.5):
                return  "A1";
            break;
            case ($score >=4.5 && $score < 5.0):
                return "A2";
            break;
            case ($score >=5.0 && $score < 6.0 ):
                return "B1";
            break;
            case ($score >=6.0 && $score < 7.0):
                return "B2";
            break;
            case ($score >=7.0):
                return "C1";
            break;
            default:
            return "Undefined";
        }
    }
    public static function course_benefit($value)
    {
        $data =  Course::where('name', $value)->first();
       return $data->course_benefits;
    }

}