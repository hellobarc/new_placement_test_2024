@extends('layouts.app')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="visitor_info_div">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('front.student.list') }}" class="btn mb-4" style="background: #FF8C42;">Declined Students <span id="front_notification_count" class="px-2 py-1 text-white rounded" style="background-color:#035388">{{ $notificationCount}}</span></a>
                                </div>
                                <div style="padding:0 20px; border-radius:5px" class="text-center">
                                    <h1 style="color:#035388; font-weight:600; margin:0;">Visitor Infromation Form</h1>
                                    <p class="font-size:1.125rem;">Please fill out this form with the required information</p>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                        @include('flash-message')
                                    </div>
                                </div>
                                <form action="{{ route('store.VisitorInfo')}} " method="POST">
                                    @csrf
                                    <input type="hidden" name="assessment_group_id" value="1">
                                    <!-- purpose of visit -->
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group mt-3">
                                                <label for="email"> Purpose of Visiting BARC <span class="text-danger fw-bold">*</span></label><br>
                                                <select id="purpose_of_visit" name="purpose_of_visit" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                    <option value="course">Course</option>
                                                    <option value="mock">  Mock Test </option>
                                                    <option value="ielts_registration">  IELTS Registration </option>
                                                    <option value="others">  Others </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- name -->
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="full-name">Full Name <span class="text-danger fw-bold">*</span></label>
                                                <input name="full_name" type="text" placeholder="Full Name" id="full_name" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- phone name -->
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="mobile-number">Mobile Number <span class="text-danger fw-bold">*</span></label>
                                                <input name="contact_number" id="contact_number" type="tel" placeholder="+88" pattern="[0-9]{11}||[0-9]{3}-[0-9]{8}||[0-9]{4}-[0-9]{7}" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="email" id="email" type="email" placeholder="Email" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <!-- know about us -->
                                            <div class="form-group mt-3">
                                                <label for="email"> How to know about us? <span class="text-danger fw-bold">*</span></label><br>
                                                <select id="howtoknow" name="how_you_know" onchange="handleKnow(event)" required style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                    <option value="Facebook"> Facebook</option>
                                                    <option value="Website"> Website </option>
                                                    <option value="Billboard"> Billboard </option>
                                                    <option value="Google-Map"> Google Map </option>
                                                    <option value="student_reference"> Student Reference </option>
                                                    <option value="Youtube"> Youtube </option>
                                                    <option value="Others"> Others </option>
                                                </select>
                                            </div>
                                            <!-- student reference-->
                                            <div id="reference_id" style="display: none;">
                                                <div class="form-group mt-3">
                                                    <label for="refer_stu_name">Reference Student Name<span class="text-danger fw-bold">*</span></label>
                                                    <input name="refer_stu_name" type="text" placeholder="Full Name" id="Refer Phone name" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="refer_phone_number">Refer student phone number<span class="text-danger fw-bold">*</span></label>
                                                    <input name="refer_phone_number" type="text" placeholder="Refer Phone Number" id="Refer Phone Number" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="refer_batch_name">Refer student batch Name<span class="text-danger fw-bold">*</span></label>
                                                    <input name="refer_batch_name" type="text" placeholder="Refer student batch name" id="Refer student batch name" style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- advisor list -->
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="full-name">Your Adviser will select this <span class="text-danger fw-bold">*</span></label>
                                                <select name="assign_advisor" id="assign_advisor" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                                    <option value="">Select Adviser</option>
                                                        @foreach ($data as $item)
                                                            <option value="{{$item->id}}">{{ $item->name}} </option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- branch list -->
                                    <div class="row mt-3">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="full-name">Which Branch are you?  <span class="text-danger fw-bold">*</span></label>
                                                <select name="visit_branch" id="visit_branch" required style="width: 100%;padding: 10px; border: 1px solid #828282;border-radius:4px;">
                                                    <option value="Uttara">Head-Office</option>
                                                    <option value="Mirpur">Mirpur-Office</option>
                                                    <option value="Corporate">Corporate-Office</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- submit button -->
                                    <div class="row mt-5">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <input  type="submit" class="text-center w-100 btn py-2 text-white fw-bold" value="Submit" style="background-color:#32327B; border-radius:4px;">
                                        </div>
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

<script>

(function () {
    console.log('self-function');
    setInterval(notificationNewStudents, 10000);
    })();

    function notificationNewStudents(){
        console.log('self-function');
        $.ajax({
            type: "POST",
            url: '/front/notification-count',
            data: {"data":"check"},
            success: function(data){
                    document.getElementById('front_notification_count').innerHTML = data;
                }
        });
    }
</script>


