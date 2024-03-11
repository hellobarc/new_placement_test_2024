@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div style="background: #ebf6fc !important" class="p-5 mb-5">
                <div class="row">
                    @foreach ($allExamSet as $exam)
                        <div class="col-md-4">
                            <div class="card py-5 text-center">
                                <h3 class="fw-bold" style="color: #284664">Set {{$exam->id}}</h3>
                                <p class="">Time: {{$exam->time}} Minutes</p>
                                <div class="text-center">
                                    <a href="{{route('student.exam.start', ['exam_id'=>$exam->id, 'segment_id'=>1, 'student_id'=>$student_id])}}" class="btn btn-sm text-white w-50" style="background: #0E34A0">Start Now >></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


