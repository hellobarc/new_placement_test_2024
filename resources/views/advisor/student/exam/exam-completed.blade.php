@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-10">
                        <p class="fs-3 fw-bold mx-4">Test Completed</p>
                        <a href="{{route('advisor.home')}}" class="btn btn-success btn-sm">Go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
