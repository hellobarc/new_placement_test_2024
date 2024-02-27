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
        $getBundleData = CourseBundle::where('status', 'active')
        ->get();
        return view('manager.coursePriceForm',compact('getBundleData'));
    }

    public function CoursePriceList(){
        $getCourseData = DB::table('course_prices')
                        ->join('course_bundles','course_prices.bundle_id','=','course_bundles.id')
                        ->select('course_bundles.course_bundle','course_prices.*')
                        ->paginate(10);

        // dd($getCourseData);
        
        return view('manager.courseList',compact('getCourseData'));
    }

    public function storeCouresPrices(Request $request){
        $request->validate([
            'course_level' => 'required',
            'package' => 'required',
            // 'duration' => 'required',
            // 'individual_price' => 'required',
            // 'discount' => 'required',
            // 'offered_price' => 'required',
            'total_price' => 'required'
        ]);
        
        $id = $request->id;
        $bundle_id = $request->bundle_id;
        $course_level = $request->course_level;
        $package = $request->package;
        $duration = $request->duration;
        $individual_price = $request->individual_price;
        $discount = $request->discount;
        $total_price = $request->total_price;
        $offered_price = $request->offered_price;

        CoursePrice::create([
            'bundle_id' => $bundle_id,
            'course_level' => $course_level,
            'package' => $package,
            'duration' => $duration,
            'individual_price' => $individual_price,
            'discount' => $discount,
            'offered_price' => $offered_price,
            'total_price' => $total_price
        ]);
        return redirect()->back()->with('success', 'Data Saved Successfully');
    }

    public function CoursePriceEdit($id){
        $getCourseEditData = DB::table('course_prices')
                        ->join('course_bundles','course_prices.bundle_id','=','course_bundles.id')
                        ->where('course_prices.id', '=', $id)
                        ->select('course_bundles.course_bundle','course_prices.*')
                        ->first();
        $getBundleData = CourseBundle::get();

        return view('manager.courseEditForm',compact('getCourseEditData','getBundleData'));
    }

    public function updateCoursePrices(Request $request){
        $id = $request->id;
        $bundle_id = $request->bundle_id;
        $course_level = $request->course_level;
        $package = $request->package;
        $duration = $request->duration;
        $individual_price = $request->individual_price;
        $discount = $request->discount;
        $offered_price = $request->offered_price;
        $total_price = $request->total_price;

        CoursePrice::where('id',$id)
        ->update([
            'bundle_id' => $bundle_id,
            'course_level' => $course_level,
            'package' => $package,
            'duration' => $duration,
            'individual_price' => $individual_price,
            'discount' => $discount,
            'offered_price' => $offered_price,
            'total_price' => $total_price
        ]);

        return redirect()->back()->with('success','Data Updated Successfully');
    }
    

    public function coursePriceDelete($id){
        CoursePrice::where('id', $id)
        ->delete();

        return redirect()->back()->with('success','Course Price info Deleted');
    }
}
