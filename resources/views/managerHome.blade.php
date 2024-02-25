@extends('layouts.app')
@section('content')
@include('manager.sidebar')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="POST">
                @csrf 
                <label for="">Courses Level</label>
                <select name="course_level" id="">
                    <option value="a1-a2">A1-A2</option>
                    <option value="b1-b2">B1-B2</option>
                    <option value="b2-c1">B2-C1</option>
                    <option value="a2-b2">A2-B2</option>
                    <option value="b1-c1">B1-C1</option>
                    <option value="a1-b2">A1-B2</option>
                    <option value="a1-c1">A2-C1</option>
                </select>

                <label for="">Package</label>
                <select name="package" id="">
                    <option value="">Regular</option>
                    <option value="">Standard</option>
                    <option value="">Privileged</option>
                </select>

                <label for=""></label>
            </form>
        </div>
    </div>
</div>

@endsection