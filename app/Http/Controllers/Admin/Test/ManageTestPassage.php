<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{
    ManageTest,
    ManageTestSection,
    TestPassage,
};
use App\Models\Module;
class ManageTestPassage extends Controller
{
    public function addPassageSectionTest($test_id, $section_id)
    {
        return view('admin.pages.test.passage.add-passage', compact('test_id', 'section_id'));
    }
    public function managePassageTest()
    {
        $data = TestPassage::with('manageTest', 'manageTestSection')->get();
        return view('admin.pages.test.passage.manage-passage', compact('data'));
    }
    public function storePassageSectionTest(Request $request)
    {
        $this->validate($request, [
            'passage' => 'required',
        ]);
        $test_id = $request->test_id;
        $section_id = $request->section_id;
        $passage = $request->passage;
        
        if($request->passage_title){
            $passage_title = $request->passage_title;
        }else{
            $passage_title = NULL;
        }
        TestPassage::create([
            'test_id'       => $test_id,
            'section_id'    => $section_id,
            'passage'       => $passage,
            'title'         => $passage_title,
        ]);
        return redirect()->route('admin.manage.section.test')->with('success','Test Passage Insert successfully');
    }
    public function editPassageTest($id)
    {
        $find_data = TestPassage::find($id);
        $allTest = ManageTest::all();
        $allSection = ManageTestSection::all();
        return view('admin.pages.test.passage.edit-passage', compact('find_data', 'allTest', 'allSection'));
    }
    public function updatePassageTest(Request $request, $id)
    {
        $test_id = $request->test_id;
        $section_id = $request->section_id;
        
        if($request->passage_title){
            $passage_title = $request->passage_title;
        }else{
            $passage_title = NULL;
        }
        $passage = $request->passage;
        TestPassage::updateOrCreate(
            [
                'id'=> $id,
            ],
            [
                'test_id'       => $test_id,
                'section_id'    => $section_id,
                'title'         => $passage_title,
                'passage'       => $passage,
            ]
        );
        return redirect()->route('admin.manage.passage.test')->with('success','Test Passage Update successfully');
    }
    public function deletePassageTest($id)
    {
        $find_data = TestPassage::find($id);
        $find_data->delete();
        return redirect()->route('admin.manage.passage.test')->with('success','Test Passage Deleted successfully');
    }
}
