@extends('layouts.app')
@section('content')
<section class="visitor_info_div">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-between mb-4 mt-2">
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
                <div style="" class="mb-5">
                    <h1 style="color: #284664; font-weight:700" class="text-center">Student Details Information</h1>
                    <p style="font-size:1.125rem; text-align:center;">Please fill out this form with the required information</p>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                            
                            <div class="mt-3">
                                {{-- <form action="{{ route('advisor.student.Details.update', $getDetails->id )}}" method="POST">
                                    @csrf --}}
                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <input type="hidden" name="student_id" id="" value="{{$getDetails->visitor_log_id}}">
                                    
                                   
                                        <!-- purpose of ielts -->
                                        <div class="form-group mt-3">
                                            <label for="email"> Purpose of Visiting BARC <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="purpose_of_visit" name="purpose_of_visit" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="course" {{$getDetails->studentInfo->purpose_of_visit == 'course' ? 'selected': ' '}}>Course</option>
                                                <option value="mock" {{$getDetails->studentInfo->purpose_of_visit == 'mock' ? 'selected': ' '}}>  Mock Test </option>
                                                <option value="ielts_registration" {{$getDetails->studentInfo->purpose_of_visit == 'ielts_registration' ? 'selected': ' '}}>  IELTS Registration </option>
                                                <option value="others" {{$getDetails->studentInfo->purpose_of_visit == 'others' ? 'selected': ' '}}>  Others </option>
                                            </select>
                                        </div>
                                        <!-- name and mobile -->
                                        <div class="form-group mt-3">
                                            <label for="full-name">Full Name <span class="text-danger fw-bold">*</span></label>
                                            <input name="full_name" type="text" placeholder="Full Name" id="full_name" value="{{$getDetails->studentInfo->full_name == NULL ? 'N/A': $getDetails->studentInfo->full_name}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="mobile-number">Mobile Number <span class="text-danger fw-bold">*</span></label>
                                            <input name="contact_number" value="{{$getDetails->studentInfo->mobile == NULL ? 'N/A': $getDetails->studentInfo->mobile}}" id="contact_number" type="tel" placeholder="+88" pattern="[0-9]{11}||[0-9]{3}-[0-9]{8}||[0-9]{4}-[0-9]{7}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <!-- email, purpose of visit -->
                                        <div class="form-group mt-3">
                                            <label for="email">Email <span class="text-danger fw-bold">*</span></label>
                                            <input name="email" id="email" value="{{$getDetails->studentInfo->email == NULL ? 'N/A': $getDetails->studentInfo->email}}" type="email" placeholder="Email" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                   
                                        <div class="form-group mt-3">
                                            <label for="email"> How to know about us? <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="howtoknow" name="how_you_know" onchange="handleKnow(event)" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Facebook" {{$getDetails->how_you_know == 'Facebook' ? 'selected': ' '}}> Facebook</option>
                                                <option value="Website" {{$getDetails->how_you_know == 'Website' ? 'selected': ' '}}> Website </option>
                                                <option value="Billboard" {{$getDetails->how_you_know == 'Billboard' ? 'selected': ' '}}> Billboard </option>
                                                <option value="Google-Map" {{$getDetails->how_you_know == 'Google-Map' ? 'selected': ' '}}> Google Map </option>
                                                <option value="student_reference" {{$getDetails->how_you_know == 'student_reference' ? 'selected': ' '}}> Student Reference </option>
                                                <option value="Youtube" {{$getDetails->how_you_know == 'Youtube' ? 'selected': ' '}}> Youtube </option>
                                                <option value="Others" {{$getDetails->how_you_know == 'Others' ? 'selected': ' '}}> Others </option>
                                            </select>
                                        </div>
                                        <!-- student reference--> 
                                        <div id="reference_id" style="display: none;">
                                            <div class="form-group mt-3">
                                                <label for="refer_stu_name">Reference Student Name<span class="text-danger fw-bold">*</span></label>
                                                <input name="refer_stu_name" type="text" placeholder="Full Name" id="Refer Phone name" value="{{$getDetails->refer_stu_name == NULL ? 'N/A': $getDetails->refer_stu_name}}" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="refer_phone_number">Refer student phone number<span class="text-danger fw-bold">*</span></label>
                                                <input name="refer_phone_number" type="text" placeholder="Refer Phone Number" id="Refer Phone Number" value="{{$getDetails->refer_phone_number == NULL ? 'N/A': $getDetails->refer_phone_number}}" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="refer_batch_name">Refer student batch Name<span class="text-danger fw-bold">*</span></label>
                                                <input name="refer_batch_name" type="text" placeholder="Refer student batch name" id="Refer student batch name" value="{{$getDetails->refer_batch_name == NULL ? 'N/A': $getDetails->refer_batch_name}}" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                            </div>
                                        </div>
                                        <!-- courses -->
                                        <div class="form-group mt-3">
                                            <label for="full-name">Which Course you need?<span class="text-danger fw-bold">*</span></label><br>
                                            <input type="hidden" id="specific_course" value="{{$getDetails->specific_course}}">
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_ielts" value="course_ielts">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">IELTS</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_kids" value="course_kids">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Kids</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_english_graduate" value="course_english_graduate">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">English Graduate</p>
                                            </div>
                                            {{-- <input name="full_name" type="text" placeholder="Full Name" id="full_name" value="{{$getDetails->studentInfo->full_name == NULL ? 'N/A': $getDetails->studentInfo->full_name}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;"> --}}
                                        </div>
                                    
                                        <div class="form-group mt-3">
                                            <label for="full-name">Purpose of IELTS<span class="text-danger fw-bold">*</span></label><br>
                                            <input type="hidden" id="front_purpose_of_ielts" value="{{$getDetails->purpose_of_ielts}}">
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="purpose_of_ielts" id="purpose_of_ielts_general" value="general_english">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">improve your general English skills</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="purpose_of_ielts" id="purpose_of_ielts_academic" value="academic">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">want to go aboard for higher study</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="purpose_of_ielts" id="purpose_of_ielts_general_training" value="general_training">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">want to go aboard for work</p>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> IELTS Taken Before <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="ielts_taken" name="ielts_taken" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="yes" {{$getDetails->ielts_taken == 'yes' ? 'selected': ' '}}>Yes</option>
                                                <option value="no" {{$getDetails->ielts_taken == 'no' ? 'selected': ' '}}>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Expected IELTS Score <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="expected_score" name="expected_score" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="4" {{$getDetails->expected_score ==4 ? 'selected': ' '}}>4.00</option>
                                                <option value="4.50" {{$getDetails->expected_score ==4.50 ? 'selected': ' '}}>4.50</option>
                                                <option value="5" {{$getDetails->expected_score ==5 ? 'selected': ' '}}>5.00</option>
                                                <option value="5.50" {{$getDetails->expected_score ==5.50 ? 'selected': ' '}}>5.50</option>
                                                <option value="6" {{$getDetails->expected_score ==6 ? 'selected': ' '}}>6.00</option>
                                                <option value="6.50" {{$getDetails->expected_score ==6.50 ? 'selected': ' '}}>6.50</option>
                                                <option value="7" {{$getDetails->expected_score ==7 ? 'selected': ' '}}>7.00</option>
                                                <option value="7.50" {{$getDetails->expected_score ==7.50 ? 'selected': ' '}}>7.50</option>
                                                <option value="8" {{$getDetails->expected_score ==8 ? 'selected': ' '}}>8.00</option>
                                                <option value="8.50" {{$getDetails->expected_score ==8.50 ? 'selected': ' '}}>8.50</option>
                                                <option value="9" {{$getDetails->expected_score ==9 ? 'selected': ' '}}>9.00</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email">Expected Country to go</label>
                                            @if ($expected_country_arr != NULL)
                                                <select data-width="100%" id="expected_country" name="expected_country[]" multiple="multiple" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">
                                                    <option value="USA" {{in_array("USA", $expected_country_arr) == 1?'selected':''}}>  USA </option>
                                                    <option value="UK" {{in_array("UK", $expected_country_arr) == 1?'selected':''}}>  UK </option>
                                                    <option value="Canada" {{in_array("Canada", $expected_country_arr) == 1?'selected':''}}>  Canada </option>
                                                    <option value="Australia" {{in_array("Australia", $expected_country_arr) == 1?'selected':''}}>  Australia </option>
                                                    <option value="Europe" {{in_array("Europe", $expected_country_arr) == 1?'selected':''}}>  Europe </option>
                                                    <option value="Others" {{in_array("Others", $expected_country_arr) == 1?'selected':''}}> Others </option>
                                                </select>
                                            @else
                                                <select data-width="100%" id="expected_country" name="expected_country[]" multiple="multiple" style="border: 1px solid #d9d9d9; border-radius: 5px; background:#fff;" class="mb-1 py-2 px-4 fs-5">
                                                    <option value="USA">  USA </option>
                                                    <option value="UK">  UK </option>
                                                    <option value="Canada">  Canada </option>
                                                    <option value="Australia">  Australia </option>
                                                    <option value="Europe">  Europe </option>
                                                    <option value="Others"> Others </option>
                                                </select>
                                            @endif
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> How much your preparation time? <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="ielts_enough_time" name="ielts_enough_time" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="1" {{$getDetails->ielts_enough_time ==1 ? 'selected': ' '}}>1 Month</option>
                                                <option value="2" {{$getDetails->ielts_enough_time ==2 ? 'selected': ' '}}>2 Month</option>
                                                <option value="3" {{$getDetails->ielts_enough_time ==3 ? 'selected': ' '}}>3 Month</option>
                                                <option value="4" {{$getDetails->ielts_enough_time ==4 ? 'selected': ' '}}>4 Month</option>
                                                <option value="5" {{$getDetails->ielts_enough_time ==5 ? 'selected': ' '}}>5 Month</option>
                                                <option value="6" {{$getDetails->ielts_enough_time ==6 ? 'selected': ' '}}>6 Month</option>
                                                <option value="7" {{$getDetails->ielts_enough_time ==7 ? 'selected': ' '}}>7 Month</option>
                                                <option value="8" {{$getDetails->ielts_enough_time ==8 ? 'selected': ' '}}>8 Month</option>
                                                <option value="9" {{$getDetails->ielts_enough_time ==9 ? 'selected': ' '}}>9 Month</option>
                                                <option value="10" {{$getDetails->ielts_enough_time ==10 ? 'selected': ' '}}>10 Month</option>
                                                <option value="11" {{$getDetails->ielts_enough_time ==11 ? 'selected': ' '}}>11 Month</option>
                                                <option value="12" {{$getDetails->ielts_enough_time ==12 ? 'selected': ' '}}>12 Month</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Area of improvement? <span class="text-danger fw-bold">*</span></label><br>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_improvement[]" id="area_of_improve_listening" value="listening">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Listening</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_improvement[]" id="area_of_improve_reading" value="reading">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Reading</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_improvement[]" id="area_of_improve_writing" value="writing">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Writing</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_improvement[]"  id="area_of_improve_speaking" value="speaking">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Speaking</p>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Area of strengths? <span class="text-danger fw-bold">*</span></label><br>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_strengths[]" id="area_of_strenght_listening" value="listening">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Listening</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_strengths[]" id="area_of_strenght_reading" value="reading">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Reading</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_strengths[]" id="area_of_strenght_writing" value="writing">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Writing</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_strengths[]" id="area_of_strenght_speaking" value="speaking">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Speaking</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_strengths[]" id="area_of_strenght_grammar" value="grammar">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Grammar</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="checkbox" name="topics_strengths[]" id="area_of_strenght_vocabulary" value="vocabulary">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Vocabulary</p>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Your current level <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="your_current_level" name="your_current_level" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Zero" {{$getDetails->first_current_level == 'Zero' ? 'selected': ' '}}>Zero Level</option>
                                                <option value="Basic" {{$getDetails->first_current_level == 'Basic' ? 'selected': ' '}}>Basic Level</option>
                                                <option value="lower-intermediate" {{$getDetails->first_current_level == 'lower-intermediate' ? 'selected': ' '}}>Lower Intermediate</option>
                                                <option value="intermediate" {{$getDetails->first_current_level == 'intermediate' ? 'selected': ' '}}>Intermediate</option>
                                                <option value="upper-intermediate" {{$getDetails->first_current_level == 'upper-intermediate' ? 'selected': ' '}}>Upper Intermediate</option>
                                                <option value="advance" {{$getDetails->first_current_level == 'advance' ? 'selected': ' '}}>Advance</option>
                                                <option value="upper-advance" {{$getDetails->first_current_level == 'upper-advance' ? 'selected': ' '}}>Upper Advance</option>
                                            </select>
                                        </div>
                                   
                                        <div class="form-group mt-3">
                                            <label for="email"> Profession <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="occupation" name="occupation" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Govt. Service" {{$getDetails->occupation == 'Govt. Service' ? 'selected': ' '}}>  Govt. Service</option>
                                                <option value="Private Service" {{$getDetails->occupation == 'Private Service' ? 'selected': ' '}}>  Private Service </option>
                                                <option value="Business" {{$getDetails->occupation == 'Business' ? 'selected': ' '}}>  Business </option>
                                                <option value="Doctor" {{$getDetails->occupation == 'Doctor' ? 'selected': ' '}}>  Doctor </option>
                                                <option value="Engineer" {{$getDetails->occupation == 'Engineer' ? 'selected': ' '}}> Engineer </option>
                                                <option value="Teacher" {{$getDetails->occupation == 'Teacher' ? 'selected': ' '}}>  Teacher </option>
                                                <option value="University Student" {{$getDetails->occupation == 'University Student' ? 'selected': ' '}}>  University Student </option>
                                                <option value="HSC Student" {{$getDetails->occupation == 'HSC Student' ? 'selected': ' '}}>  HSC Student  </option>
                                                <option value="House Wife" {{$getDetails->occupation == 'House Wife' ? 'selected': ' '}}> House Wife</option>
                                                <option value="Others" {{$getDetails->occupation == 'Others' ? 'selected': ' '}}> Others </option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Educational Qualification <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="education" name="education" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="SSC" {{$getDetails->education == 'SSC' ? 'selected': ' '}}>  SSC </option>
                                                    <option value="GED" {{$getDetails->education == 'GED' ? 'selected': ' '}}>  GED </option>
                                                    <option value="HSC" {{$getDetails->education == 'HSC' ? 'selected': ' '}}>  HSC   </option>
                                                    <option value="Vocational" {{$getDetails->education == 'Vocational' ? 'selected': ' '}}>Vocational</option>
                                                    <option value="Graduate" {{$getDetails->education == 'Graduate' ? 'selected': ' '}}>Graduate</option>
                                                    <option value="Post Graduate" {{$getDetails->education == 'Post Graduate' ? 'selected': ' '}}>Post Graduate</option>
                                                    <option value="Doctorate" {{$getDetails->education == 'Doctorate' ? 'selected': ' '}}>Doctorate or higher</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="organization">Current Organization/Institution name<span class="text-danger fw-bold">*</span></label>
                                            <input name="organization" type="text" placeholder="Full Name" id="organization" value="{{$getDetails->organization == NULL ? 'N/A': $getDetails->organization}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="date_of_birth">Date of Birth<span class="text-danger fw-bold">*</span></label>
                                            <input name="date_of_birth" placeholder="Full Name" id="date_of_birth" value="{{$getDetails->date_of_birth == NULL ? 'N/A': $getDetails->date_of_birth}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Location <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="location" name="location" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Uttara" {{$getDetails->location == 'Uttara' ? 'selected': ' '}}> Uttara</option>
                                                <option value="Mirpur" {{$getDetails->location == 'Mirpur' ? 'selected': ' '}}> Mirpur</option>
                                                <option value="Gazipur" {{$getDetails->location == 'Gazipur' ? 'selected': ' '}}>  Gazipur </option>
                                                <option value="Joydevpur" {{$getDetails->location == 'Joydevpur' ? 'selected': ' '}}>  Joydevpur </option>
                                                <option value="Tongi" {{$getDetails->location == 'Tongi' ? 'selected': ' '}}>  Tongi </option>
                                                <option value="Khilkhet" {{$getDetails->location == 'Khilkhet' ? 'selected': ' '}}>  Khilkhet </option>
                                                <option value="Badda" {{$getDetails->location == 'Badda' ? 'selected': ' '}}>  Badda </option>
                                                <option value="Gulshan" {{$getDetails->location == 'Gulshan' ? 'selected': ' '}}>  Gulshan </option>
                                                <option value="Dhanmondi" {{$getDetails->location == 'Dhanmondi' ? 'selected': ' '}}>  Dhanmondi </option>
                                                <option value="Narsingdi" {{$getDetails->location == 'Narsingdi' ? 'selected': ' '}}>  Narsingdi </option>
                                                <option value="Demra" {{$getDetails->location == 'Demra' ? 'selected': ' '}}>  Demra </option>
                                                <option value="Tangail" {{$getDetails->location == 'Tangail' ? 'selected': ' '}}>  Tangail </option>
                                                <option value="Savar" {{$getDetails->location == 'Savar' ? 'selected': ' '}}>  Savar </option>
                                                <option value="Other" {{$getDetails->location == 'Other' ? 'selected': ' '}}>  Other </option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="address">Address<span class="text-danger fw-bold">*</span></label>
                                            <input name="address" type="text" placeholder="Full Name" id="address" value="{{$getDetails->address == NULL ? 'N/A': $getDetails->address}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="blood_group"> Blood Group <span class="text-danger fw-bold">*</span></label><br>
                                            <input name="blood_group" type="text" placeholder="Blood group" id="blood_group" value="{{$getDetails->blood_group == NULL ? 'N/A': $getDetails->blood_group}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="emergency_number"> Emergency Contact <span class="text-danger fw-bold">*</span></label><br>
                                            <input name="emergency_number" type="text" placeholder="Emergency contact" id="emergency_number" value="{{$getDetails->address == NULL ? 'N/A': $getDetails->address}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="nid_passport_number"> NID/Passport Number <span class="text-danger fw-bold">*</span></label><br>
                                            <input name="nid_passport_number" type="text" placeholder="Passport number" id="nid_passport_number" value="{{$getDetails->emergency_number == NULL ? 'N/A': $getDetails->emergency_number}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="comments_from_student"> Student Comment <span class="text-danger fw-bold">*</span></label><br>
                                            <textarea name="comments_from_student" required type="text" placeholder="Student Comment" id="comments_from_student" cols="30" rows="5" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">{{$getDetails->comments_from_student == NULL ? 'N/A': $getDetails->comments_from_student}}</textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="feedback_from_advisor"> Adviser Comment <span class="text-danger fw-bold">*</span></label><br>
                                            <textarea name="feedback_from_advisor" required type="text" placeholder="Adviser Comment" id="feedback_from_advisor" cols="30" rows="5" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">{{$getDetails->feedback_from_advisor == NULL ? 'N/A': $getDetails->feedback_from_advisor}}</textarea>
                                        </div>
                                   
                                    <!-- button -->
                                    <div class="d-flex justify-content-center mt-4">
                                        <a href="{{route('advisor.home')}}" style="text-decoration: none; color:#f8f8f8; background-color:#32327B; border:1px solid #32327B; padding:8px 12px; font-size:1rem; border-radius:4px;"><i class="fa-solid fa-arrow-left-long"></i> Back Home</a>
                                        {{-- <button type="submit" class="btn text-white ms-2 px-4" style="background-color: #32327B; ">Next <i class="fa-solid fa-arrow-right-long"></i></button> --}}
                                    </div>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('student-details-informatin-js')
