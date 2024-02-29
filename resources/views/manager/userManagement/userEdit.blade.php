@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row">
            <div class="col-auto mt-2">
                <p class="fs-3 fw-bold">User Management : Edit An Existing User</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form action="{{ route('user.edit.store') }}" method="POST" class="form-control">
                    @csrf 
                    <div class="row my-2 mx-2">
                        <input type="hidden" name="id" value="{{ $getUserData->id }}">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $getUserData->name }}">    
                    </div>
                    <div class="row my-2 mx-2">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $getUserData->email }}">
                    </div>
                    <div class="row my-2 mx-2">
                        <p>{{ $getUserData->password }}</p>
                        <label for="">New Password</label>
                        <input type="text" name="password" class="form-control" value="">
                    </div>
                    <div class="row my-2 mx-2">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">Select an Option</option>
                            <option value="active" {{ $getUserData->status=='active' ? 'selected' : '' }}>Active</option>
                            <option value="pause" {{ $getUserData->status=='pause' ? 'selected' : '' }}>Pause</option>
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