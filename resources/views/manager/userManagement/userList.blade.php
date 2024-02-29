@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row">
            <div class="col-auto mt-2">
                <p class="fs-3 fw-bold">User Management</p>
                @include('flash-message')
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div>
                    <a href="{{ route('user.Add') }}" class="btn btn-primary float-end">Add New User</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getUserData as $item)
                            <tr>
                                <td>{{ $loop->index+1}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ strtoupper($item->type) }}</td>
                                <td>{{ strtoupper($item->status) }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $item->id )}}" class="btn btn-primary">Edit</a>
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
                                        <a href="{{route('user.delete.store' , $item->id )}}" class="btn btn-danger btn-lg">Permanent Delete</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {!! $getUserData->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection