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
                        <span>Visitor Information </span>
                    </div>
                    <div>
                        <a href="{{route('advisor.home', ['page' => request('page', $pagination_page)])}}" class="text-decoration-none text-dark"><i class="fa-solid fa-arrow-left"></i> Previous Page</a>
                    </div>
                </div>
                <div style="" class="mb-5">
                    <h1 style="color: #284664; font-weight:700" class="text-center">Student Details Information</h1>
                    <p style="font-size:1.125rem; text-align:center;">Please fill out this form with the required information</p>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                            <div class="d-flex justify-content-start mt-3">
                                <div class="text-center">
                                    @if ($step == 4)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 3)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 2)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 1)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-regular fa-circle-dot"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 1</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    @if ($step == 4)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 3)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 2)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-regular fa-circle-dot"></i></p>
                                    @elseif ($step == 1)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 2</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    @if ($step == 4)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-solid fa-circle-check"></i></p>
                                    @elseif ($step == 3)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-regular fa-circle-dot"></i></p>
                                    @elseif ($step == 2)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @elseif ($step == 1)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 3</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    @if ($step == 4)
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;margin:0 0 0 0;"><i class="fa-regular fa-circle-dot"></i></p>
                                    @else
                                        <p style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9; margin:0 0 0 0;"><i class="fa-regular fa-circle"></i></p>
                                    @endif
                                    <p style="font-size: 1.125rem;">Step 4</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('advisor.student.short.details.update', $getDetails->id )}}" method="POST">
                                    @csrf
                                    @include('flash-message')
                                    <input type="hidden" name="student_id" id="" value="{{$getDetails->visitor_log_id}}">
                                    <input type="hidden" name="step" id="" value="{{$step}}">
                                    <input type="hidden" name="pagination_page" value="{{$pagination_page}}">
                                    @if ($step == 1)
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
                                        <!-- know about us -->
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
                                    @elseif ($step == 2)
                                        <!-- courses need-->
                                        <div class="form-group mt-3">
                                            <label for="full-name">Which Course you need?<span class="text-danger fw-bold">*</span></label><br>
                                            <input type="hidden" id="specific_course" value="{{$getDetails->specific_course}}">
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_ielts" value="course_ielts">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">IELTS</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_basic_english" value="course_basic_english">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Basic English</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_english_graduate" value="course_english_graduate">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">English Graduate</p>
                                            </div>
                                            <div class="d-flex justify-content-start mt-3">
                                                <input type="radio" name="type_course" id="course_kids" value="course_kids">
                                                <p style="font-size: 1rem; margin:0 0 0 0.625rem;">Kids</p>
                                            </div>
                                            {{-- <input name="full_name" type="text" placeholder="Full Name" id="full_name" value="{{$getDetails->studentInfo->full_name == NULL ? 'N/A': $getDetails->studentInfo->full_name}}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;"> --}}
                                        </div>
                                        <!-- purpose of ielts-->
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
                                        <!-- expected score -->
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
                                    @endif
                                    <!-- button -->
                                    <div class="d-flex justify-content-center mt-4">
                                        @if ($step == 1)
                                        <a href="{{ route('advisor.home', ['page' => request('page', $pagination_page)]) }}"
                                            style="text-decoration: none; color:#A1A1A1; border:1px solid #B6B6B6; padding:8px 12px; font-size:1rem; border-radius:4px;">
                                            <i class="fa-solid fa-arrow-left-long"></i> Back Home
                                         </a>
                                        @else
                                        <a href="{{route('student.Details', ['student_id'=>$getDetails->visitor_log_id, 'step'=>$step-1, 'pagination_page'=>$pagination_page])}}" style="text-decoration: none; color:#A1A1A1; border:1px solid #B6B6B6; padding:8px 12px; font-size:1rem; border-radius:4px;"><i class="fa-solid fa-arrow-left-long"></i> Previous</a>
                                        @endif
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
        }else if(el == 'course_basic_english'){
            document.getElementById("course_basic_english").checked = true;
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
</script>
@endsection
