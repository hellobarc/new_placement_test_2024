@extends('layouts.app')
  
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div style="background: #fbc8be; padding:10px 20px; border-radius:5px">
                        <h1 class="fw-bold text-danger text-center">{{ $getDetails->full_name }}</h1>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body p-4">
                    @include('flash-message')
                    {{-- <form action="{{ route('student.Details.update', $getDetails->id )}} " method="POST"> --}}
                       
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="full-name">Full Name</label>
                                    <input name="full_name" type="text" class="form-control" placeholder="Full Name" id="full_name" required value="{{ $getDetails->full_name }}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mobile-number">Mobile Number</label>
                                    <input name="contact_number" id="contact_number" type="tel" class="form-control" placeholder="Mobile" pattern="[0-9]{11}||[0-9]{3}-[0-9]{8}||[0-9]{4}-[0-9]{7}" required value="{{ $getDetails->mobile }}">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email" required value="{{ $getDetails->email }}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="occupation">Profession </label>
                                    <input name="occupation" id="occupation" type="text" class="form-control" placeholder="Occupation" required value="{{ $getDetails->occupation }}"> 
                                </div>
                            </div>
                            <div class="row mt-3">
                                
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input name="address" id="address" type="text" class="form-control" placeholder="Address" required value="{{ $getDetails->address }}">
                                </div>
                            </div>
                            
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Location</label>
                                    <input class="form-control" value="{{ $getDetails->location }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="organization">Current Organization/Institution  Name (optional)</label>
                                    <input name="organization" id="organization" type="text" class="form-control" value="na" required value="{{ $getDetails->organization }}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input name="date_of_birth" id="date_of_birth" type="text" class="form-control"  required value="{{ $getDetails->date_of_birth }}">
                                </div>

                            </div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Educational Qualification</label>
                                    <input class="form-control " id="education" name="education" required value="{{ $getDetails->education }}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">How to know about us</label>
                                    <input class="form-control " id="howtoknow" name="how_you_know" required value="{{ $getDetails->how_you_know }}">
                                    
                                </div>
                            </div>  
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">Expected Country to go</label>
                                    <input class="form-control" id="expected_country" name="expected_country" required value="{{ $getDetails->expected_country }}">
                                    
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score">Expected IELTS Score</label>
                                    <input name="expected_score" id="expected_score" type="text" class="form-control" placeholder="example. 7" required value="{{ $getDetails->expected_score }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email"> Purpose of IELTS</label>
                                    <input class="form-control " id="purpose_of_ielts" name="purpose_of_ielts" required value="{{ $getDetails->purpose_of_ielts }}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email"> Purpose of Visiting BARC</label>
                                    <input class="form-control " id="purpose_of_visit" name="purpose_of_visit" required value="{{ $getDetails->purpose_of_visit }}">
                                        
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Branch Recommendation</label>
                                    <input class="form-control " id="branch_recomendation" name="branch_recomendation" required value="{{ $getDetails->branch_recomendation }}">
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('student.Details.update', $getDetails->id )}}" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Comments From Student</label>
                                        {{-- <input class="form-control" id="comments" name="branch_recomendation" required value="{{ $getDetails->branch_recomendation }}"> --}}
                                        <textarea class="form-control" name="comments_from_student" id="comments" cols="30" rows="5" >{{ $getDetails->comments_from_student }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Feedback From Advisor</label>
                                        {{-- <input class="form-control" id="comments" name="branch_recomendation" required value="{{ $getDetails->branch_recomendation }}"> --}}
                                        <textarea class="form-control" name="feedback_from_advisor" id="feedback" cols="30" rows="5" >{{ $getDetails->feedback_from_advisor }}</textarea>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="mx-auto mt-10 text-center col">
                                    <button type="submit" class="btn btn-primary col-2">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

