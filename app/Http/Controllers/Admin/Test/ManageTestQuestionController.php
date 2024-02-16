<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{
    ManageTest,
    ManageTestSection,
    ManageTestQuestion,
};
use App\Models\Module;
class ManageTestQuestionController extends Controller
{
    public function addQuestionTest($test_id, $section_id)
    {
        return view('admin.pages.test.question.add-question', compact('test_id', 'section_id'));
    }
    public function manageQuestionTest()
    {
        $data = ManageTestQuestion::orderBy('id', 'desc')->with('test', 'testSection')->paginate(10);
        return view('admin.pages.test.question.manage-question', compact('data'));
    }
    public function storeQuestionTest(Request $request)
    {
        $this->validate($request, [
            'question_type'          => 'required|string',
            'question_instruction'   => 'required',
        ]);
       
        $test_id                = $request->test_id;
        $section_id             = $request->section_id;
        $question_type          = $request->question_type;
        $question_instruction   = $request->question_instruction;

        ManageTestQuestion::create([
            'test_id'        => $test_id,
            'section_id'     => $section_id,
            'question_type'  => $question_type,
            'instruction'    => $question_instruction,
        ]);
        return redirect()->route('admin.manage-question.test')->with('success','Test Section Insert successfully');
    }
    public function editQuestionTest($id)
    {
        $find_data = ManageTestQuestion::find($id);
        $allTest = ManageTest::all();
        $allSection = ManageTestSection::all();
        return view('admin.pages.test.question.edit-question', compact('find_data', 'allTest', 'allSection'));
    }
    public function updateQuestionTest(Request $request, $id)
    {
        $find_data = ManageTestQuestion::find($id);

        $test_id = $request->test_id;
        $section_id = $request->section_id;
        
        if($request->question_type){
            $question_type = $request->question_type;
        }else{
            $question_type = $find_data->question_type;
        }
        $question_instruction = $request->question_instruction;
        ManageTestQuestion::updateOrCreate(
            [
                'id'=> $id,
            ],
            [
                'test_id'       => $test_id,
                'section_id'    => $section_id,
                'question_type' => $question_type,
                'instruction'   => $question_instruction,
            ]
        );
        return redirect()->route('admin.manage-question.test')->with('success','Test Question Update successfully');
    }
    public function deleteQuestionTest($id)
    {
        $find_data = ManageTestQuestion::find($id);
        $find_data->delete();
        return redirect()->route('admin.manage-question.test')->with('success','Assessment Test Question Deleted successfully');
    }
}
