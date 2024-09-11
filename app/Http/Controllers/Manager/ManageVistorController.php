<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    VisitorLog,
    VisitorInfo,
};
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
        $allData = VisitorLog::whereDate('created_at', $date)->with('userInfo', 'totalUser', 'followUp')->paginate(20);
        $countData = count($allData);
        //dd($allData);
        return view('manager.day-wise-visitor-list', compact('allData', 'countData', 'date'));
    }
}
