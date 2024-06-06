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
                    <form action="{{ route('student.Details.update', $getDetails->id )}}" method="POST">
                        @csrf
                        @include('flash-message')
                        <!-- name and mobile -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="full-name" class="fw-bold">Full Name</label><br>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->full_name}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mobile-number" class="fw-bold">Mobile Number</label><br>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->mobile}}">
                                </div>
                            </div>
                            
                        </div>
                        <!-- email, profession, address -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">Email</label><br>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->email}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="occupation" class="fw-bold">Profession </label><br>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->occupation}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Location</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->location}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Address</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->address}}">
                                </div>
                            </div>
                        </div>
                        <!-- Institution  Name, date of birth, address -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="organization" class="fw-bold">Current Organization/Institution  Name</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->organization}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="date_of_birth" class="fw-bold">Date of Birth</label>
                                    <input type="text" name="date_of_birth" id="date_of_birth" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->date_of_birth}}">
                                </div>
                            </div>
                        </div>
                        <!-- education qualification, how to know about us -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Educational Qualification</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->education}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">How to know about us</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->how_you_know}}">
                                </div>
                            </div>  
                        </div>
                        <!-- expected country to go, expected ielts score -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">Expected Country to go</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->expected_country}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score" class="fw-bold">Expected IELTS Score</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->expected_score}}">
                                </div>
                            </div>
                        </div>
                        <!-- Purpose of IELTS, Purpose of Visiting BARC -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Purpose of IELTS</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->purpose_of_ielts}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Purpose of Visiting BARC</label>
                                    <input type="text" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->purpose_of_visit}}">
                                </div>
                            </div>
                        </div>
                         <!-- Comments From Student, Feedback From Advisor -->
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
                        <!-- button -->
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

