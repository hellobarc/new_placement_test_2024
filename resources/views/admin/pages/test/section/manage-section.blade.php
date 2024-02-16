@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Manage All Test Section</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{route('admin.create.section.test')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i></i> Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
						<thead>
							<th>Sl No</th>
							<th>Name</th>
							<th>Test Name</th>
							<th>Module Name</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach ($data as $rows)
								<tr>
									<td>{{$loop->index+1}}</td>
									<td>{{$rows->name}}</td>
									<td>{{$rows->manageTest->title}}</td>
									<td>{{Helper::find_module($rows->module_id)}}</td>
									<td>
										<a href="{{route('admin.edit.section.test',$rows->id)}}" class="btn btn-primary btn-sm">Edit</a>
										<a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal_{{$rows->id}}">Delete</a>
										{{-- @if(strtolower(Helper::find_module($rows->module_id)) == 'reading')
											@if(Helper::find_assessment_test_passage($rows->assessmentTest->id, $rows->id))
												<a href="{{route('admin.manage.passage.assessment-test')}}" class="btn btn-dark btn-sm">View Passage</a>
											@else
												<a href="{{route('admin.add-passage.section.assessment-test', ['test_id'=>$rows->assessmentTest->id,'section_id'=>$rows->id])}}" class="btn btn-success btn-sm">+ Add Passage</a>
											@endif
										@elseif(strtolower(Helper::find_module($rows->module_id)) == 'listening')
											@if (Helper::find_assessment_test_audio($rows->assessmentTest->id, $rows->id))
												<a href="{{route('admin.assessment-test.manage-audio')}}" class="btn btn-dark btn-sm">View Audio</a>
											@else
												<a href="{{route('admin.assessment-test.add-audio', ['test_id'=>$rows->assessmentTest->id,'section_id'=>$rows->id])}}" class="btn btn-secondary btn-sm">+ Add Audio</a>
											@endif
										@else
										@endif --}}
										<a href="{{route('admin.add-question.test', ['test_id'=>$rows->manageTest->id,'section_id'=>$rows->id])}}" class="btn btn-info btn-sm">+ Add Question</a>
									</td>
								</tr>
								<!-- Delete Modal -->
								<div class="modal fade" id="deleteModal_{{$rows->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure !! you are <span class="text-danger">delete item permanently</span> !!</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<a href="{{route('admin.delete.section.test', $rows->id)}}" class="btn btn-danger mt-2">Permanent Delete</a>
											</div>
											<div class="modal-footer text-end">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</tbody>
					</table>
					<div class="d-flex justify-content-end">
						{!! $data->links() !!}
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection