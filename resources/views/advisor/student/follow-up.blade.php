@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-xl-2 px-sm-2 px-0" style="background: #212529">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="{{route('advisor.home')}}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-center text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-center fs-4">Dashboard</span>
                    
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white fs-5">
                            <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white fs-5">
                            <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">All Test <i class="fa-solid fa-angle-down"></i></span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('admin.manage.test')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Manage Test</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{route('admin.manage.section.test')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Manage Test Section</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{route('admin.manage-question.test')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Manage Test Question</span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{route('analytics.students')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Student Analytics </span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white fs-5">
                            <i class="fa-solid fa-gauge"></i> <span class="ms-2 d-none d-sm-inline">Manage Managers<i class="fa-solid fa-angle-down"></i></span> </a>
                        <ul class="collapse nav flex-column ms-2" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('manager.list')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> manager List </span></a>
                            </li>
                            <li class="w-100">
                                <a href="{{route('manager.Add')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> manager Add </span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                            <i class="fa-solid fa-cart-shopping"></i> <span class="ms-1 d-none d-sm-inline">Orders</span>
                        </a>
                    </li> --}}
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
           <!-- followup modal -->
            <div class="row mt-3">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#followUpModal">+ Add New Follow Up</a>
                        </div>
                       
                        <!-- FollowUp Modal -->
                        <div class="modal fade" id="followUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Follow Up</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store.followUP', $studentId ) }}" method="POST" class="form-control">
                                        @csrf
                                        <label for="addmission">Admission Status</label>
                                        <select name="admission_status" id="admission" class="form-control">
                                            <option selected>Select Options</option>
                                            <option value="admitted">Admitted</option>
                                            <option value="later_admit">Later Admitted</option>
                                            <option value="not_admitted">Not Admitted</option>
                                        </select>

                                        <label for="Comment" >Remark</label>
                                        <textarea name="remarks" id="comment" cols="30" rows="5" class="form-control"></textarea>

                                        <label for="">Next Follow Up Date</label>
                                        <input type="date" name="next_follow_up_date" class="form-control">
                                        <button type="submit" class="btn btn-primary float-end mt-4">Save Follow Up</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        @include('flash-message')
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Follow Up Date</th>
                                        <th>Follow Up Remarks</th>
                                        <th>Admission_Status</th>
                                        <th>Next Follow Up Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getData as $data)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($data->current_follow_up_date)) }}</td>
                                        <td>{{ $data->remarks }}</td>
                                        <td>{{ $data->admission_status}}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->next_follow_up_date)) }}</td>
                                        <td>
                                            <a href="{{ route('followUPEdit.View', $data->id )}}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteFollowUp-{{$data->id}}">Delete</a>
                                        </td>
                                    </tr>
                                        <div class="modal fade" id="deleteFollowUp-{{$data->id}}" tabindex="-1" aria-labelledby="deleteFollowUpLabel-{{$data->id}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title text-danger fw-bolder" id="deleteFollowUpLabel-{{$data->id}}">Are you sure delete!!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <a href="{{route('followUp.Delete', $data->id)}}" class="btn btn-danger btn-lg">Permanent Delete</a>
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
            </div>
        </div>
    </div>
</div>
@endsection


