{{-- @extends('layouts.app')
@section('content') --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  </head>
  <body style="position: relative;">
    
<section class="result-card-header">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="{{asset('frontend/images/full_logo.png')}}" alt="">
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p class="mb-0">6th Floor, House: 34 Garib-E-Newaz Avenue, Sector: 11, Uttara, Dhaka 1230 <i class="fa-solid fa-location-dot"></i></p>
                        <p class="mb-0">Plot#23, Main road Section: 11, Pallabi Mirpur, Dhaka 1216 <i class="fa-solid fa-location-dot"></i></p>
                    </div>
                </div>
                <img style = "position: absolute; top: 0; left: 50%; transform: translate(-50%, 245%); width: 10%; opacity: 18%;" src="{{asset('frontend/images/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="report-text">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
               <h3 class="title">Placement Test Report</h3>
               <p class="name">Minar Ahmed,</p>
               <p class="text">
                আপনি ব্রিটিশ আমেরিকান রিসোর্স সেন্টারে এসে ইংরেজি ভাষা দক্ষতা পরিমাপের জন্য ৪০ মিনিটের একটি পরীক্ষা দিয়েছেন | 
                এবং আপনার অবস্থান <span class="level">{{Helper::overall_rubricks($all_module_marks)}} level</span> এ.
               </p>
            </div>
        </div>
    </div>
</section>
<section class="course-level">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="full_box">
                            <div class="box_header">
                                <div class="inner_box_top_1" id="resultActiveClass1">
                                    <p class="fs-5 fw-bold">A1</p>
                                    <h5 class="fw-bolder">Elementary</h5>
                                </div>
                            </div>
                            <div class="box_bind_class">
                                <h5 class="fw-bold">4.0</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="full_box">
                            <div class="box_header">
                                <div class="inner_box_top_2" id="resultActiveClass2">
                                    <p class="fs-5 fw-bold">A2</p>
                                    <h5 class="fw-bolder">Pre-intermediate</h5>
                                </div>
                            </div>
                            <div class="box_bind_class">
                            <h5 class="fw-bold">4.5 - 5.0</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="full_box">
                            <div class="box_header">
                                <div class="inner_box_top_3" id="resultActiveClass3">
                                    <p class="fs-5 fw-bold">B1</p>
                                    <h5 class="fw-bolder">Intermediate</h5>
                                </div>
                            </div>
                            <div class="box_bind_class">
                                <h5 class="fw-bold">5.0 - 5.5</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="full_box">
                            <div class="box_header">
                                <div class="inner_box_top_4" id="resultActiveClass4">
                                    <p class="fs-5 fw-bold">B2</p>
                                    <h5 class="fw-bolder">Upper Intermediate</h5>
                                </div>
                            </div>
                            <div class="box_bind_class">
                                <h5 class="fw-bold">6.0 - 6.5</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="full_box">
                            <div class="box_header">
                                <div class="inner_box_top_5" id="resultActiveClass5">
                                    <p class="fs-5 fw-bold">C1</p>
                                    <h5 class="fw-bolder">Advanced</h5>
                                </div>
                            </div>
                            <div class="box_bind_class">
                                <h5 class="fw-bold">7.0 - 7.5</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="full_box">
                            <div class="box_header">
                                <div class="inner_box_top_6" id="resultActiveClass6">
                                    <p class="fs-5 fw-bold">C2</p>
                                    <h5 class="fw-bolder">Proficient</h5>
                                </div>
                            </div>
                            <div class="box_bind_class">
                                <h5 class="fw-bold">8.0+</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="course-score">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="result">
                                    <div class="header">পরীক্ষার ফলাফল</div>
                                    <div class="inner">
                                        <div class="listing">
                                            <h5><i class="fa-solid fa-headphones"></i> Listening</h5>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-listening mt-2" id="file" value="{{number_format(($sum_listening_module*100)/15)}}" max="100"></progress>
                                                <span style="margin: 0 0 0 6px;">{{number_format(($sum_listening_module*100)/15)}}%</span>
                                            </div>
                                        </div>
                                        <div class="reading">
                                            <h5><i class="fa-solid fa-book-open-reader"></i> Reading</h5>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-reading mt-2" id="file" value="{{number_format(($sum_reading_module*100)/15)}}" max="100"></progress>
                                                <span style="margin: 0 0 0 6px;">{{number_format(($sum_reading_module*100)/15)}}%</span>
                                            </div>
                                        </div>
                                        <div class="reading">
                                            <h5><i class="fa-solid fa-pen-to-square"></i> Writing</h5>
                                            <div class="d-flex justify-content-start">
                                                <progress class="progress-bar-grammar mt-2" id="file" value="{{number_format(($sum_writing_module*100)/30)}}" max="100"></progress>
                                                <span style="margin: 0 0 0 6px;">{{number_format(($sum_writing_module*100)/30)}}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">   
                                <div class="result">
                                    <div class="header"> টার্গেট স্কোর এবং  বর্তমান অবস্থা</div>
                                    <div class="inner">
                                        <canvas id="total-mark-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="band-wise-course">
                            <h4>Band 
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
                                থেকে Band 
                                {{$student_info->expected_score}}
                                এ যেতে যে কোর্সগুলো করতে হবে
                            </h4>
                            <div class="d-flex justify-content-between">
                                @if (Helper::overall_rubricks($all_module_marks) == 'A1' && $student_info->expected_score<7)
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && $student_info->expected_score>=7)
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && $student_info->expected_score<7)
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && $student_info->expected_score>=7)
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && $student_info->expected_score<7)
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && $student_info->expected_score>=7)
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && $student_info->expected_score<7)
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && $student_info->expected_score>=7)
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @elseif (Helper::overall_rubricks($all_module_marks) == 'C1')
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">A2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">B1 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-disable"><i class="fa-solid fa-circle-xmark"></i></span>
                                        <span class="course-name">B2 Level</span>
                                    </div>
                                    <div class="course-box">
                                        <span class="iccon-active"><i class="fa-solid fa-circle-check"></i></span>
                                        <span class="course-name">C1 Level</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="result">
                            <div class="header">আপনার বর্তমান অবস্থা</div>
                            <div class="inner p-3">
                                <p class="mb-0 fw-bold">Listening</p>
                                <ul style="margin: 0; padding: 0 0 0 15px;">
                                    @if (number_format(($sum_listening_module*100)/15)==0)
                                        <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                    @elseif (number_format(($sum_listening_module*100)/15)>0 && number_format(($sum_listening_module*100)/15)<=17)
                                        <li class="mb-1" style="font-size:0.875rem;">Familiar situation-এ basic dialogue বুঝতে পারেন।</li>
                                    @elseif (number_format(($sum_listening_module*100)/15)>17 && number_format(($sum_listening_module*100)/15)<=34)
                                        <li class="mb-1" style="font-size:0.875rem;">পুরো conversation এর main theme বুঝতে পারেন তবে Complex sentence এর track রাখতে পারেন না।</li>
                                    @elseif (number_format(($sum_listening_module*100)/15)>34 && number_format(($sum_listening_module*100)/15)<=51)
                                        <li class="mb-1" style="font-size:0.875rem;">Situational discussion এবং মোটামুটি complex monologue বুঝতে পারেন।</li>
                                    @elseif (number_format(($sum_listening_module*100)/15)>51 && number_format(($sum_listening_module*100)/15)<=68)
                                        <li class="mb-1" style="font-size:0.875rem;">সাধারনত complex discussion এর track রাখতে পারেন। তবে কিছু কিছু ক্ষেত্রে বা unfamiliar situation এ সঠিক তথ্য খুঁজে বের করতে সমস্যা হতে পারে।</li>
                                    @elseif (number_format(($sum_listening_module*100)/15)>51 && number_format(($sum_listening_module*100)/15)<=85)
                                        <li class="mb-1" style="font-size:0.875rem;">ভালো ভাবে যে কোন কথা বুঝতে পারেন। তবে মাঝে মাঝে unfamiliar situation এ misunderstanding হতে পারে। </li>
                                    @elseif (number_format(($sum_listening_module*100)/15)>85 && number_format(($sum_listening_module*100)/15)<=100)
                                        <li class="mb-1" style="font-size:0.875rem;">Realtime এ কথা শুনে সঠিক তথ্য বুঝতে পারেন। </li>
                                    @endif
                                </ul>
                                <p class="mb-0 fw-bold">Reading</p>
                                <ul style="margin: 0; padding: 0 0 0 15px;">
                                    @if (number_format(($sum_reading_module*100)/15)==0)
                                        <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                    @elseif (number_format(($sum_reading_module*100)/15)>0 && number_format(($sum_reading_module*100)/15)<=17)
                                        <li class="mb-1" style="font-size:0.875rem;">Passage এ থাকা complex sentence গুলোর ব্যাবহার বুঝতে পারেন নি। যেখানে synonym বা paraphrase ব্যবহার করা হয়েছে, সেখানে অর্থ বুঝতে পারেন নি।</li>
                                    @elseif (number_format(($sum_reading_module*100)/15)>17 && number_format(($sum_reading_module*100)/15)<=34)
                                        <li class="mb-1" style="font-size:0.875rem;">Complex sentence বুঝতে পারলেও overall idea বুঝতে অসুবিধা হচ্ছে। Synonym বা paraphrase এর কেবল সীমিত ধারনা আছে।</li>
                                    @elseif (number_format(($sum_reading_module*100)/15)>34 && number_format(($sum_reading_module*100)/15)<=51)
                                        <li class="mb-1" style="font-size:0.875rem;">Familiar vocabulary থাকলে complex sentence এর অর্থ এবং paragraph এর মূল idea বুঝতে পারছেন। কিন্তু যখন advanced vocabulary সহ complex sentence structure ছিলো তখন বুঝতে সমস্যা হয়েছে।</li>
                                    @elseif (number_format(($sum_reading_module*100)/15)>51 && number_format(($sum_reading_module*100)/15)<=68)
                                        <li class="mb-1" style="font-size:0.875rem;">Passage এ থাকা কয়েকটি advanced situation এর context বুঝতে পারেন নি। Passage পড়ে মাঝে মধ্যে context বোঝার ক্ষেত্রে inaccuracy এবং misunderstanding এর মত সমস্যা face করেছেন।</li>
                                    @elseif (number_format(($sum_reading_module*100)/15)>51 && number_format(($sum_reading_module*100)/15)<=85)
                                        <li class="mb-1" style="font-size:0.875rem;">Complex বা unfamiliar situation এ সীমিত কিছু ভুল করেছেন। Advanced vocabulary যেখানে ব্যবহার করা হয়েছে সেখানে context identify করতে confused হয়েছেন। নির্ভুল থাকার জন্য অনেক বেশী practice করতে হবে।  </li>
                                    @elseif (number_format(($sum_reading_module*100)/15)>85 && number_format(($sum_reading_module*100)/15)<=100)
                                        <li class="mb-1" style="font-size:0.875rem;">দ্রুত সময়ে পড়ে সঠিক ভাবে passage এর context এবং idea বুঝতে পারেন। অল্প সময়ে সঠিক তথ্য বের করে আনতে পারেন। তবে নির্ভুল থাকার জন্য practice করা চালিয়ে যাতে হবে। </li>
                                    @endif
                                </ul>
                                <p class="mb-0 fw-bold">Writing</p>
                                <ul style="margin: 0; padding: 0 0 0 15px;">
                                    @if (number_format(($sum_grammar_module*100)/15)==0)
                                        <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                    @elseif (number_format(($sum_grammar_module*100)/15)>0 && number_format(($sum_grammar_module*100)/15)<=17)
                                        <li class="mb-1" style="font-size:0.875rem;">গ্রামারে অনেক বেশী দুর্বলতা আছে। </li>
                                        <li class="mb-1" style="font-size:0.875rem;">Sentence structure এ অনেক দুর্বলতা আছে।</li>
                                    @elseif (number_format(($sum_grammar_module*100)/15)>17 && number_format(($sum_grammar_module*100)/15)<=34)
                                        <li class="mb-1" style="font-size:0.875rem;">Sentence structure সম্পর্কে basic ধারণা আছে।</li>
                                        <li class="mb-1" style="font-size:0.875rem;">তবে complex sentence অন্যান্য grammar item এ ভুল করেছেন এবং</li>
                                    @elseif (number_format(($sum_grammar_module*100)/15)>34 && number_format(($sum_grammar_module*100)/15)<=51)
                                        <li class="mb-1" style="font-size:0.875rem;">একি passage এ simple এবং complex sentence এর ব্যবহার থাকলে আপনি সমস্যা face করেছেন। তার পাশাপাশি advanced grammar task ভুল করেছেন।</li>
                                    @elseif (number_format(($sum_grammar_module*100)/15)>51 && number_format(($sum_grammar_module*100)/15)<=68)
                                        <li class="mb-1" style="font-size:0.875rem;">Advanced grammatical item এ অল্প পরিমানে ভুল করেছেন।</li>
                                    @elseif (number_format(($sum_grammar_module*100)/15)>51 && number_format(($sum_grammar_module*100)/15)<=85)
                                        <li class="mb-1" style="font-size:0.875rem;">Grammatical এবং lexical item গুলো skillfully ব্যাবহার করতে পেরেছেন। তবে আপনি শতভাগ নির্ভুল নন। Occasional ভুল কমিয়ে আনতে অনেক বেশী practice করতে হবে।</li>
                                    @elseif (number_format(($sum_grammar_module*100)/15)>85 && number_format(($sum_grammar_module*100)/15)<=100)
                                        <li class="mb-1" style="font-size:0.875rem;">যে কোন ধরনের grammatical structure ব্যাবহার করতে পারেন। তবে occasional ভুল না করতে practice চালিয়ে যেতে হবে। </li>
                                    @endif


                                    @if (number_format(($sum_vocabulary_module*100)/15)==0)
                                        <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                    @elseif (number_format(($sum_vocabulary_module*100)/15)>0 && number_format(($sum_vocabulary_module*100)/15)<=17)
                                        <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Basic user</li>
                                    @elseif (number_format(($sum_vocabulary_module*100)/15)>17 && number_format(($sum_vocabulary_module*100)/15)<=34)
                                        <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Pre-intermediate user</li>
                                    @elseif (number_format(($sum_vocabulary_module*100)/15)>34 && number_format(($sum_vocabulary_module*100)/15)<=51)
                                        <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Intermediate user</li>
                                    @elseif (number_format(($sum_vocabulary_module*100)/15)>51 && number_format(($sum_vocabulary_module*100)/15)<=68)
                                        <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Upper intermediate user</li>
                                    @elseif (number_format(($sum_vocabulary_module*100)/15)>51 && number_format(($sum_vocabulary_module*100)/15)<=85)
                                        <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Advanced user</li>
                                    @elseif (number_format(($sum_vocabulary_module*100)/15)>85 && number_format(($sum_vocabulary_module*100)/15)<=100)
                                        <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Proficient  user </li>
                                    @endif
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advisor">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="advisor-info">
                            <p class="course">কোর্স বিষয়ে যে কোন তথ্য বা সহায়তা পেতে যোগাযোগ করুনঃ</p>
                            <p class="name"> {{ Auth::user()->name }}</p>
                            <p class="designation"> {{ Auth::user()->designation }}</p>
                            <p class="phone">ব্রিটিশ আমেরিকান রিসোর্স সেন্টার, <span class="fs-5">{{ Auth::user()->phone }}</span></p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <img class="bar-code" src="{{asset('frontend/images/result-card/bar-code-full.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="text-end">
                            <img class="logo" src="{{asset('frontend/images/full_logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <p class="visit-day">Visit day discount পেতে এই পেপারটি সংরক্ষন করুন</p>
            </div>
        </div>
    </div>
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="website"><i class="fa-solid fa-globe"></i> www.hellobarc.com</p>
                        <p class="email"><i class="fa-solid fa-envelope"></i> care@hellobarc.com</p>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="uttara-ph">(Uttara) 01617-302010 <i class="fa-solid fa-phone"></i></p>
                        <p class="mirpur-ph">( Mirpur) 01617-302011 <i class="fa-solid fa-phone"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    var level = "{{Helper::overall_rubricks($all_module_marks)}}";
    let target_level = "{{$student_info->expected_score}}";
    if(level == 'A1'){
        var current_level = 4;
    }else if(level == 'A2'){
        var current_level = 5;
    }else if(level == 'B1'){
        var current_level = 6;
    }else if(level == 'B2'){
        var current_level = 6.5;
    }else if(level == 'C1'){
        var current_level = 7;
    }
    var xValues = ["বর্তমান অবস্থা", "টার্গেট স্কোর"];
    var yValues = [current_level, target_level];
    var barColors = [
        "#36a0ed",
        "#EE6123",
    ];
    new Chart("total-mark-chart", {
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
                barThickness: 50,
                maintainAspectRatio: false,
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 9,
                }
            }
        }
    });
