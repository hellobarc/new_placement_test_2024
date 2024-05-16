<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{
    ManageTest,
    ManageTestSection,
    ManageTestQuestion,
    TestMultipleChoice,
    TestRadio,
    TestDropDown,
    TestMultiSelector,
    TestFillBlank,
};
class ManageTestAddQuestionController extends Controller
{
    public function insertQuestion($questionId, $questionType)
    {
        if($questionType == 'fill-blank')
        {
            $fillBlanks = TestFillBlank::where('test_question_id', $questionId)->with('testQuestion')->get();
            return view('admin.pages.test.question.add-question.fill-blanks', compact('questionType', 'questionId', 'fillBlanks'));
        }elseif($questionType == 'multiple-choice'){
            $multipleChoice = TestMultipleChoice::where('test_question_id', $questionId)->with('testQuestion')->get();
            return view('admin.pages.test.question.add-question.multiple-choice', compact('questionType', 'questionId', 'multipleChoice'));
        }elseif($questionType == 'radio'){
            $radio = TestRadio::where('test_question_id', $questionId)->with('testQuestion')->get();
            return view('admin.pages.test.question.add-question.multiple-choice', compact('questionType', 'questionId', 'radio'));
        }elseif($questionType == 'drop-down'){
            $dropDown = TestDropDown::where('test_question_id', $questionId)->with('testQuestion')->get();
            return view('admin.pages.test.question.add-question.multiple-choice', compact('questionType', 'questionId', 'dropDown'));
        }elseif($questionType == 'heading-matching'){
            $headingMatching = AssessmentTestHeadingMatching::where('assessment_test_question_id', $questionId)->with('assessmentTestQuestion')->paginate(10);
            return view('admin.pages.test.question.add-question.heading-matching', compact('questionType', 'questionId', 'headingMatching')); 
        }elseif($questionType == 'true-of-nice'){
            $trueOfNice = AssessmentTestHeadingMatching::where('popular_practice_test_question_id', $questionId)->with('popularPracticeTestQuestion')->paginate(10);
            return view('admin.pages.test.question.add-question.heading-matching', compact('questionType', 'questionId', 'trueOfNice')); 
        }elseif($questionType == 'multi-selector'){
            $multiSelector = TestMultiSelector::where('test_question_id', $questionId)->with('testQuestion')->get();
            return view('admin.pages.test.question.add-question.multiple-choice', compact('questionType', 'questionId', 'multiSelector'));
        }
    }
    public function storeMultipleChoiceQuestion(Request $request) 
    {
        $input          = $request->input();
        $question_id    = $input['question_id'];
        $text           = $input['text'];
        $blank_answer   = $input['blank_answer'];
        $is_correct     = $input['is_correct'];
        $marks          = $input['marks'];

        if($input['question_type'] == 'multiple-choice')
        {
            TestMultipleChoice::insert([
                'test_question_id'   => $question_id,
                'text'               => $text,
                'option_text'        => json_encode($blank_answer),
                'is_correct'         => json_encode($is_correct),
                'marks'              => $marks,
            ]);
        }elseif($input['question_type'] == 'radio'){
            TestRadio::insert([
                'test_question_id'   => $question_id,
                'text'               => $text,
                'option_text'        => json_encode($blank_answer),
                'is_correct'         => json_encode($is_correct),
                'marks'              => $marks,
            ]);
        }elseif($input['question_type'] == 'drop-down'){
            TestDropDown::insert([
                'test_question_id'   => $question_id,
                'text'               => $text,
                'option_text'        => json_encode($blank_answer),
                'is_correct'         => json_encode($is_correct),
                'marks'              => $marks,
            ]);
        }elseif($input['question_type'] == 'multi-selector'){
            if($text == null){
                $multiQuestion = NULL;
            }else{
                $multiQuestion = $text;
            }
            TestMultiSelector::insert([
                'test_question_id'   => $question_id,
                'text'               => $multiQuestion,
                'option_text'        => json_encode($blank_answer),
                'is_correct'         => json_encode($is_correct),
                'marks'              => $marks,
            ]);
        }
        
        return redirect()->back()->with('success', 'Test Question Added Successfully.'); 
    }
    public function storeFillBlankQuestion(Request $request) 
    {
        $question_id    = $request->question_id;
        $text           = $request->text;
        $marks          = $request->marks;
        $answer         = explode(',', $request->blank_answer);
        $is_show        = $request->is_show;

        TestFillBlank::insert([
            'test_question_id'       => $question_id,
            'text'                              => $text,
            'blank_answer'                      => json_encode($answer),
            'marks'                             => $marks,
            'is_show'                           => $is_show,
        ]);
        return redirect()->back()->with('success', 'Test Fill blanks Added Successfully.');

    }
    public function storeHeadingMatchingQuestion(Request $request)
    {
        $question_id            = $request->question_id;
        $heading_title          = $request->heading_title;
        AssessmentTestHeadingMatching::insert([
            'assessment_test_question_id'     => $question_id,
            'heading_title'                   => $heading_title,
        ]);
        return redirect()->back()->with('success', 'Heading Matching store Successfully.');
    }
    public function headingMatchingSubQuestion($question_id)
    {
        $headingMatch = AssessmentTestHeadingMatchingAnswer::where('assessment_test_question_id', $question_id)->with('assessmentTestQuestion')->paginate(10);
        $headingTitle = AssessmentTestHeadingMatching::where('assessment_test_question_id', $question_id)->get();
        return view('backend.pages.assessment-test.question.add-question.heading-mat-sub-quest', compact('question_id','headingTitle', 'headingMatch'));
    }
    public function storeHeadingMatchSubQuestion(Request $request)
    {
        $question_id            = $request->question_id;
        $text                   = $request->text;
        $blank_answer           = $request->blank_answer;
        $marks                  = $request->marks;
        AssessmentTestHeadingMatchingAnswer::insert([
            'assessment_test_question_id'       => $question_id,
            'text'                              => $text,
            'blank_answer'                      => $blank_answer,
            'marks'                             => $marks,
        ]);
        return redirect()->back()->with('success', 'Heading Match Sub Question added Successfully.'); 
    }
    public function deleteMultipleChoiceQuestion(Request $request, $id, $questionType)
    {
        if($questionType == 'multiple-choice')
        {
            $multipleChoice = TestMultipleChoice::find($id);
            if(!is_null($multipleChoice))
            {
                $multipleChoice->delete();
            }
        }
        elseif($questionType == 'radio')
        {
            $radio = TestRadio::find($id);
            if(!is_null($radio))
            {
                $radio->delete();
            }
        }
        elseif($questionType == 'drop-down')
        {
            $dropDown = TestDropDown::find($id);
            if(!is_null($dropDown))
            {
                $dropDown->delete();
            }
        }
        elseif($questionType == 'multi-selector')
        {
            $dropDown = TestMultiSelector::find($id);
            if(!is_null($dropDown))
            {
                $dropDown->delete();
            }
        }
        
        return redirect()->back()->with('success', 'Test Question Delete Successfully.');
    }
    public function deleteFillBlankQuestion(Request $request, $id)
    {
        $fillBlanks = TestFillBlank::find($id);
    	if(!is_null($fillBlanks))
    	{
    		$fillBlanks->delete();
   		}
        return redirect()->back()->with('success', 'Fill in the blank Delete Successfully.');
    }
    public function deleteHeadingMatchingQuestion(Request $request, $id)
    {
        $headingMatching = AssessmentTestHeadingMatching::find($id);
        
    	if(!is_null($headingMatching))
    	{
    		$headingMatching->delete();
            $headingMatchSubQuestion = AssessmentTestHeadingMatchingAnswer::where('blank_answer', $id)->delete();
   		}
        return redirect()->back()->with('success', 'Heading Match title Deleted Successfully.');
    }
    public function deleteHeadingMatchSubQuestion(Request $request, $id)
    {
        $headingMatchSubQuestion = AssessmentTestHeadingMatchingAnswer::find($id);
    	if(!is_null($headingMatchSubQuestion))
    	{
    		$headingMatchSubQuestion->delete();
   		}
        return redirect()->back()->with('success', 'Heading Match Sub Question Deleted Successfully.');
    }
}
