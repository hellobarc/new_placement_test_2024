@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 px-sm-2 px-0" style="background: #072f64">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="{{route('advisor.home')}}" class="d-flex align-items-center pb-3 mt-3 mb-md-0 me-md-auto text-center text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-center fs-4"><i class="fa-solid fa-house"></i> Dashboard</span>
                    
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('visitor.follow-up.list')}}" class="nav-link align-middle px-0 text-white fs-6">
                            <i class="fa-regular fa-calendar-days"></i> <span class="ms-1 d-none d-sm-inline">Follow Up List</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">{{auth()->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 mt-3">
            <div class="card p-4 shadow-sm border-none" style="margin: 20px 20px !important;">
                <h3 class="text-center fw-bold" style="color: #035388">Follow Up List</h3>
                @include('flash-message')
                <div>
                    <h5 class="fw-bold mb-4"><i class="fa-solid fa-sliders"></i> Filters</h5>
                    <form action="{{route('visitor.followUp.Search')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <input type="checkbox" name="month_search"  value="this_month"> <label for="">This Month</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="month_search"  value="next_month"> <label for="">Next Month</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="month_search" value="two_month"> <label for="">Two Month</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <input type="checkbox" name="month_search"  value="three_month"> <label for="">Three Month</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="month_search"  value="four_month"> <label for="">Four Month</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="month_search"  value="later_admit"> <label for="">Later Admission</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-sm fs-6 mt-4 px-3 text-white" style="background-color: #035388"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                    </form>
                </div>
                <!-- followup table -->
                <div class="card-body">
                    <table class="table table-striped table-bordered" style="margin-top:32px">
                        <thead class="text-center">
                            <th style="background: #DBEBF5;">Sl No</th>
                            <th style="background: #DBEBF5;">Student Name</th>
                            <th style="background: #DBEBF5;">Student Phone</th>
                            <th style="background: #DBEBF5;">Frist Follow Up Date</th>
                            <th style="background: #DBEBF5;">Admission_Status</th>
                            <th style="background: #DBEBF5;">Next Follow Up Date</th>
                            <th style="background: #DBEBF5;">Follow Up Remarks</th>
                            <th style="background: #DBEBF5;">Actions</th>
                        </thead>
                        <tbody>
                            @foreach($getData as $data)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$data->student->full_name}}</td>
                                <td>{{$data->student->mobile}}</td>
                                <td>{{ date('d-m-Y', strtotime($data->current_follow_up_date)) }}</td>
                                <td>{{ $data->admission_status}}</td>
                                <td>{{ date('d-m-Y', strtotime($data->next_follow_up_date)) }}</td>
                                <td>{{ $data->remarks }}</td>
                                <td>
                                    <a href="{{ route('visitor.follow-up.edit', $data->id )}}" class="btn btn-sm btn-success"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteFollowUp-{{$data->id}}"><i class="fa-solid fa-trash"></i> Delete</a>
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
                                            <a href="{{route('followUp.Delete', $data->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Permanent Delete</a>
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
@endsection


