@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Add Passage</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
				<form action="{{route('admin.store-passage.section.test')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="test_id" value="{{$test_id}}">
					<input type="hidden" name="section_id" value="{{$section_id}}">
					<div class="mb-3">
					  <label for="passage_title" class="form-label">Passage Title</label>
					  <input type="text" class="form-control" name="passage_title" placeholder="Enter passage title">
					</div>
					<div class="mb-3">
					  <label for="passage" class="form-label">Passage <span class="text-danger">*</span></label>
					  <textarea name="passage" class="form-control" id="ck"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Add Passage</button>
				</form>
            </div>
        </div>
    </div>
@endsection