@extends('admin.adminHome')
@section('main-admin-content')
    <div class="container">
        <div class="row">
            <div class="col-auto mt-2">
                <p class="fs-3 fw-bold">Manager Management</p>
                @include('flash-message')
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div>
                    <a href="{{ route('manager.Add') }}" class="btn btn-primary float-end">Add New User</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getUserData as $item)
                            <tr>
                                <td>{{ $loop->index+1}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->type }}</td>
                                <td>
                                    <a href="{{ route('manager.edit', $item->id )}}" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteFollowUp-{{$item->id}}">Delete</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteFollowUp-{{$item->id}}" tabindex="-1" aria-labelledby="deleteFollowUpLabel-{{$item->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title text-danger fw-bolder" id="deleteFollowUpLabel-{{$item->id}}">Are you sure delete!!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <a href="{{route('manager.delete.store' , $item->id )}}" class="btn btn-danger btn-lg">Permanent Delete</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection