@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Add Section</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
				<form action="{{route('admin.store-question.test')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="test_id" value="{{$test_id}}">
					<input type="hidden" name="section_id" value="{{$section_id}}">
					<div class="mb-3">
						<label for="question_type" class="form-label">Question Type <span class="text-danger">*</span></label>
						<select class="form-select" name="question_type" required>
						  <option selected>Please select a question</option>
						  <option value="multiple-choice">Multiple Choice</option>
						  <option value="radio">Radio</option>
						  <option value="drop-down">Drop Down</option>
						  <option value="fill-blank">Fill in the blanks</option>
						  {{-- <option value="heading-matching">Heading Matching</option>
						  <option value="true-of-nice">True Of Nice</option> --}}
						  <option value="multi-selector">Multi Selector</option>
						</select>
					  </div>
					  <div class="mb-3">
						<label for="question_instruction" class="form-label">Question Instruction<span class="text-danger">*</span></label>
						<textarea name="question_instruction" id="ck" cols="30" rows="10" required></textarea>
					  </div>
					<button type="submit" class="btn btn-primary">Add Question</button>
				</form>
            </div>
        </div>
    </div>
@endsection