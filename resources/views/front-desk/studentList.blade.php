@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-10">
                        <p class="fs-3 fw-bold mx-4">Declined Student List</p>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-danger my-3" id="onclickTableShow" onClick="refreshPage()">
                            <i class="bi bi-bell"></i>
                            <span id="front_notification_count">{{ $notificationCount }}</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <a href="{{route('front-desk.home')}}" class="btn btn-primary float-end">Student Form</a>
                </div>
            </div>
        </div>
<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered" >
                
                <tr>
                    <td>SL No</td>
                    <td>Full Name</td>
                   
                    <td>Mobile</td>
                    
                    <td>Action</td>
                </tr>
               
                    <tbody >
                @foreach ($getDeclinedStudents as $item)
                    <tr id="cf-data-container">
                        <td>{{ $loop->index+1}}</td>
                        <td>{{ $item->full_name }}</td>
                       
                        <td>{{ $item->mobile }}</td>
                        
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
                            
                            
                           
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
          
        </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div> --}}
        <div class="  my-2">
            <form action="" method="POST" class="form-control">
                @csrf
                <div class="d-flex  justify-content-end">
                    <div class="d-flex  justify-content-between col-md-5">
                        <input type="text" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            @include('flash-message')
            <table class="table table-bordered" >
                
                    <tr>
                        <td>SL No</td>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Purpose of Visit</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                   
                        <tbody >
                    @foreach ($getDeclinedStudents as $item)
                        <tr id="cf-data-container">
                            <td>{{ $loop->index+1}}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>{{ $item->purpose_of_visit }}</td>
                            <td>
                                @if($item->status == 'approved')
                                <p class="badge badge-success bg-success">Approved</p>
                            @elseif($item->status == 'unapproved')
                            <p class="badge badge-warning bg-warning">UnApproved</p>
                            @elseif($item->status == 'declined')
                             <p class="badge badge-danger bg-danger">Declined</p>
                            @else
                            @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->id}}">Assign Advisor</a>
                                {{-- Modal --}}
                                <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel-{{$item->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-{{$item->id}}">Change Adviser</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('front.change.advisor', $item->id )}}" method="POST">
                                                @csrf
                                                <div class="row mx-2">
                                                    <label for="">Advisors</label>
                                                    <select name="assign_advisor" id="" class="form-control">
                                                        <option value="">Select An Option</option> 
                                                        @foreach ($getAdvisorList as $list)
                                                            <option value="{{ $list->id }}">{{$list->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="row my-2 mx-2">
                                                    <div class="col-2 ">
                                                        <input type="submit" name="" id="" value="Submit" class="btn btn-primary">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            {!! $getDeclinedStudents->links() !!}
        </div>
    </div>
</div>
@endsection

<!-- Your HTML -->
{{-- <div id="cf-data-container"></div> --}}

<script>
    function refreshPage(){
    window.location.reload();
} 

    // window.onload=function(){
    // Echo.channel('FrontDesk_Notification')
    //     .listen('.FrontDeskNotification', (e) => {
    //         console.log(e.message.length)
    //         e.forEach(element => {
    //             console.log(element.length)
    //         })

    //         let front_notification_count = e.message.length;
    //         document.getElementById("front_notification_count").innerHTML = front_notification_count;
            
        
    //     });
    // }
</script>

