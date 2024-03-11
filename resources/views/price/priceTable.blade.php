@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="background: #ebf6fc !important" class="p-5 mb-5">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <h2 class="fw-bolder mt-3">Overall Result</h2>
                    <table class="table table-bordered table-striped mt-4">
                        <thead class="text-center">
                            <th>Sl No</th>
                            <th>Modules</th>
                            <th></th>
                            <th>Marks</th>
                            <th>Overall Level</th>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Reading</td>
                                <td></td>
                                <td>{{$sum_reading_module}} out of 15</td>
                                <td rowspan="4" class="fs-2 fw-bold">{{Helper::overall_rubricks($all_module_marks)}}</td>
                            </tr>
                            <tr class="text-center">
                                <td rowspan="2">2</td>
                                <td rowspan="2">Writing</td>
                                <td>Grammar</td>
                                <td>{{$sum_grammar_module}} out of 15</td>
                                
                            </tr>
                            <tr class="text-center">
                                <td>Vocabulary</td>
                                <td>{{$sum_vocabulary_module}} out of 15</td>
                                
                            </tr>
                            <tr class="text-center">
                                <td>4</td>
                                <td>Listening</td>
                                <td></td>
                                <td>{{$sum_listening_module}} out of 15</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-center">Total Marks: {{$sum_reading_module+$sum_grammar_module+$sum_vocabulary_module+$sum_listening_module}} out of 60</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <h2 class="fw-bolder mt-3">Question Answered</h2>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <canvas id="answersQuestion"></canvas>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="mt-5">
                                <canvas id="moduleMarkChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <h2 class="fw-bolder mt-3">Result Explanation</h2>
                    <table class="table table-bordered table-striped mt-4">
                        <thead>
                            <th>Sl No</th>
                            <th>Module</th>
                            <th>Remarks</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
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
                            <tr>
                                <td>2</td>
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
                            <tr>
                                <td>3</td>
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
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <h2 class="fw-bolder mt-3">Your Current Level: <span class="h1 text-success fw-bolder">{{Helper::overall_rubricks($all_module_marks)}}</span></h2>
                    <h2 class="fw-bolder mt-3">Desired Score: <span class="h1 text-success fw-bolder">{{$student_info->expected_score}}</span> (Equivalent CEFR Level - {{Helper::cefr_level($student_info->expected_score)}})</h2>
                    <h2 class="fw-bolder mt-3">Suggested Course:</h2>
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            
                            <th>Courses</th>
                            <th>Duration</th>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                
                                <td>
                                    @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        A1 + A2 + B1 + B2 + C1
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        A2 + B1 + B2 + C1
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        B1 + B2 + C1
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        B2 + C1
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                        A1 + A2 + B1 + B2
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                        A2 + B1 + B2
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                        B1 + B2
                                    @endif
                                </td>
                                <td>
                                    @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        5 month+
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        4 month+
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        3 month+
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                        2 month+
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                    4 month+
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                        3 month+
                                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                        2 month+
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="fw-bolder mt-3">Course Level:</h2>
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <th>Courses</th>
                            <th>Level</th>
                            <th>Duration</th>
                        </thead>
                        <tbody>
                            @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                <tr>
                                    <td>A1</td>
                                    <td>Elementory</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    <td>A2</td>
                                    <td>Basic</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    <td>B1</td>
                                    <td>Pre-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    <td>C1</td>
                                    <td>Advance-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                <tr>
                                    <td>A2</td>
                                    <td>Basic</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B1</td>
                                    <td>Pre-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>C1</td>
                                    <td>Advance-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                <tr>
                                    
                                    <td>B1</td>
                                    <td>Pre-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>C1</td>
                                    <td>Advance-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                                <tr>
                                    
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>C1</td>
                                    <td>Advance-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                <tr>
                                    
                                    <td>A1</td>
                                    <td>Elementory</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>A2</td>
                                    <td>Basic</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B1</td>
                                    <td>Pre-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                <tr>
                                    
                                    <td>A2</td>
                                    <td>Basic</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B1</td>
                                    <td>Pre-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                                <tr>
                                    
                                    <td>B1</td>
                                    <td>Pre-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                                <tr>
                                    
                                    <td>B2</td>
                                    <td>Main-IELTS</td>
                                    <td>1 month+</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <h2 class="fw-bolder mt-3">Course Content:</h2>
                    @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9;">
                                        <h4>A1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Elementory</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('A1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                            <h4>A2</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>Basic</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>{!!Helper::course_benefit('A2')!!}</h4>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Pre-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>C1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Advance-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('C1')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                        <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                            <h4>A2</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>Basic</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>{!!Helper::course_benefit('A2')!!}</h4>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Pre-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>C1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Advance-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('C1')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Pre-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>C1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Advance-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('C1')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>C1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Advance-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('C1')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9;">
                                        <h4>A1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Elementory</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('A1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                            <h4>A2</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>Basic</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>{!!Helper::course_benefit('A2')!!}</h4>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Pre-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                        <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                            <h4>A2</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>Basic</h4>
                                            <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                            <h4>{!!Helper::course_benefit('A2')!!}</h4>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Pre-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B1</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Pre-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B1')!!}</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-start p-4" style="background: #d9d9d9">
                                        <h4>B2</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>Main-IELTS</h4>
                                        <i class="fa-solid fa-arrow-right-long fs-2 mx-4"></i>
                                        <h4>{!!Helper::course_benefit('B2')!!}</h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                    <h2 class="fw-bolder mt-3">Price List:</h2>
                    <ul>
                        @foreach ($courseBundle as $rows)
                            <li class="d-inline px-3 fs-5 fw-bold" id="course_bundle_btn_{{$rows->id}}" onclick="courseBundleBtn({{$rows->id}})" style="cursor: pointer;">{{$rows->course_bundle}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @include('price.priceChart')

            <div class="row mt-3">
                
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#followUpModal">Add New Follow Up</a>
                        </div>
                        {{-- modal --}}
                        <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#followUpModal">
                                Launch demo modal
                            </button> --}}
                            
                            <!-- FollowUp Modal -->
                            <div class="modal fade" id="followUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Follow Up</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('store.followUP', $studentId ) }}" method="POST" class="form-control">
                                            @csrf
                                            <label for="addmission">Admission Status</label>
                                            <select name="admission_status" id="admission" class="form-control">
                                                <option selected>Select Options</option>
                                                <option value="admitted">Admitted</option>
                                                <option value="later_admit">Later Admitted</option>
                                                <option value="not_admitted">Not Admitted</option>
                                            </select>

                                            <label for="Comment" >Remark</label>
                                            <textarea name="remarks" id="comment" cols="30" rows="5" class="form-control"></textarea>

                                            <label for="">Next Follow Up Date</label>
                                            <input type="date" name="next_follow_up_date" class="form-control">
                                            <button type="submit" class="btn btn-primary float-end mt-4">Save Follow Up</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        {{-- FollowUp modal end --}}
                        @include('flash-message')
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Follow Up Date</th>
                                        <th>Follow Up Remarks</th>
                                        <th>Admission_Status</th>
                                        <th>Next Follow Up Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getData as $data)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($data->current_follow_up_date)) }}</td>
                                        <td>{{ $data->remarks }}</td>
                                        <td>{{ $data->admission_status}}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->next_follow_up_date)) }}</td>
                                        <td>
                                            <a href="{{ route('followUPEdit.View', $data->id )}}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteFollowUp-{{$data->id}}">Delete</a>
                                        </td>
                                    </tr>
                                        {{-- Delete Modal --}}
                                        <div class="modal fade" id="deleteFollowUp-{{$data->id}}" tabindex="-1" aria-labelledby="deleteFollowUpLabel-{{$data->id}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title text-danger fw-bolder" id="deleteFollowUpLabel-{{$data->id}}">Are you sure delete!!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <a href="{{route('followUp.Delete', $data->id)}}" class="btn btn-danger btn-lg">Permanent Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
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
                padding: 20
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
        };
        const myChart = new Chart(
        document.getElementById('answersQuestion'),
        config
        );
    </script>
@endsection
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