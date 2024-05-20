@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 mx-auto">
            <div class="exam-set-title">
                <h1>Exam Set</h1>
            </div>
            <div class="row">
                @foreach ($allExamSet as $exam)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="question-set-card">
                            <div class="header">
                                <h3 class="number">{{$exam->id}}</h3>
                                <h3 class="set">Set </h3>
                            </div>
                            <p class="exam-time">Time: {{$exam->time}} Minutes</p>
                            <div class="text-center px-3">
                                <a href="{{route('student.exam.start', ['exam_id'=>$exam->id, 'segment_id'=>1, 'student_id'=>$student_id])}}" class="button_exam">Start Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection


