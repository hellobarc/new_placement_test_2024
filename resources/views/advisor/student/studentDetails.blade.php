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
                            <div class="d-flex justify-content-start mt-3">
                                <div class="text-center">
                                    <p id="adviser-stu-info-step-1-active" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    <p style="font-size: 1.125rem;">Step 1</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    @if ($step == 'step-4')
                                        <p id="adviser-stu-info-step-2-active" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 'step-3')
                                        <p id="adviser-stu-info-step-2-active" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 'step-2')
                                        <p id="adviser-stu-info-step-2-active-n" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-regular fa-circle-dot"></i></p>
                                    @elseif ($step == 'step-1')
                                        <p id="adviser-stu-info-step-2" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 2</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    @if ($step == 'step-4')
                                        <p id="adviser-stu-info-step-2-active" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 'step-3')
                                        <p id="adviser-stu-info-step-2-active" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-regular fa-circle-dot"></i></p>
                                    @elseif ($step == 'step-2')
                                        <p id="adviser-stu-info-step-2-active-n" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 'step-1')
                                        <p id="adviser-stu-info-step-2" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 3</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    @if ($step == 'step-4')
                                        <p id="adviser-stu-info-step-4-active" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @else
                                        <p id="adviser-stu-info-step-4" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 4</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('advisor.student.Details.update', $getDetails->id )}}" method="POST">
                                    @csrf
                                    @include('flash-message')
                                    <input type="hidden" name="student_id" id="" value="{{$getDetails->visitor_log_id}}">
                                    <input type="hidden" name="step" id="" value="{{$step}}">
                                    @if ($step == 'step-1')
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
                                    @elseif ($step == 'step-2')
                                    <div class="form-group mt-3">
                                        <label for="email"> How to know about us? <span class="text-danger fw-bold">*</span></label><br>
                                        <select id="howtoknow" name="how_you_know" onchange="handleKnow(event)" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
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
                                     <!-- student reference--> 
                                    <div id="reference_id" style="display: none;">
                                        <div class="form-group mt-3">
                                            <label for="refer_stu_name">Reference Student Name<span class="text-danger fw-bold">*</span></label>
                                            <input name="refer_stu_name" type="text" placeholder="Full Name" id="Refer Phone name" value="N\A" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="refer_phone_number">Refer student phone number<span class="text-danger fw-bold">*</span></label>
                                            <input name="refer_phone_number" type="text" placeholder="Refer Phone Number" id="Refer Phone Number" value="N\A" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="refer_batch_name">Refer student batch Name<span class="text-danger fw-bold">*</span></label>
                                            <input name="refer_batch_name" type="text" placeholder="Refer student batch name" id="Refer student batch name" value="N\A" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                    </div>
                                    <!-- courses -->
                                    <div class="form-group mt-3">
                                        <label for="full-name">Which Course you need?<span class="text-danger fw-bold">*</span></label><br>
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
                                    @elseif ($step == 'step-3')
                                    <div class="form-group mt-3">
                                        <label for="full-name">Purpose of IELTS<span class="text-danger fw-bold">*</span></label><br>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="radio" name="purpose_of_ielts" id="purpose_of_ielts_general" value="general">
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
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email"> Expected IELTS Score <span class="text-danger fw-bold">*</span></label><br>
                                        <select id="expected_score" name="expected_score" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="4">4.00</option>
                                            <option value="4.50">4.50</option>
                                            <option value="5">5.00</option>
                                            <option value="5.50">5.50</option>
                                            <option value="6">6.00</option>
                                            <option value="6.50">6.50</option>
                                            <option value="7">7.00</option>
                                            <option value="7.50">7.50</option>
                                            <option value="8">8.00</option>
                                            <option value="8.50">8.50</option>
                                            <option value="9">9.00</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email">Expected Country to go</label>
                                        <select data-width="100%" id="expected_country" name="expected_country[]" multiple="multiple">
                                            <option value="USA">  USA </option>
                                            <option value="UK">  UK </option>
                                            <option value="Canada">  Canada </option>
                                            <option value="Australia">  Australia </option>
                                            <option value="Europe">  Europe </option>
                                            <option value="Others"> Others </option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email"> How much your preparation time? <span class="text-danger fw-bold">*</span></label><br>
                                        <select id="ielts_enough_time" name="ielts_enough_time" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="1">1 Month</option>
                                            <option value="2">2 Month</option>
                                            <option value="3">3 Month</option>
                                            <option value="4">4 Month</option>
                                            <option value="5">5 Month</option>
                                            <option value="6">6 Month</option>
                                            <option value="7">7 Month</option>
                                            <option value="8">8 Month</option>
                                            <option value="9">9 Month</option>
                                            <option value="10">10 Month</option>
                                            <option value="11">11 Month</option>
                                            <option value="12">12 Month</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email"> Area of improvement? <span class="text-danger fw-bold">*</span></label><br>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_improvement[]" value="listening">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Listening</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_improvement[]" value="reading">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Reading</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_improvement[]" value="writing">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Writing</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_improvement[]" value="speaking">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Speaking</p>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email"> Area of strengths? <span class="text-danger fw-bold">*</span></label><br>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_strengths[]" value="listening">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Listening</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_strengths[]" value="reading">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Reading</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_strengths[]" value="writing">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Writing</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_strengths[]" value="speaking">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Speaking</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_strengths[]" value="grammar">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Grammar</p>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <input type="checkbox" name="topics_strengths[]" value="vocabulary">
                                            <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Vocabulary</p>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email"> Your current level <span class="text-danger fw-bold">*</span></label><br>
                                        <select id="your_current_level" name="your_current_level" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="Zero">Zero Level</option>
                                            <option value="Basic">Basic Level</option>
                                            <option value="lower-intermediate">Lower Intermediate</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="upper-intermediate">Upper Intermediate</option>
                                            <option value="advance">Advance</option>
                                            <option value="upper-advance">Upper Advance</option>
                                        </select>
                                    </div>
                                    @elseif ($step == 'step-4')
                                        <div class="form-group mt-3">
                                            <label for="email"> Profession <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="occupation" name="occupation" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
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
                                        <div class="form-group mt-3">
                                            <label for="email"> Educational Qualification <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="education" name="education" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
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
                                        <div class="form-group mt-3">
                                            <label for="organization">Current Organization/Institution name<span class="text-danger fw-bold">*</span></label>
                                            <input name="organization" type="text" placeholder="Full Name" id="organization" value="{{$getDetails->studentInfo->full_name == NULL ? 'N/A': $getDetails->studentInfo->full_name}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="date_of_birth">Date of Birth<span class="text-danger fw-bold">*</span></label>
                                            <input name="date_of_birth" type="date" placeholder="Full Name" id="date_of_birth" value="{{$getDetails->studentInfo->full_name == NULL ? 'N/A': $getDetails->studentInfo->full_name}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email"> Profession <span class="text-danger fw-bold">*</span></label><br>
                                            <select id="occupation" name="occupation" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
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
                                        <div class="form-group mt-3">
                                            <label for="address">Address<span class="text-danger fw-bold">*</span></label>
                                            <input name="address" type="text" placeholder="Full Name" id="address" value="{{$getDetails->studentInfo->full_name == NULL ? 'N/A': $getDetails->studentInfo->full_name}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                        </div>
                                    @endif
                                    <!-- button -->
                                    <div class="d-flex justify-content-center mt-4">
                                        <a href="#" style="text-decoration: none; color:#A1A1A1; border:1px solid #B6B6B6; padding:8px 12px; font-size:1rem; border-radius:4px;"><i class="fa-solid fa-arrow-left-long"></i> Previous</a>
                                        <button type="submit" class="btn text-white ms-2 px-4" style="background-color: #32327B; ">Next <i class="fa-solid fa-arrow-right-long"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

