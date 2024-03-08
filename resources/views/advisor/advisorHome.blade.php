@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-xl-2 px-sm-2 px-0" style="background: #212529">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-center text-white text-decoration-none">
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
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger my-3" id="onclickTableShow" onClick="refreshPage()">
                    <i class="bi bi-bell"></i>
                    <span id="notification_count">{{ $notificationCount }}</span>
                </button>
            </div>
            <div class="card mt-3 p-4 shadow-sm border-none">
                <div class="">
                    <form action="" method="POST">
                        @csrf
                        <div class="d-flex  justify-content-end">
                            <div class="d-flexjustify-content-between"> 
                                <input type="text" name="search" class="border border-secondary rounded px-2 py-2" placeholder="Search phone number">
                                <button type="submit" class="btn btn-primary py-2">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-bordered table-striped" style="border: 1.5px solid #3e3e3e;">
                    <thead class="text-center fw-bold">
                        <th>SL No</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Purpose of Visit</th>
                        <th>Time Log</th>
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
                                <td id="time-{{$item->id}}">{{ $item->time_log }}</td>
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

var before_time = "{{$formSubmitTime}}"

var after_time = parseInt(before_time) + 600 ;
let url = "{{ route('time-out.decline')}}"
const myInterval = setInterval(CheckOutTimeOut, 1000);

function CheckOutTimeOut(){
    if(before_time >= after_time){
        clearInterval(myInterval);
        document.location.href = url;
    }
}

</script>

