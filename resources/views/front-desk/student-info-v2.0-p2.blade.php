@extends('layouts.app')
  
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 mx-auto">
                <div style="background: #ebf6fc !important" class="p-5 mb-5">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('front.student.list') }}" class="btn mb-4 text-white" style="background: #0E34A0">Declined Students <span id="front_notification_count" class="bg-danger px-2 py-1 rounded">{{ $notificationCount}}</span></a>
                    </div>
                    <div style="padding:10px 20px; border-radius:5px" class="text-center">
                        <h1 class="fw-bold" style="color:#284664">Visitor Infromation Form</h1>
                        {{-- <p class="mb-0 fs-5">Please complete the form. When you submit the form the assessment time will be started to complete the process.</p> --}}
                    </div>
                    <div class="mt-3">
                        @include('flash-message')
                        <form action="{{ route('store.VisitorInfo')}} " method="POST">
                            @csrf
                            <input type="hidden" name="assessment_group_id" value="1">
                            <!-- purpose of visit -->
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto">
                                    <div class="form-group mt-3">
                                        <label for="email"> Purpose of Visiting BARC <span class="text-danger fw-bold">*</span></label>
                                        <select class="form-control dropdown" onchange="handleVisit(event)" id="purpose_of_visit" name="purpose_of_visit" required>
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="basic_english">  English Foundation </option>
                                            <option value="spoken">  Spoken Course </option>
                                            <option value="ielts_courses">  IELTS Courses </option>
                                            <option value="online_courses">  Online Courses </option>
                                            <option value="mock">  Mock Test </option>
                                            <option value="ielts_registration">  IELTS Registration </option>
                                            <option value="ielts_certificate">  IELTS Certificate </option>
                                            <option value="others">  Other Info </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- email phone name --> 
                            <div class="row mt-3">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mx-auto">
                                    <div class="form-group">
                                        <label for="mobile-number">Mobile Number <span class="text-danger fw-bold">*</span></label>
                                        <input name="contact_number" id="contact_number" type="tel" class="form-control" placeholder="Mobile" pattern="[0-9]{11}||[0-9]{3}-[0-9]{8}||[0-9]{4}-[0-9]{7}" required>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="full-name">Full Name <span class="text-danger fw-bold">*</span></label>
                                        <input name="full_name" type="text" class="form-control" placeholder="Full Name" id="full_name" required>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger fw-bold">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                             <!-- know about us--> 
                            <div style="display: none;" id="know_about_us_id">
                                <div class="row mt-3">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                                        <div class="form-group">
                                            <label for="email">How to know about us</label>
                                            <select class="form-control dropdown" id="howtoknow" name="how_you_know" onchange="handleKnow(event)">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Facebook">  Facebook</option>
                                                <option value="Website">  Website </option>
                                                <option value="Billboard">  Billboard </option>
                                                <option value="Google Map">  Google Map </option>
                                                <option value="student_reference">  Student Reference </option>
                                                <option value="Youtube">  Youtube </option>
                                                <option value="Others"> Others </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- student reference--> 
                            <div id="reference_id" style="display: none;">
                                <div class="row mt-3">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="refer_stu_name">Reference Student Name</label>
                                            <input name="refer_stu_name" id="refer_stu_name" type="text" class="form-control" placeholder="Refer Phone Number" value="na">
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="refer_phone_number">Refer phone number</label>
                                            <input name="refer_phone_number" id="refer_phone_number" type="text" class="form-control" placeholder="Refer Phone Number" value="na">
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="refer_batch_name">Refer batch Name</label>
                                            <input name="refer_batch_name" id="refer_batch_name" type="text" class="form-control" placeholder="Refer Batch Name" value="na">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ielts registration--> 
                            <div style="display: none;" id="ielts_registration_id">
                                <div class="row mt-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="ielts_test_center">IELTS Test Center</label>
                                            <select class="form-control dropdown" id="ielts_test_center" name="ielts_test_center" onchange="handleKnow(event)">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="idp"> IDP IELTS</option>
                                                <option value="british_councile">  British Council </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="ielts_exam_type">IELTS Exam Type</label>
                                            <select class="form-control dropdown" id="ielts_exam_type" name="ielts_exam_type" onchange="handleIELTSExamType(event)">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                    <option value="paper_based">Paper Based </option>
                                                    <option value="computed_delivered">Computer Delivered </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none" id="category_ielts_id">
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="email">Category of IELTS</label>
                                                    <select class="form-control dropdown" id="category_of_ielts" name="category_of_ielts" onchange="handleIELTSCategory(event)">
                                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                        <option value="standered">Standered IELTS</option>
                                                        <option value="ukvi">UKVI IELTS </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- profession and location--> 
                            <div id="profession" style="display: none">
                                <div class="row mt-3">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="occupation">Profession </label>
                                            <select class="form-control dropdown" id="occupation" name="occupation">
                                                <option value="" selected="selected">-- select one --</option>
                                                <option value="Govt. Service">  Govt. Service</option>
                                                <option value="Private Service">  Private Service </option>
                                                <option value="Business">  Business </option>
                                                <option value="Doctor">  Doctor </option>
                                                <option value="Engineer"> Engineer </option>
                                                <option value="Teacher">  Teacher </option>
                                                <option value="University Student">  University Student </option>
                                                <option value="HSC Student">  HSC Student  </option>
                                                <option value="House Wife"> House Wife</option>
                                                <option value="Others"> Others </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Location</label>
                                            <select class="form-control dropdown" id="location" name="location">
                                                <option value="" selected="selected" >-- select one --</option>
                                                    <option value="Uttara"> Uttara</option>
                                                    <option value="Mirpur"> Mirpur</option>
                                                    <option value="Gazipur">  Gazipur </option>
                                                    <option value="Joydevpur">  Joydevpur </option>
                                                    <option value="tongi">  Tongi </option>
                                                    <option value="Khilkhet">  Khilkhet </option>
                                                    <option value="Badda">  Badda </option>
                                                    <option value="Gulshan">  Gulshan </option>
                                                    <option value="Dhanmondi">  Dhanmondi </option>
                                                    <option value="Narsingdi">  Narsingdi </option>
                                                    <option value="Demra">  Demra </option>
                                                    <option value="Tangail">  Tangail </option>
                                                    <option value="Savar">  Savar </option>
                                                    <option value="Other">  Other </option>
                                                </select>
                                        </div>
                                    </div>     
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input name="address" id="address" type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- purpose of ielts--> 
                             <div style="display: none" id="purpose_id_ielts_id">
                                <div class="row mt-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                        <div class="form-group">
                                            <label for="email"> Purpose of IELTS</label>
                                            <select class="form-control dropdown" id="purpose_of_ielts" name="purpose_of_ielts">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                    <option value="Academic">Academic </option>
                                                    <option value="General">General </option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- advisor part -->
                            <div id="course_advisor" style="display: none;">
                                <div class="row mt-3">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="organization">Current Organization/Institution  Name</label>
                                            <input name="organization" id="organization" type="text" class="form-control" placeholder="Organization/Institution" value="na">
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input name="date_of_birth" id="date_of_birth" type="text" class="form-control" placeholder="Date of Birth">
                                        </div>

                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Educational Qualification</label>
                                            <select class="form-control dropdown" id="education" name="education">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="SSC">  SSC </option>
                                                <option value="GED">  GED </option>
                                                <option value="HSC">  HSC   </option>
                                                <option value="Vocational">Vocational</option>
                                                <option value="Graduate">Graduate</option>
                                                <option value="Post Graduate">Post Graduate</option>
                                                <option value="Doctorate">Doctorate or higher</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="email">Expected Country to go</label>
                                            <select class="form-control dropdown" id="expected_country" name="expected_country">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
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
                                            <label for="expected_score">Expected IELTS Score</label>
                                            <input name="expected_score" id="expected_score" type="text" class="form-control" placeholder="example. 7">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collect ielts certificate --> 
                            <div style="display: none;" id="ielts_certificate_div">
                                <div class="row mt-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Candidate ID</label>
                                            <input type="text" class="form-control" name="ielts_can_id" id="ielts_can_id" placeholder="Write IELTS Candidate ID">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Exam Date</label>
                                            <input name="ielts_exam_date" id="ielts_exam_date" type="text" class="form-control" placeholder="Exam Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- advisor list --> 
                            <div class="row mt-3">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                    <div class="form-group">
                                        <label for="full-name">Your Adviser will select this <span class="text-danger fw-bold">*</span></label>
                                        <select class="form-control" name="assign_advisor" required>
                                            <option value="">Select Adviser</option>
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->id}} ">{{ $item->name}} </option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- submit button -->
                            <div class="row mt-4">
                                <div class="mx-auto mt-10 text-center col">
                                    <input  type="submit" class="text-center btn text-white fw-bold" value="Submit" style="background:rgba(121,38,225,1)">
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


