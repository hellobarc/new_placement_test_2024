@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card p-3">
                    <h1 class="pb-2">Student Exam List list</h1>
                    @include('flash-message')
                    <form action=" {{ route('manager.store.day-wise.visitor-list')}}" method="POST">
                        @csrf 
                        <div class="pt-2 mx-1">
                            <label for="discount">Select a date</label>
                            <input type="date" name="date" class="form-control" placeholder="Enter course Priviliged Price">
                        </div>
                        <div class="d-flex justify-content-center pt-3" id="">
                            <a href="{{ route('manager.home')}}" class="btn btn-sm btn-secondary">Go Back</a>
                            <input type="submit" class="btn btn-success btn-sm mx-2" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

