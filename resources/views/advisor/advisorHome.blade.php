@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 px-sm-2 px-0" style="background: #072F64">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="{{route('advisor.home')}}" class="d-flex align-items-center pb-3 mt-3 mb-md-0 me-md-auto text-center text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-center fs-4"><i class="fa-solid fa-house"></i> Dashboard</span>
                    
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('visitor.follow-up.list')}}" class="nav-link align-middle px-0 text-white fs-6">
                            <i class="fa-regular fa-calendar-days"></i> <span class="ms-1 d-none d-sm-inline">Exam Feedback</span>
                        </a>
                    </li>
                </ul>
                {{-- <hr>
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
                </div> --}}
            </div>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="card p-4 shadow-sm border-none" style="margin: 20px 20px !important;">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <form action="{{route('visitor.search')}}" method="GET">
                            @csrf
                            <div class="">
                                <div class="d-flex justify-content-between" style="border: 1px solid #000;border-radius: 4px;"> 
                                    <input type="text" name="search" class="px-2 py-2" style="border: none;" placeholder="Search phone or email number" required>
                                    <button type="submit" class="btn btn-dark py-2 px-4 rounded-0"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <button class="border-0 bg-light" id="onclickTableShow" onClick="refreshPage()">
                            <i class="fa-regular fa-bell fs-2 text-dark"></i>
                            <span id="notification_count" class="notification-number">{{ $notificationCount }}</span>
                        </button>
                    </div>
                    
                </div>
                @include('flash-message')
                <table class="table table-bordered" style="margin-top:32px">
                    <thead class="text-center fw-bold">
                        <th class="adviserDasHomeTh">SL No</th>
                        <th class="adviserDasHomeTh">Full Name</th>
                        <th class="adviserDasHomeTh">Mobile</th>
                        <th class="adviserDasHomeTh">Purpose of Visit</th>
                        <th class="adviserDasHomeTh">Enrolled Course</th>
                        <th class="adviserDasHomeTh">Status</th>
                        <th class="adviserDasHomeTh">Visit Date</th>
                        <th class="adviserDasHomeTh">Visit Branch</th>
                        <th class="adviserDasHomeTh">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($getData as $item)
                            <tr id="cf-data-container">
                                <td style="font-size:14px;">{{ $loop->index+1}}</td>
                                <td style="font-size:14px;">{{ $item->full_name }}</td>
                                <td style="font-size:14px;">{{ $item->mobile }}</td>
                                <td style="font-size:14px;">{{ ($item->purpose_of_visit) }}</td>
                                <td style="font-size:14px;">Pending</td>
                                <td style="font-size:14px;">
                                    @if($item->status == 'approved')
                                    <p class="badge badge-success bg-success mt-2 mb-0">Approved</p>
                                    @elseif($item->status == 'unapproved')
                                    <p class="badge badge-warning bg-warning mt-2 mb-0">UnApproved</p>
                                    @elseif($item->status == 'decline')
                                    <p class="badge badge-danger bg-danger mt-2 mb-0">Decline</p>
                                    @else
                                    @endif
                                </td>
                                <td style="font-size:14px;">{{date('d-m-Y', strtotime($item->created_at))}}</td>
                                <td style="font-size:14px;">{{ $item->visit_branch }}</td>
                                <td class="d-flex justify-content-start" style="font-size:14px;">
                                    @if($item->status == 'approved')
                                        @if ($item->purpose_of_visit =='course'||$item->purpose_of_visit == 'ielts_courses'|| $item->purpose_of_visit =='basic_english'||$item->purpose_of_visit =='spoken'||$item->purpose_of_visit =='others'||$item->purpose_of_visit =='online_courses')
                                            @if (Helper::examCompleted($item->id, $item->assign_advisor)==NULL)
                                                <a href="{{route('student.exam.set', ['student_id'=>$item->id])}}" ><button class="start-test-btn">Start Now</button></a>
                                            @else
                                                <a href="{{ route('student.exam.result' , ['student_id'=>$item->id] ) }}"><button class="btn py-1 text-white" style="background-color: #035388">Result</button></a>
                                            @endif
                                        @endif
                                        <a href="{{ route('student.Details', ['student_id'=> $item->id, 'step'=>1] )}}" ><button class="btn btn-outline-primary py-1 px-2 mx-2">Details</button></a>
                                        @if (Helper::followUpStatus($item->id) == 'admitted')
                                            <p class="mb-0 badge badge-success bg-success">Admitted</p>
                                        @elseif (Helper::followUpStatus($item->id) == 'not_admitted')
                                            <p class="mb-0 badge badge-danger bg-danger">Not Admitted</p>
                                        @else
                                            <a href="{{route('visitor.follow-up', $item->id)}}" style="color:#2a1fe9; font-size:1rem; margin: 8px 0 0 0;">FollowUp </a>
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
                <div class="d-flex justify-content-end mt-3">
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

//auto decline
(function () {
    console.log('self-function-auto-decline');
    setInterval(autodecline, 600000);
    })();

    function autodecline(){
        console.log('self-function-auto-decline');
        console.log('self-function');
        $.ajax({
            type: "GET",
            url: '/unapproved-students-change',
            data: {"data":"check"},
            success: function(){
                    console.log('status updated to decline');            
                }
        });
    }

//notification for new students
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

