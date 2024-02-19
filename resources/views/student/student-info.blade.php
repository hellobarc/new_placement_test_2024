@extends('layouts.app')
  
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div style="background: #fbc8be; padding:10px 20px; border-radius:5px">
                        <h1 class="fw-bold">Visitor Infromation Form</h1>
                        <p class="mb-0 fs-5">Please complete the form. When you submit the form the assessment time will be started to complete the process.</p>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body p-4">
                    @include('flash-message')
                    <form action="{{ route('store.VisitorInfo')}} " method="POST">
                       @csrf
                        <input type="hidden" name="assessment_group_id" value="1">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                <div class="form-group">
                                    <label for="full-name">Your Adviser will select this</label>
                                    <select class="form-control" name="assign_advisor" required>
                                        <option value="">Select Adviser</option>
                                            @foreach ($data as $item)
                                                <option value="{{ $item->id}} ">{{ $item->name}} </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="full-name">Full Name</label>
                                    <input name="full_name" type="text" class="form-control" placeholder="Full Name" id="full_name" required>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mobile-number">Mobile Number</label>
                                    <input name="contact_number" id="contact_number" type="tel" class="form-control" placeholder="Mobile" pattern="[0-9]{11}||[0-9]{3}-[0-9]{8}||[0-9]{4}-[0-9]{7}" required>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="occupation">Profession </label>
                                    <!-- <input name="occupation" id="occupation" type="text" class="form-control" placeholder="Occupation" required>-->
                                        <select class="form-control dropdown" id="occupation" name="occupation" required>
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
                                    <label for="address">Address</label>
                                    <input name="address" id="address" type="text" class="form-control" placeholder="Address" required>
                                </div>
                            </div>
                            
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Location</label>
                                    <select class="form-control dropdown" id="location" name="location" required>
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
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="organization">Current Organization/Institution  Name (optional)</label>
                                    <input name="organization" id="organization" type="text" class="form-control" placeholder="Organization/Institution" value="na" required>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input name="date_of_birth" id="date_of_birth" type="text" class="form-control" placeholder="Date of Birth" required>
                                </div>

                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Educational Qualification</label>
                                    <select class="form-control dropdown" id="education" name="education" required>
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
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">How to know about us</label>
                                    <select class="form-control dropdown" id="howtoknow" name="how_you_know" required>
                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                        <option value="Facebook">  Facebook</option>
                                        <option value="Website">  Website </option>
                                        <option value="Billboard">  Billboard </option>
                                        <option value="Google Map">  Google Map </option>
                                        <option value="Student Reference ">  Student Reference </option>
                                        <option value="Youtube">  Youtube </option>
                                        <option value="Others"> Others </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">Expected Country to go</label>
                                    <select class="form-control dropdown" id="expected_country" name="expected_country" required>
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
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="expected_score">Expected IELTS Score</label>
                                    <input name="expected_score" id="expected_score" type="text" class="form-control" placeholder="example. 7" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email"> Purpose of IELTS</label>
                                    <select class="form-control dropdown" id="purpose_of_ielts" name="purpose_of_ielts" required>
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="Academic">  Academic </option>
                                            <option value="General">  General </option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email"> Purpose of Visiting BARC</label>
                                    <select class="form-control dropdown" id="purpose_of_visit" name="purpose_of_visit" required>
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="English Foundation">  English Foundation </option>
                                            <option value="Spoken">  Spoken Course </option>
                                            <option value="Mock Test">  Mock Test </option>
                                            <option value="IELTS Registration">  IELTS Registration </option>
                                            <option value="IELTS Courses">  IELTS Courses </option>
                                            <option value="Other Info">  Other Info </option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="address">Branch Recommendation</label>
                                    <select class="form-control dropdown" id="branch_recomendation" name="branch_recomendation" required>
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="House Building ">  House Building </option>
                                            <option value="Gazipur">  Gazipur </option>
                                            <option value="Boshundhara">  Boshundhara </option>
                                            <option value="Dhanmondi">  Dhanmondi </option>
                                            <option value="Malibag">  Malibag </option>
                                            <option value="Outside Dhaka">  Outside Dhaka </option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="mx-auto mt-10 text-center col">
                                <input  type="submit" class="text-center btn text-white fw-bold" value="Submit" style="background:rgba(121,38,225,1)">
                            </div>
                        </div> 
                    </form>
                </div>
                
                {{-- <div class="card-body p-4">
                    <form action="" method="POST">
                        <table class="table table-bordered ">
                            <tr>
                                <div class="form-group col-md-6 mx-auto">
                                    <label for="full-name">Your Adviser will select this</label>
                                    <select class="form-control" name="adviser_id" required>
                                        <option value="">Select Adviser</option>
                                            @foreach ($data as $item)
                                                <option value="">{{ $item->name}} </option>
                                            @endforeach
                                    </select>
                                </div>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="mobile-number">Mobile Number</label>
                                        <input name="contact_number" id="contact_number" type="tel" class="form-control" placeholder="Mobile" pattern="[0-9]{11}||[0-9]{3}-[0-9]{8}||[0-9]{4}-[0-9]{7}" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="full-name">Full Name</label>
                                        <input name="full_name" type="text" class="form-control" placeholder="Full Name" id="full_name" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="address">Location</label>
                                        <select class="form-control dropdown" id="location" name="location" required>
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
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input name="address" id="address" type="text" class="form-control" placeholder="Address" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="occupation">Profession </label>
                                        <!-- <input name="occupation" id="occupation" type="text" class="form-control" placeholder="Occupation" required>-->
                                            <select class="form-control dropdown" id="occupation" name="occupation" required>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="organization">Current Organization/Institution  Name (optional)</label>
                                        <input name="organization" id="organization" type="text" class="form-control" placeholder="Organization/Institution" value="na" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input name="date_of_birth" id="date_of_birth" type="text" class="form-control" placeholder="Date of Birth" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="address">Educational Qualification</label>
                                        <select class="form-control dropdown" id="education" name="education" required>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="email">How to know about us</label>
                                        <select class="form-control dropdown" id="howtoknow" name="howtoknow" required>
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="Facebook">  Facebook</option>
                                            <option value="Website">  Website </option>
                                            <option value="Billboard">  Billboard </option>
                                            <option value="Google Map">  Google Map </option>
                                            <option value="Student Reference ">  Student Reference </option>
                                            <option value="Youtube">  Youtube </option>
                                            <option value="Others"> Others </option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="email">Expected Country to go</label>
                                        <select class="form-control" id="expected_country" name="expected_country" required>
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="USA">  USA </option>
                                            <option value="UK">  UK </option>
                                            <option value="Canada">  Canada </option>
                                            <option value="Australia">  Australia </option>
                                            <option value="Europe">  Europe </option>
                                            <option value="Others"> Others </option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="email">Expected Country to go</label>
                                        <select class="form-control dropdown" id="expected_country" name="expected_country" required>
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                            <option value="USA">  USA </option>
                                            <option value="UK">  UK </option>
                                            <option value="Canada">  Canada </option>
                                            <option value="Australia">  Australia </option>
                                            <option value="Europe">  Europe </option>
                                            <option value="Others"> Others </option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="expected_score">Expected IELTS Score</label>
                                        <input name="expected_score" id="expected_score" type="text" class="form-control" placeholder="example. 7" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="email"> Purpose</label>
                                        <select class="form-control dropdown" id="purpose" name="purpose" required>
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Academic">  Academic </option>
                                                <option value="General">  General </option>
                                                <option value="English Foundation">  English Foundation </option>
                                                <option value="Spoken">  Spoken </option>
                                                <option value="Mock Test">  Mock Test </option>
                                                <option value="IELTS Registration">  IELTS Registration </option>
                                            </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="address">Branch Recommendation</label>
                                        <select class="form-control dropdown" id="branch_recomendation" name="branch_recomendation" required>
                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="House Building ">  House Building </option>
                                                <option value="Gazipur">  Gazipur </option>
                                                <option value="Boshundhara">  Boshundhara </option>
                                                <option value="Dhanmondi">  Dhanmondi </option>
                                                <option value="Malibag">  Malibag </option>
                                                <option value="Outside Dhaka">  Outside Dhaka </option>
                                            </select>
                                    </div>
                                </td>
                            </tr>
                                                           
                            
                        </table>

                        <div class="col mx-auto text-center">
                            <input  type="submit" class="text-center btn text-white fw-bold" value="Submit" style="background:rgba(121,38,225,1)">
                        </div> 
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

