<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{
    ManageTest,
    ManageTestSection,
    ManageTestQuestion,
    TestDropDown,
    TestFillBlank,
    TestMultipleChoice,
    TestRadio,
    TestMultiSelector,
    TestPassage,
    TestAudio,
};
use Session;
use App\Helpers\Helpers;
use App\Models\TestSubmission\{
    TestSubmission,
    TestSubmissionActivityLog,
    TestSubmissionLog,
};
use Auth;
use App\Models\{
    User,
    VisitorLog,
    VisitorInfo,
    FollowUp,
    Module,
    CourseBundle,
};
class ExamController extends Controller
{
    public function examSet($student_id)
    {
        $allExamSet = ManageTest::where('status', 'active')->get();
        return view('advisor.student.exam.exam-set', compact('allExamSet', 'student_id'));
    }
    public function startExam($exam_id, $segment_id, $student_id)
    {
        $allModule = Module::where('name','!=','Speaking')->get();
        $exerciseDB = ManageTestSection::where('test_id', $exam_id)->get();
        $total_segment = count($exerciseDB);
        $countExercise = count($exerciseDB);
        $totalQuestionCount = 0;
        $current_time = time();
        if(!(Session::has('test_session'))){
           $value = $current_time.'.'.rand(1000, 9999);
           Session::put('test_session', $value);
       }
  
       $getSession = Session::get('test_session');
       $session_time = explode('.', $getSession);
       $curr_min = date("i", $current_time);
       $curr_sec = date("s", $current_time);
       $sess_min = date("i", $session_time[0]);
       $sess_sec = date("s", $session_time[0]);
       $curr_total_sec = ($curr_min*60) + $curr_sec;
       $sess_total_sec = ($sess_min*60) + $sess_sec;
       $exam_time = $curr_total_sec - $sess_total_sec;
       //$exam_time = date("i",($current_time-$session_time[0]));
       
        if($segment_id <= $countExercise){
           $exerciseId = $exerciseDB[$segment_id-1]->id;
           $module_id = $exerciseDB[$segment_id-1]->module_id;
           $module_name = Helpers::find_module($exerciseDB[$segment_id-1]->module_id);
           $questionDB  = ManageTestQuestion::where('section_id', $exerciseId)->get();
           foreach($questionDB as $question){
              $question_type              = $question->question_type;
              $question_instruction       = $question->instruction;
              $question_id                = $question->id;
  
              $countMultipleChoice            = 0;
              $countRadio                     = 0;
              $countDropDown                  = 0;
              $countHeadingMatchingQuestion   = 0;
              $countSingleCheck               = 0;
              $countFillBlank                 = 0;
              $countHeadingMatchingTrueOfNice = 0;
              $countMultiSelector             = 0;
  
              $subQ = [];
              if($question_type == 'fill-blank'){
                 $subQ = TestFillBlank::where('test_question_id',  $question_id)->get();
                 foreach($subQ as $fillQuestion){
                     $countFillBlank += substr_count(($fillQuestion->text), "##blank##");
                 }
              }elseif($question_type == 'multiple-choice'){
                 $subQ = TestMultipleChoice::where('test_question_id',  $question_id)->get();
                 $countMultipleChoice += count($subQ);
              }elseif($question_type == 'radio'){
                 $subQ = TestRadio::where('test_question_id',  $question_id)->get();
                 $countRadio+= count($subQ);
              }elseif($question_type == 'drop-down'){
                 $subQ = TestDropDown::where('test_question_id',  $question_id)->get();
                 $countDropDown += count($subQ);
              }elseif($question_type == 'multi-selector'){
                 $subQ = TestMultiSelector::where('test_question_id',  $question_id)->get();
                 $countMultiSelector += count($subQ);
             }
             $totalQuestionCount +=   $countMultipleChoice+
                                      $countRadio+
                                      $countDropDown+
                                      $countHeadingMatchingQuestion+
                                      $countFillBlank+
                                      $countHeadingMatchingTrueOfNice+
                                      $countMultiSelector;
              $data[] = array(
                 'question_type'=> $question_type,
                 'question_instruction'=> $question_instruction,
                 'question_id'=> $question_id,
                 'sub-q' => $subQ,
              );
           }
          if(strtolower($module_name) == 'reading'){
              $examPassage = TestPassage::where('section_id', $exerciseId)->first();
          }else{
              $examPassage = NULL;
          }
          if(strtolower($module_name) == 'listening'){
              $testAudio = TestAudio::where('section_id', $exerciseId)->first();
          }else{
              $testAudio = NULL;
          }
          return view('advisor.student.exam.reading.reading-templete', compact('examPassage','testAudio',
          'data', 'exerciseId', 
          'exam_id', 'module_id', 
          'segment_id', 'total_segment',
          'countExercise', 
          'totalQuestionCount', 'exam_time','student_id', 'allModule'));
        }
    }
    public function examSubmission(Request $request)
    {
            $data                = $request->input();
            //dd($data);
            $test_id             = $data['test_id'];
            $module_id           = $data['module_id'];
            $exercise_id         = $data['exercise_id'];
            $segment_id          = $data['segment_id'];
            $count_exercise      = $data['count_exercise'];
            $student_id      = $data['student_id'];

            if(isset($data['multiple_question_type'])){
                $multiple_ques_id          = $data['multiple_ques_id'];
                $exam_multiple_sub_ques_id = $data['exam_multiple_sub_ques_id'];
                $exam_multiple_sub_ques_ans= $data['exam_multiple_sub_ques_ans'];

                foreach($exam_multiple_sub_ques_ans as $key=>$answer){
                    $sub_question_id        = $exam_multiple_sub_ques_id[$key];
                    $allMultipleChoice      = TestMultipleChoice::find($sub_question_id);
                    $multiple_choice_id     = $allMultipleChoice->mock_question_id;
                    $correct_array          = json_decode($allMultipleChoice->is_correct);
                    $question_marks         = $allMultipleChoice->marks;

                    if( in_array( $answer, $correct_array )  ){
                        $iscorrect      = 'yes';
                        $obtainMarks    = $question_marks;
                    }else{
                        $iscorrect      = 'no';
                        $obtainMarks    = 0;
                    }
                    if($answer == null){
                        $m_user_ans = 'not_answered';
                    }else{
                        $m_user_ans = $answer;
                    }
                    $array = [
                        'test_id'          =>$test_id,
                        'module_id'        =>$module_id, 
                        'exercise_id'      =>$exercise_id, 
                        'question_id' =>$multiple_ques_id, 
                        'sub_question_id'  =>$sub_question_id,
                        'fillblankans'     =>NULL, 
                        'submitted_ans'    =>$m_user_ans, 
                        'question_type'    =>$data['multiple_question_type'], 
                        'is_correct'       =>$iscorrect, 
                        'obtained_marks'   =>$obtainMarks
                    ];
                    $this->testCreate($array, $segment_id, $student_id);
                }
            }
            if(isset($data['radio_question_type'])){
                $radio_ques_id          = $data['radio_ques_id'];
                $radio_sub_ques_id      = $data['radio_sub_ques_id'];
                $radio_sub_ques_ans     = $data['radio_sub_ques_ans'];
                $submited_id = array_keys($radio_sub_ques_ans);
               // dd();
                foreach($radio_sub_ques_id as $sub_ques_id){
                    if(in_array($sub_ques_id,$submited_id)){
                        foreach($radio_sub_ques_ans as $question_id=>$answer){
                            $submitted_ans_index        = $answer[0];
                            $radio_db                   = TestRadio::find($question_id);
                            $is_correct_arr             = json_decode($radio_db->is_correct);
                            $question_marks             = $radio_db->marks;

                            if(in_array($submitted_ans_index, $is_correct_arr)){
                                $is_correct = "yes";
                                $obtainMarks = $question_marks;
                            }else{
                                $is_correct = "no";
                                $obtainMarks = 0;
                            }
                        }
                    }else{
                        $submitted_ans_index = 'not_answered';
                        $is_correct = "no";
                        $obtainMarks = 0;
                    }
                    
                    $array = [
                        'test_id'          =>$test_id,
                        'module_id'        =>$module_id, 
                        'exercise_id'      =>$exercise_id, 
                        'question_id'      =>$radio_ques_id, 
                        'sub_question_id'  =>$sub_ques_id,
                        'fillblankans'     =>NULL, 
                        'submitted_ans'    =>$submitted_ans_index, 
                        'question_type'    =>$data['radio_question_type'], 
                        'is_correct'       =>$is_correct, 
                        'obtained_marks'   =>$obtainMarks
                    ];
                    
                    $this->testCreate($array, $segment_id, $student_id);
                }
                // foreach($radio_sub_ques_ans as $question_id=>$answer){
                //     $submitted_ans_index        = $answer[0]; // Its a seril of Radio button
                //     $radio_db                   = TestRadio::find($question_id);
                //     $is_correct_arr             = json_decode($radio_db->is_correct);
                //     $question_marks             = $radio_db->marks;

                //     if(in_array($submitted_ans_index, $is_correct_arr)){
                //         $is_correct = "yes";
                //         $obtainMarks = $question_marks;
                //     }else{
                //         $is_correct = "no";
                //         $obtainMarks = 0;
                //     }

                //     $array = [
                //         'test_id'          =>$test_id,
                //         'module_id'        =>$module_id, 
                //         'exercise_id'      =>$exercise_id, 
                //         'question_id'      =>$radio_ques_id, 
                //         'sub_question_id'  =>$question_id,
                //         'fillblankans'     =>NULL, 
                //         'submitted_ans'    =>$submitted_ans_index, 
                //         'question_type'    =>$data['radio_question_type'], 
                //         'is_correct'       =>$is_correct, 
                //         'obtained_marks'   =>$obtainMarks
                //     ];
                    
                //     $this->testCreate($array, $segment_id, $student_id);
                // }
            }
            if(isset($data['drop_down_question_type'])){
                $drop_down_ques_id          = $data['drop_down_ques_id'];
                $drop_down_sub_ques_id      = $data['drop_down_sub_ques_id'];
                $drop_down_sub_ques_ans     = $data['drop_down_sub_ques_ans'];

                foreach($drop_down_sub_ques_ans as $key=>$answer){
                    $sub_question_id   = $drop_down_sub_ques_id[$key];
                    $drop_down_db      = TestDropDown::find($sub_question_id);
                    $correct_array     = json_decode($drop_down_db->is_correct);
                    $question_marks    = $drop_down_db->marks;

                    if( in_array( $answer, $correct_array )  ){
                        $iscorrect      = 'yes';
                        $obtainMarks    = $question_marks;
                    }else{
                        $iscorrect      = 'no';
                        $obtainMarks    = 0;
                    }
                    $array = [
                        'test_id'               =>$test_id,
                        'module_id'             =>$module_id, 
                        'exercise_id'      =>$exercise_id, 
                        'question_id'      =>$drop_down_ques_id, 
                        'sub_question_id'       =>$sub_question_id,
                        'fillblankans'          =>NULL, 
                        'submitted_ans'         =>$answer, 
                        'question_type'    =>$data['drop_down_question_type'], 
                        'is_correct'            =>$iscorrect, 
                        'obtained_marks'        =>$obtainMarks
                    ];
                    
                    $this->testCreate($array, $segment_id, $student_id);
                }
            }
            if(isset($data['fillBlank_question_type'])){
                $fillBlank_ques_id  = $data['fillBlank_ques_id'];//question id
                $sub_ques_id        = $data['fillBlank_sub_ques_id'];//sub ques id
                foreach($fillBlank_ques_id as $question_index=>$question_id){
                    $fill_blank_db                   = TestFillBlank::where('test_question_id',$question_id)->first();
                    $correct_ans_array               = json_decode($fill_blank_db->blank_answer);
                    $question_marks                  = $fill_blank_db->marks;
                    $ans_name                        = 'fillBlank_sub_ques_ans_'.$question_id;
                    $fillBlank_sub_ques_ans         = $data[$ans_name]; //submitted ans
                    $fillblankJson                   = json_encode($data[$ans_name]); //store submitted ans
                    $fill_correct = 0;
                    
                    foreach($correct_ans_array as $key=>$correct_ans){
                        // $submitted_ans = strtolower($fillBlank_sub_ques_ans[$key]);
                        $submitted_ans = $fillBlank_sub_ques_ans[$key];
                        if(strpos($correct_ans, '/')){
                            $explode_correct_ans = explode('/', $correct_ans);
                            if($submitted_ans == null){
                                echo "Fill the all field";
                            }else{
                                $trim_arr = array_map('trim', $explode_correct_ans);
                                if(in_array($submitted_ans, $trim_arr)){
                                    $fill_correct +=1;
                                }
                            }
                        }else{
                            if($submitted_ans == null){
                                echo "Fill the all field";
                            }else{
                                $strcomp              = strcmp(trim($correct_ans, " "), trim($submitted_ans, " "));
                                if($strcomp == 0){
                                    $fill_correct +=1;
                                }
                            }
                        }
                    }
                    $array = [
                        'test_id'         =>$test_id,
                        'module_id'       =>$module_id, 
                        'exercise_id'     =>$exercise_id, 
                        'question_id'     =>$question_id, 
                        'sub_question_id' =>$sub_ques_id[$question_index],
                        'fillblankans'    =>$fillblankJson, 
                        'submitted_ans'  =>NULL, 
                        'question_type'  =>$data['fillBlank_question_type'], 
                        'is_correct'     =>$fill_correct, 
                        'obtained_marks' =>$fill_correct
                    ];
                    
                    $this->testCreate($array, $segment_id, $student_id);
                }
            }
            if(isset($data['multi_selector_question_type'])){
                $multi_selector_ques_id          = $data['multi_selector_ques_id'];
                $multi_selector_sub_ques_id      = $data['multi_selector_sub_ques_id'];
                foreach($multi_selector_ques_id as $question_id){
                    foreach($multi_selector_sub_ques_id as $key=>$sub_ques_id){
                        $ans_name              = 'user_multi_selector_'.$sub_ques_id;
                        $sub_ques_ans     = $data[$ans_name];
                        $fillblankJson          = json_encode($data[$ans_name]);
                        $allMultipleChoice      = TestMultiSelector::find($sub_ques_id);
                        $correct_array          = json_decode($allMultipleChoice->is_correct);
                        $question_marks         = $allMultipleChoice->marks;
                        $fill_correct = 0;
                        foreach($sub_ques_ans as $user_ans){
                            if(in_array( $user_ans, $correct_array ) ){
                                $fill_correct +=1;
                            }
                        }
                        
                        $array = [
                            'test_id'               =>$test_id,
                            'module_id'             =>$module_id, 
                            'exercise_id'      =>$exercise_id, 
                            'question_id'      =>$question_id, 
                            'sub_question_id'       =>$sub_ques_id,
                            'fillblankans'          =>NULL, 
                            'submitted_ans'         =>$sub_ques_ans, 
                            'question_type'    =>$data['multi_selector_question_type'], 
                            'is_correct'            =>$fill_correct, 
                            'obtained_marks'        =>$fill_correct
                        ];
                        
                        $this->testCreate($array, $segment_id, $student_id);
                    }
                }
            }
            
            if($segment_id < $count_exercise){
                if($data['minute'] ==0 && $data['second'] ==1){
                    TestSubmissionLog::updateOrCreate(
                        [
                            'student_id'       => $student_id,
                            'advisor_id'     => Auth::user()->id,
                            'test_id'     => $test_id,
                        ],
                        [
                            'test_end'     => time(),
                            'status'         =>'completed',
                        ]);
                    $deleteSession = session()->forget('test_session');
                    return view('advisor.student.exam.exam-completed');
                }else{
                    return redirect()->route('student.exam.start', ['exam_id'=>$test_id,'segment_id'=> $segment_id+1,'student_id'=> $student_id]);
                }
                
            }elseif($segment_id == $count_exercise){
                $time = time();
            
                $examLog = TestSubmissionLog::UpdateOrCreate(
                    [
                        'student_id'    => $student_id,
                        'test_id'       => $test_id,
                    ],
                    [
                        'status'     => 'completed',
                        'test_end'   => $time,
                    ]);
        
                    $deleteSession = session()->forget('test_session');
                    return redirect()->route('advisor.home');
            }else{
                echo 'Over ... segment finshied';
            }
            
    }
   private function testCreate($array, $segment_id, $student_id)
    {
        $getSession = Session::get('test_session');
        $submissionLog = TestSubmissionLog::firstOrCreate(
            [
                'student_id'       => $student_id,
                'test_id'       =>$array['test_id'],
            ],
            [
                'student_id'     => $student_id,
                'advisor_id'     => Auth::user()->id,
                'test_id'        => $array['test_id'],
                'test_start'     => $getSession,
                'status'         =>'started',
            ]);
         $activityLog = TestSubmissionActivityLog::firstOrCreate(
            [
               'finished_part'      => $segment_id,
            ],[
            'submission_log_id'  => $submissionLog->id,
            'module_id'      => $array['module_id'],
            'finished_part'      => $segment_id,
            'start_log'          => $getSession,
            'end_log'            => time(),
            'status'             => 'submitted',
         ]);
        TestSubmission::create([
            'activity_log_id'    => $activityLog->id,
            'question_id'     => $array['question_id'],
            'sub_question_id'      => $array['sub_question_id'],
            'exercise_id'          => $array['exercise_id'],
            'question_type'        => $array['question_type'],
            'answered_text'        => $array['fillblankans'], // fill ans
            'submitted_ans'        => json_encode($array['submitted_ans']), // ans_id
            'is_correct'           => $array['is_correct'], // fill ans
            'obtained_mark'        => $array['obtained_marks'], // fill ans
        ]);
    }
    public function examResult($student_id)
    {
        $adviserId = Auth::user()->id;
        $studentId = $student_id;
        $getData = FollowUp::where('student_id', $studentId)
                    ->where('adviser_id', $adviserId)
                    ->get();
        $courseBundle = CourseBundle::where('status', 'active')->with('CoursePrice')->get();
        $student_info = VisitorInfo::where('id', $student_id)->with('studentInfo')->first();
        $log_id  = TestSubmissionLog::where('student_id', $student_id)->first();
        $sum_reading_module = $this->sum_assessment_test($log_id->id, 1);
        $sum_listening_module = $this->sum_assessment_test($log_id->id, 4);
        $sum_grammar_module = $this->sum_assessment_test($log_id->id, 2);
        $sum_vocabulary_module = $this->sum_assessment_test($log_id->id, 3);
        $sum_writing_module = $sum_grammar_module+ $sum_vocabulary_module;
        $all_module_marks = $sum_reading_module + $sum_listening_module + $sum_grammar_module+$sum_vocabulary_module;
        $count_reading_question = $this->count_test_question($log_id->test_id, 1);
        $count_listening_question = $this->count_test_question($log_id->test_id, 4);
        $count_grammar_question = $this->count_test_question($log_id->test_id, 2);
        $count_listening_question = $this->count_test_question($log_id->test_id, 3);
        $count_writing_question = $count_grammar_question+$count_listening_question;
        $correct_answer = $this->correctAnswer($log_id->id);
        $in_correct_answer = $this->inCorrectAnswer($log_id->id);
        $unAnswer = $this->unAnswered($log_id->id);
        return view('price.priceTable', compact('getData','studentId', 'sum_reading_module',
        'sum_listening_module', 
        'sum_grammar_module', 
        'sum_vocabulary_module', 
        'sum_writing_module',
        'all_module_marks',
        'count_reading_question',
        'count_writing_question',
        'count_listening_question','correct_answer', 'in_correct_answer', 'unAnswer','courseBundle', 'student_info'));
    }
    private function count_test_question($test_id, $module_id)
    {
        $findModule = ManageTestSection::where('test_id', $test_id)->where('module_id', $module_id)->get();
        $totalQuestionCount     = 0;
        $totalMarksCount        = 0;
        foreach($findModule as $rows){
            $questions  = ManageTestQuestion::where('section_id', $rows->id)->get();

            $multipleChoice_marks   = 0;
            $radio_marks            = 0;
            $dropDown_marks         = 0;
            $headingMatching_marks  = 0;
            $fillBlank_marks        = 0;
            $multi_selector_marks   = 0;

            foreach($questions as $question){
                $questionType = $question->question_type;
                $questionId = $question->id;
            
                $countMultipleChoice            = 0;
                $countRadio                     = 0;
                $countDropDown                  = 0;
                $countHeadingMatchingQuestion   = 0;
                $countFillBlank                 = 0;
                $countMultiSelector             = 0;

                if($questionType == 'multiple-choice'){
                    $multipleChoiceDB       = TestMultipleChoice::where('test_question_id', $questionId)->get();
                    $countMultipleChoice    += count($multipleChoiceDB);
                    $multipleChoice_marks   += $multipleChoiceDB->sum('marks');
                    
                }
                elseif($questionType == 'radio'){
                    $radioDB        = TestRadio::where('test_question_id', $questionId)->get();
                    $countRadio     += count($radioDB);
                    $radio_marks    += $radioDB->sum('marks');
                    
                }
                elseif($questionType == 'drop-down'){
                    $dropDownDB         = TestDropDown::where('test_question_id', $questionId)->get();
                    $countDropDown      += count($dropDownDB);
                    $dropDown_marks     += $dropDownDB->sum('marks');
                    
                }
                elseif($questionType == 'fill-blank'){
                    $fillBlankQuestionDB = TestFillBlank::where('test_question_id', $questionId)->get();
                    foreach($fillBlankQuestionDB as $fillQuestion){
                        $fillBlankAnswer    = json_decode($fillQuestion->blank_answer);
                        $countFillBlank     += count($fillBlankAnswer);
                        $fillBlank_marks    += $fillBlankQuestionDB->sum('marks');
                    }
                }
                elseif($questionType == 'multi-selector'){
                    $multiSelectorDB = TestMultiSelector::where('test_question_id', $questionId)->get();
                    $countMultiSelector     += count($multiSelectorDB);
                    foreach($multiSelectorDB as $question){
                        $questionAnswer         = json_decode($question->is_correct);
                        $multi_selector_marks   += $multiSelectorDB->sum('marks');
                    }
                }
                
                $totalQuestionCount += $countMultipleChoice
                +$countRadio+$countDropDown
                +$countHeadingMatchingQuestion
                +$countFillBlank
                +$countMultiSelector;
                
            }
            $marksCount = $multipleChoice_marks
            +$radio_marks
            +$dropDown_marks
            +$headingMatching_marks
            +$fillBlank_marks
            +$multi_selector_marks;
            $totalMarksCount+=$marksCount;
        }
        //total obtained marks
        return ['total_question'=>$totalQuestionCount, 'total_marks' => $totalMarksCount, 'obtained_marks'=>20];
    }
    private function sum_assessment_test($log_id, $module_id)
    {
        $activeLog = TestSubmissionActivityLog::where('submission_log_id', $log_id)->where('module_id', $module_id)->get();
        $sum_valve = 0;
        foreach($activeLog as $rows){
            $sum_valve += TestSubmission::where('activity_log_id', $rows->id)->sum('obtained_mark');
        }
        return $sum_valve;
    }
    private function correctAnswer($log_id)
    {
        $activeLog = TestSubmissionActivityLog::where('submission_log_id', $log_id)->get();
        $sum_valve = 0;
        foreach($activeLog as $rows){
            $sum_valve += TestSubmission::where('activity_log_id', $rows->id)->sum('obtained_mark', '!=', 0);
        }
        return $sum_valve;
    }
    private function inCorrectAnswer($log_id)
    {
        $activeLog = TestSubmissionActivityLog::where('submission_log_id', $log_id)->get();
        $sum_valve = 0;
        foreach($activeLog as $rows){
            $data = TestSubmission::where('activity_log_id', $rows->id)->where('obtained_mark', '=', 0)->get();
             $sum_valve += count($data);
        }
        return $sum_valve;
    }
    private function unAnswered($log_id)
    {
        $activeLog = TestSubmissionActivityLog::where('submission_log_id', $log_id)->get();
        $sum_valve = 0;
        foreach($activeLog as $rows){
            $data = TestSubmission::where('activity_log_id', $rows->id)->where('obtained_mark', '=', 0)->where('submitted_ans', '"not_answered"')->get();
            $sum_valve += count($data);
        }
        return $sum_valve;
    }
    public function examCompleted($student_id)
    {
        TestSubmissionLog::updateOrCreate(
            [
                'student_id'       => $student_id,
                'advisor_id'     => Auth::user()->id,
                'test_id'     => 1,
            ],
            [
                'test_end'     => time(),
                'status'         =>'completed',
            ]);
            $deleteSession = session()->forget('test_session');
        return view('advisor.student.exam.exam-completed');
    }
}
