@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Create Section of test</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
                <form action="{{route('admin.update.section.test', $find_data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="mb-3">
					  <label for="name" class="form-label">Section Name<span class="text-danger">*</span></label>
					  <input type="text" class="form-control" name="name" placeholder="Enter test title" value="{{$find_data->name}}">
					</div>
					<div class="mb-3">
					  <label for="test_id" class="form-label">Test<span class="text-danger">*</span></label>
					  <select name="test_id" id="" class="form-control">
							<option value="">Please Select a test</option>
							@foreach ($allTest as $row)
								<option value="{{$row->id}}" {{$row->id == $find_data->test_id?'selected':''}}>{{$row->title}}</option>
							@endforeach
					  </select>
					</div>
					<div class="mb-3">
					  <label for="module_id" class="form-label">Module<span class="text-danger">*</span></label>
					  <select name="module_id" id="" class="form-control">
							<option value="">Please Select a module</option>
							@foreach ($modules as $module)
								<option value="{{$module->id}}" {{$module->id == $find_data->module_id?'selected':''}}>{{$module->name}}</option>
							@endforeach
					  </select>
					</div>
					<div class="mb-3">
					  <label for="instruction" class="form-label">Instruction (optional)</label>
					  <textarea name="instruction" class="form-control" id="">{{$find_data->instruction}}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
            </div>
        </div>
    </div>
@endsection