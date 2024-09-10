<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageVistorController extends Controller
{
    public function dayWiseVisitorList()
    {
        return view('manager.day-wise-visitor-list');
    }
    public function storeDayWiseVisitorList(Request $request)
    {
        
    }
}
