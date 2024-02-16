@extends('admin.adminHome')
@section('main-admin-content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card shadow">
                <h4 class="p-4 fw-bold">Add Section</h4>
            </div>
            <div class="card mt-3 p-4">
                @include('admin.partials.flash-message')
				<div class="row">
                    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 mx-auto">
                        <form action="{{route('admin.store-question.fill-blank.test')}}" method="POST">
                            @csrf
                            <input type="hidden" name="question_id" value="{{$questionId}}">
                            <div class="form-group">
                                <label for="name" class="mb-2">Question Text <span class="text-danger">*</span></label>
                                <textarea name="text" id="ck" cols="30" rows="5" class="form-control" placeholder="Question like this: text ##blank## text" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name" class="mb-2">Question Answer <span class="text-danger">*</span></label>
                                <input type="text" name="blank_answer" class="form-control" placeholder="answer1,answer2" required>
                            </div>
                            <div class="form-group">
                                <label for="name" class="mb-2">Question Marks <span class="text-danger">*</span></label>
                                <input type="text" name="marks" class="form-control" placeholder="Write your question marks" required>
                            </div>
                            <div class="form-group">
                                <label for="name" class="mb-2">Box Show <span class="text-danger">*</span></label>
                               <select name="is_show" id="" class="form-control" required>
                                <option value="">Please select one</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                               </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 mx-auto">
                        <div class="mt-4 text-center">
                            <h3 class="fw-bolder">All Question</h3>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>SL No</th>
                                <th>Question Type</th>
                                <th>Question</th>
                                <th>marks</th>
                                <th>Show Box</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($fillBlanks as $items)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$items->testQuestion->question_type}}</td>
                                    <td>{!!$items->text!!}</td>
                                    <td>{{$items->marks}}</td>
                                    <td>{{$items->is_show}}</td>
                                    <td>
                                        <a href="{{route('admin.delete-question.fill-blank.test', $items->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection