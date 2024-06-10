<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    CoursePrice,
    CourseBundle
};
use DB;

class CoursePriceController extends Controller
{
    public function CoursePriceForm(){
        return view('manager.coursePriceForm');
    }

    public function CoursePriceList(){
        $getCourseData = CoursePrice::orderBy('id', 'desc')->get();
        return view('manager.courseList',compact('getCourseData'));
    }

    public function storeCouresPrices(Request $request){
        $request->validate([
            'course_level' => 'required',
            'regular_price' => 'required',
            'discount_price' => 'required',
        ]);
        
        $course_level = $request->course_level;
        $regular_price = $request->regular_price;
        $discount_price = $request->discount_price;

        CoursePrice::create([
            'course_level'      => $course_level,
            'regular_price'     => $regular_price,
            'discount_price'    => $discount_price,
        ]);
        return redirect()->back()->with('success', 'Data Saved Successfully');
    }

    public function CoursePriceEdit($id){
        $getCourseEditData = CoursePrice::find($id);

        return view('manager.courseEditForm',compact('getCourseEditData'));
    }

    public function updateCoursePrices(Request $request, $id){
     
        $course_level = $request->course_level;
        $regular_price = $request->regular_price;
        $discount_price = $request->discount_price;

        CoursePrice::where('id',$id)
        ->update([
            'course_level'      => $course_level,
            'regular_price'     => $regular_price,
            'discount_price'    => $discount_price,
        ]);

        return redirect()->back()->with('success','Data Updated Successfully');
    }
    

    public function coursePriceDelete($id){
        CoursePrice::where('id', $id)
        ->delete();

        return redirect()->back()->with('success','Course Price info Deleted');
    }
    public function priviligedPrice(){
       return view('manager.priviliged-price');
    }
    public function storePriviligedPrice(Request $request){
        $data = $request->all();
        //dd($data);
        $getData = CourseBundle::where('course_bundle', 'Priviliged Price')->first();
        if($getData){
            CourseBundle::updateOrCreate([
                'id'=>$getData->id,
            ],[
                'priviliged_price'=>$data['priviliged_price'],
            ]);
        }else{
            CourseBundle::insert([
                'course_bundle'=> 'Priviliged Price',
                'status'=> 'active',
                'priviliged_price'=>$data['priviliged_price'],
            ]);
        }
        
        return redirect()->back()->with('success','Priviliged Price insert successfully');
    }
}
