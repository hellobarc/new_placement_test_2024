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
    public function CourseBundle(){
        $getData = CourseBundle::get();
        // dd($getData);
        return view('manager.courseBundleForm',compact('getData'));
    }

    public function storeBundlesPrices(Request $request){
        $data = $request->all();
        $bundle_id = $data['bundle_id'];
        $regular_price = $data['regular_price'];
        $discount_price = $data['discount_price'];
        $discount_percentage = $data['discount_percentage'];
        CourseBundle::updateOrCreate(['id'=> $bundle_id],[
            'price' => $regular_price,
            'discount_price' => $discount_price,
            'discount_percentage' => $discount_percentage,
        ]);
        return redirect()->route('manage.course.bundle')->with('message', 'Student all information uploaded successfully');
    }

    public function editCourseBundle($id)
    {
         $getData = CourseBundle::find($id);
        // dd($getData);
        return view('manager.editCourseBundle',compact('getData'));
    }
}
