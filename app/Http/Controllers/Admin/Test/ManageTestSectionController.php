<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{
    ManageTest,
    ManageTestSection,
};
use App\Models\Module;
class ManageTestSectionController extends Controller
{
    public function manageSectionTest()
    {
        $data = ManageTestSection::orderBy('id', 'desc')->with('manageTest')->paginate(10);
        return view('admin.pages.test.section.manage-section', compact('data'));
    }
    public function createSectionTest()
    {
        $allTest = ManageTest::all();
        $modules = Module::all();
        return view('admin.pages.test.section.create-section', compact('allTest', 'modules'));
    }
    public function storeSectionTest(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'test_id'       => 'required|string',
            'module_id'     => 'required|string',
            'instruction'   => 'nullable',
        ]);
        $name       = $request->name;
        $module_id  = $request->module_id;
        $test_id    = $request->test_id;

        if($request->instruction){
            $instruction = $request->instruction;
        }else{
            $instruction = NULL;
        }

        ManageTestSection::create([
            'name'          => $name,
            'module_id'     => $module_id,
            'test_id'       => $test_id,
            'instruction'   => $instruction,
        ]);
        return redirect()->route('admin.manage.section.test')->with('success','Test Section Insert successfully');
    }
    public function editSectionTest($id)
    {
        $find_data = ManageTestSection::find($id);
        $modules = Module::all();
        $allTest = ManageTest::all();
        return view('admin.pages.test.section.edit-section', compact('find_data', 'modules', 'allTest'));
    }
    public function updateSectionTest(Request $request, $id)
    {
        $name       = $request->name;
        $module_id  = $request->module_id;
        $test_id    = $request->test_id;

        if($request->instruction){
            $instruction = $request->instruction;
        }else{
            $instruction = NULL;
        }

        ManageTestSection::updateOrCreate(['id'=>$id],[
            'name'          => $name,
            'module_id'     => $module_id,
            'test_id'       => $test_id,
            'instruction'   => $instruction,
        ]);
        return redirect()->route('admin.manage.section.test')->with('success','Test Section update successfully');
    }
    public function deleteSectionTest(Request $request, $id)
    {
        $find_data = ManageTestSection::where('id', $id)->first();
        $find_data->delete();
        return redirect()->route('admin.manage.section.test')->with('success','Test Section deleted successfully');
    }
}
