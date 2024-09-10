@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
    
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                @include('flash-message')
                <form action=" {{ route('manager.store.day-wise.visitor-list')}}" method="POST" class="form-control">
                    @csrf 
                    <div class="row mt-2 mx-1">
                        <label for="discount">Select a date</label>
                        <input type="date" name="date" class="form-control" placeholder="Enter course Priviliged Price">
                    </div>
                    <div class="row mt-2 mx-1" id="">
                        <div class="col-md-10">
                            <a href="{{ route('manager.home')}}" class="btn btn-primary float-end">Go Back</a>
                            <input type="submit" class="btn btn-primary float-end mx-2" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

