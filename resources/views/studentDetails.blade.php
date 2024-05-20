@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-between my-4">
                <div>
                    <span>
                        <a href="{{route('advisor.home')}}" class="text-decoration-none text-dark">Dashboard</a>
                    </span>
                    <span style="font-size: 12px;"><i class="fa-solid fa-angle-right"></i></span>
                    <span>Visitor Information</span>
                </div>
                <div>
                    <a href="{{route('advisor.home')}}" class="text-decoration-none text-dark"><i class="fa-solid fa-arrow-left"></i> Previous Page</a>
                </div>
            </div>
            <div style="background: #ebf6fc !important" class="p-5 mb-5">
                <h1 style="color: #284664; font-weight:700" class="text-center">Student Details Information</h1>
                <div class="mt-3">
                    @include('flash-message')
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="full-name" class="fw-bold">Full Name</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->full_name }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="mobile-number" class="fw-bold">Mobile Number</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->mobile }}</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email" class="fw-bold">Email</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->email }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="occupation" class="fw-bold">Profession </label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->occupation }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address" class="fw-bold">Address</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->address }}</p>
                            </div>
                        </div>
                        
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address" class="fw-bold">Location</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->location }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="organization" class="fw-bold">Current Organization/Institution  Name</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->organization }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="date_of_birth" class="fw-bold">Date of Birth</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->date_of_birth }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address" class="fw-bold">Educational Qualification</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->education }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email" class="fw-bold">How to know about us</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->how_you_know }}</p>
                            </div>
                        </div>  
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email" class="fw-bold">Expected Country to go</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->expected_country }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="expected_score" class="fw-bold">Expected IELTS Score</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->expected_score }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email" class="fw-bold"> Purpose of IELTS</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->purpose_of_ielts }}</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email" class="fw-bold"> Purpose of Visiting BARC</label>
                                <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">{{ $getDetails->purpose_of_visit }}</p>    
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('student.Details.update', $getDetails->id )}}" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Comments From Student</label>
                                    <textarea class="form-control" name="comments_from_student" id="comments" cols="30" rows="5" >{{ $getDetails->comments_from_student }}</textarea>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Feedback From Advisor</label>
                                    <textarea class="form-control" name="feedback_from_advisor" id="feedback" cols="30" rows="5" >{{ $getDetails->feedback_from_advisor }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="mx-auto mt-10 text-center col">
                                <button type="submit" class="btn col-2 text-white fw-bold" style="background-color: #035388">Update Feedback</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

