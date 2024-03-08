@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row">
                @foreach ($allExamSet as $exam)
                    <div class="col-md-4 mt-4">
                        <div class="card p-3 text-center">
                            <h4>Set {{$exam->id}}</h4>
                            <p class="">Time: {{$exam->time}} Minutes</p>
                            <a href="{{route('student.exam.start', ['exam_id'=>$exam->id, 'segment_id'=>1, 'student_id'=>$student_id])}}" class="btn btn-success btn-sm">Start Now >></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection


