@extends('manager.managerHome')
@section('manager-content')
<div class="container">
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 mx-auto">
            @include('flash-message')
           <div class="card p-4">
            <table class="table table-bordered">
                <thead>
                    <th>Sl No</th>
                    <th>Course Name</th>
                    <th>Course Benefits</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $rows)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$rows->name}}</td>
                            <td>{!! $rows->course_benefits!!}</td>
                            <td>
                                <a href="{{route('manager.course.edit', $rows->id)}}" class="btn btn-success btn-sm"> Edit</a>
                                <a href="{{route('manager.course.delete', $rows->id)}}" class="btn btn-danger btn-sm"> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
        </div>
    </div>
</div>

@endsection

