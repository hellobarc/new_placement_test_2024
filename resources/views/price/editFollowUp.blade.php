@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <section>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="text-center">
                                <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Edit Follow Up</p>
                                <p class="fs-1 fw-bold col-md-6 mx-auto">Student Name : {{ $data->full_name }}</p>
                            </div>
                        </div>
                    </div>
                </section>
                @include('flash-message')
                <section>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <form action="{{ route('followUP.Edit') }}" method="POST" class="form-control">
                                @csrf

                                <input type="hidden" name="id" value="{{$data->id}}">

                                <label for="addmission">Admission Status</label>
                                <select name="admission_status" id="admission" class="form-control">
                                    <option value="admitted"{{ $data->admission_status == 'admitted' ? 'selected' : '' }}>Admitted</option>
                                    <option value="later_admit" {{ $data->admission_status == 'later_admit' ? 'selected' : '' }}>Later Admitted</option>
                                    <option value="not_admitted" {{ $data->admission_status == 'not_admitted' ? 'selected' : '' }}>Not Admitted</option>
                                </select>

                                <label for="Comment" >Remark</label>
                                <textarea name="remarks" id="comment" cols="30" rows="5" class="form-control">{{ $data->remarks }}</textarea>

                                <label for="">Next Follow Up Date</label>
                                <input type="date" name="next_follow_up_date" class="form-control" value="{{ $data->next_follow_up_date }}">
                                <a href="{{ route('price.List', $data->student_id ) }}" class="btn btn-primary float-start mt-4">Go Back</a>
                                <button type="submit" class="btn btn-primary float-end mt-4">Update Follow Up</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection