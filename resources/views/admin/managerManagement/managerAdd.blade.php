@extends('admin.adminHome')
@section('main-admin-content')
    <div class="container">
        <div class="row">
            <div class="col-auto mt-2">
                <p class="fs-3 fw-bold">Manager Management : Add New Manager</p>
                
            </div>
        </div>
        <div class="row">
            @include('flash-message')
            <div class="col-md-10 mx-auto">
                <form action="{{ route('manager.add.store') }}" method="POST" class="form-control">
                    @csrf
                    <div class="row my-2 mx-2">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">    
                    </div>
                    <div class="row my-2 mx-2">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="row my-2 mx-2">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="row my-2 mx-2">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">Select an Option</option>
                            <option value="active">Active</option>
                            <option value="pause">Pause</option>
                        </select>
                    </div>
                    <div class="row my-2 mx-2">
                        <div class="col-2">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
@endsection