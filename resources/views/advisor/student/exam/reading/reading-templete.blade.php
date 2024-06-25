@extends('layouts.app')
@section('content')
<!-- main section start -->
@php
    $continute_sl = 1; 
@endphp
<section>
    <div class="container-fluid">
        <div class="exam_template px-5 pb-5 ">
            <div style="background-color: #D6EFFF; margin: 20px 0">
                <div class="row">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="question-set-card mt-0 pb-0">
                            <div class="header">
                                <h3 class="set mt-2" style="font-size: 36px !important;">Set </h3>
                                <h3 class="number" style="font-size: 54px !important;">{{$exam_id}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="test-center">
                            <h1 class="exam_panel_header_title">Placement Test</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <!-- Module Progress -->
                    <div class="continue-part-div">
                        @foreach ($allModule as $rows)
                            @if ($module_id == $rows->id)
                                <div class="d-flex justify-content-between continue-part-div-listening-active">
                                    <p class="mb-0">{{$rows->name}}</p>
                                    <p style="font-size: 12px; padding: 0 0 0 5.313rem !important;" class="mb-0 mt-3"><i class="fas fa-edit"></i> Continue</p>
                                </div>
                            @else
                                <p class="reading">{{$rows->name}}</p>
                            @endif
                        @endforeach
                        <hr>
                        <div class="mock_timer">
                            <div class="d-flex justify-content-center pt-2">
                                <div class="fs-1 mx-2" style="margin-top: 12px;">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="mx-2">
                                    <p class="fs-1 fw-bold" id="countdown"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <!-- time finishing modal alert start -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">You Have Only <span class="text-danger">5 Minutes</span> Left</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>Finish up on your answers quickly!!</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Finished Progress bar -->
                    <div class="mt-3 mb-5">
                        <progress style="accent-color: #004AAD;" id="file" value="{{$segment_id*10}}" max="{{$total_segment*10}}">50%  </progress>
                    </div>
                    <!-- Question template -->
                    <div>
                        <div class="row mt-2">
                            <!-- passage Show -->
                            @if ($examPassage != NULL)
                                <div class="col-md-6">
                                    <div class="assessment-test-passage">
                                        @if(!empty($examPassage->title))
                                            <h2 class="fw-bolder">{{$examPassage->title}}</h2>
                                            <p class="main-text">{!!$examPassage->passage!!}</p>
                                        @else
                                            <p class="main-text">Passage not uploaded</p>
                                        @endif
                                    </div>
                                </div>
                            @else
                            @endif
                            <!-- audio Show -->
                            @if ($testAudio != NULL)
                                <div class="col-md-6">
                                    <div class="assessment-test-audio">
                                        <audio controls>
                                            <source src="{{asset('admin/files/uploads/test-audio/'. $testAudio->audio)}}" type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            @else
                            @endif
                            <!-- question show -->
                            <div class="col-md-6 mx-auto">
                                <div class="assessment-test-question">
                                    <form action="{{ route('student.exam.submission') }}" id="questionForm" method="POST">
                                        @csrf
                                        <input type="hidden" name="minute" id="time_value_minute">
                                        <input type="hidden" name="second" id="time_value_second">
                                        <input type="hidden" name="exercise_id" value="{{$exerciseId}}">
                                        <input type="hidden" name="test_id" value="{{$exam_id}}">
                                        <input type="hidden" name="module_id" value="{{$module_id}}">
                                        <input type="hidden" name="segment_id" value="{{$segment_id}}">
                                        <input type="hidden" name="count_exercise" value="{{$countExercise}}">
                                        <input type="hidden" name="student_id" value="{{$student_id}}">
                                        @foreach ($data as $items)
                                            @if($items['question_type'] == 'drop-down')
                                                <!-- drop down section start -->
                                                <div class="question_set_3">
                                                    <input type="hidden" name="drop_down_ques_id[]" value="{{$items['question_id']}}">
                                                    <input type="hidden" name="drop_down_question_type" value="{{$items['question_type']}}">
                                                    <p>{!!$items['question_instruction']!!}</p>
                                                    @if($items['sub-q'] != NULL)
                                                        @foreach ($items['sub-q'] as $question)
                                                            <input type="hidden" name="drop_down_sub_ques_id_{{$question->test_question_id}}[]" value="{{$question->id}}">
                                                            @php
                                                                $options = json_decode($question->option_text);
                                                            @endphp
                                                            <p class="main-text" id="dropDownId_{{$question->id}}">
                                                                {{$question->text}}
                                                            </p>
                                                            <select onchange="effect({{$continute_sl}})" name="drop_down_sub_ques_ans_{{$question->test_question_id}}[]" id="" class="drop_down_select">
                                                                @foreach( $options as $key=>$option)
                                                                    <option value="{{$key}}">{{$option}}</option>
                                                                @endforeach
                                                            </select>                                                            
                                                            <br><br>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!-- drop down section end -->
                                            @elseif($items['question_type'] == 'fill-blank')
                                                <!-- fill blanks section start -->
                                                <div class="question_set_1">
                                                    <input type="hidden" name="fillBlank_ques_id[]" value="{{$items['question_id']}}">
                                                    <input type="hidden" name="fillBlank_question_type" value="{{$items['question_type']}}">
                                                    <p>{!!$items['question_instruction']!!}</p>
                                                    <div class="fill_blanks main-text">
                                                        @if($items['sub-q'] != NULL)
                                                            
                                                            @foreach ($items['sub-q'] as $question)
                                                                <input type="hidden" name="fillBlank_sub_ques_id[]" value="{{$question->id}}">
                                                                @if($question->is_show == 'yes')
                                                                    @php
                                                                        $options = json_decode($question->blank_answer);
                                                                        shuffle($options);
                                                                    @endphp
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="d-flex justify-content-start fw-bold main-text" style="border: 1px solid #000">
                                                                                @foreach($options as $option)
                                                                                    <p class="mx-2">{{$option}}</p>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                <div id="fillBlankId_{{$question->id}}">
                                                                    @php
                                                                        $array_maker = explode("k##",$question->text);
                                                                        $arr_count = count($array_maker);
                                                                    @endphp 
                                                                    @foreach($array_maker as $iteration)
                                                                        @php
                                                                            $replace_content = "<input type='text' onchange='effect($continute_sl)' name='fillBlank_sub_ques_ans_{$items['question_id']}[]'>";
                                                                        @endphp
                                                                            <p class="main-text"> {!!str_replace('##blan', $replace_content , $iteration)!!}</p>
                                                                    @endforeach
                                                                </div>
                                                                <br>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- fill blanks section end -->
                                            @elseif($items['question_type'] == 'radio')
                                                <!-- radio section start -->
                                                <div class="question_set_3">
                                                    <input type="hidden" name="radio_ques_id[]" value="{{$items['question_id']}}">
                                                    <input type="hidden" name="radio_question_type" value="{{$items['question_type']}}">
                                                    <p class="fs-4 fw-bolder">{!!$items['question_instruction']!!}</p>
                                                    @if($items['sub-q'] != NULL)
                                                        @foreach ($items['sub-q'] as $question)
                                                            <input type="hidden" name="radio_sub_ques_id_{{$question->test_question_id}}[]" value="{{$question->id}}">
                                                            @php
                                                                $options = json_decode($question->option_text);
                                                            @endphp
                                                            <p class="fw-bold mb-1 fs-5">{{$question->text}}</p>
                                                            @foreach($options as $option)
                                                                <div class="d-flex my-2">
                                                                    <div class="side-bar-font">
                                                                        <input type="radio" class="check_box" onclick="effect({{$continute_sl}})" name="radio_sub_ques_ans_{{$question->test_question_id}}[{{$question->id}}]" value="{{$loop->index}}">
                                                                    </div>
                                                                    <div class="check_box_font">
                                                                        <span>&nbsp;&nbsp;{{$option}}</span>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endforeach
                                                    @endif
                                                </div> 
                                                <!-- radio section end -->
                                            @elseif($items['question_type'] == 'multiple-choice')
                                                <!-- multiple choice section start -->
                                                <div class="question_set_3">
                                                    <input type="hidden" name="multiple_ques_id[]" value="{{$items['question_id']}}">
                                                    <input type="hidden" name="multiple_question_type" value="{{$items['question_type']}}">
                                                    <p class="main-text">{!!$items['question_instruction']!!}</p>
                                                    @if($items['sub-q'] != NULL)
                                                        @foreach ($items['sub-q'] as $question)
                                                            <input type="hidden" name="exam_multiple_sub_ques_id_{{$question->test_question_id}}[]" value="{{$question->id}}">
                                                            @php
                                                                $options = json_decode($question->option_text);
                                                            @endphp
                                                            <div class="questions_radio">
                                                                <p class="check_box_font">{{$question->text}}</p>
                                                                <div class="main-text mb-4" id="multipleChoiceId_{{$question->id}}">
                                                                    <input type="hidden"  value=""  id="user_multiple_choice_{{$question->id}}" name="exam_multiple_sub_ques_ans_{{$question->test_question_id}}[]" >
                                                                    @foreach($options as $key=>$option)
                                                                        <div  class="mltiple_choice_option option_item{{$question->id}} col-md-8 col-sm-12" id="multipleColorChange_{{$question->id}}{{$key}}" onclick="hitMultipleChoice({{$key}},{{$question->id}}), effect({{$continute_sl}})">{{$option}}</div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!-- multiple choice section end -->
                                            @elseif($items['question_type'] == 'multi-selector')
                                                <!-- multiple selector section start -->
                                                <div class="question_set_3">
                                                    <input type="hidden" name="multi_selector_ques_id[]" value="{{$items['question_id']}}">
                                                    <input type="hidden" name="multi_selector_question_type" value="{{$items['question_type']}}">
                                                    <p class="main-text">{!!$items['question_instruction']!!}</p>
                                                    @if($items['sub-q'] != NULL)
                                                        @foreach ($items['sub-q'] as $question)
                                                            <input type="hidden" name="multi_selector_sub_ques_id_{{$question->test_question_id}}[]" value="{{$question->id}}">
                                                            @php
                                                                $options = json_decode($question->option_text);
                                                            @endphp
                                                            <div class="questions_radio">
                                                                <p class="check_box_font">{{$question->text}}</p>
                                                                @foreach($options as $key=>$option)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="chechbox_{{$question->id}}_{{$key}}" name="user_multi_selector_{{$question->assessment_test_question_id}}[]" value="{{$key}}">
                                                                        <label class="form-check-label mt-1" for="chechbox_{{$question->id}}_{{$key}}">{{$option}}</label>
                                                                    </div>
                                                                @endforeach                                                            
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!-- multiple selector section end -->
                                            @else
                                                <p>nothing</p>
                                            @endif
                                        @endforeach
                                        <div class="d-flex justify-content-end">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="assment-test-btn fw-bold" onclick="var e=this;setTimeout(function(){e.disabled=true;},0);return true;"> Next <i class="fa-solid fa-arrow-right"></i></button>
                                                    {{-- <input id="submit_button" type="submit" class="assment-test-btn fw-bold" value="Next"  onclick="var e=this;setTimeout(function(){e.disabled=true;},0);return true;"> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- sound reduce -->
                            @if($module_id != 4)
                                <audio id="foobar" src="{{ asset('frontend/sound_track/smooth_piano1.mp3') }}" preload="auto">
                                <script>
                                    var sample = document.getElementById("foobar");
                                    //sample.loop=true;
                                    sample.play();
                                </script>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main section end -->

@endsection
<script>
    var get_time ="{{$exam_time}}"
    let module_id = "{{$module_id}}"
    if(module_id == 1){
        var startingMinutes = 15*60;
    }else if(module_id == 2 || module_id == 3){
        var startingMinutes = 8*60;
    }else if(module_id == 4){
        var startingMinutes = 10*60;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{asset('frontend/js/question_js.js')}}"></script>


