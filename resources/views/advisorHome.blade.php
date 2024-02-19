@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col">
                        <p class="fs-3 fw-bold mx-4">Barc Home</p>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>SL No</td>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Purpose of Visit</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getData as $item)
                        <tr>
                            <td>{{ $loop->index+1}}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>{{ $item->purpose_of_visit }}</td>
                            <td>{{ $item->status}}</td>
                            <td>
                                <a href="" ><button class="btn btn-primary">Start Assessment</button></a>
                                <a href="{{ route('student.Details', $item->id )}}" ><button class="btn btn-secondary">Details</button></a>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
</div>
@endsection