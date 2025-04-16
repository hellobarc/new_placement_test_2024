<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{ManageTest};
class ManageTestController extends Controller
{
    public function index()
    {
        $data = ManageTest::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.test.manage-test', compact('data'));
    }
    public function create()
    {
        return view('admin.pages.test.create-test');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'      => 'required|string',
            'status'     => 'required|string',
            'time'      => 'nullable',
        ]);
        $title      = $request->title;
        $status     = $request->status;
       
        if($request->time){
            $time   = $request->time;
        }else{
            $time = NULL;
        }
        ManageTest::create([
                'title'     => $title,
                'status'    => $status,
                'time'      => $time,
        ]);
        return redirect()->route('admin.manage.test')->with('success','Test Insert successfully');
    }
    public function edit($id)
    {
        $data = ManageTest::find($id);
        return view('admin.pages.test.edit-test', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $find_data = ManageTest::where('id', $id)->first();
        
        $title      = $request->title;
        
        $status      = $request->status;
        
        if($request->time){
            $time      = $request->time;
        }else{
            $time = $find_data->time;
        }
        ManageTest::updateOrCreate(['id'=>$id],[
                'title'     => $title,
                'status'    => $status,
                'time'      => $time,
        ]);
        return redirect()->route('admin.manage.test')->with('success','Test Update successfully');
    }
    public function delete($id)
    {
        $find_data = ManageTest::where('id', $id)->first();
        $find_data->delete();
        return redirect()->route('admin.manage.test')->with('success','Test deleted successfully');
    }
}
