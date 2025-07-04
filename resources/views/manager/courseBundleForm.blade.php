@extends('manager.managerHome')
@section('manager-content')
{{-- @include('manager.sidebar') --}}
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            @include('flash-message')
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Sl No</th>
                    <th>Bundle</th>
                    <th>Regular Price</th>
                    <th>Discount Price</th>
                    <th>Discount Percentage</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($getData as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->course_bundle}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->discount_price}}</td>
                        <td>{{$item->discount_percentage}}</td>
                        <td>
                            <a href="{{route('edit.course.bundle', $item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            {{-- <a href="#" class="btn btn-sm btn-danger">Delete</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <form action=" {{ route('store.bundle.price')}}" method="POST" class="form-control">
                @csrf
                <div class="row mt-2 mx-1" id="course_bundle">
                    <div class="col"></div>
                    <label for="">Make Course Bundle (eg: A1-A2)</label>
                    <select name="course_bundle" id="course_bundle" class="form-control">
                        <option value="" selected>Select A Bundle</option>
                        @foreach ($getData as $item)
                            <option value="{{$item->course_bundle}}">{{$item->course_bundle}}</option>
                        @endforeach
                    </select>

                    <label for="">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" selected>Select An Option</option>
                        <option value="active">Active</option>
                        <option value="inactive" >Inactive</option>
                    </select>
                </div>
                <div class="row mt-2 mx-1" id="">
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-primary float-end" value="Submit">
                    </div>
                </div>
            </form> --}}
        </div>
    </div>
</div>

@endsection

