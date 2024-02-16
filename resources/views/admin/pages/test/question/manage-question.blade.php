@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Manage All Test Section</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
                {{-- <div class="d-flex justify-content-end mb-3">
                    <a href="{{route('admin.create.section.test')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i></i> Add New</a>
                </div> --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
						<thead>
							<th>Sl No</th>
							<th>Test Name</th>
							<th>Section Name</th>
							<th>Question Type</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach ($data as $rows)
								<tr>
									<td>{{$loop->index+1}}</td>
									<td>{{$rows->test->title}}</td>
									<td>{{$rows->testSection->name}}</td>
									<td>{{$rows->question_type}}</td>
									<td>
										<a href="{{route('admin.edit-question.test', $rows->id)}}" class="btn btn-primary btn-sm">Edit</a>
										<a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal_{{$rows->id}}">Delete</a>
										<a href="{{route('admin.insert-question.test', ['questionType'=>$rows->question_type, 'questionId'=>$rows->id])}}" class="btn btn-sm btn-info">+ Insert Question</a>
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
												<a href="{{route('admin.delete-question.test', $rows->id)}}" class="btn btn-danger mt-2">Permanent Delete</a>
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
						{{-- {!! $data->links() !!} --}}
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection