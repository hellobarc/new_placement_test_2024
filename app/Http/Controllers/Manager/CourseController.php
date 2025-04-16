<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function manageCourse()
    {
        $data = Course::all();
        return view('manager.courses.manage-course', compact('data'));
    }
    public function createCourse()
    {
        return view('manager.courses.create-course');
    }
    public function storeCourse(Request $request)
    {
        $data = $request->all();
        Course::create([
            'name'=>$data['course_name'],
            'course_benefits'=>$data['course_benefits'],
        ]);
        return redirect()->route('manager.course.manage')->with('success','Course Store successfully');
    }
    public function editCourse($id)
    {
        $data = Course::find($id);
        return view('manager.courses.edit-course', compact('data'));
    }
    public function updateCourse(Request $request, $id)
    {
        $data = $request->all();
        Course::updateOrCreate(['id'=>$id],[
            'name'=>$data['course_name'],
            'course_benefits'=>$data['course_benefits'],
        ]);
        return redirect()->route('manager.course.manage')->with('success','Course update successfully');
    }
    public function deleteCourse($id)
    {
        $data = Course::find($id);
        $data->delete();
        return redirect()->route('manager.course.manage')->with('success','Course deleted successfully');
    }
}
