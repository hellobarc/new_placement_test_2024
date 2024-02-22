<?php
  
namespace App\Http\Controllers;
 
Use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Models\{
    User,
    VisitorLog
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
        return view('managerHome');
    }

    public function advisorHome()
    {
        $advisorID = Auth::user()->id;

        $getData = VisitorLog::where('assign_advisor', $advisorID)->orderBy('id', 'desc')->get();
        // $unApprovedData = VisitorLog::where('assign_advisor', $advisorID)->where('status', 'unapproved')->orderBy('id', 'desc')->get();

        $notificationCount = Helpers::AdvisorNotification($advisorID);
        return view('advisorHome', compact('getData','notificationCount'));
    }
}