</script>
<script>
    var desired_level = "{{Helper::overall_rubricks($all_module_marks)}}";
    if(desired_level == 'A1'){
        document.getElementById("resultActiveClass2").classList.remove("inner_box_top_1");
        document.getElementById("resultActiveClass2").classList.add("inner_box_top_1_another");
    }
    if(desired_level == 'A2'){
        document.getElementById("resultActiveClass2").classList.remove("inner_box_top_2");
        document.getElementById("resultActiveClass2").classList.add("inner_box_top_2_another");
    }
    if(desired_level == 'B1'){
        document.getElementById("resultActiveClass3").classList.remove("inner_box_top_3");
        document.getElementById("resultActiveClass3").classList.add("inner_box_top_3_another");
    }
    if(desired_level == 'B2'){
        document.getElementById("resultActiveClass4").classList.remove("inner_box_top_4");
        document.getElementById("resultActiveClass4").classList.add("inner_box_top_4_another");
    }
    if(desired_level == 'C1'){
        document.getElementById("resultActiveClass5").classList.remove("inner_box_top_5");
        document.getElementById("resultActiveClass5").classList.add("inner_box_top_5_another");
    }
    if(desired_level == 'C2'){
        document.getElementById("resultActiveClass6").classList.remove("inner_box_top_6");
        document.getElementById("resultActiveClass6").classList.add("inner_box_top_6_another");
    }
</script>
  </body>
</html>

