@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Add Audio</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
				<form action="{{route('admin.test.store-audio')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="test_id" value="{{$test_id}}">
					<input type="hidden" name="section_id" value="{{$section_id}}">
					<div class="mb-3">
					  <label for="audio_title" class="form-label">Audio Title</label>
					  <input type="text" class="form-control" name="audio_title" placeholder="Enter Audio title">
					</div>
					<div class="mb-3">
					  <label for="listening_track" class="form-label">Audio <span class="text-danger">*</span></label>
					  <input type="file" name="listening_track" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Add Audio</button>
				</form>
            </div>
        </div>
    </div>
@endsection