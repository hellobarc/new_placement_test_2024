@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card mt-4 text-center">
                <img src="{{asset('frontend/images/welldone.png')}}" alt="" class="w-100">
                <p class="fs-3 fw-bold mx-4 my-5">Your Test is Completed</p>
               <div class="pb-4">
                <a href="{{route('advisor.home')}}" class="btn btn-success btn-sm w-50">Go to home</a>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
