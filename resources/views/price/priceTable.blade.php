@extends('layouts.app')

@section('content')
<section style="background: #F8F8F8;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 px-sm-2 px-0" style="background: #072F64">
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
                    {{-- <hr>
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
                    </div> --}}
                </div>
            </div>
            {{-- <button onclick="openFullscreen();">Click Full Screen</button> --}}
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <section class="section-result-overview">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="candidate-info card-background">
                                <p class="assessment-title">Assessment Results</p>
                                <p class="name">Hello, {{$student_info->studentInfo->full_name}}</p>
                                <p style="margin: 5px 0 0 0; font-size: 1rem;">You have completed your 40-minute IELTS assessment test.</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="result-overall-container">
                                <div class="result-overall">
                                    <div class="div-1">
                                        <p class="p-1">Assessment Score: {{$all_module_marks}} out of 60</p>
                                    </div>
                                    <p class="fs-1 fw-bolder mb-3" style="color: #FFBB0D">CEFR: {{Helper::overall_rubricks($all_module_marks)}}</p>
                                    <div class="overall-score">
                                        <p>Equivalent Band Score: 
                                            @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                                4.0 - 4.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                                4.5 - 5.0
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                                5.0 - 5.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                                6.0 - 6.5
                                            @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                                7.0
                                            @else
                                            @endif
                                        </p>
                                    </div>
                                    <p class="mt-3 fs-5 text-light mb-1">
                                        @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                            <span style="color: #FFBB0D">Elementory</span>    
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                            <span style="color: #FFBB0D">Foundation</span>    
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                            <span style="color: #FFBB0D">Intermediate</span> 
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                            <span style="color: #FFBB0D"> Upper Intermediate</span> 
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                            <span style="color: #FFBB0D">Advance</span> 
                                        @else
                                        @endif   
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="card-background px-5 py-4 m-4">
                    <div class="container">
                        <p class="current-level-title"><i class="fa-solid fa-chart-line"></i> Your Current Level</p>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="full_box">
                                    <div class="box_header">
                                        <div class="inner_box_top_1" id="activeClass1">
                                            <p class="fs-5 fw-bold">A1</p>
                                            <h5 class="fw-bolder">Elementary</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Exam levels</p>
                                            <ul>
                                                <li>CEFR A1</li>
                                                <li>TOEFL&reg; 0 - 12</li>
                                                <li>IELTS 3.5 - 4.0</li>
                                                <li>CAMBRIDGE 100 - 120</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="full_box">
                                    <div class="box_header">
                                        <div class="inner_box_top_2" id="activeClass2">
                                            <p class="fs-5 fw-bold">A2</p>
                                            <h5 class="fw-bolder">Lower Intermediate</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Exam levels</p>
                                            <ul>
                                                <li>CEFR A2</li>
                                                <li>TOEFL&reg; 13 - 36</li>
                                                <li>IELTS 4.0 - 4.5</li>
                                                <li>CAMBRIDGE 120 - 140 KET</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="full_box">
                                    <div class="box_header">
                                        <div class="inner_box_top_3" id="activeClass3">
                                            <p class="fs-5 fw-bold">B1</p>
                                            <h5 class="fw-bolder">Intermediate</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Exam levels</p>
                                            <ul>
                                                <li>CEFR B1</li>
                                                <li>TOEFL&reg; 37 - 54</li>
                                                <li>IELTS 4.5 - 5.5</li>
                                                <li>CAMBRIDGE 140 - 160 PET</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="full_box">
                                    <div class="box_header">
                                        <div class="inner_box_top_4" id="activeClass4">
                                            <p class="fs-5 fw-bold">B2</p>
                                            <h5 class="fw-bolder">Advance Intermediate</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Exam levels</p>
                                            <ul>
                                                <li>CEFR B1</li>
                                                <li>TOEFL&reg; 55 - 74</li>
                                                <li>IELTS 5.5 - 6.5</li>
                                                <li>CAMBRIDGE 160 - 180 FCE</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="full_box">
                                    <div class="box_header">
                                        <div class="inner_box_top_5" id="activeClass5">
                                            <p class="fs-5 fw-bold">C1</p>
                                            <h5 class="fw-bolder">Advance</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Exam levels</p>
                                            <ul>
                                                <li>CEFR C1</li>
                                                <li>TOEFL&reg; 75 - 91</li>
                                                <li>IELTS 7.0 - 7.5</li>
                                                <li>CAMBRIDGE 180 - 200 CAE</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="full_box">
                                    <div class="box_header">
                                        <div class="inner_box_top_6" id="activeClass6">
                                            <p class="fs-5 fw-bold">C2</p>
                                            <h5 class="fw-bolder">Proficiency</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Exam levels</p>
                                            <ul>
                                                <li>CEFR C2</li>
                                                <li>TOEFL&reg; 92+</li>
                                                <li>IELTS 7.5+</li>
                                                <li>CAMBRIDGE 200 CPE</li>
                                            </ul>
                                        </div>
                                    </div>
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
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="modules">
                                            <div>
                                                <span class="modules-span"><i class="fa-solid fa-headphones-simple"></i> Listening</span>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-listening" value="{{number_format(($sum_listening_module*100)/15)}}" max="100"></progress>
                                                <span style="margin: 9px 0 0 6px;">{{number_format(($sum_listening_module*100)/15)}}%</span>
                                            </div>
                                        </div>
                                        <div class="modules mt-4">
                                            <div>
                                                <span class="modules-span"><i class="fa-solid fa-book-open"></i> Reading</span>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-reading" id="file" value="{{number_format(($sum_reading_module*100)/15)}}" max="100"></progress>
                                                <span style="margin: 9px 0 0 6px;">{{number_format(($sum_reading_module*100)/15)}}%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="modules">
                                            <div>
                                                <span class="modules-span"><i class="fa-solid fa-pen-to-square"></i> Writing</span>
                                            </div>
                                            <p class="fw-bold mb-0 mt-2">Grammar</p>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-grammar mt-0" id="file" value="{{number_format(($sum_grammar_module*100)/15)}}" max="100"></progress>
                                                <span style="margin: 0 0 0 6px;">{{number_format(($sum_grammar_module*100)/15)}}%</span>
                                            </div>
                                        </div>
                                        <div class="modules mt-4">
                                            <div>
                                                <span class="fw-bold mb-0">Vocabulary</span>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-vocabulary mt-0" id="file" value="{{number_format(($sum_vocabulary_module*100)/15)}}" max="100"> </progress>
                                                <span style="margin: -5px 0 0 6px;">{{number_format(($sum_vocabulary_module*100)/15)}}%</span>
                                            </div>
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
                                <div class="chart-score">
                                    <div class="mark-analytics-pie-chart-container">
                                        <canvas id="answersQuestion"></canvas>
                                    </div>
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
                                            <a href="#" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
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
                            <div class="result_explanation card-background p-4">
                                <p class="card-titles mb-4"><img src="{{asset('frontend/images/icons/result_explanation.png')}}" alt="" style="width: 2.125rem;height: 2.125rem;"> Result Explanation</p>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa-solid fa-book-open"></i> <span class="mx-3">Reading</span>
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li style="font-size: 16px !important;">
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
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa-solid fa-pen-to-square"></i> <span class="mx-3">Writing</span>
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li style="font-size: 16px !important;">
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
                                                </li>
                                                <li style="font-size: 16px !important;">
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
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa-solid fa-headphones-simple"></i> <span class="mx-3">Listening</span>
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li style="font-size: 16px !important;">
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
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="marks_bar_graph card-background p-4">
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
                                <p class="card-titles"><img src="{{asset('frontend/images/icons/result_explanation.png')}}" alt=""> Module Wise Marks</p>
                                <canvas id="mark-analytics-pie-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="int-abroad-country card-background px-3 pt-3 pb-5">
                                <p class="card-titles mb-0"><img src="{{asset('frontend/images/icons/speedometer.png')}}" alt=""
                                        style="width: 2.125rem;height: 2.125rem;"> Desired and Target Score</p>
                                <div class="mx-3 pt-3">
                                    <p class="mb-0 fs-5 fw-bold"><i class="fa-regular fa-circle-dot"></i> Desired Score: 
                                        @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                            4.0 - 4.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                            4.5 - 5.0
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                            5.0 - 5.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                            6.0 - 6.5
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                            7.0
                                        @else
                                        @endif
                                    </p>
                                    <p class="mb-0 fs-5 fw-bold mt-2" style="color: #004AAD;"><i class="fa-regular fa-circle-dot"></i> Target Score: {{$student_info->expected_score}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="int-abroad-country card-background px-3 pt-3 pb-5">
                                <p class="card-titles">
                                    <i class="fa-solid fa-globe"></i>
                                    Interested Aboard Country
                                </p>
                                <div class="intended-countries pt-3">
                                    @if ($student_info->expected_country == NULL)
                                        <div class="country-name mx-2">
                                            <span class="me-3">Not Selected</span>
                                        </div>
                                    @else
                                        @foreach (json_decode($student_info->expected_country) as $country)
                                            <div class="country-name mx-2">
                                                <span class="me-3">{{$country}}</span>
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
                                <div class="intended-countries pt-3">
                                    @if ($student_info->school_goes == null)
                                        <div class="country-name mx-2">
                                            <span class="me-3">Not Selected</span>
                                        </div>
                                    @else
                                        @foreach (json_decode($student_info->school_goes) as $school)
                                            <div class="country-name mx-2">
                                                <span class="me-3"><i class="fa-solid fa-user-graduate"></i></span>
                                                <span class="me-3">{{$school}}</span>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sugg-target-score p-4 card-background">
                                <p class="card-titles"><i class="fa-solid fa-book-bookmark"></i> Suggested course for targeted band score</p>
                                <div class="row">
                                    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <div class="band-score-tiles-list">
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_6" onclick="expected_band_score_func(6)">
                                                Band: 6
                                            </button>
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_more_than_6" onclick="expected_band_score_func(6.5)">
                                                Band: 6.5
                                            </button>
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_7" onclick="expected_band_score_func(7)">
                                                Band: 7
                                            </button>
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_more_than_7" onclick="expected_band_score_func(7.5)">
                                                Band: 7.5
                                            </button>
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_8" onclick="expected_band_score_func(8)">
                                                Band: 8
                                            </button>
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_more_than_8" onclick="expected_band_score_func(8.5)">
                                                Band: 8.5
                                            </button>
                                            <button style="background-color: transparent; border:none; font-size:1.25rem; font-weight: 700; color:#625F5F" id="targeted_band_score_9" onclick="expected_band_score_func(9)">
                                                Band: 9
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="achieved-course-section" id="course-related-info">
                    <div class="p-5 card-background">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div style="margin: 2rem 0 0 0">
                                    <div class="position-relative">
                                        <div class="improved-score"><i class="fa-solid fa-medal" style="color: #E89B05;"></i> Achieve <span id="achive_band_score"></span></div>
                                        <img src="{{asset('frontend/images/icons/arrow.svg')}}" alt="" class="arrow"> 
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                    <div class="your-score">
                                                        <span class="icon"><i class="fa-solid fa-triangle-exclamation me-2"></i></span>
                                                        Your Score 
                                                        @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                                            4.0 - 4.5
                                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'A2')
                                                            4.5 - 5.0
                                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                                            5.0 - 5.5
                                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                                            6.0 - 6.5
                                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                                            7.0
                                                        @else
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="d-flex justify-content-between">
                                                    <div id="a1_course_duration">
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div style="height: 50px; background-color:#45ba5e;padding:0 24px;"></div>
                                                        </div>
                                                    </div>
                                                    <div id="a2_course_duration">
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div style="height: 100px; background-color:#7281e9;padding:0 24px;"></div>
                                                        </div>
                                                    </div>
                                                    <div id="b1_course_duration">
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div style="height: 150px; background-color:#d761f4;padding:0 24px;"></div>
                                                        </div>
                                                    </div>
                                                    <div id="b2_course_duration">
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div style="height: 200px; background-color:#4849db;padding:0 24px;"></div>
                                                        </div>
                                                    </div>
                                                    <div id="c1_course_duration">
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div style="height: 250px; background-color:#ff5f36;padding:0 24px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <div id="">
                                                        <div style="font-size: 1rem; font-weight:600"><span><input type="radio" name="" id=""></span> A1</div>
                                                    </div>
                                                    <div id="">
                                                        <div style="font-size: 1rem; font-weight:600"><span><input type="radio" name="" id=""></span> A2</div>
                                                    </div>
                                                    <div id="">
                                                        <div style="font-size: 1rem; font-weight:600"><span><input type="radio" name="" id=""></span> B1</div>
                                                    </div>
                                                    <div id="">
                                                        <div style="font-size: 1rem; font-weight:600"><span><input type="radio" name="" id=""></span> B2</div>
                                                    </div>
                                                    <div id="">
                                                        <div style="font-size: 1rem; font-weight:600"><span><input type="radio" name="" id=""></span> C1</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <p class="course-benefit-title"><i class="fa-solid fa-list-check me-1"></i> Course Benefit</p>
                                               <div>
                                                    <span class="course-benefit-icon"><i class="fa-solid fa-circle-check"></i></span>
                                                    <span class="course-benefit-text">A1 Benefit</span>
                                               </div>
                                               <div>
                                                    <span class="course-benefit-icon"><i class="fa-solid fa-circle-check"></i></span>
                                                    <span class="course-benefit-text">A2 Benefit</span>
                                               </div>
                                               <div>
                                                    <span class="course-benefit-icon"><i class="fa-solid fa-circle-check"></i></span>
                                                    <span class="course-benefit-text">B1 Benefit</span>
                                               </div>
                                               <div>
                                                    <span class="course-benefit-icon"><i class="fa-solid fa-circle-check"></i></span>
                                                    <span class="course-benefit-text">B2 Benefit</span>
                                               </div>
                                               <div>
                                                    <span class="course-benefit-icon"><i class="fa-solid fa-circle-check"></i></span>
                                                    <span class="course-benefit-text">C1 Benefit</span>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <table class="table table-bordered mt-5">
                                                    <tr>
                                                        <td style="font-size: 1rem; font-weight:600; background-color:#ecf1f9">Course</td>
                                                        <td style="font-size: 1rem; font-weight:600; background-color:#ecf1f9">Level</td>
                                                        <td style="font-size: 1rem; font-weight:600; background-color:#ecf1f9">Duration</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 1rem; font-weight: 600; margin: 0 2px 0 6px; background-color:transparent;">A1</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">Elementory</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">1 Month+</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 1rem; font-weight: 600; margin: 0 2px 0 6px; background-color:transparent;">A2</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">Basic English</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">1 Month+</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 1rem; font-weight: 600; margin: 0 2px 0 6px; background-color:transparent;">B1</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">Pre - IELTS</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">1 Month+</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 1rem; font-weight: 600; margin: 0 2px 0 6px; background-color:transparent;">B2</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">Main IELTS</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">1 Month+</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 1rem; font-weight: 600; margin: 0 2px 0 6px; background-color:transparent;">C1</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">Advance IELTS</td>
                                                        <td style="font-size: 1rem; background-color:transparent;">1 Month+</td>
                                                    </tr>
                                                </table>
                                                <p class="total-time">Total Course Duration: <span id="course_completed_time"></span> Months +</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p class="card-titles mt-3 mb-4"><i class="fa-solid fa-book-bookmark"></i> Course Content</p>
                                        <div class="row">
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="d-flex justify-content-between">
                                                    <div id="a1-course-description" class="d-flex justify-content-start">
                                                        <div class="details-border"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentA1">A1</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div id="a2-course-description" class="d-flex justify-content-start">
                                                        <div class="details-border"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentA2">A2</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div id="b1-course-description" class="d-flex justify-content-start">
                                                        <div class="details-border"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentB1">B1</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div id="b2-course-description" class="d-flex justify-content-start">
                                                        <div class="details-border"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentB2">B2</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div id="c1-course-description">
                                                        <div class="details-border"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentC1">C1</button>
                                                        </div>
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
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #6db98e; color:#f8f8f8;">
                                                <h1 class="modal-title" style="font-size: 1.75rem !important; font-weight: 700; margin-left: 2rem;" id="courseContentA2Label">A1 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #d9f0e3; padding: 8px 50px;">
                                                {!! Helper::course_benefit('A1') !!}
                                            </div>
                                            <div class="modal-footer" style="background-color: #acbfb4;">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- A2 Course Content Modal -->
                                <div class="modal fade" id="courseContentA2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentA2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #6db98e; color:#f8f8f8;">
                                                <h1 class="modal-title" style="font-size: 1.75rem !important; font-weight: 700; margin-left: 2rem;" id="courseContentA2Label">A2 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #d9f0e3; padding: 8px 50px;">
                                                {!! Helper::course_benefit('A2') !!}
                                            </div>
                                            <div class="modal-footer" style="background-color: #acbfb4;">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- B1 Course Content Modal -->
                                <div class="modal fade" id="courseContentB1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentB1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #6db98e; color:#f8f8f8;">
                                                <h1 class="modal-title" style="font-size: 1.75rem !important; font-weight: 700; margin-left: 2rem;" id="courseContentB1Label">B1 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #d9f0e3; padding: 8px 50px;">
                                                {!! Helper::course_benefit('B1') !!}
                                            </div>
                                            <div class="modal-footer" style="background-color: #acbfb4;">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- B2 Course Content Modal -->
                                <div class="modal fade" id="courseContentB2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentB2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #6db98e; color:#f8f8f8;">
                                                <h1 class="modal-title" style="font-size: 1.75rem !important; font-weight: 700; margin-left: 2rem;" id="courseContentA2Label">B2 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #d9f0e3; padding: 8px 50px;">
                                                {!! Helper::course_benefit('B2') !!}
                                            </div>
                                            <div class="modal-footer" style="background-color: #acbfb4;">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- C1 Course Content Modal -->
                                <div class="modal fade" id="courseContentC1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="courseContentC1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #6db98e; color:#f8f8f8;">
                                                <h1 class="modal-title" style="font-size: 1.75rem !important; font-weight: 700; margin-left: 2rem;" id="courseContentA2Label">C1 Course Content</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #d9f0e3; padding: 8px 50px;">
                                                {!! Helper::course_benefit('C1') !!}
                                            </div>
                                            <div class="modal-footer" style="background-color: #acbfb4;">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="card-titles mt-4 mb-1"><i class="fa-regular fa-calendar-days"></i> Class Schdule</p>
                                    <div style="border: 1.5px solid #7c7c7c; width:40%; border-radius: 4px; margin-top: 20px; padding: 20px 10px;">
                                        <ul class="mb-0">
                                            <li class="fs-5"><span class="fw-bold">Regular Batch:</span> Weekly Two or Three days</li>
                                            <li class="fs-5"><span class="fw-bold">Weekend Batch:</span> Friday</li>
                                            <li class="fs-5 mb-0"><span class="fw-bold">Language Club:</span> Saturday</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="package-table" id="course_price_section">
                    <div class="row my-4">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="p-5 card-background">
                                <p class="card-titles"><span style="rotate: 180deg"><i class="fa-solid fa-tags"></i></span> Course Price</p>
                                <div class="mx-5 px-5">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td style="background-color: #7c6b97;" class="td-total text-white pt-3">Courses</td>
                                            <td style="background-color: #7776B3;" class="td-total text-white pt-3">Regular <p>Fees</p></td>
                                            <td style="background-color: #5A639C;" class="td-total text-white pt-3">Discount <p>Package</p></td>
                                        </tr>
                                        <tr id="a1_course_price_row">
                                            <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="a1CoursePriceBtn" onclick="coursetdlist('a1')">A1</td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseA1TdPrice1">
                                                   {{number_format(Helper::coursePrice('a1')['regular_price'])}}/-
                                                </div>
                                                <input type="hidden" name="" id="courseA1TdPrice1Input" value="{{Helper::coursePrice('a1')['regular_price']}}">
                                            </td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseA1TdPrice2">
                                                    @if (Helper::coursePrice('a1')['discount_price'] == 'N/A')
                                                        {{number_format(Helper::coursePrice('a1')['regular_price'])}}/-
                                                        <span class="fs-6 text-danger mx-3">N/A</span>
                                                    @else
                                                        {{number_format(Helper::coursePrice('a1')['discount_price'])}}/-
                                                    @endif
                                                </div>
                                                <input type="hidden" name="" id="courseA1TdDiscountPrice1Input" value="{{Helper::coursePrice('a1')['discount_price'] == 'N/A'? Helper::coursePrice('a1')['regular_price'] : Helper::coursePrice('a1')['discount_price']}}">
                                            </td>
                                        </tr>
                                        <tr id="a2_course_price_row">
                                            <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="a2CoursePriceBtn" onclick="coursetdlist('a2')">A2</td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseA2TdPrice1">
                                                    {{number_format(Helper::coursePrice('a2')['regular_price'])}}/-
                                                </div>
                                                <input type="hidden" name="" id="courseA2TdPrice1Input" value="{{Helper::coursePrice('a2')['regular_price']}}">
                                            </td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseA2TdPrice2">
                                                    @if (Helper::coursePrice('a2')['discount_price'] == 'N/A')
                                                        {{number_format(Helper::coursePrice('a2')['regular_price'])}}/-
                                                        <span class="fs-6 text-danger mx-3">N/A</span>
                                                    @else
                                                        {{number_format(Helper::coursePrice('a2')['discount_price'])}}/-
                                                    @endif
                                                </div>
                                                <input type="hidden" name="" id="courseA2TdDiscountPrice1Input" value="{{Helper::coursePrice('a2')['discount_price'] == 'N/A'? Helper::coursePrice('a2')['regular_price'] : Helper::coursePrice('a2')['discount_price']}}">
                                            </td>
                                        </tr>
                                        <tr id="b1_course_price_row">
                                            <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="b1CoursePriceBtn" onclick="coursetdlist('b1')">B1</td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseB1TdPrice1">
                                                    {{number_format(Helper::coursePrice('b1')['regular_price'])}}/-
                                                </div>
                                                <input type="hidden" name="" id="courseB1TdPrice1Input" value="{{Helper::coursePrice('b1')['regular_price']}}">
                                            </td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseB1TdPrice2">
                                                    @if (Helper::coursePrice('b1')['discount_price'] == 'N/A')
                                                        {{number_format(Helper::coursePrice('b1')['regular_price'])}}/-
                                                        <span class="fs-6 text-danger mx-3">N/A</span>
                                                    @else
                                                        {{number_format(Helper::coursePrice('b1')['discount_price'])}}/-
                                                    @endif
                                                </div>
                                                <input type="hidden" name="" id="courseB1TdDiscountPrice1Input" value="{{Helper::coursePrice('b1')['discount_price'] == 'N/A'? Helper::coursePrice('b1')['regular_price'] : Helper::coursePrice('b1')['discount_price']}}">
                                            </td>
                                        </tr>
                                        <tr id="b2_course_price_row">
                                            <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="b2CoursePriceBtn" onclick="coursetdlist('b2')">B2</td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseB2TdPrice1">
                                                    {{number_format(Helper::coursePrice('b2')['regular_price'])}}/-
                                                </div>
                                                <input type="hidden" name="" id="courseB2TdPrice1Input" value="{{Helper::coursePrice('b2')['regular_price']}}">
                                            </td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseB2TdPrice2">
                                                    @if (Helper::coursePrice('b2')['discount_price'] == 'N/A')
                                                        {{number_format(Helper::coursePrice('b2')['regular_price'])}}/-
                                                        <span class="fs-6 text-danger mx-3">N/A</span>
                                                    @else
                                                        {{number_format(Helper::coursePrice('b2')['discount_price'])}}/-
                                                    @endif
                                                </div>
                                                <input type="hidden" name="" id="courseB2TdDiscountPrice1Input" value="{{Helper::coursePrice('b2')['discount_price'] == 'N/A'? Helper::coursePrice('b2')['regular_price'] : Helper::coursePrice('b2')['discount_price']}}">
                                            </td>
                                        </tr>
                                        <tr id="c1_course_price_row">
                                            <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="c1CoursePriceBtn" onclick="coursetdlist('c1')">C1</td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseC1TdPrice1">
                                                    {{number_format(Helper::coursePrice('c1')['regular_price'])}}/-
                                                </div>
                                                <input type="hidden" name="" id="courseC1TdPrice1Input" value="{{Helper::coursePrice('c1')['regular_price']}}">
                                            </td>
                                            <td style="background-color: #fff;" class="td-price">
                                                <div id="courseC1TdPrice2">
                                                    @if (Helper::coursePrice('c1')['discount_price'] == 'N/A')
                                                        {{number_format(Helper::coursePrice('c1')['regular_price'])}}/-
                                                        <span class="fs-6 text-danger mx-3">N/A</span>
                                                    @else
                                                        {{number_format(Helper::coursePrice('c1')['discount_price'])}}/-
                                                    @endif
                                                </div>
                                                <input type="hidden" name="" id="courseC1TdDiscountPrice1Input" value="{{Helper::coursePrice('c1')['discount_price'] == 'N/A'? Helper::coursePrice('c1')['regular_price'] : Helper::coursePrice('c1')['discount_price']}}">
                                            </td>
                                        </tr>
                                        <tr id="priviliged_price_row">
                                            <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="privilegedCoursePriceBtn" onclick="coursetdlist('privileged')">Privileged</td>
                                            <td style="background-color: #fff;" class="td-price" colspan="2">
                                                <div id="coursePrivileged">
                                                    {{number_format($priviliged_price->priviliged_price)}}/-
                                                </div>
                                                <input type="hidden" name="" id="coursePriviligedTdPrice1Input" value="{{$priviliged_price->priviliged_price}}">
                                            </td>
                                        </tr>
                                        <tr id="total_course_price_row">
                                            <td style="background: #5d5071;" class="td-total text-white py-3">Total</td>
                                            <td style="background-color: #f1f1f1;" class="td-price py-3" id="totalCourseRegularPrice"></td>
                                            <td style="background-color: #f1f1f1;" class="td-price py-3" id="totalCourseDiscountPrice"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="total_enrolled_course my-4" id="total_enrolled_course_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card-background px-5 py-4">
                                    <p class="card-titles"><i class="fa-solid fa-book-open-reader"></i> Course Overview</p>
                                    <div class="row">
                                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            <div style="border-radius: 0.75rem; padding:1rem 1.825rem; background: var(--GlobalColors-Neutral-0, #FFF); box-shadow: 0px 2px 14px 0px rgba(148, 143, 143, 0.08);">
                                                <table class="table" style="border-bottom: 1px solid #DEDCDC; margin-bottom: 0 !important;">
                                                    <thead>
                                                        <th style="background-color:transparent; border:none; font-size: 1.125rem; font-weight:600; color:#004AAD;">Enrolled Course</th>
                                                        <th style="background-color:transparent; border:none; font-size: 1.125rem; font-weight:600; color:#004AAD;">Course Level</th>
                                                        <th style="float: right; background-color:transparent; border:none; font-size: 1.125rem; font-weight:600; color:#004AAD;">Duration</th>
                                                    </thead>
                                                </table>
                                                <div id="a1CourseOverview">
                                                    <div class="d-flex justify-content-between"  style="border-bottom: 1px solid #DEDCDC; padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> A1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Elementory</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="a2CourseOverview">
                                                    <div class="d-flex justify-content-between" style="border-bottom: 1px solid #DEDCDC;  padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> A2</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Basic English</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="b1CourseOverview">
                                                    <div class="d-flex justify-content-between" style="border-bottom: 1px solid #DEDCDC;  padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> B1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Pre- Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="b2CourseOverview">
                                                    <div class="d-flex justify-content-between" style="border-bottom: 1px solid #DEDCDC;  padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> B2</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Main Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="c1CourseOverview">
                                                    <div class="d-flex justify-content-between" style=" padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> C1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Advance Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="totaled-month-duration">
                                                <p class="mb-0 py-2 px-3">Total Duration: <span id="courseOverviewTime">0</span> Months</p>
                                            </div>
                                            <div class="course-achievement">
                                                <p class="card-titles"><i class="fa-solid fa-book-bookmark"></i> Course Achievement</p>
                                                <div class="course-achievement-box">
                                                    <p class="course"><span style="color:#004AAD;"><i class="fa-solid fa-trophy"></i></span> C1</p>
                                                    <p class="status">Course Level: Advance IELTS</p>
                                                    <p class="status">Achieve Band Score: 7 Plus</p>
                                                    <p class="status">Status: Beginner To Advance</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="price-box">
                                                <div class="header"></div>
                                                <div class="inner-box">
                                                    <p class="price-title">Price</p>
                                                    <div class="regular-price">
                                                        <p class="mb-0">Regular price</p>
                                                        <p class="mb-0" id="courseOverviewRegularPrice">0</p>
                                                    </div>
                                                    <div class="discount-price">
                                                        <p class="mb-1">Discount price</p>
                                                        <p class="mb-1" id="courseOverviewDiscountPrice">0</p>
                                                    </div>
                                                    <div class="discounted-price">
                                                        <p class="mb-0">Discounted price</p>
                                                        <p class="mb-0" id="courseOverviewDiscountedPrice">0</p>
                                                    </div>
                                                    <div class="visit-day-price">
                                                        <p class="mb-1">Visit Day Offer</p>
                                                        <p class="mb-1" id="courseOverviewPrivileged">0</p>
                                                    </div>
                                                    <div class="privileged-price">
                                                        <p class="mb-2">Privileged Price</p>
                                                        <p class="mb-2" id="courseOverviewTotalPrivileged">0</p>
                                                    </div>
                                                    <div class="totaled-price">
                                                        <p class="mb-0">Total Price</p>
                                                        <p class="mb-0" id="courseOverviewTotalPrice">0</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-4" style="font-size: 0.625rem">
                                                        <p class="mb-0">VAT Included (govt.)</p>
                                                        <p class="mb-0">5%</p>
                                                    </div>
                                                    <button type="submit">Confirm Purchase</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <form action="{{route('student.total.enrolled course')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{$student_info->visitor_log_id}}">
                                        <div class="form-group">
                                            <input class="form-check-input mt-0" name="total_enrolled_course[]" type="checkbox" value="A1" aria-label="Checkbox for following text input">
                                            <label for="" style="margin-left: 8px; font-size: 20px; font-weight:700">A1</label>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input class="form-check-input mt-0" name="total_enrolled_course[]" type="checkbox" value="A2" aria-label="Checkbox for following text input">
                                            <label for="" style="margin-left: 8px; font-size: 20px; font-weight:700">A2</label>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input class="form-check-input mt-0" name="total_enrolled_course[]" type="checkbox" value="B1" aria-label="Checkbox for following text input">
                                            <label for="" style="margin-left: 8px; font-size: 20px; font-weight:700">B1</label>
                                        </div> 
                                        <div class="form-group mt-2">
                                            <input class="form-check-input mt-0" name="total_enrolled_course[]" type="checkbox" value="B2" aria-label="Checkbox for following text input">
                                            <label for="" style="margin-left: 8px; font-size: 20px; font-weight:700">B2</label>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input class="form-check-input mt-0" name="total_enrolled_course[]" type="checkbox" value="C1" aria-label="Checkbox for following text input">
                                            <label for="" style="margin-left: 8px; font-size: 20px; font-weight:700">C1</label>
                                        </div>
                                        <div class="pt-4">
                                            <button type="submit" class="btn btn-sm text-light fs-5 fw-bold px-3 py-1" style="background-color: #004AAD; ">Submit</button>
                                        </div>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                beginAtZero: false
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
                    '#004AAD',
                    '#EEB902',
                    '#87A0B2',
                    ],
                    borderColor: [
                    '#004AAD',
                    '#EEB902',
                    '#87A0B2',
                    ],
                    backgroundColor: [
                    '#004AAD',
                    '#EEB902',
                    '#87A0B2',
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
                    position: 'left'
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
            type: "bar",
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
                },
                scales: {
                    y: {
                        suggestedMin: 0,
                        suggestedMax: 15,
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

