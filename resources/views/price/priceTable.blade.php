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
                                                4.0
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
                                            <span style="color: #FFBB0D">Pre-intermediate</span>    
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B1')
                                            <span style="color: #FFBB0D">Intermediate</span> 
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'B2')
                                            <span style="color: #FFBB0D"> Upper Intermediate</span> 
                                        @elseif(Helper::overall_rubricks($all_module_marks) == 'C1')
                                            <span style="color: #FFBB0D">Advanced</span> 
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
                                            <p class="fw-bold">Equivalent Levels</p>
                                            <ul>
                                                <li>CEFR A1</li>
                                                <li>IELTS 4.0</li>
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
                                            <h5 class="fw-bolder">Pre-intermediate</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Equivalent Levels</p>
                                            <ul>
                                                <li>CEFR A2</li>
                                                <li>IELTS 4.5 - 5.0</li>
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
                                            <p class="fw-bold">Equivalent Levels</p>
                                            <ul>
                                                <li>CEFR B1</li>
                                                <li>IELTS 5.0 - 5.5</li>
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
                                            <h5 class="fw-bolder">Upper Intermediate</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Equivalent Levels</p>
                                            <ul>
                                                <li>CEFR B1</li>
                                                <li>IELTS 6.0 - 6.5</li>
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
                                            <h5 class="fw-bolder">Advanced</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Equivalent Levels</p>
                                            <ul>
                                                <li>CEFR C1</li>
                                                <li>IELTS 7.0 - 7.5</li>
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
                                            <h5 class="fw-bolder">Proficient</h5>
                                        </div>
                                    </div>
                                    <div class="box_bind_class">
                                        <hr>
                                        <div class="inner_box_bottom">
                                            <p class="fw-bold">Equivalent Levels</p>
                                            <ul>
                                                <li>CEFR C2</li>
                                                <li>IELTS 8.0+</li>
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
                                                {{-- <span class="modules-span"><i class="fa-solid fa-pen-to-square"></i> Writing</span> --}}
                                                <span class="modules-span"><i class="fa-solid fa-pen-to-square"></i> Writing (Grammar)</span>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-grammar" id="file" value="{{number_format(($sum_grammar_module*100)/15)}}" max="100"></progress>
                                                <span style="margin: 9px 0 0 6px;">{{number_format(($sum_grammar_module*100)/15)}}%</span>
                                            </div>
                                        </div>
                                        <div class="modules mt-4">
                                            <div>
                                                {{-- <span class="fw-bold mb-0">Vocabulary</span> --}}
                                                <span class="modules-span"><i class="fa-solid fa-pen-to-square"></i> Writing (Vocabulary)</span>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-vocabulary" id="file" value="{{number_format(($sum_vocabulary_module*100)/15)}}" max="100"> </progress>
                                                <span style="margin: 0 0 0 6px;">{{number_format(($sum_vocabulary_module*100)/15)}}%</span>
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
                            <div class="correct-answer p-4 card-background">
                                <p class="card-titles">Detailed Results</p>
                                <table class="table table-striped">
                                    <tr>
                                        <th style="padding-left:20px;">Module</th>
                                        <th style="padding-left:20px;">Right</th>
                                        <th style="color:#fd1818; padding-left:20px;">Wrong</th>
                                        {{-- <th style="">Action</th> --}}
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" style="padding: 14px 10px;">
                                            <i class="fa-solid fa-book-open"></i>
                                            Reading
                                        </td>
                                        <td style="padding: 14px 10;">
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">
                                                @if (strlen($sum_reading_module) == 1)
                                                    0{{$sum_reading_module}}
                                                @else
                                                    {{$sum_reading_module}}
                                                @endif
                                            </span>
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">
                                                @if (strlen(15-$sum_reading_module) == 1)
                                                    0{{15-$sum_reading_module}}
                                                @else
                                                    {{15-$sum_reading_module}}
                                                @endif
                                            </span>
                                        </td>
                                        {{-- <td style="padding: 14px 10px;">
                                            <a href="#" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" style="padding: 14px 10px;">
                                            <i class="fa-solid fa-spell-check"></i>
                                            Grammar
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">
                                                @if (strlen($sum_grammar_module) == 1)
                                                    0{{$sum_grammar_module}}
                                                @else
                                                    {{$sum_grammar_module}}
                                                @endif
                                            </span>
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">
                                                @if (strlen(15-$sum_grammar_module) == 1)
                                                    0{{15-$sum_grammar_module}}
                                                @else
                                                    {{15-$sum_grammar_module}}
                                                @endif
                                            </span>
                                        </td>
                                        {{-- <td style="padding: 14px 10px;">
                                            <a href="#" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" style="padding: 14px 10px;">
                                            <i class="fa-solid fa-book"></i>
                                            Vocabulary
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">
                                                @if (strlen($sum_vocabulary_module) == 1)
                                                    0{{$sum_vocabulary_module}}
                                                @else
                                                    {{$sum_vocabulary_module}}
                                                @endif
                                            </span>
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">
                                                @if (strlen(15-$sum_vocabulary_module) == 1)
                                                    0{{15-$sum_vocabulary_module}}
                                                @else
                                                    {{15-$sum_vocabulary_module}}
                                                @endif
                                            </span>
                                        </td>
                                        {{-- <td style="padding: 14px 10px;">
                                            <a href="#" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" style="padding: 14px 10px;">
                                            <i class="fa-solid fa-headphones-simple"></i>
                                            Listening
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #282828; padding: 5px 21px; border-radius: 4px;">
                                                @if (strlen($sum_listening_module) == 1)
                                                    0{{$sum_listening_module}}
                                                @else
                                                    {{$sum_listening_module}}
                                                @endif
                                            </span>
                                        </td>
                                        <td style="padding: 14px 10px;">
                                            <span style="border: 1px solid #fd1818; padding: 5px 21px; border-radius: 4px; color:#fd1818;">
                                                @if (strlen(15-$sum_listening_module) == 1)
                                                    0{{15-$sum_listening_module}}
                                                @else
                                                    {{15-$sum_listening_module}}
                                                @endif
                                            </span>
                                        </td>
                                        {{-- <td style="padding: 14px 10px;">
                                            <a href="#" style="text-decoration: none; color:#004AAD; font-weight:700;">View</a>
                                        </td> --}}
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="mark-analysis card-background">
                                <p class="card-titles">Correct Answer Propotion</p>
                                <div class="chart-score">
                                    <div class="mark-analytics-pie-chart-container">
                                        <canvas id="answersQuestion"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="aboard_inquire_section">
                    <div class="row my-4">
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
                                <p class="card-titles"><img src="{{asset('frontend/images/icons/module_wise_marks.png')}}" alt="" style="width: 7%;"> Your Current Condition</p>
                                <canvas id="mark-analytics-pie-chart"></canvas>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="result_explanation card-background p-4">
                                <p class="card-titles mb-4"><i class="fa-regular fa-lightbulb"></i> Result Explanation</p>
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
                                                        <span>Passage এ থাকা complex sentence গুলোর ব্যবহার বুঝতে পারেন নি। যেখানে synonym বা paraphrase ব্যবহার করা হয়েছে, সেখানে অর্থ বুঝতে পারেন নি।</span>
                                                    @elseif (Helper::module_rubricks($sum_reading_module) == 'A1')
                                                        <span>
                                                            Passage এ থাকা complex sentence গুলোর ব্যবহার বুঝতে পারেন নি। যেখানে synonym বা paraphrase ব্যবহার করা হয়েছে, সেখানে অর্থ বুঝতে পারেন নি।
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'A2')
                                                        <span>
                                                            Complex sentence বুঝতে পারলেও overall idea বুঝতে অসুবিধা হচ্ছে। Synonym বা paraphrase এর কেবল সীমিত ধারনা আছে। 
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'B1')
                                                        <span>
                                                            Familiar vocabulary থাকলে complex sentence এর অর্থ এবং paragraph এর মূল idea বুঝতে পারছেন। কিন্তু যখন advanced vocabulary সহ complex sentence structure ছিলো তখন বুঝতে সমস্যা হয়েছে।
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'B2')
                                                        <span>
                                                            Passage এ থাকা কয়েকটি advanced situation এর context বুঝতে পারেন নি। Passage পড়ে মাঝে মধ্যে context বোঝার ক্ষেত্রে inaccuracy এবং misunderstanding এর মত সমস্যা face করেছেন। 
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_reading_module) == 'C1')
                                                        <span>
                                                            Complex বা unfamiliar situation এ সীমিত কিছু ভুল করেছেন। Advanced vocabulary যেখানে ব্যবহার করা হয়েছে সেখানে context identify করতে confused হয়েছেন। নির্ভুল থাকার জন্য অনেক বেশী practice করতে হবে।
                                                        </span>
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
                                                        <p class="mb-0">গ্রামারে অনেক বেশী দুর্বলতা আছে। </p>
                                                        <p class="mb-0">Sentence structure এ অনেক দুর্বলতা আছে।</p>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'A2')
                                                        <p class="mb-0">Sentence structure সম্পর্কে basic ধারণা আছে।</p>
                                                        <p class="mb-0">তবে complex sentence অন্যান্য grammar item এ ভুল করেছেন।</p>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'B1')
                                                        <span>
                                                            একি passage এ simple এবং complex sentence এর ব্যবহার থাকলে আপনি সমস্যা face করেছেন। তার পাশাপাশি advanced grammar task ভুল করেছেন। 
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'B2')
                                                        <span>
                                                            Advanced grammatical item এ অল্প পরিমানে ভুল করেছেন। 
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_grammar_module) == 'C1')
                                                        <span>
                                                            Grammatical এবং lexical item গুলো skillfully ব্যাবহার করতে পেরেছেন। তবে আপনি শতভাগ নির্ভুল নন। Occasional ভুল কমিয়ে আনতে অনেক বেশী practice করতে হবে। 
                                                        </span>
                                                    @endif
                                                </li>
                                                <li style="font-size: 16px !important;">
                                                    @if (Helper::module_rubricks($sum_vocabulary_module) == 'A-')
                                                        <span>Cannot understand basice names and words.</span>
                                                    @elseif (Helper::module_rubricks($sum_vocabulary_module) == 'A1')
                                                        <li>সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Basic user</li>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'A2')
                                                        <span>সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Pre-intermediate user.</span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'B1')
                                                        <span>
                                                            সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Intermediate user
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'B2')
                                                        <span>
                                                            সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Upper intermediate user
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'C1')
                                                        <span>
                                                            সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Advanced user
                                                        </span>
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
                                                        <span>
                                                            Familiar situation-এ basic dialogueবুঝতে পারেন না।
                                                        </span>
                                                    @elseif (Helper::module_rubricks($sum_listening_module) == 'A1')
                                                        <span>
                                                            Familiar situation-এ basic dialogueবুঝতে পারেন না।
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'A2')
                                                        <span>
                                                            পুরো conversation এর main theme বুঝতে পারেন তবে Complex sentence এর track রাখতে পারেন না।
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'B1')
                                                        <span>
                                                            Situational discussion এবং মোটামুটি complex monologue বুঝতে পারেন।
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'B2')
                                                        <span>
                                                            সাধারনত complex discussion এর track রাখতে পারেন। তবে কিছু কিছু ক্ষেত্রে বা unfamiliar situation এ সঠিক তথ্য খুঁজে বের করতে সমস্যা হতে পারে।
                                                        </span>
                                                    @elseif(Helper::module_rubricks($sum_listening_module) == 'C1')
                                                        <span>
                                                            ভালো ভাবে যে কোন কথা বুঝতে পারেন। তবে মাঝে মাঝে unfamiliar situation এ misunderstanding হতে পারে।
                                                        </span>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="int-abroad-country card-background px-3 pt-3 pb-5">
                                <p class="card-titles mb-0"><img src="{{asset('frontend/images/icons/speedometer.png')}}" alt="" style="width: 2.125rem;height: 2.125rem;"> Current and Desired Score</p>
                                <table class="table table-bordered mt-3">
                                    <thead>
                                        <th class="text-center">Current Score</th>
                                        <th class="text-center">Desired Score</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="background-color: transparent; font-size:1.625rem; text-align:center;">{{Helper::overall_rubricks($all_module_marks)}}</td>
                                            <td style="background-color: transparent; font-size:1.625rem; text-align:center;">
                                                @if ($student_info->expected_score >= 7)
                                                    C1
                                                @elseif($student_info->expected_score <= 6.5)
                                                    B2
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: transparent; font-size:1rem; text-align:center;">
                                                @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                                    4.0
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
                                            </td>
                                            <td style="background-color: transparent; font-size:1rem; text-align:center;">
                                                @if ($student_info->expected_score >= 7)
                                                    7 - 7.5
                                                @elseif($student_info->expected_score <= 6.5)
                                                    6.0 - 6.5
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                <section class="achieved-course-section" id="course-related-info">
                    <div class="p-5 card-background">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div style="">
                                    <div class="position-relative">
                                        {{-- <img src="{{asset('frontend/images/icons/arrow.png')}}" alt="" class="arrow">  --}}
                                        <p class="card-titles"><i class="fa-solid fa-book-bookmark"></i> Suggested Courses For Your Targeted Band Score</p>
                                        <div class="row">
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="band-score-tiles-list">
                                                    <button style="background-color: transparent; border:none; padding: 8px 8px; border-radius:4px; font-size:1.25rem; font-weight: 700; color:#625F5F; border:1px solid #035388;" id="targeted_band_score_6" onclick="expected_band_score_func(6)">
                                                        Band: 6.0 - Band: 6.5
                                                    </button>
                                                    <button style="background-color: transparent; border:none; padding: 8px 8px; border-radius:4px; font-size:1.25rem; font-weight: 700; color:#625F5F; border:1px solid #035388;" id="targeted_band_score_7" onclick="expected_band_score_func(7)">
                                                        Band: 7.0 - Band: 7.5
                                                    </button>
                                                    <button style="background-color: transparent; border:none; padding: 8px 8px; border-radius:4px; font-size:1.25rem; font-weight: 700; color:#625F5F; border:1px solid #035388;" id="targeted_band_score_8" onclick="expected_band_score_func(8)">
                                                        Band: 8.0 - Band: 8.5
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div id="a1_course_duration" style="height: 50px; background-color:rgb(237 237 237 / 39%);padding:0 2.25rem;"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div id="a2_course_duration" style="height: 100px; background-color:rgb(237 237 237 / 39%);padding:0 2.25rem;"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div id="b1_course_duration" style="height: 150px; background-color:rgb(237 237 237 / 39%);padding:0 2.25rem;"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div id="b2_course_duration" style="height: 200px; background-color:rgb(237 237 237 / 39%);padding:0 2.25rem;"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div style="height: 300px; display: flex; justify-content: flex-start; align-items: flex-end;">
                                                            <div id="c1_course_duration" style="height: 250px; background-color:rgb(237 237 237 / 39%);padding:0 2.25rem;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <div id="a1_course_benefit_icon">
                                                        <div style="font-size: 1.25rem; font-weight:600"><span><input type="radio" name="" id="a1_course_benefit_radio" onclick="courseBenefitRadio('a1')"></span> A1</div>
                                                    </div>
                                                    <div id="a2_course_benefit_icon">
                                                        <div style="font-size: 1.25rem; font-weight:600"><span><input type="radio" name="" id="a2_course_benefit_radio" onclick="courseBenefitRadio('a2')"></span> A2</div>
                                                    </div>
                                                    <div id="b1_course_benefit_icon">
                                                        <div style="font-size: 1.25rem; font-weight:600"><span><input type="radio" name="" id="b1_course_benefit_radio" onclick="courseBenefitRadio('b1')"></span> B1</div>
                                                    </div>
                                                    <div id="b2_course_benefit_icon">
                                                        <div style="font-size: 1.25rem; font-weight:600"><span><input type="radio" name="" id="b2_course_benefit_radio" onclick="courseBenefitRadio('b2')"></span> B2</div>
                                                    </div>
                                                    <div id="c1_course_benefit_icon">
                                                        <div style="font-size: 1.25rem; font-weight:600"><span><input type="radio" name="" id="c1_course_benefit_radio" onclick="courseBenefitRadio('c1')"></span> C1</div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered mt-5 mb-0">
                                                    <thead>
                                                        <th style="background-color:transparent; border:none; font-size: 1.125rem; font-weight:600; color:#004AAD;">Enrolled Course</th>
                                                        <th style="background-color:transparent; border:none; font-size: 1.125rem; font-weight:600; color:#004AAD;">Course Level</th>
                                                        <th style="float: right; background-color:transparent; border:none; font-size: 1.125rem; font-weight:600; color:#004AAD;">Duration</th>
                                                    </thead>
                                                </table>
                                                <div id="a1_course_level_duration">
                                                    <div class="d-flex justify-content-between"  style="border-bottom: 1px solid #DEDCDC; padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> A1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Elementory</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="a2_course_level_duration">
                                                    <div class="d-flex justify-content-between" style="border-bottom: 1px solid #DEDCDC;  padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> A2</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Basic English</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="b1_course_level_duration">
                                                    <div class="d-flex justify-content-between" style="border-bottom: 1px solid #DEDCDC;  padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> B1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Pre- Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="b2_course_level_duration">
                                                    <div class="d-flex justify-content-between" style="border-bottom: 1px solid #DEDCDC;  padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> B2</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Express Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="c1_course_level_duration">
                                                    <div class="d-flex justify-content-between" style=" padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> C1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Advanced Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <p class="total-time">Total Course Duration: <span id="course_completed_time"></span> Months +</p>
                                            </div>
                                            <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <p class="course-benefit-title"><i class="fa-solid fa-list-check me-1"></i> Course Benefit</p>
                                               <div class="my-2" id="a1_course_benefit">
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="a1_course_benefit_active_1"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">ইংরেজি ভাষার fundamental elements সম্পর্কে ধারণা পাবেন</span>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="a1_course_benefit_active_2"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Basic vocabulary শিখবেন</span>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="a1_course_benefit_active_3"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Simple sentence structure শিখবেন</span>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="a1_course_benefit_active_4"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Basic English conversation practice করার মাধ্যমে confident হবেন</span>
                                                    </div>
                                               </div>
                                               <div class="my-2" id="a2_course_benefit">
                                                    <div class="d-flex justify-content">
                                                        <span class="course-benefit-icon" id="a2_course_benefit_active_1"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Basic grammar structure গুলো শিখতে পারবেন</span>
                                                    </div>
                                                    <div class="d-flex justify-content">
                                                        <span class="course-benefit-icon" id="a2_course_benefit_active_2"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Context ভিত্তিক vocabulary শিখতে পারবেন </span>
                                                    </div>
                                                    <div class="d-flex justify-content">
                                                        <span class="course-benefit-icon" id="a2_course_benefit_active_3"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Writing এবং speaking এর জন্য Idea generation শেখানো হবে</span>
                                                    </div>
                                                    <div class="d-flex justify-content">
                                                        <span class="course-benefit-icon" id="a2_course_benefit_active_4"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Familiar topic এ ইংরেজিতে কথা বলার ability তৈরী হবে</span>
                                                    </div>
                                               </div>
                                               <div class="my-2" id="b1_course_benefit">
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="b1_course_benefit_active_1"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">IELTS different question pattern এর সাথে পরিচিত হবেন</span>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="b1_course_benefit_active_2"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Complex sentence structure এবং advanced grammar application শিখতে পারবেন</span>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="b1_course_benefit_active_3"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Talk about speaking 2 minutes in a row kotha bolte parbe, 30 cue card ekhane shikhbe</span>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="course-benefit-icon" id="b1_course_benefit_active_4"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Reading, Writing, Listening এবং Speaking এই ৪ টি module practice করানো হবে</span>
                                                    </div>
                                               </div>
                                               <div class="my-2" id="b2_course_benefit">
                                                    <div>
                                                        <span class="course-benefit-icon" id="b2_course_benefit_active_1"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">IELTS test দেয়ার জন্য প্রস্তুত হবেন</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="b2_course_benefit_active_2"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">বিভিন্ন context বোঝা বা তৈরী করার জন্য প্রয়জনীয় advanced grammar strecture এবং vocabulary শিখবেন</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="b2_course_benefit_active_3"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Practice এর মাধ্যমে Speaking এর fluency বৃদ্ধি পাবে</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="b2_course_benefit_active_4"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Reading এর different question type এর সঠিক উত্তর দেয়ার জন্য deciceve ability, analytical ability এবং critical thinking ability enhanced তৈরী হবে</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="b2_course_benefit_active_5"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Writing task 2 তে Argumentative essay লেখার দক্ষতা অর্জন করবেন</span>
                                                    </div>
                                               </div>
                                               <div class="my-2" id="c1_course_benefit">
                                                    <div>
                                                        <span class="course-benefit-icon" id="c1_course_benefit_active_1"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">7+ স্কোর করার জন্য প্রস্তুত হবেন</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="c1_course_benefit_active_2"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">IELTS এ ভালো করার advance method শিখতে পারবেন</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="c1_course_benefit_active_3"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">High-level academic এবং professional writing বোঝার skill develop হবে</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="c1_course_benefit_active_4"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Idiomatic expression এবং sophisticated vocabulary শিখতে পারবেন</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="c1_course_benefit_active_5"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Reading এ থাকা argumentative এবং discursive essays বুঝে answer করতে পারবেন</span>
                                                    </div>
                                                    <div>
                                                        <span class="course-benefit-icon" id="c1_course_benefit_active_6"><i class="fa-solid fa-circle-check"></i></span>
                                                        <span class="course-benefit-text">Highly cohesive and coherent writing ability তৈরী হবে</span>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p class="card-titles mt-3 mb-4"><i class="fa-solid fa-book-bookmark"></i> Course Content</p>
                                        <div class="row">
                                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-start">
                                                        <div class="details-border" id="a1-course-description"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentA1">A1</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <div class="details-border" id="a2-course-description"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentA2">A2</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <div class="details-border" id="b1-course-description"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentB1">B1</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <div class="details-border" id="b2-course-description"> 
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#courseContentB2">B2</button>
                                                        </div>
                                                        <div class="course-content-arrow"></div>
                                                    </div>
                                                    <div>
                                                        <div class="details-border" id="c1-course-description"> 
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
                                <div class="mt-5">
                                    <p class="card-titles mt-4 mb-1"><i class="fa-regular fa-calendar-days"></i> Class Schdule</p>
                                    <div class="class-schdule">
                                        <div class="form-check">
                                            <input type="radio" id="flexRadioDefault1" value="" onclick="classSchdule('regular')">
                                            <label class="form-check-label mt-1 mx-2 fs-5" for="flexCheckDefault">Regular Batch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" value="" id="flexRadioDefault2" onclick="classSchdule('weekly')">
                                            <label class="form-check-label mt-1 mx-2 fs-5" for="flexCheckDefault">Weekend Batch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" value="" id="flexRadioDefault3" onclick="classSchdule('online')">
                                            <label class="form-check-label mt-1 mx-2 fs-5" for="flexCheckDefault">Online Batch</label>
                                        </div>
                                    </div>
                                    <div style="border: 1.5px solid #7c7c7c; width:40%; border-radius: 4px; margin-top: 20px; padding: 20px 10px;">
                                        <ul class="mb-0">
                                            <li class="fw-bold" id="regular-batch-day">Weekly Two Or Three Days </li>
                                            <li class="fw-bold" id="weekend-batch-day">Friday</li>
                                            <li class="mb-0"><span class="fw-bold">Language Club:</span> Saturday</li>
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
                                <div>
                                    <ul style="border-bottom: 1px solid #d5d5d5; padding:0">
                                        <li id="regular-course-pirce-id" onclick="priceSegment('regular')" style="list-style: none; display:inline-block; margin:0 0 0 0; font-size:1.125rem; cursor: pointer;">Regular Price</li>
                                        <li id="packages-course-pirce-id" onclick="priceSegment('packages')" style="list-style: none; display:inline-block; margin:0 0 0 8px; font-size:1.125rem; cursor: pointer;">Packages Price</li>
                                    </ul>
                                </div>
                                <div class="mx-5 px-5">
                                    <div id="regular-course-price-section">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td style="background-color: #7c6b97;" class="td-total text-white pt-3">Courses</td>
                                                <td style="background-color: #7776B3;" class="td-total text-white pt-3">Regular <p>Fees</p></td>
                                                <td style="background-color: #5A639C;" class="td-total text-white pt-3">After Discount</td>
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
                                                        @else
                                                            {{number_format(Helper::coursePrice('c1')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseC1TdDiscountPrice1Input" value="{{Helper::coursePrice('c1')['discount_price'] == 'N/A'? Helper::coursePrice('c1')['regular_price'] : Helper::coursePrice('c1')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="priviliged_price_row" style="display: none !important;">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="privilegedCoursePriceBtn" onclick="coursetdlist('privileged')">Privileged</td>
                                                <td style="background-color: #fff;" class="td-price"></td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="coursePrivileged">
                                                        - {{number_format($priviliged_price->priviliged_price)}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="coursePriviligedTdPrice1Input" value="{{$priviliged_price->priviliged_price}}">
                                                </td>
                                            </tr>
                                            <tr id="total_course_price_row" style="display: none !important;">
                                                <td style="background: #5d5071;" class="td-total text-white py-3">Total</td>
                                                <td style="background-color: #f1f1f1;" class="td-price py-3" id="totalCourseRegularPrice"></td>
                                                <td style="background-color: #f1f1f1;" class="td-price py-3" id="totalCourseDiscountPrice"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="packages-course-price-section">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td style="background-color: #7c6b97;" class="td-total text-white pt-3">Packages</td>
                                                <td style="background-color: #7776B3;" class="td-total text-white pt-3">Regular <p>Fees</p></td>
                                                <td style="background-color: #5A639C;" class="td-total text-white pt-3">After Discount</td>
                                            </tr>
                                            <tr id="a1_a2_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="a1a2CoursePriceBtn" onclick="coursePackageTdPrice('a1-a2')">A1 - A2</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA1A2TdPrice1">
                                                    {{number_format(Helper::courseBundlePrice('A1-A2')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseA1A2TdPrice1Input" value="{{Helper::courseBundlePrice('A1-A2')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA1A2TdPrice2">
                                                        @if (Helper::courseBundlePrice('A1-A2')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('A1-A2')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('A1-A2')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseA1A2TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('A1-A2')['discount_price'] == 'N/A'? Helper::courseBundlePrice('A1-A2')['regular_price'] : Helper::courseBundlePrice('A1-A2')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="a1_b2_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="a1b2CoursePriceBtn" onclick="coursePackageTdPrice('a1-b2')">A1 - B2</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA1B2TdPrice1">
                                                        {{number_format(Helper::courseBundlePrice('A1-B2')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseA1B2TdPrice1Input" value="{{Helper::courseBundlePrice('A1-B2')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA1B2TdPrice2">
                                                        @if (Helper::courseBundlePrice('A1-B2')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('A1-B2')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('A1-B2')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseA1B2TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('A1-B2')['discount_price'] == 'N/A'? Helper::courseBundlePrice('A1-B2')['regular_price'] : Helper::courseBundlePrice('A1-B2')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="a2_b2_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="a2b2CoursePriceBtn" onclick="coursePackageTdPrice('a2-b2')">A2 - B2</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA2B2TdPrice1">
                                                        {{number_format(Helper::courseBundlePrice('A2-B2')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseA2B2TdPrice1Input" value="{{Helper::courseBundlePrice('A2-B2')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA2B2TdPrice2">
                                                        @if (Helper::courseBundlePrice('A2-B2')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('A2-B2')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('A2-B2')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseA2B2TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('A2-B2')['discount_price'] == 'N/A'? Helper::courseBundlePrice('A2-B2')['regular_price'] : Helper::courseBundlePrice('A2-B2')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="a2_c1_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="a2c1CoursePriceBtn" onclick="coursePackageTdPrice('a2-c1')">A2 - C1</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA2C1TdPrice1">
                                                        {{number_format(Helper::courseBundlePrice('A2-C1')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseA2C1TdPrice1Input" value="{{Helper::courseBundlePrice('A2-C1')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseA2C1TdPrice2">
                                                        @if (Helper::courseBundlePrice('A2-C1')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('A2-C1')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('A2-C1')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseA2C1TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('A2-C1')['discount_price'] == 'N/A'? Helper::courseBundlePrice('A2-C1')['regular_price'] : Helper::courseBundlePrice('A2-C1')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="b1_b2_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="b1b2CoursePriceBtn" onclick="coursePackageTdPrice('b1-b2')">B1 - B2</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseB1B2TdPrice1">
                                                        {{number_format(Helper::courseBundlePrice('B1-B2')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseB1B2TdPrice1Input" value="{{Helper::courseBundlePrice('B1-B2')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseB1B2TdPrice2">
                                                        @if (Helper::courseBundlePrice('B1-B2')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('B1-B2')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('B1-B2')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseB1B2TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('B1-B2')['discount_price'] == 'N/A'? Helper::courseBundlePrice('B1-B2')['regular_price'] : Helper::courseBundlePrice('B1-B2')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="b1_c1_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="b1c1CoursePriceBtn" onclick="coursePackageTdPrice('b1-c1')">B1 - C1</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseB1C1TdPrice1">
                                                        {{number_format(Helper::courseBundlePrice('B1-C1')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseB1C1TdPrice1Input" value="{{Helper::courseBundlePrice('B1-C1')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseB1C1TdPrice2">
                                                        @if (Helper::courseBundlePrice('B1-C1')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('B1-C1')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('B1-C1')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseB1C1TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('B1-C1')['discount_price'] == 'N/A'? Helper::courseBundlePrice('B1-C1')['regular_price'] : Helper::courseBundlePrice('B1-C1')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="b2_c1_course_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="b2c1CoursePriceBtn" onclick="coursePackageTdPrice('b2-c1')">B2 - C1</td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseB2C1TdPrice1">
                                                        {{number_format(Helper::courseBundlePrice('B2-C1')['regular_price'])}}/-
                                                    </div>
                                                    <input type="hidden" name="" id="courseB2C1TdPrice1Input" value="{{Helper::courseBundlePrice('B2-C1')['regular_price']}}">
                                                </td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="courseB2C1TdPrice2">
                                                        @if (Helper::courseBundlePrice('B2-C1')['discount_price'] == 'N/A')
                                                            {{number_format(Helper::courseBundlePrice('B2-C1')['regular_price'])}}/-
                                                        @else
                                                            {{number_format(Helper::courseBundlePrice('B2-C1')['discount_price'])}}/-
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="" id="courseB2C1TdDiscountPrice1Input" value="{{Helper::courseBundlePrice('B2-C1')['discount_price'] == 'N/A'? Helper::courseBundlePrice('B2-C1')['regular_price'] : Helper::courseBundlePrice('B2-C1')['discount_price']}}">
                                                </td>
                                            </tr>
                                            <tr id="priviliged_packages_price_row">
                                                <td style="background-color: #f5f3f8; cursor: pointer; color:#232323;" class="td-total" id="privilegedPackagesCoursePriceBtn" onclick="coursePackageTdPriviligedPrice()">Privileged</td>
                                                <td style="background-color: #fff;" class="td-price"></td>
                                                <td style="background-color: #fff;" class="td-price">
                                                    <div id="">
                                                        <div id="previliged_package_a1_a2">
                                                            -  {{number_format(Helper::courseBundlePrice('A1-A2')['priviliged_price'])}}/-
                                                        </div>
                                                        <div id="previliged_package_a1_b2">
                                                            -  {{number_format(Helper::courseBundlePrice('A1-B2')['priviliged_price'])}}/-
                                                        </div>
                                                        <div id="previliged_package_a2_b2">
                                                            -  {{number_format(Helper::courseBundlePrice('A2-B2')['priviliged_price'])}}/-
                                                        </div>
                                                        <div id="previliged_package_a2_c1">
                                                            -  {{number_format(Helper::courseBundlePrice('A2-C1')['priviliged_price'])}}/-
                                                        </div>
                                                        <div id="previliged_package_b1_b2">
                                                            -  {{number_format(Helper::courseBundlePrice('B1-B2')['priviliged_price'])}}/-
                                                        </div>
                                                        <div id="previliged_package_b1_c1">
                                                            -  {{number_format(Helper::courseBundlePrice('B1-C1')['priviliged_price'])}}/-
                                                        </div>
                                                        <div id="previliged_package_b2_c1">
                                                            -  {{number_format(Helper::courseBundlePrice('B2-C1')['priviliged_price'])}}/-
                                                        </div>
                                                        <input type="hidden" name="" id="courseA1A2PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('A1-A2')['priviliged_price']}}">
                                                        <input type="hidden" name="" id="courseA1B2PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('A1-B2')['priviliged_price']}}">
                                                        <input type="hidden" name="" id="courseA2B2PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('A2-B2')['priviliged_price']}}">
                                                        <input type="hidden" name="" id="courseA2C1PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('A2-C1')['priviliged_price']}}">
                                                        <input type="hidden" name="" id="courseB1B2PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('B1-B2')['priviliged_price']}}">
                                                        <input type="hidden" name="" id="courseB1C1PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('B1-C1')['priviliged_price']}}">
                                                        <input type="hidden" name="" id="courseB2C1PackagePriviligedTdPrice1Input" value="{{Helper::courseBundlePrice('B2-C1')['priviliged_price']}}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="total_course_price_row">
                                                <td style="background: #5d5071;" class="td-total text-white py-3">Total</td>
                                                <td style="background-color: #f1f1f1;" class="td-price py-3" id="totalPackageCourseRegularPrice"></td>
                                                <td style="background-color: #f1f1f1;" class="td-price py-3" id="totalPackageCourseDiscountPrice"></td>
                                            </tr>
                                        </table>
                                    </div>
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
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Express Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                                <div id="c1CourseOverview">
                                                    <div class="d-flex justify-content-between" style=" padding: 8px 0;">
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;"><span style="color: #004AAD;"><i class="fa-solid fa-circle-check"></i></span> C1</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">Advanced Ielts</p>
                                                        <p class="mb-0" style="font-size:1.125rem; font-weight:400;">1 month</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="totaled-month-duration">
                                                <p class="mb-0 py-2 px-3">Total Duration: <span id="courseOverviewTime">0</span> Months +</p>
                                            </div>
                                            <div class="course-achievement">
                                                <p class="card-titles"><i class="fa-solid fa-book-bookmark"></i> Course Achievement</p>
                                                <div class="course-achievement-box">
                                                    <p class="course"><span style="color:#004AAD;"><i class="fa-solid fa-trophy"></i></span> 
                                                        {{Helper::overall_rubricks($all_module_marks)}} - 
                                                        @if ($student_info->expected_score >= 7)
                                                            C1
                                                        @elseif($student_info->expected_score <= 6.5)
                                                            B2
                                                        @endif
                                                    </p>
                                                    <p class="status"><span class="fw-bold fs-5">Course Level:</span> 
                                                        @if ($student_info->expected_score >= 7)
                                                            Advanced
                                                        @elseif($student_info->expected_score <= 6.5)
                                                            Express
                                                        @endif
                                                         IELTS
                                                    </p>
                                                    <p class="status"><span class="fw-bold fs-5">Achieve Band Score:</span>  
                                                        @if ($student_info->expected_score >= 7)
                                                            7
                                                        @elseif($student_info->expected_score <= 6.5)
                                                            6.5
                                                        @endif
                                                        Plus
                                                    </p>
                                                    <p class="status"><span class="fw-bold fs-5">Status:</span> 
                                                        @if (Helper::overall_rubricks($all_module_marks) == 'A1')
                                                            Elementory
                                                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A2')
                                                            Pre Intermediate
                                                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B1')
                                                            Intermediate
                                                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B2')
                                                            Upper Intermediate
                                                        @elseif (Helper::overall_rubricks($all_module_marks) == 'C1')
                                                            Advanced
                                                        @endif
                                                        To 
                                                        @if ($student_info->expected_score >= 7)
                                                            Advanced
                                                        @elseif($student_info->expected_score <= 6.5)
                                                            Upper Intermediate
                                                        @endif
                                                    </p>
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
                                                        <p class="mb-1">Discount amount</p>
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
                                                    <div class="privileged-price" style="display: none">
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
                                                    <form action="{{route('student.total.enrolled course')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="student_id" id="" value="{{$studentId}}">
                                                        <div id="enrolled_course_stu">

                                                        </div>
                                                        <button type="submit">Confirm Purchase</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                    'Given-Incorrect',
                    'Unanswered'
                ],
                datasets: [{
                    label: 'Marks',
                    data: [correct, in_correct, unanswered],
                    backgroundColor: [
                    '#007ed6',
                    '#ff7300',
                    '#9badf2',
                    ],
                    borderColor: [
                    '#007ed6',
                    '#ff7300',
                    '#9badf2',
                    ],
                    backgroundColor: [
                    '#007ed6',
                    '#ff7300',
                    '#9badf2',
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
            },
            maintainAspectRatio: false,
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
            "#4CAF50",
            "#FF5733",
            "#FFC300",
            "#3498DB",
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
@section('student-result-details-js')
<script>
    document.getElementById('regular-course-pirce-id').classList.add("price-package-active") ;
    document.getElementById('packages-course-price-section').style.display = 'none';
    function priceSegment(ev){
        if(ev == 'regular'){
            document.getElementById('regular-course-pirce-id').classList.add("price-package-active");
            document.getElementById('packages-course-pirce-id').classList.remove("price-package-active");
            document.getElementById('regular-course-price-section').style.display = 'block';
            document.getElementById('packages-course-price-section').style.display = 'none';
        }else if(ev == 'packages'){
            document.getElementById('regular-course-pirce-id').classList.remove("price-package-active");
            document.getElementById('packages-course-pirce-id').classList.add("price-package-active");
            document.getElementById('regular-course-price-section').style.display = 'none';
            document.getElementById('packages-course-price-section').style.display = 'block';
        }
    }
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

