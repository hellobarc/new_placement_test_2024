@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div style="background: #ebf6fc !important" class="p-5 mb-5">
                <h1 style="color: #284664; font-weight:700" class="text-center">Student Details Information</h1>
                <div class="mt-3">
                    @include('flash-message')
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="full-name">Full Name</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->full_name }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="mobile-number">Mobile Number</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->mobile }}</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->email }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="occupation">Profession </label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->occupation }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->address }}</p>
                            </div>
                        </div>
                        
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address">Location</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->location }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="organization">Current Organization/Institution  Name</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->organization }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->date_of_birth }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address">Educational Qualification</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->education }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email">How to know about us</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->how_you_know }}</p>
                            </div>
                        </div>  
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email">Expected Country to go</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->expected_country }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="expected_score">Expected IELTS Score</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->expected_score }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email"> Purpose of IELTS</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->purpose_of_ielts }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email"> Purpose of Visiting BARC</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->purpose_of_visit }}</p>    
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('student.Details.update', $getDetails->id )}}" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Comments From Student</label>
                                    <textarea class="form-control" name="comments_from_student" id="comments" cols="30" rows="5" >{{ $getDetails->comments_from_student }}</textarea>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Feedback From Advisor</label>
                                    <textarea class="form-control" name="feedback_from_advisor" id="feedback" cols="30" rows="5" >{{ $getDetails->feedback_from_advisor }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="mx-auto mt-10 text-center col">
                                <button type="submit" class="btn btn-primary col-2">Update Feedback</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

