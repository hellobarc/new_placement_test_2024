@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div style="background: #ebf6fc !important" class="p-5 mb-5">
            <p class="fs-2 fw-bold mx-4 text-center" style="color:#284664">Declined Student List</p>
            <div class="  my-2">
                <form action="" method="POST">
                    @csrf
                    <div class="d-flex  justify-content-end">
                        <div class="d-flex justify-content-between"> 
                            <input type="text" name="search" class="border border-secondary rounded px-2 py-2" placeholder="Search phone or email number">
                            <button type="submit" class="btn btn-primary py-2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="">
                @include('flash-message')
                <table class="table table-bordered table-striped" style="border: 1px solid #000">
                        <thead class="text-center">
                            <th>SL No</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Purpose of Visit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                    
                        <tbody>
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
            <div class="mt-4">
                <a href="{{route('home')}}" class="btn btn-primary">Back to form</a>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function refreshPage(){
    let url = "{{ route('fnotify.status.change')}}"
    document.location.href = url;
    // window.location.reload();
}
</script>

