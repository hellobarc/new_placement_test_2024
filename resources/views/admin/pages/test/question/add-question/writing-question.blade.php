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
                        <form action="{{route('admin.store-question.multiple-choice.test')}}" method="POST">
                            @csrf
                            <input type="hidden" name="question_id" value="{{$questionId}}">
                            <input type="hidden" name="question_type" value="{{$questionType}}">
                            <div class="form-group">
                                <label for="name" class="mb-2">Question <span class="text-danger">*</span></label>
                                <textarea name="question" id="ck" cols="30" rows="5" class="form-control" placeholder="Question like this: text ##blank## text" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name" class="mb-2">Question Marks <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="marks" placeholder="Write your question marks">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 mx-auto">
                        <div class="mt-4 text-center">
                            <h3 class="fw-bolder">
                                @if($questionType == 'multiple-choice')
                                Multiple Choice
                                @elseif($questionType == 'radio')
                                Radio
                                @elseif($questionType == 'drop-down')
                                Drop Down
                                @elseif($questionType == 'multi-selector')
                                Multi Selector
                                @elseif($questionType == 'writing')
                                Writing Question
                                @endif
                            </h3>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>SL No</th>
                                <th>Question Type</th>
                                <th>Question</th>
                                <th>Question Marks</th>
                                <th>Action</th>
                            </thead>
                           
                            <tbody>
                                @foreach ($writingQuestion as $items)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$items->testQuestion->question_type}}</td>
                                        <td>
                                            @if($items->question == NULL)
                                                <p>Question Not uploaded</p>
                                            @else
                                                {!!$items->question!!}
                                            @endif
                                        </td>
                                        <td>{{$items->marks}}</td>
                                        <td>
                                            <a href="{{route('admin.delete-question.multiple-choice.test', ['id'=>$items->id, 'questionType'=>$questionType])}}" class="btn btn-danger btn-sm">Delete</a>
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
<script src="{{asset('frontend/js/question_js.js')}}"></script>