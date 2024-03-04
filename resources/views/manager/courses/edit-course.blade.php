@extends('manager.managerHome')
@section('manager-content')
<div class="container">
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mx-auto">
            @include('flash-message')
           <div class="card p-4">
            <h4 class="fw-bold">Edit Course</h4>
            <form action="{{route('manager.course.update', $data->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="course_name" class="form-label">Courses <span class="text-danger">*</span></label>
                    <select class="form-control" name="course_name" id="course_name">
                        <option value="">Please select one</option>
                        <option value="A1" {{ $data->name == 'A1' ? 'selected' : '' }}>A1</option>
                        <option value="A2" {{ $data->name == 'A2' ? 'selected' : '' }}>A2</option>
                        <option value="B1" {{ $data->name == 'B1' ? 'selected' : '' }}>B1</option>
                        <option value="B2" {{ $data->name == 'C2' ? 'selected' : '' }}>B2</option>
                        <option value="C1" {{ $data->name == 'C1' ? 'selected' : '' }}>C1</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="course_benefits" class="form-label">Course Benefits<span class="text-danger">*</span></label>
                    <textarea name="course_benefits" id="ck" cols="30" rows="10">{!! $data->course_benefits!!}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
           </div>
        </div>
    </div>
</div>

@endsection