<script>
    $(function() {
        var el = document.getElementById("specific_course").value
        if(el == 'course_ielts'){
            document.getElementById("course_ielts").checked = true;
        }else if(el == 'course_kids'){
            document.getElementById("course_kids").checked = true;
        }else if(el == 'course_english_graduate'){
            document.getElementById("course_english_graduate").checked = true;
        }
    });
    $(function() {
        var el = document.getElementById("front_purpose_of_ielts").value
        if(el == 'general_english'){
            document.getElementById("purpose_of_ielts_general").checked = true;
        }else if(el == 'academic'){
            document.getElementById("purpose_of_ielts_academic").checked = true;
        }else if(el == 'general_training'){
            document.getElementById("purpose_of_ielts_general_training").checked = true;
        }
    });
    var $areaofimproveReading = "{{in_array("reading", $area_of_improve)}}";
    var $areaofimproveListening = "{{in_array("listening", $area_of_improve)}}";
    var $areaofimproveSpeaking = "{{in_array("speaking", $area_of_improve)}}";
    var $areaofimproveWriting = "{{in_array("writing", $area_of_improve)}}";
    if($areaofimproveReading == 1){
        document.getElementById("area_of_improve_reading").checked = true;
    }
    if($areaofimproveListening == 1){
        document.getElementById("area_of_improve_listening").checked = true;
    }
    if($areaofimproveWriting == 1){
        document.getElementById("area_of_improve_writing").checked = true;
    }
    if($areaofimproveSpeaking == 1){
        document.getElementById("area_of_improve_speaking").checked = true;
    }
    var $areaofStrenghtReading = "{{in_array("reading", $area_of_strength)}}";
    var $areaofStrenghtListening = "{{in_array("listening", $area_of_strength)}}";
    var $areaofStrenghtSpeaking = "{{in_array("speaking", $area_of_strength)}}";
    var $areaofStrenghtWriting = "{{in_array("writing", $area_of_strength)}}";
    var $areaofStrenghtGrammar = "{{in_array("grammar", $area_of_strength)}}";
    var $areaofStrenghtVocabulary = "{{in_array("vocabulary", $area_of_strength)}}";
    if($areaofStrenghtReading == 1){
        document.getElementById("area_of_strenght_reading").checked = true;
    }
    if($areaofStrenghtListening == 1){
        document.getElementById("area_of_strenght_listening").checked = true;
    }
    if($areaofStrenghtWriting == 1){
        document.getElementById("area_of_strenght_writing").checked = true;
    }
    if($areaofStrenghtSpeaking == 1){
        document.getElementById("area_of_strenght_speaking").checked = true;
    }
    if($areaofStrenghtGrammar == 1){
        document.getElementById("area_of_strenght_grammar").checked = true;
    }
    if($areaofStrenghtVocabulary == 1){
        document.getElementById("area_of_strenght_vocabulary").checked = true;
    }
</script>
@endsection
