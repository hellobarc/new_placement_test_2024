@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row">
            <div class="col-auto mt-2">
                <p class="fs-3 fw-bold">User Management : Add New User</p>
                
            </div>
        </div>
        <div class="row">
            @include('flash-message')
            <div class="col-md-10 mx-auto">
                <form action="{{ route('user.add.store') }}" method="POST" class="form-control">
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
                        <label for="">Role</label>
                        <select name="type" id="" class="form-control">
                            <option value="">Select an Option</option>
                            <option value="0">User</option>
                            <option value="3">Adviser</option>
                            <option value="4">Mock</option>
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