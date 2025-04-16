
                
                <section class="aboard_inquire_section">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="int-abroad-country card-background px-3 pt-3 pb-5">
                            <p class="card-titles">
                                <i class="fa-solid fa-globe"></i>
                                Interested Country
                            </p>
                            <div class="intended-countries pt-1">
                                @if ($student_info->expected_country == NULL)
                                    <div class="country-name mx-2">
                                        <span class="me-2">Not Selected</span>
                                    </div>
                                @else
                                    @foreach (json_decode($student_info->expected_country) as $country)
                                        <div class="country-name mx-2">
                                            <span class="me-2">{{$country}}</span>
                                            <span><i class="fa-solid fa-plane"></i></span>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="int-abroad-country card-background px-3 pt-3 pb-5">
                            <p class="card-titles">
                                <i class="fa-solid fa-building-columns"></i> 
                                Intended University
                            </p>
                            <div class="intended-countries pt-1">
                                @if ($student_info->school_goes == null)
                                    <div class="country-name mx-2">
                                        <span class="me-2">Not Selected</span>
                                    </div>
                                @else
                                    @foreach (json_decode($student_info->school_goes) as $school)
                                        <div class="country-name mx-2">
                                            <span class="me-2"><i class="fa-solid fa-user-graduate"></i></span>
                                            <span class="me-2">{{$school}}</span>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card-background p-4 result-card">
                                <h5>Print Result Card</h5>
                                <div class="d-flex justify-content-between">
                                    {{-- <a href="{{route('student.result.card')}}">Print</a> --}}
                                    {{-- <a href="{{route('student.email', ['student_id'=>$studentId])}}">Send Mail</a> --}}
                                    <a href="{{route('student.result.result.page', $studentId)}}">Print Result</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>