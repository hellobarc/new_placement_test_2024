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
                    <form action="{{ route('advisor.student.Details.update', $getDetails->id )}}" method="POST">
                        @csrf
                        @include('flash-message')
                        <input type="hidden" name="student_id" id="" value="{{$getDetails->visitor_log_id}}">
                        <!-- name and mobile -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="full-name" class="fw-bold">Full Name</label><br>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->studentInfo->full_name}}</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mobile-number" class="fw-bold">Mobile Number</label><br>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->studentInfo->mobile}}</p>
                                </div>
                            </div>
                            
                        </div>
                        <!-- email, purpose of visit -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">Email</label><br>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->studentInfo->email}}</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Purpose of Visiting BARC</label>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->studentInfo->purpose_of_visit}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- profession, how to know -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="occupation" class="fw-bold">Profession </label><br>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->occupation}}</p>
                                    {{-- <input type="text" name="occupation" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->occupation}}"> --}}
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">How to know about us</label>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->how_you_know}}</p>
                                </div>
                            </div>  
                        </div>
                        <!-- student reference -->
                        @if ($getDetails->how_you_know == 'student_reference')
                            <div class="row mt-3">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address" class="fw-bold">Reference Student Name</label>
                                        <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->refer_stu_name}}</p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="email" class="fw-bold">Refer phone number</label>
                                        <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->refer_phone_number}}</p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="email" class="fw-bold">Refer batch Name</label>
                                        <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->refer_batch_name}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                         <!-- address and location -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Location</label>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->location}}</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Address</label>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->address}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- education qualification, purpose of ielts -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Educational Qualification</label><br>
                                    <select id="education" name="education" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                        <option value="SSC" {{$getDetails->education == 'SSC'?'selected':''}}>  SSC </option>
                                        <option value="GED" {{$getDetails->education == 'GED'?'selected':''}}>  GED </option>
                                        <option value="HSC" {{$getDetails->education == 'HSC'?'selected':''}}>  HSC   </option>
                                        <option value="Vocational" {{$getDetails->education == 'Vocational'?'selected':''}}>Vocational</option>
                                        <option value="Graduate" {{$getDetails->education == 'Graduate'?'selected':''}}>Graduate</option>
                                        <option value="Post Graduate" {{$getDetails->education == 'Post Graduate'?'selected':''}}>Post Graduate</option>
                                        <option value="Doctorate" {{$getDetails->education == 'Doctorate'?'selected':''}}>Doctorate or higher</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Purpose of IELTS</label>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->purpose_of_ielts}}</p>
                                </div>
                            </div>
                        </div>
                        <!--  ielts taken before -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> IELTS taken before?</label>
                                    <select name="ielts_taken" id="" class="mb-1 py-2 px-2 fs-5 w-100" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;">
                                        <option value="">Please select one</option>
                                        <option value="{{$getDetails->ielts_taken == 'yes'?'selected':''}}">Yes</option>
                                        <option value="{{$getDetails->ielts_taken == 'no'?'selected':''}}">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">Total Time in hand</label>
                                    <select name="ielts_enough_time" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">
                                        <option value="">-- select one --</option>
                                        <option value="1" {{$getDetails->ielts_taken == '1'?'selected':''}}>  1 </option>
                                        <option value="2" {{$getDetails->ielts_taken == '2'?'selected':''}}>  2 </option>
                                        <option value="3" {{$getDetails->ielts_taken == '3'?'selected':''}}>  3 </option>
                                        <option value="4" {{$getDetails->ielts_taken == '4'?'selected':''}}>  4 </option>
                                        <option value="5" {{$getDetails->ielts_taken == '5'?'selected':''}}>  5 </option>
                                        <option value="6" {{$getDetails->ielts_taken == '6'?'selected':''}}>  6 </option>
                                        <option value="more_than_6" {{$getDetails->ielts_taken == 'more_than_6'?'selected':''}}>  More than 6 </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--  expected ielts score -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                <div class="form-group">
                                    <label for="expected_score" class="fw-bold">Expected IELTS Score</label>
                                    <p style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100">{{$getDetails->expected_score}}</p>
                                </div>
                            </div>
                        </div>
                         <!--  expected ielts score module wise-->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score_reading" class="fw-bold">Expected IELTS Reading Score</label>
                                    <input type="text" name="expected_score_reading" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->reading_expected_module == NULL?'N/A':$getDetails->reading_expected_module}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score_listening" class="fw-bold">Expected IELTS Listening Score</label>
                                    <input type="text" name="expected_score_listening" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->listening_expected_module == NULL?'N/A':$getDetails->listening_expected_module}}">
                                </div>
                            </div>
                        </div>
                        <!--  expected ielts score module wise-->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score_writing" class="fw-bold">Expected IELTS Writing Score</label>
                                    <input type="text" name="expected_score_writing" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->writing_expected_module == NULL?'N/A':$getDetails->writing_expected_module}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score_speaking" class="fw-bold">Expected IELTS Speaking Score</label>
                                    <input type="text" name="expected_score_speaking" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->speaking_expected_module == NULL?'N/A':$getDetails->speaking_expected_module}}">
                                </div>
                            </div>
                        </div>
                        <!-- expected country to go -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">Expected Country to go</label>
                                    <select data-width="100%" id="expected_country" name="expected_country[]" multiple="multiple" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">
                                        <option value="">-- select one --</option>
                                        <option value="USA">  USA </option>
                                        <option value="UK">  UK </option>
                                        <option value="Canada">  Canada </option>
                                        <option value="Australia">  Australia </option>
                                        <option value="Europe">  Europe </option>
                                        <option value="Others"> Others </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">School selected</label>
                                    <select data-width="100%" id="school_goes" name="school_goes[]" multiple="multiple" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">
                                        <option value="Top">  Top </option>
                                        <option value="Medium">  Medium </option>
                                        <option value="Low">  Low </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--  passport number and emergency-->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="nid_passport_number" class="fw-bold">NID/Passport Number</label>
                                    <input type="text" name="nid_passport_number" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->nid_passport_number == NULL?'N/A':$getDetails->nid_passport_number}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Emergency Number</label>
                                    <input type="text" name="emergency_number" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->emergency_number}}">
                                </div>
                            </div>
                            
                        </div>
                        <!-- date of birth, blood group -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="blood_group" class="fw-bold">Blood Group</label>
                                    <input type="text" name="blood_group" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->blood_group == NULL?'N/A':$getDetails->blood_group}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="date_of_birth" class="fw-bold">Date of Birth</label>
                                    <input type="text" name="date_of_birth" id="date_of_birth" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->date_of_birth}}">
                                </div>
                            </div>
                        </div>
                        <!-- Institution  Name -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                <div class="form-group">
                                    <label for="organization" class="fw-bold">Current Organization/Institution  Name</label>
                                    <input type="text" name="organization" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->organization == NULL?'N/A':$getDetails->organization}}">
                                </div>
                            </div>
                        </div>
                          <!-- suggested course, total enrolled course -->
                         <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Suggested Course</label>
                                    <input type="text" name="suggested_course" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->suggested_course == NULL?'N/A':$getDetails->suggested_course}}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email" class="fw-bold"> Total Enrolled Course</label>
                                    <input type="text" name="total_enroll_course" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5 w-100" value="{{$getDetails->total_enroll_course == NULL?'N/A':$getDetails->total_enroll_course}}">
                                </div>
                            </div>
                         </div>
                         <!-- Comments From Student, Feedback From Advisor -->
                        <div class="row mt-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Comments From Student</label>
                                    <textarea class="form-control" name="comments_from_student" id="comments" cols="30" rows="5" >{{$getDetails->comments_from_student == NULL?'N/A':$getDetails->comments_from_student}}</textarea>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Feedback From Advisor</label>
                                    <textarea class="form-control" name="feedback_from_advisor" id="feedback" cols="30" rows="5" >{{$getDetails->feedback_from_advisor == NULL?'N/A':$getDetails->feedback_from_advisor}}</textarea>
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

