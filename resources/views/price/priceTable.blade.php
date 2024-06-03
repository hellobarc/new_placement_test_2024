@extends('layouts.app')

@section('content')
<section style="background: #F8F8F8;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 px-sm-2 px-0" style="background: #212529">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="{{route('advisor.home')}}" class="d-flex align-items-center pb-3 mt-3 mb-md-0 me-md-auto text-center text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-center fs-4"><i class="fa-solid fa-house"></i> Dashboard</span>
                        
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="{{route('visitor.follow-up.list')}}" class="nav-link align-middle px-0 text-white fs-6">
                                <i class="fa-regular fa-calendar-days"></i> <span class="ms-1 d-none d-sm-inline">Follow Up List</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">{{auth()->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <button onclick="openFullscreen();">Click Full Screen</button> --}}
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <section class="section-result-overview">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="candidate-info card-background">
                                <p class="assessment-title">Assessment Results</p>
                                <p class="name">Hello, {{$student_info->studentInfo->full_name}} </p>
                                <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddo eiusmod tempor </p>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="result-overall-container">
                                <div class="result-overall">
                                    <div class="div-1">
                                        <p class="p-1">Assessment Level</p>
                                        <div class="overall-score">
                                            <p>Overall Score: 
                                                @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                                    2.0 - 2.5
                                                @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                                    3.0 - 3.5
                                                @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                                    4.0 - 4.5
                                                @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                                    5.0 - 6.5
                                                @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                                    7
                                                @else
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <p class="p-1">{{Helper::overall_rubricks($all_module_marks)}}</p>
                                    <p class="p-2">
                                        @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                            Elementory Level
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                            Foundation Level
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                            Intermediate Level
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                            Upper Intermediate Level
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                            Advance 
                                        @else
                                        @endif   
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="progress-module-section">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="result-overview-subsection">
                                <p>Results Overview</p>
                                <div class="d-flex justify-content-between">
                                    <div class="modules">
                                        <div>
                                            <img src="{{asset('frontend/images/others/books.png')}}" alt="" class="modules-img">
                                            <span class="modules-span">Reading</span>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <progress class="progress-bar-reading" id="file" value="{{number_format(($sum_reading_module*100)/15)}}" max="100"></progress>
                                            <span style="margin: 9px 0 0 6px;">{{number_format(($sum_reading_module*100)/15)}}%</span>
                                        </div>
                                    </div>
                                    <div class="modules">
                                        <div>
                                            <img src="{{asset('frontend/images/others/grammer.png')}}" alt="" class="modules-img">
                                            <span class="modules-span">Grammar</span>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <progress class="progress-bar-grammar" id="file" value="{{number_format(($sum_grammar_module*100)/15)}}" max="100"></progress>
                                            <span style="margin: 9px 0 0 6px;">{{number_format(($sum_grammar_module*100)/15)}}%</span>
                                        </div>
                                    </div>
                                    <div class="modules">
                                        <div>
                                            <img src="{{asset('frontend/images/others/vocabulary.png')}}" alt="" class="modules-img">
                                            <span class="modules-span">Vocabulary</span>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <progress class="progress-bar-vocabulary" id="file" value="{{number_format(($sum_vocabulary_module*100)/15)}}" max="100"> </progress>
                                            <span style="margin: 9px 0 0 6px;">{{number_format(($sum_vocabulary_module*100)/15)}}%</span>
                                        </div>
                                    </div>
                                    <div class="modules">
                                        <div>
                                            <img src="{{asset('frontend/images/others/listening.png')}}" alt="" class="modules-img">
                                            <span class="modules-span">Listening</span>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <progress class="progress-bar-listening" id="file" value="{{number_format(($sum_listening_module*100)/15)}}" max="100"></progress>
                                            <span style="margin: 9px 0 0 6px;">{{number_format(($sum_listening_module*100)/15)}}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mark-analysis_correct-answer">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="mark-analysis card-background">
                                <p class="card-titles">Mark Analytics</p>
                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <span style="color: #FFA84A;margin-top: 4px; margin-right: 7px;"><i class="fa-solid fa-circle"></i></span>
                                        <span class="text-secondary fw-bold">Reading</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="color: #9B88ED;margin-top: 4px; margin-right: 7px;"><i class="fa-solid fa-circle"></i></span>
                                        <span class="text-secondary fw-bold">Listening</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span style="color: #FB67CA;margin-top: 4px; margin-right: 7px;"><i class="fa-solid fa-circle"></i></span>
                                        <span class="text-secondary fw-bold">Grammar</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="color: #04BFDA;margin-top: 4px; margin-right: 7px;"><i class="fa-solid fa-circle"></i></span>
                                        <span class="text-secondary fw-bold">Vocabulary</span>
                                    </div>
                                </div> --}}
                                <div class="chart-score">
                                    <div class="mark-analytics-pie-chart-container">
                                        <canvas id="answersQuestion"></canvas>
                                    </div>
                                    {{-- <div class="d-flex align-items-center">
                                        <div class="chart-score-band">
                                            <p>Band Score : 6.5</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="correct-answer p-4 card-background">
                                <p class="card-titles">Correct Answer</p>
                                <table class="table table-striped">
                                    <tr>
                                        <th>Module</th>
                                        <th>Right</th>
                                        <th style="color:#fd1818;">Wrong</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">
                                            <img src="{{asset('frontend/images/others/books.png')}}" alt="" class="image-correct-answer-inside-table">
                                            Reading
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">{{$sum_reading_module}}</span>
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">{{15-$sum_reading_module}}</span>
                                        </td>
                                        <td>
                                            <a href="" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">
                                            <img src="{{asset('frontend/images/others/grammer.png')}}" alt="" class="image-correct-answer-inside-table">
                                            Grammar
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">{{$sum_grammar_module}}</span>
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">{{15-$sum_grammar_module}}</span>
                                        </td>
                                        <td>
                                            <a href="" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">
                                            <img src="{{asset('frontend/images/others/vocabulary.png')}}" alt="" class="image-correct-answer-inside-table">
                                            Vocabulary
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">{{$sum_vocabulary_module}}</span>
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">{{15-$sum_vocabulary_module}}</span>
                                        </td>
                                        <td>
                                            <a href="" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">
                                            <img src="{{asset('frontend/images/others/listening.png')}}" alt="" class="image-correct-answer-inside-table">
                                            Listening
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">{{$sum_listening_module}}</span>
                                        </td>
                                        <td>
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">{{15-$sum_listening_module}}</span>
                                        </td>
                                        <td>
                                            <a href="" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="aboard_inquire_section">
                    <div class="row my-4">
                        <div class="col-xxl-6 col-xl-6 lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="int-abroad-country card-background p-3">
                                <p class="card-titles">
                                    <i class="fa-solid fa-globe"></i>
                                    Interested Aboard Country
                                </p>
                                <div class="intended-countries">
                                    <div class="country-name mx-2">
                                        <span class="me-3">USA</span><span><i
                                                class="fa-solid fa-plane"></i></span>
                                    </div>
                                    <div class="country-name mx-2">
                                        <span class="me-3">UK</span><span><i
                                                class="fa-solid fa-plane"></i></span>
                                    </div>
                                    <div class="country-name mx-2">
                                        <span class="me-3">AUS</span><span><i
                                                class="fa-solid fa-plane"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="int-abroad-country card-background p-3">
                                <p class="card-titles">
                                    <i class="fa-solid fa-building-columns"></i> 
                                    Intended University
                                </p>
                                <div class="intended-countries">
                                    <div class="country-name mx-2">
                                        <span class="me-3"><i class="fa-solid fa-user-graduate"></i></span><span
                                            class="me-3">Top</span>
                                    </div>
                                    <div class="country-name mx-2">
                                        <span class="me-3"><i class="fa-solid fa-user-graduate"></i></span>
                                        <span class="me-3">Middle</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-xxl-6 col-xl-6 lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card-background p-3">
                                <p class="card-titles"><img src="{{asset('frontend/images/icons/speedometer.png')}}" alt=""
                                    style="width: 2.125rem;height: 2.125rem;"> Result Explation</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="outline-for-score-small-sections" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">Reading</a>
                                        <a class="outline-for-score-small-sections" data-bs-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Writing</a>
                                        <a class="outline-for-score-small-sections" data-bs-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Listening</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="int-abroad-country card-background p-3">
                                <p class="card-titles"><img src="{{asset('frontend/images/icons/speedometer.png')}}" alt=""
                                        style="width: 2.125rem;height: 2.125rem;"> Desired and Target Score</p>
                                <div class="d-flex justify-content-between">
                                    <p class="outline-for-score-small-sections">Desired Score: 
                                        @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                            2.0 - 2.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                            3.0 - 3.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                            4.0 - 4.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                            5.0 - 6.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                            7
                                        @else
                                        @endif
                                    </p>
                                    <p class="outline-for-score-small-sections">Target Score: {{$student_info->expected_score}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="collapse" id="collapseOne">
                                <div class="card-background p-4">
                                   <table class="table table-bordered table-striped mt-1 mb-1">
                                        <thead>
                                            <th>Module</th>
                                            <th>Remarks</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Readiing</td>
                                                <td>
                                                    @if (Helper::module_rubricks($sum_reading_module) == 'A-')
                                                        <span>Cannot understand very simple sentence.</span>
                                                    @elseif (Helper::module_rubricks($sum_reading_module) == 'A1')
                                                        <span>Cannot understand very simple sentence.</span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'A2')
                                                        <span>Face problem in reading and identifying the main points short, clear, simple texts, messages, notices and announcements.</span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'B1')
                                                        <span>Tough to understand newspaper articles.</span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'B2')
                                                        <span>Difficulties to read articles and reports with proper understanding.</span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'C1')
                                                        <span>Understanding well-structured text, expressing points of view at some length. </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="collapse" id="collapseTwo">
                                <div class="card-background p-4">
                                    <table class="table table-bordered table-striped mt-1 mb-0">
                                        <thead>
                                            <th>Module</th>
                                            <th>Remarks</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Writing</td>
                                                <td>
                                                    @if (Helper::module_rubricks($sum_grammar_module) == 'A-')
                                                        <span>Cannot make simple sentence with correct grammar.</span>
                                                    @elseif (Helper::module_rubricks($sum_grammar_module) == 'A1')
                                                        <span>Cannot make simple sentence with correct grammar.</span>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'A2')
                                                        <span>Unable to write very simple personal letter with accurate structure.</span>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'B1')
                                                        <span>Unable to write short structured paragraphs.</span>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'B2')
                                                        <span>Face problem to write clear, detailed paragraph, letter, essay or report on a wide range of subject.</span>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'C1')
                                                        <span>Facing to write my thoughts efforlessly and spontanceously without any hesitation.</span>
                                                    @endif
                                                    <br>
                                                    @if (Helper::module_rubricks($sum_vocabulary_module) == 'A-')
                                                        <span>Cannot understand basice names and words.</span>
                                                    @elseif (Helper::module_rubricks($sum_vocabulary_module) == 'A1')
                                                        <span>Cannot understand basice names and words.</span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'A2')
                                                        <span>Find it difficult to handle very short social exchanges.</span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'B1')
                                                        <span>Can not produce simple connected text on topics.</span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'B2')
                                                        <span>Unable to interact with fluency and spontaneity that makes regular interaction with native speaker.</span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'C1')
                                                        <span>Express yourself fluently.</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="collapse" id="collapseThree">
                                <div class="card-background p-4">
                                    <table class="table table-bordered table-striped mt-1 mb-0">
                                        <thead>
                                            <th>Module</th>
                                            <th>Remarks</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Listening</td>
                                                <td>
                                                    @if (Helper::module_rubricks($sum_listening_module) == 'A-')
                                                        <span>Don't have the basic knowledge of english and cannot introduce myself.</span>
                                                    @elseif (Helper::module_rubricks($sum_listening_module) == 'A1')
                                                        <span>Don't have the basic knowledge of english and cannot introduce myself.</span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'A2')
                                                        <span>Can not continue or interact in any conversation.</span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'B1')
                                                        <span>Unable to understand small talks and conversations in native language.</span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'B2')
                                                        <span>Face problem in understanding long speeches and lectures.</span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'C1')
                                                        <span>Unable to conversation with a native speaker without any mistakes.</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-my-4">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sugg-target-score p-4 card-background">
                                <p class="card-titles">Suggested & Targeted Band Score</p>
                                <div class="band-score-tiles-list">
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_6" >
                                        <p>Band Score: 6</p>
                                    </button>
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_more_than_6" >
                                        <p>Band Score: 6.5</p>
                                    </button>
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_7" onclick="expected_band_score_func(7)">
                                        <p>Band Score: 7</p>
                                    </button>
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_more_than_7" >
                                        <p>Band Score: 7.5</p>
                                    </button>
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_8" >
                                        <p>Band Score: 8</p>
                                    </button>
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_more_than_8" >
                                        <p>Band Score: 8.5</p>
                                    </button>
                                    <button class="outline-for-score-small-sections" id="targeted_band_score_9" >
                                        <p>Band Score: 9</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="achieved-course-section" id="course-related-info">
                    <div class="p-5 card-background">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 d-flex justify-content-start align-items-end">
                                        <div class="your-score mb-5">
                                            <span class="icon"><i class="fa-solid fa-triangle-exclamation me-2"></i></span>
                                            Your Score 
                                            @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                                2.0 - 2.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                                3.0 - 3.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                                4.0 - 4.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                                5.0 - 6.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                                7
                                            @else
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 position-relative">
                                        {{-- <div class="improved-score w-50"><i class="fa-solid fa-medal"></i> Achieve 7</div>
                                        <img src="{{asset('frontend/images/icons/arrow.svg')}}" alt="" class="arrow">  --}}
                                        <div class="d-flex justify-content-between">
                                            <div class="text-center a1-course-duration" id="a1_course_duration">
                                                <div class="a1-course-timelength">
                                                    <div class="a1-inner-1"></div>
                                                    <div class="a1-inner-2"></div>
                                                    <div class="a1-inner-3"></div>
                                                    <div class="a1-inner-4"></div>
                                                    <div class="a1-inner-5">
                                                        <p class="text-1 mb-1">1+</p>
                                                        <p class="text-1 mb-1">Months</p>
                                                        <p class="text-2 mb-1">Elementory</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <input type="checkbox" name="" id="a1_course_selected_checkbox" value="a1CourseBox">
                                                    <label for="" class="fw-bold fs-5">A1</label>
                                                </div>
                                            </div>
                                            <div class="text-center a2-course-duration" id="a2_course_duration">
                                                <div class="a2-course-timelength">
                                                    <div class="a2-inner-1"></div>
                                                    <div class="a2-inner-2"></div>
                                                    <div class="a2-inner-3"></div>
                                                    <div class="a2-inner-4 pt-4">
                                                        <p class="text-1 mb-1">1+</p>
                                                        <p class="text-1 mb-1">Months</p>
                                                        <p class="text-2 mb-1">Basic <br>English</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <input type="checkbox" name="" id="a2_course_selected_checkbox" value="a2CourseBox">
                                                    <label for="" class="fw-bold fs-5">A2</label>
                                                </div>
                                            </div>
                                            <div class="text-center b1-course-duration" id="b1_course_duration">
                                                <div class="b1-course-timelength">
                                                    <div class="b1-inner-1"></div>
                                                    <div class="b1-inner-2"></div>
                                                    <div class="b1-inner-3 pt-4">
                                                        <p class="text-1 mb-1">1+</p>
                                                        <p class="text-1 mb-1">Months</p>
                                                        <p class="text-2 mb-1">Pre - <br> IELTS</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <input type="checkbox" name="" id="b1_course_selected_checkbox" value="b1CourseBox">
                                                    <label for="" class="fw-bold fs-5">B1</label>
                                                </div>
                                            </div>
                                            <div class="text-center b2-course-duration" id="b2_course_duration">
                                                <div class="b2-course-timelength">
                                                    <div class="b2-inner-1"></div>
                                                    <div class="b2-inner-2 pt-4">
                                                        <p class="text-1 mb-1">1+</p>
                                                        <p class="text-1 mb-1">Months</p>
                                                        <p class="text-2 mb-1">Main <br>IELTS</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <input type="checkbox" name="" id="b2_course_selected_checkbox" value="b2ourseBox">
                                                    <label for="" class="fw-bold fs-5">B2</label>
                                                </div>
                                            </div>
                                            <div class="text-center c1-course-duration" id="c1_course_duration">
                                                <div class="c1-course-timelength">
                                                    <div class="c1-inner-1 pt-4">
                                                        <p class="text-1 mb-1">1+</p>
                                                        <p class="text-1 mb-1">Months</p>
                                                        <p class="text-2 mb-1">Advance <br>IELTS</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <input type="checkbox" name="" id="c1_course_selected_checkbox" value="11CourseBox">
                                                    <label for="" class="fw-bold fs-5">C1</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex align-items-center">
                                        <div class="row">
                                            <div id="a1-course-description">
                                                <div class="d-flex flex-row justify-content-between my-3">
                                                    <div class="d-flex flex-row">
                                                        <div class="mt-1 ms-4 me-2 fs-5" style="color: #353a47;"><i class="fa-solid fa-circle"></i></div>
                                                        <p class="course-name mb-0 me-2" style="font-weight: 700;">A1:</p>
                                                        <p class="course-name mb-0 " style="font-weight: 400;">Course Content
                                                        </p>
                                                    </div>
                                                    <div class="details-border"> 
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentA1">Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="a2-course-description">
                                                <div class="d-flex flex-row justify-content-between my-3">
                                                    <div class="d-flex flex-row">
                                                        <div class="mt-1 ms-4 me-2 fs-5" style="color: #355070;"><i class="fa-solid fa-circle"></i></div>
                                                        <p class="course-name mb-0 me-2" style="font-weight: 700;">A2:</p>
                                                        <p class="course-name mb-0 " style="font-weight: 400;">Course Content
                                                        </p>
                                                    </div>
                                                    <div class="details-border"> 
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentA2">Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="b1-course-description">
                                                <div class="d-flex flex-row justify-content-between my-3">
                                                    <div class="d-flex flex-row">
                                                        <div class="mt-1 ms-4 me-2 fs-5" style="color: #848586;"><i class="fa-solid fa-circle"></i></div>
                                                        <p class="course-name mb-0 me-2" style="font-weight: 700;">B1:</p>
                                                        <p class="course-name mb-0 " style="font-weight: 400;">Course Content
                                                        </p>
                                                    </div>
                                                    <div class="details-border"> 
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentB1">Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="b2-course-description">
                                                <div class="d-flex flex-row justify-content-between my-3">
                                                    <div class="d-flex flex-row">
                                                        <div class="mt-1 ms-4 me-2 fs-5" style="color: #db5375;"><i class="fa-solid fa-circle"></i></div>
                                                        <p class="course-name mb-0 me-2" style="font-weight: 700;">B2:</p>
                                                        <p class="course-name mb-0 " style="font-weight: 400;">Course Content
                                                        </p>
                                                    </div>
                                                    <div class="details-border"> 
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentB2">Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="c1-course-description">
                                                <div class="d-flex flex-row justify-content-between my-3">
                                                    <div class="d-flex flex-row">
                                                        <div class="mt-1 ms-4 me-2 fs-5" style="color: #729ea1;"><i class="fa-solid fa-circle"></i></div>
                                                        <p class="course-name mb-0 me-2" style="font-weight: 700;">C1:</p>
                                                        <p class="course-name mb-0 " style="font-weight: 400;">Course Content
                                                        </p>
                                                    </div>
                                                    <div class="details-border"> 
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentC1">Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course Content Modal -->
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- A1 Course Content Modal -->
                                <div class="modal fade" id="courseContentA1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentA1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="courseContentA1Label">A1 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- A2 Course Content Modal -->
                                <div class="modal fade" id="courseContentA2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentA2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="courseContentA2Label">A2 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- B1 Course Content Modal -->
                                <div class="modal fade" id="courseContentB1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentB1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="courseContentB1Label">B1 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- B2 Course Content Modal -->
                                <div class="modal fade" id="courseContentB2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentB2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="courseContentA2Label">B2 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- C1 Course Content Modal -->
                                <div class="modal fade" id="courseContentC1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentC1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="courseContentC1Label">C1 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <p class="total-time">Total : <span id="course_completed_time"></span> Months</p>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <button onclick="getPriceButton()">Get Price</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="package-table" id="course_price_section">
                    <div class="row my-4">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="p-5 card-background">
                                <div class="mx-5 px-5">
                                    <table class="table">
                                        <tr>
                                            <th></th>
                                            <th style="background-color: #067DC8;" class="td-total">Regular <p>Fees</p></th>
                                            <th style="background-color: #9B88ED;" class="td-total">Standard <p>Package</p></th>
                                            <th style="background-color: #FFA84A;" class="td-total">Privileged <p>Package</p></th>
                                        </tr>
                                        <tr id="a1_course_price_row">
                                            <td style="background-color: #353A47;" class="td-total text-light">A1</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">9,999/-</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">9,999/-</td>
                                            <td rowspan="3">
                                                <p class="td-price">1,799/-</p>
                                                <p style="color: #AD002A" class="td-price">Only Visit Day offer</p>
                                            </td>
                                        </tr>
                                        <tr id="a2_course_price_row">
                                            <td style="background-color: #355070;" class="td-total text-light">A2</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">9,999/-</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">9,999/-</td>
                                            {{-- <td rowspan="3">
                                                <p class="td-price">1,799/-</p>
                                                <p style="color: #AD002A" class="td-price">Only Visit Day offer</p>
                                            </td> --}}
                                        </tr>
                                        <tr id="b1_course_price_row">
                                            <td style="background-color: #848586;" class="td-total text-light">B1</td>
                                            <td style="background-color: #E3E3E3;" class="td-price">11,999/-</td>
                                            <td style="background-color: #E3E3E3;" class="td-price">4,799/-</td>
                                        </tr>
                                        <tr id="b2_course_price_row">
                                            <td style="background-color: #db5375;" class="td-total text-light">B2</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">11,999/-</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">11,999/-</td>
                                        </tr>
                                        <tr id="c1_course_price_row">
                                            <td style="background-color: #729ea1;" class="td-total text-light">C1</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">11,999/-</td>
                                            <td style="background-color: #DBEBF5;" class="td-price">11,999/-</td>
                                        </tr>
                                        <tr id="total_course_price_row">
                                            <td style="background: #7A34B0;" class="td-total">Total</td>
                                            <td style="background-color: #E3E3E3;" class="td-price">33,997/-</td>
                                            <td style="background-color: #E3E3E3;" class="td-price">26,797/-</td>
                                            <td style="background: #7A34B0;" class="td-total">24,998/-</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>







                
                <div id="myvideo">
                    <div class="row">
                        <div class="col-md-12">

                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                    <div class="carousel-item active">
                                        <div class="p-4">
                                            @include('advisor.student.exam.result.overall-result')
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            @include('advisor.student.exam.result.question-answered')
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            @include('advisor.student.exam.result.result-explanation')
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            @include('advisor.student.exam.result.suggested-course')
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            @include('advisor.student.exam.result.course-level')
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            @include('advisor.student.exam.result.course-content')
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                        <!-- price -->
                                            <div class="row">
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <h2 class="fw-bolder mt-3">Price List:</h2>
                                                    <div class="text-center">
                                                        <ul>
                                                            @foreach ($courseBundle as $rows)
                                                                <li class="d-inline px-3 fs-5 fw-bold" id="course_bundle_btn_{{$rows->id}}" onclick="courseBundleBtn({{$rows->id}})" style="cursor: pointer;">{{$rows->course_bundle}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @include('price.priceChart')
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="position: absolute;
                                top: 91%;
                                left: 292%;"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="position: absolute;
                                top: 91%;
                                /* color: #000; */
                                right: 278%;"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
        const individula_module_marks = document.getElementById('moduleMarkChart');
        let  reading = "{{$sum_reading_module}}"
        let  grammar = "{{$sum_grammar_module}}"
        let  vocabulary = "{{$sum_vocabulary_module}}"
        let  listening = "{{$sum_listening_module}}"
        new Chart(individula_module_marks, {
          type: 'bar',
          data: {
            labels: ['Reading', 'Grammar', 'Vocabulary', 'Listening'],
            datasets: [{
              label: 'Marks',
              data: [reading, grammar, vocabulary, listening],
              backgroundColor: [
                    '#131200',
                    '#FF57BB',
                    '#184164',
                    '#7B7554',
                ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            },
            plugins: {
                tooltip: {
                    bodyColor: 'white'
                },
                legend: {
                    labels: {
                        color: 'black',
                    },
                    position: 'right'
                }
            }
          }
        });
    </script>
    <script>
        let correct = "{{$correct_answer}}"
        let in_correct = "{{$in_correct_answer}}"
        let unanswered = "{{$unAnswer}}"
        const data = {
                labels: [
                    'Correct',
                    'InCorrect',
                    'Unanswered'
                ],
                datasets: [{
                    label: 'Marks',
                    data: [correct, in_correct, unanswered],
                    backgroundColor: [
                    '#EC6B56',
                    'rgb(255, 159, 64)',
                    '#74BBFB',
                    ],
                    borderColor: [
                    '#EC6B56',
                    'rgb(255, 159, 64)',
                    '#74BBFB',
                    ],
                    backgroundColor: [
                    '#EC6B56',
                    'rgb(255, 159, 64)',
                    '#74BBFB',
                    ],
                    hoverOffset: 4
                }]
            };
        const config = {
        type: 'pie',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                
            },
            plugins: {
                tooltip: {
                    bodyColor: 'white'
                },
                legend: {
                    labels: {
                        color: 'black',
                    },
                    position: 'top'
                },
                
            }
        }
        };
        const myChart = new Chart(
        document.getElementById('answersQuestion'),
        config
        );
    </script>
    <script>
        let reading_value = "{{$sum_reading_module}}"
        let grammar_value = "{{$sum_grammar_module}}"
        let vocabulary_value = "{{$sum_vocabulary_module}}"
        let listening_value = "{{$sum_listening_module}}"
        var xValues = ["Reading", "Grammar", "Vocabulary", "Listening"];
        var yValues = [reading_value, grammar_value, vocabulary_value, listening_value];
        var barColors = [
            "#FFA84A",
            "#9B88ED",
            "#FB67CA",
            "#04BFDA",
        ];
    
        new Chart("mark-analytics-pie-chart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: false,
                },
                plugins: {
                    legend: {
                        display: false // This hides the legend
                    },
                    tooltip: {
                        enabled: false // This hides the tooltips
                    }
                }
            }
        });
    </script>
    
@endsection
<script>
    var expected_band_score = "{{$student_info->expected_score}}";
    var desired_level = "{{Helper::overall_rubricks($all_module_marks)}}";
    
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $(document).on('click','.delete',function(){
        let id = $(this).attr('data-id');
        $('#delete-id').val(id);
    });

    $(document).ready(function(){
      $('#A1-A2').click(function(){
        $('.A1-A2').hide();
      });  
    })
</script>

