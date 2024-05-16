@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Add Section</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
				<form action="{{route('admin.update-question.test', $find_data->id)}}" method="POST" enctype="multipart/form-data">
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
						<label for="question_type" class="form-label">Question Type <span class="text-danger">*</span></label>
						<select class="form-select" name="question_type" required>
						  <option selected>Please select a question</option>
						  <option value="multiple-choice" {{ $find_data->question_type == 'multiple-choice' ? 'selected' : '' }}>Multiple Choice</option>
						  <option value="radio" {{ $find_data->question_type == 'radio' ? 'selected' : '' }}>Radio</option>
						  <option value="drop-down" {{ $find_data->question_type == 'drop-down' ? 'selected' : '' }}>Drop Down</option>
						  <option value="fill-blank" {{ $find_data->question_type == 'fill-blank' ? 'selected' : '' }}>Fill in the blanks</option>
						  <option value="heading-matching" {{ $find_data->question_type == 'heading-matching' ? 'selected' : '' }}>Heading Matching</option>
						  <option value="true-of-nice" {{ $find_data->question_type == 'true-of-nic' ? 'selected' : '' }}>True Of Nice</option>
						  <option value="multi-selector" {{ $find_data->question_type == 'multi-selector' ? 'selected' : '' }}>Multi Selector</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="question_instruction" class="form-label">Question Instruction<span class="text-danger">*</span></label>
						<textarea name="question_instruction" id="ck" cols="30" rows="10" required>{!!$find_data->instruction!!}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">Update Question</button>
				</form>
            </div>
        </div>
    </div>
@endsection