@extends('admin.analytics.home')

@section('admin-content')
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Student Analytics</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
      <div class="row">
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card" style="height: 94%;">
            <div class="card-body">
              <h4 class="text-center">Total Student</h4>
              <h3 class="text-center fw-bolder">{{$data->count()}}</h3>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center">Expected Score</h4>
            <canvas id="analyticsExpectedScore"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center">Targetted Country</h4>
            <canvas id="analyticsTargettedCountry"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center">IELTS Purpose</h4>
            <canvas id="analyticsPurpose"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center">Know About Us</h4>
            <canvas id="analyticsKnowAboutUS"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card" style="height: 97%;">
            <div class="card-body">
              <h4 class="text-center">Student Address</h4>
            <canvas id="analyticsStudentFrom"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center">Occupation</h4>
            <canvas id="analyticsStudentOccupation"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card" style="height: 96%;">
            <div class="card-body">
              <h4 class="text-center">Student Last Education</h4>
            <canvas id="analyticsStudentEducation"></canvas>
            </div>
          </div>
        </div>
      </div>
        
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->


    <!-- Footer -->
    {{-- @include('backend.partials.footer') --}}
    <!-- /footer -->

</div>
<script>
  const ctx = document.getElementById('analyticsExpectedScore');
    let  ex_score_7 = "{{$ex_score_7}}"
    let  ex_score_6_more = "{{$ex_score_6_5}}"
    let  ex_score_7_more = "{{$ex_score_7_more}}"
    let  ex_score_8 = "{{$ex_score_8}}"
    let  ex_score_8_more = "{{$ex_score_8_more}}"
    let  ex_score_9 = "{{$ex_score_9}}"
    let  ex_score_6 = "{{$ex_score_6}}"
    let  ex_score_5_more = "{{$ex_score_5_more}}"
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['5.5','6','6.5','7','7.5', '8','8.5','9'],
      datasets: [
        {
        label: false,
        data: [ex_score_5_more,ex_score_6,ex_score_6_more,ex_score_7,ex_score_7_more,ex_score_8,ex_score_8_more,ex_score_9],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        '#21A0A0',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- targetted Country -->
<script>
  const expected_country = document.getElementById('analyticsTargettedCountry');
    let  ter_usa = "{{$ex_coun_usa}}"
    let  ter_uk = "{{$ex_coun_uk}}"
    let  ter_canada = "{{$ex_coun_canada}}"
    let  ter_austraila = "{{$ex_coun_australia}}"
    let  ter_europe = "{{$ex_coun_europe}}"
    let  ter_other = "{{$ex_coun_others}}"
   
  new Chart(expected_country, {
    type: 'bar',
    data: {
      labels: ['USA','UK','Canada','Australia','Europe', 'Others'],
      datasets: [
        {
        label: false,
        data: [ter_usa,ter_uk,ter_canada,ter_austraila,ter_europe,ter_other],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- purpose -->
<script>
  const ielts_purpose = document.getElementById('analyticsPurpose');
    let  ac_purpose = "{{$ac_purpose}}"
    let  gt_purpose = "{{$gt_purpose}}"
   
  new Chart(ielts_purpose, {
    type: 'doughnut',
    data: {
      labels: ['Academic','General Training'],
      datasets: [
        {
        label: false,
        data: [ac_purpose,gt_purpose],
        backgroundColor: [       
        '#A11692',
        '#00AF54',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- know about us -->
<script>
  const know_about_us = document.getElementById('analyticsKnowAboutUS');
    let  know_facebook = "{{$know_facebook}}"
    let  know_website = "{{$know_website}}"
    let  know_billboard = "{{$know_billboard}}"
    let  know_google_map = "{{$know_google_map}}"
    let  know_student_reference = "{{$know_student_reference}}"
    let  know_youtube = "{{$know_youtube}}"
    let  know_others = "{{$know_others}}"
   
  new Chart(know_about_us, {
    type: 'pie',
    data: {
      labels: ['Facebook','Website','Billboard','Google Map','Student Reference', 'YouTube','Others'],
      datasets: [
        {
        label: false,
        data: [know_facebook,know_website,know_billboard,know_google_map,know_student_reference,know_youtube,know_others],
        backgroundColor: [       
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- student from -->
<script>
  const student_from = document.getElementById('analyticsStudentFrom');
    let  address_uttara = "{{$address_uttara}}"
    let  address_mirpur = "{{$address_mirpur}}"
    let  address_gazipur = "{{$address_gazipur}}"
    let  address_joydevpur = "{{$address_joydevpur}}"
    let  address_tongi = "{{$address_tongi}}"
    let  address_khilkhet = "{{$address_khilkhet}}"
    let  address_badda = "{{$address_badda}}"
    let  address_gulshan = "{{$address_gulshan}}"
    let  address_dhanmondi = "{{$address_dhanmondi}}"
    let  address_narsingdi = "{{$address_narsingdi}}"
    let  address_demra = "{{$address_demra}}"
    let  address_tangail = "{{$address_tangail}}"
    let  address_savar = "{{$address_savar}}"
    let  address_other = "{{$address_other}}"
   
  new Chart(student_from, {
    type: 'line',
    data: {
      labels: ['Uttara','Mirpur','Gazipur','Joydevpur','Tongi', 'Khilkhet','Badda','Gulshan','Dhanmondi','Narsingdi','Demra','Tangail','Savar','Other'],
      datasets: [
        {
        label: false,
        data: [address_uttara,address_mirpur,address_gazipur,address_joydevpur,address_tongi,address_khilkhet,
        address_badda,address_gulshan,address_dhanmondi,address_narsingdi,address_demra,address_tangail,address_savar,address_other],
        backgroundColor: [       
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- occupation -->
<script>
  const occupation = document.getElementById('analyticsStudentOccupation');
    let  occupation_govt = "{{$occupation_govt}}"
    let  occupation_private = "{{$occupation_private}}"
    let  occupation_business = "{{$occupation_business}}"
    let  occupation_doctor = "{{$occupation_doctor}}"
    let  occupation_engineer = "{{$occupation_engineer}}"
    let  occupation_teacher = "{{$occupation_teacher}}"
    let  occupation_uni_stu = "{{$occupation_uni_stu}}"
    let  occupation_hsc_student = "{{$occupation_hsc_student}}"
    let  occupation_house_wife = "{{$occupation_house_wife}}"
    let  occupation_others = "{{$occupation_others}}"
   
  new Chart(occupation, {
    type: 'pie',
    data: {
      labels: ['Govt. Service','Private Service','Business','Doctor','Engineer', 'Teacher','University Student','HSC Student','House Wife','Others'],
      datasets: [
        {
        label: false,
        data: [occupation_govt,occupation_private,occupation_business,occupation_doctor,occupation_engineer,occupation_teacher,
        occupation_uni_stu,occupation_hsc_student,occupation_house_wife,occupation_others],
        backgroundColor: [       
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        '#FFC4EB',
        '#7A9CC6',
        '#C1DF1F',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- student last education -->
<script>
  const education = document.getElementById('analyticsStudentEducation');
    let  education_ssc = "{{$education_ssc}}"
    let  education_ged = "{{$education_ged}}"
    let  education_hsc = "{{$education_hsc}}"
    let  education_vocational = "{{$education_vocational}}"
    let  education_graduate = "{{$education_graduate}}"
    let  education_post_grad = "{{$education_post_grad}}"
    let  education_doctorate = "{{$education_doctorate}}"
   
  new Chart(education, {
    type: 'bar',
    data: {
      labels: ['SSC','GED','HSC','Vocational','Graduate', 'Post Graduate','Doctorate or Higher'],
      datasets: [
        {
        label: false,
        data: [education_ssc,education_ged,education_hsc,education_vocational,education_graduate,education_post_grad,education_doctorate],
        backgroundColor: [       
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endsection
