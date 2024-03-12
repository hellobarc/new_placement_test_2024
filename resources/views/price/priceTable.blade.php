@extends('layouts.app')

@section('content')
<section style="background: #d9d9d9; height:100vh">
    <div class="container">
        <div>
            {{-- <button onclick="openFullscreen();">Click Full Screen</button> --}}
            <div id="myvideo">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner" style="width:100%;max-height: 900% !important;">
                                <div class="carousel-item active">
                                    <div class="p-4" style="background: #d9d9d9; ">
                                        @include('advisor.student.exam.result.overall-result')
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="p-4" style="background: #d9d9d9; ">
                                        @include('advisor.student.exam.result.question-answered')
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="p-4" style="background: #d9d9d9; ">
                                        @include('advisor.student.exam.result.result-explanation')
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="p-4" style="background: #d9d9d9; ">
                                        @include('advisor.student.exam.result.suggested-course')
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="p-4" style="background: #d9d9d9; ">
                                        @include('advisor.student.exam.result.course-level')
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="p-4" style="background: #d9d9d9; ">
                                        @include('advisor.student.exam.result.course-content')
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="p-4" style="background: #d9d9d9; ">
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