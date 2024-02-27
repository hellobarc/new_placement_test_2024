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
        $data = User::where('type', 3)->get();
        return view('student.student-info', compact('data'));
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

        $getData = VisitorLog::where('assign_advisor', $advisorID)->orderBy('id', 'desc')->get();
        // $unApprovedData = VisitorLog::where('assign_advisor', $advisorID)->where('status', 'unapproved')->orderBy('id', 'desc')->get();

        $notificationCount = Helpers::AdvisorNotification($advisorID);
        return view('advisorHome', compact('getData','notificationCount'));
    }

    public function priceList($id){
        $adviserId = Auth::user()->id;
        $studentId = $id;
        $getData = FollowUp::where('student_id', $studentId)
                    ->where('adviser_id', $adviserId)
                    ->get();

        $courseBundle = CourseBundle::where('status', 'active')->with('CoursePrice')->get();
        //dd($courseBundle);
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