@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Edit Test</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
                <form action="{{route('admin.update.test', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="title" placeholder="Enter test title" value="{{$data->title}}">
                    </div>
                    <div class="mb-3">
                      <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                      <select name="status" id="" class="form-control">
                        <option value="">Please Select a status</option>
                        <option value="active" {{ $data->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="pause" {{ $data->status == 'pause' ? 'selected' : '' }}>Pause</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="time" class="form-label">Test Time</label>
                      <input type="text" class="form-control" name="time" placeholder="Enter test total Time" value="{{$data->time}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection