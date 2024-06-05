{{-- @extends('layouts.app') --}}
@extends('manager.managerHome')
@section('manager-content')
{{-- @section('content') --}}
{{-- @include('manager.sidebar') --}}
{{-- <div class="col-auto"> --}}
    <div class="container">
    
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                @include('flash-message')
                <form action=" {{ route('store.course.price')}}" method="POST" class="form-control">
                    @csrf 
                    <div class="row mt-2 mx-1">
                        <label for="">Courses Level</label>
                        <select name="course_level" id="course_level" class="form-control">
                            <option value="">Please select onel</option>
                            <option value="a1">A1</option>
                            <option value="a2">A2</option>
                            <option value="b1">B1</option>
                            <option value="b2">B2</option>
                            <option value="c1">C1</option>
                        </select>
                    </div>
                    {{-- <div class="row mt-2 mx-1" id="package">
                        <label for="">Package</label>
                        <select name="package" id="package" class="form-control">
                            <option value="">Select An Option</option>
                            <option value="regular">Regular</option>
                            <option value="standard">Standard</option>
                        </select>
                    </div> --}}
                    <div class="row mt-2 mx-1" id="regular_price">
                        <label for="regular_price">Regular Price</label>
                        <input type="text" name="regular_price" class="form-control" placeholder="Enter course Regular Price">
                    </div>
                    <div class="row mt-2 mx-1" id="discount_price">
                        <label for="discount">Standered Fees</label>
                        <input type="text" name="discount_price" class="form-control" placeholder="Enter course Discount Price" value="N/A">
                    </div>
                    <div class="row mt-2 mx-1" id="">
                        <div class="col-md-10">
                            <a href="{{ route('course.prices.list')}}" class="btn btn-primary float-end">Go Back</a>
                            <input type="submit" class="btn btn-primary float-end mx-2" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

