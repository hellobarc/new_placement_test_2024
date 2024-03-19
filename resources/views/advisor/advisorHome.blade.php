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
                    <li class="nav-item">
                        <a href="{{route('visitor.follow-up.list')}}" class="nav-link align-middle px-0 text-white fs-5">
                            <i class="fa-solid fa-magnifying-glass"></i> <span class="ms-1 d-none d-sm-inline">Follow Up List</span>
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
        <div class="col-md-9">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger my-3" id="onclickTableShow" onClick="refreshPage()">
                    <i class="bi bi-bell"></i>
                    <span id="notification_count">{{ $notificationCount }}</span>
                </button>
            </div>
            <div class="card mt-3 p-4 shadow-sm border-none">
                <div class="">
                    <form action="{{route('visitor.search')}}" method="GET">
                        @csrf
                        <div class="d-flex  justify-content-end">
                            <div class="d-flex justify-content-between"> 
                                <input type="text" name="search" class="border border-secondary rounded px-2 py-2" placeholder="Search phone or email number">
                                <button type="submit" class="btn btn-primary py-2">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                @include('flash-message')
                <table class="table table-bordered table-striped" style="border: 1.5px solid #3e3e3e;">
                    <thead class="text-center fw-bold">
                        <th>SL No</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Purpose of Visit</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($getData as $item)
                            <tr id="cf-data-container">
                                <td>{{ $loop->index+1}}</td>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ ($item->purpose_of_visit) }}</td>
                                <td>
                                    @if($item->status == 'approved')
                                    <p class="badge badge-success bg-success">Approved</p>
                                @elseif($item->status == 'unapproved')
                                <p class="badge badge-warning bg-warning">UnApproved</p>
                                @elseif($item->status == 'decline')
                                <p class="badge badge-danger bg-danger">Decline</p>
                                @else
                                @endif
                                </td>
                                <td>
                                    @if($item->status == 'approved')
                                        @if ($item->purpose_of_visit =='ielts_courses'||$item->purpose_of_visit =='basic_english'||$item->purpose_of_visit =='spoken'||$item->purpose_of_visit =='others'||$item->purpose_of_visit =='online_courses')
                                            @if (Helper::examCompleted($item->id, $item->assign_advisor)==NULL)
                                                <a href="{{route('student.exam.set', ['student_id'=>$item->id])}}" ><button class="btn btn-primary">Start Assessment</button></a>
                                            @else
                                                <a href="{{ route('student.exam.result' , ['student_id'=>$item->id] ) }}"><button class="btn btn-success">View Result</button></a>
                                            @endif
                                        @endif
                                        <a href="{{ route('student.Details', $item->id )}}" ><button class="btn btn-secondary">Details</button></a>
                                        @if (Helper::followUpStatus($item->id) == 'admitted')
                                            <p class="mb-0 badge badge-success bg-success">Admitted</p>
                                        @elseif (Helper::followUpStatus($item->id) == 'not_admitted')
                                            <p class="mb-0 badge badge-danger bg-danger">Not Admitted</p>
                                        @else
                                            <a href="{{route('visitor.follow-up', $item->id)}}" class="btn btn-warning">FollowUp</a>
                                        @endif
                                    @elseif($item->status == 'unapproved')
                                        <form action="{{ route('status.update.adviser') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="submit" class="btn btn-success btn-sm" name='status' value="Approved">
                                        </form>
                                        <form action="{{ route('student.decline', $item->id ) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="submit" class="btn btn-warning btn-sm" name='status' value="Declined">
                                        </form>
                                    @else
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {!! $getData->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Your HTML -->
{{-- <div id="cf-data-container"></div> --}}

<script>
    function refreshPage(){
    let url = "{{ route('advnotify.status.change')}}"
    document.location.href=url;
} 

(function () {
    console.log('self-function');
    setInterval(notificationNewStudents, 10000);
    })();

    function notificationNewStudents(){
        console.log('self-function');
        $.ajax({
            type: "POST",
            url: '/advisor/notification-count',
            data: {"data":"check"},
            success: function(data){
                    document.getElementById('notification_count').innerHTML = data;                
                }
        });
    }
</script>

