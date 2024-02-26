@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            @include('flash-message')
            <div class="card">
                <div class="card-header">Courses</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Course Bundle</th>
                                <th>Course Level</th>
                                <th>Package</th>
                                <th>Duration</th>
                                <th>Individual Price</th>
                                <th>Discount</th>
                                <th>Offered Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getCourseData as $item)
                                <tr>
                                    <td>{{ $item->course_bundle }}</td>
                                    <td>{{ $item->course_level }}</td>
                                    <td>{{ $item->package }}</td>
                                    <td>{{ $item->duration }}</td>
                                    <td>{{ $item->individual_price }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ $item->offered_price }}</td>
                                    <td>
                                        <a href="{{ route('course.prices.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteFollowUp-{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteFollowUp-{{$item->id}}" tabindex="-1" aria-labelledby="deleteFollowUpLabel-{{$item->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title text-danger fw-bolder" id="deleteFollowUpLabel-{{$item->id}}">Are you sure delete!!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <a href="{{route('course.price.delete', $item->id)}}" class="btn btn-danger btn-lg">Permanent Delete</a>
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