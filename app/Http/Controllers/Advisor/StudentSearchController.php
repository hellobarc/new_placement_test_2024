<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitorLog;
use App\Helpers\Helpers;
use Auth;
class StudentSearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $advisorID = Auth::user()->id;
        $notificationCount = Helpers::AdvisorNotification($advisorID);
        $searchData = VisitorLog::where('mobile', 'like', "%$search%")->orWhere('email','like', "%$search%")->get();
        return view('advisor.student.search', compact('searchData', 'notificationCount'));
    }
}
