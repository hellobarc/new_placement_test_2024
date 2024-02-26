<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    CoursePrice,
    CourseBundle
};

class CourseBundleController extends Controller
{
    public function CourseBundleForm(){
        $getData = CourseBundle::get();
        // dd($getData);
        return view('manager.courseBundleForm',compact('getData'));
    }

    public function storeBundlesPrices(Request $request){
        dd($request);
    }
}
