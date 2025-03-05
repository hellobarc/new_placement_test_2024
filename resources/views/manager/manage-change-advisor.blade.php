@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card p-3">
                    <h1 class="pb-2">Student List</h1>
                    <table class="table table-bordered">
                        <thead>
                            <th>SL No</th>
                            <th>Full Name</th>
                            <th>Mobile</th>
                            <th>Purpose of Visit</th>
                            <th>Assign Assessor</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($getData as $key=>$item)
                                <tr>
                                    <td>{{ $loop->index+1}}</td>
                                    <td>{{ ucfirst($item->full_name) }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ ucfirst($item->purpose_of_visit) }}</td>
                                    <td>{{ $item->totalUser->name }}</td>
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
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->id}}">Change Advisor</a>
                                        <!-- Modal -->
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
                                                        <div class="row mt-3">
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
                                        <!-- End Modal -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {!! $getData->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

