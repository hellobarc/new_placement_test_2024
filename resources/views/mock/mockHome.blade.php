@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row ">
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
            <table class="table table-bordered table-striped" style="border: 1.5px solid #3e3e3e;">
                <thead class="text-center">
                    <th>SL No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Purpose of Visit</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                    <tbody >
                        @foreach ($getData as $item)
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
                                    @elseif($item->status == 'decline')
                                    <p class="badge badge-danger bg-danger">Decline</p>
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if($item->status == 'approved')
                                        <a href="{{ route('student.Details.mock', $item->id )}}" ><button class="btn btn-secondary">Details</button></a>
                                    @elseif($item->status == 'unapproved')
                                        <form action="{{ route('status.update.mock') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="submit" class="btn btn-success btn-sm" name='status' value="Approved">
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
@endsection

<!-- Your HTML -->
{{-- <div id="cf-data-container"></div> --}}

<script>
    function refreshPage(){
    window.location.reload();
} 
</script>

