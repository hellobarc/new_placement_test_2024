@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Edit Audio</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
				<form action="{{route('admin.test.update-audio', $find_data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="mb-3">
					  <label for="test_id" class="form-label">Test Name <span class="text-danger">*</span></label>
					  <select name="test_id" id="" class="form-control">
						<option value="">Please Select a test</option>
						@foreach ($allTest as $row)
							<option value="{{$row->id}}" {{$row->id == $find_data->test_id?'selected':''}}>{{$row->title}}</option>
						@endforeach
					  </select>
					</div>
					<div class="mb-3">
					  <label for="section_id" class="form-label">Section Name <span class="text-danger">*</span></label>
					  <select name="section_id" id="" class="form-control">
						<option value="">Please Select a section</option>
						@foreach ($allSection as $row)
							<option value="{{$row->id}}" {{$row->id == $find_data->section_id?'selected':''}}>{{$row->name}}</option>
						@endforeach
					  </select>
					</div>
					<div class="mb-3">
					  <label for="audio_title" class="form-label">Passage Title</label>
					  <input type="text" class="form-control" name="audio_title" placeholder="Enter passage title" value="{{$find_data->title}}">
					</div>
					<div class="mb-3">
					  <label for="audio" class="form-label">Audio</label><br>
					  <audio controls src="{{asset('admin/files/uploads/test-audio/'.$find_data->audio)}}" type="audio/mpeg"></audio>
					</div>
					<div class="mb-3">
						<label for="listening_track" class="form-label">New Uploaded Audio <span class="text-danger">*</span></label>
						<input type="file" name="listening_track" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Update Audio</button>
				</form>
            </div>
        </div>
    </div>
@endsection