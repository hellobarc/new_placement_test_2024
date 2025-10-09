@extends('manager.managerHome')
@section('manager-content')
{{-- @include('manager.sidebar') --}}
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            @include('flash-message')
            <form action=" {{ route('store.bundle.price')}}" method="POST" class="form-control">
                @csrf
                <div class="row mt-2 mx-1" id="course_bundle">
                    <div class="col"></div>
                    <input type="hidden" name="bundle_id" id="" value="{{$getData->id}}">
                   <div class="form-group">
                        <label for="">Course Bundle</label>
                        <p class="fw-bold">{{$getData->course_bundle}}</p>
                   </div>
                   <div class="form-group mt-3">
                        <label for="">Regular Price</label>
                        <input type="text" name="regular_price" id="" value="{{$getData->price}}" class="form-control">
                   </div>
                   <div class="form-group mt-3">
                        <label for="">Discount Price</label>
                        <input type="text" name="discount_price" id="" value="{{$getData->discount_price}}" class="form-control">
                   </div>
                   <div class="form-group mt-3">
                        <label for="">Discount Percentage</label>
                        <input type="text" name="discount_percentage" id="" value="{{$getData->discount_percentage}}" class="form-control">
                   </div>

                    {{-- <label for="">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" selected>Select An Option</option>
                        <option value="active">Active</option>
                        <option value="inactive" >Inactive</option>
                    </select> --}}
                </div>
                <div class="row mt-2 mx-1" id="">
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

