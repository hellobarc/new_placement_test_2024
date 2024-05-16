@extends('manager.managerHome')
@section('manager-content')
<div class="container">
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mx-auto">
            @include('flash-message')
           <div class="card p-4">
            <form action="{{route('manager.course.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="course_name" class="form-label">Courses <span class="text-danger">*</span></label>
                    <select class="form-control" name="course_name" id="course_name">
                        <option value="">Please select one</option>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="C1">C1</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="course_benefits" class="form-label">Course Benefits<span class="text-danger">*</span></label>
                    <textarea name="course_benefits" id="ck" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
           </div>
        </div>
    </div>
</div>

@endsection

