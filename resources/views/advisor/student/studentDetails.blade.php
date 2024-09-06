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
                                    <a href="#" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#589E67;"><i class="fa-solid fa-circle-check"></i></a>
                                    <p style="font-size: 1.125rem;">Step 1</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    <a href="#" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9"><i class="fa-regular fa-circle"></i></a>
                                    <p style="font-size: 1.125rem;">Step 2</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    <a href="#" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9"><i class="fa-regular fa-circle"></i></a>
                                    <p style="font-size: 1.125rem;">Step 3</p>
                                </div>
                                <div class="student-info-step"></div>
                                <div class="text-center">
                                    <a href="#" style="font-size: 1.5rem; cursor: pointer; text-decoration:none; color:#d9d9d9"><i class="fa-regular fa-circle"></i></a>
                                    <p style="font-size: 1.125rem;">Step 4</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('advisor.student.Details.update', $getDetails->id )}}" method="POST">
                                    @csrf
                                    @include('flash-message')
                                    <input type="hidden" name="student_id" id="" value="{{$getDetails->visitor_log_id}}">
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

