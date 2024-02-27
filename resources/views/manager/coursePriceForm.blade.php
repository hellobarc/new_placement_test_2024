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
                    <div class="row mt-2 mx-1" id="course_bundle">
                        <div class="col"></div>
                        <label for="bundle_id">Courses Bundle</label>
                        <select name="bundle_id" id="bundle_id" class="form-control">
                            <option value="" selected>Select an Option</option>
                            @foreach ($getBundleData as $item)
                                <option value="{{$item->id}}">{{$item->course_bundle}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mt-2 mx-1">
                        <label for="">Courses Level</label>
                        <select name="course_level" id="course_level" class="form-control">
                            <option value="a1">A1</option>
                            <option value="a2">A2</option>
                            <option value="b1">B1</option>
                            <option value="b2">B2</option>
                            <option value="c1">C1</option>
                            <option value="c2">C2</option>
                        </select>
                    </div>
                    <div class="row mt-2 mx-1" id="package">
                        <label for="">Package</label>
                        <select name="package" id="package" class="form-control" onchange="package_value(event)">
                            <option value="">Select An Option</option>
                            <option value="regular">Regular</option>
                            <option value="standard">Standard</option>
                            <option value="privileged">Privileged</option>
                        </select>
                    </div>
                    
                    <div class="row mt-2 mx-1" id="duration">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" class="form-control">
                    </div>
    
                    <div class="row mt-2 mx-1" id="individual_price">
                        <label for="discount">Individual Fees</label>
                        <input type="text" name="individual_price" class="form-control">
                    </div>
    
                    <div class="row mt-2 mx-1" id="discount">
                        <label for="discount">Discount</label>
                        <input type="text" name="discount" class="form-control">
                    </div>
    
                    <div class="row mt-2 mx-1" id="offered_price">
                        <label for="offered_price" >Offered fees</label>
                        <input type="text" name="offered_price" class="form-control">
                    </div>
    
                    <div class="row mt-2 mx-1" id="total_price">
                        <label for="total_price" >Total Price</label>
                        <input type="text" name="total_price" class="form-control">
                    </div>
    
                    <div class="row mt-2 mx-1" id="">
                        <div class="col-md-10">
                            {{-- <input type="submit" class="btn btn-primary float-end" value="Submit"> --}}
                            {{-- <div class="col-md-10"> --}}
                                <a href="{{ route('course.prices.list')}}" class="btn btn-primary float-end">Go Back</a>
                                <input type="submit" class="btn btn-primary float-end mx-2" value="Submit">
                            {{-- </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{-- </div> --}}
{{-- <div class="container">
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            @include('flash-message')
            <form action=" {{ route('store.course.price')}}" method="POST" class="form-control">
                @csrf 
                <div class="row mt-2 mx-1" id="course_bundle">
                    <div class="col"></div>
                    <label for="bundle_id">Courses Bundle</label>
                    <select name="bundle_id" id="bundle_id" class="form-control">
                        <option value="" selected>Select an Option</option>
                        @foreach ($getBundleData as $item)
                            <option value="{{$item->id}}">{{$item->course_bundle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mt-2 mx-1">
                    <label for="">Courses Level</label>
                    <select name="course_level" id="course_level" class="form-control">
                        <option value="a1">A1</option>
                        <option value="a2">A2</option>
                        <option value="b1">B1</option>
                        <option value="b2">B2</option>
                        <option value="c1">C1</option>
                        <option value="c2">C2</option>
                    </select>
                </div>
                <div class="row mt-2 mx-1" id="package">
                    <label for="">Package</label>
                    <select name="package" id="package" class="form-control" onchange="package_value(event)">
                        <option value="">Select An Option</option>
                        <option value="regular">Regular</option>
                        <option value="standard">Standard</option>
                        <option value="privileged">Privileged</option>
                    </select>
                </div>
                
                <div class="row mt-2 mx-1" id="duration">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control">
                </div>

                <div class="row mt-2 mx-1" id="individual_price">
                    <label for="discount">Individual Fees</label>
                    <input type="text" name="individual_price" class="form-control">
                </div>

                <div class="row mt-2 mx-1" id="discount">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" class="form-control">
                </div>

                <div class="row mt-2 mx-1" id="offered_price">
                    <label for="offered_price" >Offered fees</label>
                    <input type="text" name="offered_price" class="form-control">
                </div>

                <div class="row mt-2 mx-1" id="total_price">
                    <label for="total_price" >Total Price</label>
                    <input type="text" name="total_price" class="form-control">
                </div>

                <div class="row mt-2 mx-1" id="">
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-primary float-end" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}

@endsection

