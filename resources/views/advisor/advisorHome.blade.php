@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-10">
                        <p class="fs-3 fw-bold mx-4">Barc Home</p>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-danger my-3" id="onclickTableShow" onClick="refreshPage()">
                            <i class="bi bi-bell"></i>
                            <span id="notification_count">{{ $notificationCount }}</span>
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="  my-2">
            <form action="" method="POST" class="form-control">
                @csrf
                <div class="d-flex  justify-content-end">
                    <div class="d-flex  justify-content-between col-md-4">
                        <input type="text" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            <div ></div>
            <table class="table table-bordered" >
                
                    <tr>
                        <td>SL No</td>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Purpose of Visit</td>
                        <td>Time Log</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                   
                        <tbody >
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
        </div>
        <div class="d-flex justify-content-end">
            {!! $getData->links() !!}
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

