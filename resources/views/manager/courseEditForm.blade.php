@extends('layouts.app')
@section('content')
@include('manager.sidebar')
<div class="container">
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            @include('flash-message')
            <form action=" {{ route('update.course.price')}}" method="POST" class="form-control">
                @csrf 
                <div class="row mt-2 mx-1" id="course_bundle">
                    <input type="hidden" name="id" id="" value="{{ $getCourseEditData->id }}">
                    <label for="bundle_id">Courses Bundle</label>
                    <select name="bundle_id" id="bundle_id" class="form-control">
                        @foreach ($getBundleData as $item)
                             <option value="{{$item->id}}"{{$getCourseEditData->bundle_id == $item->id ? 'selected':''}}>{{$item->course_bundle}}</option>   
                        @endforeach
                    </select>
                </div>
                <div class="row mt-2 mx-1">
                    <label for="">Courses Level</label>
                    <select name="course_level" id="course_level" class="form-control">
                        <option value="a1" {{ $getCourseEditData->course_level == 'a1' ? 'selected' : '' }}>A1</option>
                        <option value="a2" {{ $getCourseEditData->course_level == 'a2' ? 'selected' : '' }}>A2</option>
                        <option value="b1" {{ $getCourseEditData->course_level == 'b1' ? 'selected' : '' }}>B1</option>
                        <option value="b2" {{ $getCourseEditData->course_level == 'b2' ? 'selected' : '' }}>B2</option>
                        <option value="c1" {{ $getCourseEditData->course_level == 'c1' ? 'selected' : '' }}>C1</option>
                        <option value="c2" {{ $getCourseEditData->course_level == 'c2' ? 'selected' : '' }}>C2</option>
                    </select>
                </div>
                <div class="row mt-2 mx-1" id="package">
                    <label for="">Package</label>
                    <select name="package" id="package" class="form-control" onchange="package_value(event)">
                        <option value="" selected></option>
                        <option value="regular" {{$getCourseEditData->package == 'regular' ? 'selected': '' }}>Regular</option>
                        <option value="standard" {{$getCourseEditData->package == 'standard' ? 'selected': '' }}>Standard</option>
                        <option value="privileged" {{$getCourseEditData->package == 'privileged' ? 'selected': '' }}>Privileged</option>
                    </select>
                </div>
                
                <div class="row mt-2 mx-1" id="duration">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control" value="{{ $getCourseEditData->duration }}">
                </div>

                <div class="row mt-2 mx-1" id="individual_price">
                    <label for="discount">Individual Fees</label>
                    <input type="text" name="individual_price" class="form-control" value="{{ $getCourseEditData->individual_price }}">
                </div>

                <div class="row mt-2 mx-1" id="discount">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" class="form-control" value="{{ $getCourseEditData->discount }}">
                </div>

                <div class="row mt-2 mx-1" id="offered_price">
                    <label for="offered_price" >Offered fees</label>
                    <input type="text" name="offered_price" class="form-control" value="{{ $getCourseEditData->offered_price }}">
                </div>

                <div class="row mt-2 mx-1" id="total_price">
                    <label for="total_price" >Total Price</label>
                    <input type="text" name="total_price" class="form-control" value="{{ $getCourseEditData->total_price }}">
                </div>

                <div class="row mt-2 mx-1" id="">
                    <div class="col-md-10">
                        <a href="route{{ route('course.prices.list')}}" class="btn btn-primary float-end">Go Back</a>
                        <input type="submit" class="btn btn-primary float-end mx-2" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

