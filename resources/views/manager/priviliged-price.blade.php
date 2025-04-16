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
                <form action=" {{ route('course.submit.priviliged.price')}}" method="POST" class="form-control">
                    @csrf 
                    <div class="row mt-2 mx-1">
                        <label for="discount">Priviliged Price</label>
                        <input type="text" name="priviliged_price" class="form-control" placeholder="Enter course Priviliged Price">
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

