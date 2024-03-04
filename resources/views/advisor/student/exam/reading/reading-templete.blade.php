@extends('layouts.app')
@section('content')
<!-- main section start -->
@php
    $continute_sl = 1; 
@endphp
<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                <div class="mock_timer">
                    <div class="d-flex justify-content-center pt-2">
                        <div class="main-text mx-2">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="mx-2">
                          <p class="main-text fw-bold" id="countdown"></p>
                        </div>
                    </div>
                </div>
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
                <!-- time finishing modal alert end -->
                <div class="continue-part-div">
                    @foreach ($allModule as $rows)
                        @if ($module_id == $rows->id)
                            <div class="d-flex justify-content-between continue-part-div-listening-active">
                                <p class="mb-0">{{$rows->name}}</p>
                                <p style="font-size: 12px; padding-left: 10px !important;" class="mb-0 mt-3"><i class="fas fa-edit"></i> Continue Part</p>
                            </div>
                        @else
                            <p class="reading">{{$rows->name}}</p>
                        @endif
                        @if ($loop->index+1 == 4)
                        @else
                        <p class="mb-0" style="font-size: 50px;"><i class="fa-solid fa-arrow-right-long"></i></p>
                        @endif
                    @endforeach
                </div>
                <div class="assessment-test-progress">
                    <progress id="file" value="{{$segment_id*10}}" max="{{$total_segment*10}}"> 50% </progress>
                </div>
                <!-- reading Warning Modal -->
                <div class="modal fade" id="readingWarning" tabindex="-1" aria-labelledby="readingWarningLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bolder text-danger" id="readingWarningLabel">Test Instrunction</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="fs-5">
                                    <li>Read the questions and instructions properly.</li><br>
                                    <li>After completing passage 1 Click the next button to go to the next passage. The next passage will not start automatically. As soon as you complete your passage click next.</li><br>
                                    <li>When you click the next button questions will be submitted. You can not change your answer again.</li><br>
                                    <li>Do not give extra space, comma before or after your answers.</li><br>
                                    <li>Careful about uppercase and lowercase. In the IELTS exam answer is sensitive. So write your answer proper way.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="border: 1px solid #000; padding: 10px; margin-bottom: 20px; border-radius:3px;">
                    <div class="row mt-2">
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
                        @if ($testAudio != NULL)
                            {{-- <audio autoplay id="my_play">
                                <source src="{{asset('backend/files/uploads/assessment-test/'. $testAudio->audio)}}" type="audio/mpeg">
                            </audio> --}}
                            <div class="col-md-6">
                                <audio controls>
                                    <source src="{{asset('admin/files/uploads/test-audio/'. $testAudio->audio)}}" type="audio/mpeg">
                                </audio>
                            </div>
                        @else
                        @endif
                        <div class="col-md-6 mx-auto">
                            <div class="assessment-tes-question">
                                <form action="{{ route('student.exam.submission') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="exercise_id" value="{{$exerciseId}}">
                                    <input type="hidden" name="test_id" value="{{$exam_id}}">
                                    <input type="hidden" name="module_id" value="{{$module_id}}">
                                    <input type="hidden" name="segment_id" value="{{$segment_id}}">
                                    <input type="hidden" name="count_exercise" value="{{$countExercise}}">
                                    <input type="hidden" name="student_id" value="{{$student_id}}">
                                    @foreach ($data as $items)
                                        @if($items['question_type'] == 'drop-down')
                                            {{-- drop down section start --}}
                                            <div class="question_set_3">
                                                <input type="hidden" name="drop_down_ques_id" value="{{$items['question_id']}}">
                                                <input type="hidden" name="drop_down_question_type" value="{{$items['question_type']}}">
                                                <p>{!!$items['question_instruction']!!}</p>
                                                @if($items['sub-q'] != NULL)
                                                    @foreach ($items['sub-q'] as $question)
                                                        <input type="hidden" name="drop_down_sub_ques_id[]" value="{{$question->id}}">
                                                        @php
                                                            $options = json_decode($question->option_text);
                                                        @endphp
                                                        <p class="main-text" id="dropDownId_{{$question->id}}">
                                                            {{$question->text}}
                                                        </p>
                                                            <select onchange="effect({{$continute_sl}})" name="drop_down_sub_ques_ans[]" id="" class="drop_down_select">
                                                                @foreach( $options as $key=>$option)
                                                                    <option value="{{$key}}">{{$option}}</option>
                                                                @endforeach
                                                            </select>
                                                        {{-- </p> --}}
                                                        <br><br>
                                                    @endforeach
                                                @endif
                                            </div>
                                            {{-- drop down section end --}}
                                        @elseif($items['question_type'] == 'fill-blank')
                                            {{-- fill blanks section start --}}
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
                                            {{-- fill blanks section end --}}
                                        @elseif($items['question_type'] == 'radio')
                                            {{-- radio section start --}}
                                            <div class="question_set_3">
                                                <input type="hidden" name="radio_ques_id" value="{{$items['question_id']}}">
                                                <input type="hidden" name="radio_question_type" value="{{$items['question_type']}}">
                                                <p class="main-text">{!!$items['question_instruction']!!}</p>
                                                @if($items['sub-q'] != NULL)
                                                    @foreach ($items['sub-q'] as $question)
                                                        <input type="hidden" name="radio_sub_ques_id[]" value="{{$question->id}}">
                                                        @php
                                                            $options = json_decode($question->option_text);
                                                        @endphp
                                                        <p class="fw-bold mb-1 fs-5">{{$question->text}}</p>
                                                        @foreach($options as $option)
                                                        <div class="d-flex my-2">
                                                            <div class="side-bar-font">
                                                                <input type="radio" class="check_box" onclick="effect({{$continute_sl}})" name="radio_sub_ques_ans[{{$question->id}}][]" value="{{$loop->index}}" required>
                                                            </div>
                                                            <div class="check_box_font">
                                                                <span>&nbsp;&nbsp;{{$option}}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                        {{-- <div class="accordion mb-3" id="accordionExample">
                                                            <div class="accordion-item" id="radioId_{{$question->id}}">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        {{$question->text}}
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        @foreach($options as $option)
                                                                            <div class="d-flex my-2">
                                                                                <div class="side-bar-font">
                                                                                    <input type="radio" class="check_box" onclick="effect({{$continute_sl}})" name="radio_sub_ques_ans[{{$question->id}}][]" value="{{$loop->index}}" required>
                                                                                </div>
                                                                                <div class="check_box_font">
                                                                                    <span>&nbsp;&nbsp;{{$option}}</span>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    @endforeach
                                                @endif
                                            </div> 
                                            {{-- radio section end --}}
                                        @elseif($items['question_type'] == 'multiple-choice')
                                            {{-- multiple choice section start --}}
                                            <div class="question_set_3">
                                                <input type="hidden" name="multiple_ques_id" value="{{$items['question_id']}}">
                                                <input type="hidden" name="multiple_question_type" value="{{$items['question_type']}}">
                                                <p class="main-text">{!!$items['question_instruction']!!}</p>
                                                @if($items['sub-q'] != NULL)
                                                    @foreach ($items['sub-q'] as $question)
                                                        <input type="hidden" name="exam_multiple_sub_ques_id[]" value="{{$question->id}}">
                                                        @php
                                                            $options = json_decode($question->option_text);
                                                        @endphp
                                                        <div class="questions_radio">
                                                            <p class="check_box_font">{{$question->text}}</p>
                                                            <div class="main-text mb-4" id="multipleChoiceId_{{$question->id}}">
                                                                <input type="hidden"  value=""  id="user_multiple_choice_{{$question->id}}" name="exam_multiple_sub_ques_ans[]" >
                                                                @foreach($options as $key=>$option)
                                                                    <div  class="mltiple_choice_option option_item{{$question->id}} col-md-8 col-sm-12" id="multipleColorChange_{{$question->id}}{{$key}}" onclick="hitMultipleChoice({{$key}},{{$question->id}}), effect({{$continute_sl}})">{{$option}}</div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            {{-- multiple choice section end --}}
                                        @elseif($items['question_type'] == 'multi-selector')
                                            {{-- multiple selector section start --}}
                                            <div class="question_set_3">
                                                <input type="hidden" name="multi_selector_ques_id[]" value="{{$items['question_id']}}">
                                                <input type="hidden" name="multi_selector_question_type" value="{{$items['question_type']}}">
                                                <p class="main-text">{!!$items['question_instruction']!!}</p>
                                                @if($items['sub-q'] != NULL)
                                                    @foreach ($items['sub-q'] as $question)
                                                        <input type="hidden" name="multi_selector_sub_ques_id[]" value="{{$question->id}}">
                                                        @php
                                                            $options = json_decode($question->option_text);
                                                        @endphp
                                                        <div class="questions_radio">
                                                            <p class="check_box_font">{{$question->text}}</p>
                                                            @foreach($options as $key=>$option)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="chechbox_{{$question->id}}_{{$key}}" name="user_multi_selector_{{$question->id}}[]" value="{{$key}}">
                                                                    <label class="form-check-label mt-1" for="chechbox_{{$question->id}}_{{$key}}">{{$option}}</label>
                                                                </div>
                                                            @endforeach                                                            
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            {{-- multiple selector section end --}}
                                        @else
                                            <p>nothing</p>
                                        @endif
                                    @endforeach
                                    <div class="d-flex justify-content-end">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="assment-test-btn fw-bold"> Next <i class="fa-solid fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- main section end -->
<script>
    // Wrap the native DOM audio element play function and handle any autoplay errors
    Audio.prototype.play = (function(play) {
    return function () {
        var audio = this,
            args = arguments,
            promise = play.apply(audio, args);
            if (promise !== undefined) {
                promise.catch(_ => {
                // Autoplay was prevented. This is optional, but add a button to start playing.
                var el = document.createElement("button");
                el.innerHTML = "Play the audio again";
                el.addEventListener("click", function(){play.apply(audio, args);});
                this.parentNode.insertBefore(el, this.nextSibling)
                });
            }
        };
    })(Audio.prototype.play);

    // Try automatically playing our audio via script. This would normally trigger and error.
    document.getElementById('my_play').play()
</script>
@endsection
<script>
    var get_time = "{{$exam_time}}"
    var startingMinutes = 60;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{asset('frontend/js/question_js.js')}}"></script>
<script>
    
    let module = "{{$module_id}}";
    // $(document).ready(function(){ 
    //     var windowWidth = $(window).height();
    //     console.log(windowWidth/2); 
    //     $(".passage").css('height', windowWidth/2+"px");
    //     $(".question").css('height', windowWidth/2+"px");
    // });
</script>


