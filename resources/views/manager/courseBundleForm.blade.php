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
                    <label for="">Make Course Bundle (eg: A1-A2)</label>
                    <select name="course_bundle" id="course_bundle" class="form-control">
                        <option value="" selected>Select A Bundle</option>
                        @foreach ($getData as $item)
                            <option value="{{$item->course_bundle}}">{{$item->course_bundle}}</option>
                        @endforeach
                        {{-- <option value="">A1-A2</option>
                        <option value="">B1-B2</option>
                        <option value="">B2-C1</option>
                        <option value="">A2-B2</option>
                        <option value="">B1-C1</option>
                        <option value="">A1-B2</option>
                        <option value="">A2-C1</option> --}}
                    </select>

                    <label for="">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" selected>Select An Option</option>
                        {{-- @foreach ($getData as $item)
                            <option value="{{ $item->status }}">{{ $item->status }}</option>
                        @endforeach --}}
                        <option value="active">Active</option>
                        <option value="inactive" >Inactive</option>
                    </select>
                </div>
                <div class="row mt-2 mx-1" id="">
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-primary float-end" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

