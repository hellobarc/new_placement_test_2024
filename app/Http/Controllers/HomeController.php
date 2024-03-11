<?php
  
namespace App\Http\Controllers;
 
Use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Models\{
    User,
    VisitorLog,
    FollowUp,
    CourseBundle,
};
use DB;
use Auth;

  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = User::where('type', 3)
                ->orWhere('type', 4)->where('status', 'active')
                ->get();
        $notificationCount = Helpers::FrontNotification();
        return view('front-desk.student-info', compact('data', 'notificationCount'));
    } 

    public function frontStudentList(){
        $getDeclinedStudents = VisitorLog::where('status', 'declined')
        ->paginate(10);

        $getAdvisorList = User::where('type', 3)->get();

        $frontID = Auth::user()->id;
        VisitorLog::where('front_desk_notification', 'not_seen')
                    ->update([
                        'front_desk_notification' => 'seen'
]);
        $notificationCount = Helpers::FrontNotification();
        return view('front-desk.studentList', compact('getDeclinedStudents','notificationCount','getAdvisorList'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('manager.managerHome');
    }

    public function advisorHome()
    {
        $advisorID = Auth::user()->id;

        $getData = VisitorLog::where('assign_advisor', $advisorID)
        ->whereNot('purpose_of_visit','mock')
        ->whereNot('purpose_of_visit','ielts_registration')
        ->whereNot('status', 'declined')
        ->orderBy('id', 'desc')
        ->paginate(10);

        $notificationCount = Helpers::AdvisorNotification($advisorID);
        return view('advisor.advisorHome', compact('getData','notificationCount'));
    }

    public function mockAdvisorHome()
    {
        $advisorID = Auth::user()->id;

        $getData = VisitorLog::where('assign_advisor', $advisorID)
        ->where('purpose_of_visit','mock')
        ->orWhere('purpose_of_visit','ielts_registration')
        ->orderBy('id', 'desc')
        ->paginate(10);

        $notificationCount = Helpers::AdvisorNotification($advisorID);
        return view('mock.mockHome', compact('getData','notificationCount'));
    }

    public function priceList($id){
        $adviserId = Auth::user()->id;
        $studentId = $id;
        $getData = FollowUp::where('student_id', $studentId)
                    ->where('adviser_id', $adviserId)
                    ->get();

        $courseBundle = CourseBundle::where('status', 'active')->with('CoursePrice')->get();

        return view('price.priceTable', compact('getData','studentId','courseBundle'));
    }


    public function followUpEditView($id){
        $data = DB::table('follow_ups')
        ->leftjoin('visitor_logs', 'follow_ups.student_id', 'visitor_logs.id')
        ->where('follow_ups.id',$id)
        ->select('visitor_logs.full_name','follow_ups.*')
        ->first();

        return view('price.editFollowUp', compact('data'));
    }
}