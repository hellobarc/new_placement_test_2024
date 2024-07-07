@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="mt-4 text-center">
                <img src="{{asset('frontend/images/welldone.png')}}" alt="" class="w-100">
                <p class="fs-3 fw-bold mx-4 my-5">Your Test is Completed</p>
            </div>
            <div class="result-overall-container text-center">
                <p class="text-white mb-0 fs-5 fw-bold">{{$stu_name}}</p>
                <p class="fs-1 fw-bolder mb-3" style="color: #FFBB0D">Your Current Level: {{$level}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
