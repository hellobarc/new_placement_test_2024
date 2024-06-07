
function courseBundleBtn(value){
  
  if(value == 1){
    document.getElementById('a1_a2_price_table_1').style.display = 'block';
    document.getElementById('a1_a2_price_table_2').style.display = 'none';
    document.getElementById('a1_a2_price_table_3').style.display = 'none';
    document.getElementById('a1_a2_price_table_4').style.display = 'none';
    document.getElementById('a1_a2_price_table_5').style.display = 'none';
    document.getElementById('a1_a2_price_table_6').style.display = 'none';
    document.getElementById('a1_a2_price_table_7').style.display = 'none';
    document.getElementById('course_bundle_btn_1').classList.add("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.remove("price-btn-active-class");
  }
  else if(value == 2){
    document.getElementById('a1_a2_price_table_1').style.display = 'none';
    document.getElementById('a1_a2_price_table_2').style.display = 'block';
    document.getElementById('a1_a2_price_table_3').style.display = 'none';
    document.getElementById('a1_a2_price_table_4').style.display = 'none';
    document.getElementById('a1_a2_price_table_5').style.display = 'none';
    document.getElementById('a1_a2_price_table_6').style.display = 'none';
    document.getElementById('a1_a2_price_table_7').style.display = 'none';
    document.getElementById('course_bundle_btn_1').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.add("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.remove("price-btn-active-class");
  }
  else if(value == 3){
    document.getElementById('a1_a2_price_table_1').style.display = 'none';
    document.getElementById('a1_a2_price_table_2').style.display = 'none';
    document.getElementById('a1_a2_price_table_3').style.display = 'block';
    document.getElementById('a1_a2_price_table_4').style.display = 'none';
    document.getElementById('a1_a2_price_table_5').style.display = 'none';
    document.getElementById('a1_a2_price_table_6').style.display = 'none';
    document.getElementById('a1_a2_price_table_7').style.display = 'none';
    document.getElementById('course_bundle_btn_1').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.add("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.remove("price-btn-active-class");
  }
  else if(value == 4){
    document.getElementById('a1_a2_price_table_1').style.display = 'none';
    document.getElementById('a1_a2_price_table_2').style.display = 'none';
    document.getElementById('a1_a2_price_table_3').style.display = 'none';
    document.getElementById('a1_a2_price_table_4').style.display = 'block';
    document.getElementById('a1_a2_price_table_5').style.display = 'none';
    document.getElementById('a1_a2_price_table_6').style.display = 'none';
    document.getElementById('a1_a2_price_table_7').style.display = 'none';
    document.getElementById('course_bundle_btn_1').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.add("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.remove("price-btn-active-class");
  }
  else if(value == 5){
    document.getElementById('a1_a2_price_table_1').style.display = 'none';
    document.getElementById('a1_a2_price_table_2').style.display = 'none';
    document.getElementById('a1_a2_price_table_3').style.display = 'none';
    document.getElementById('a1_a2_price_table_4').style.display = 'none';
    document.getElementById('a1_a2_price_table_5').style.display = 'block';
    document.getElementById('a1_a2_price_table_6').style.display = 'none';
    document.getElementById('a1_a2_price_table_7').style.display = 'none';
    document.getElementById('course_bundle_btn_1').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.add("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.remove("price-btn-active-class");
  }
  else if(value == 6){
    document.getElementById('a1_a2_price_table_1').style.display = 'none';
    document.getElementById('a1_a2_price_table_2').style.display = 'none';
    document.getElementById('a1_a2_price_table_3').style.display = 'none';
    document.getElementById('a1_a2_price_table_4').style.display = 'none';
    document.getElementById('a1_a2_price_table_5').style.display = 'none';
    document.getElementById('a1_a2_price_table_6').style.display = 'block';
    document.getElementById('a1_a2_price_table_7').style.display = 'none';
    document.getElementById('course_bundle_btn_1').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.add("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.remove("price-btn-active-class");
  }
  else if(value == 7){
    document.getElementById('a1_a2_price_table_1').style.display = 'none';
    document.getElementById('a1_a2_price_table_2').style.display = 'none';
    document.getElementById('a1_a2_price_table_3').style.display = 'none';
    document.getElementById('a1_a2_price_table_4').style.display = 'none';
    document.getElementById('a1_a2_price_table_5').style.display = 'none';
    document.getElementById('a1_a2_price_table_6').style.display = 'none';
    document.getElementById('a1_a2_price_table_7').style.display = 'block';
    document.getElementById('course_bundle_btn_1').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_2').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_3').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_4').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_5').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_6').classList.remove("price-btn-active-class");
    document.getElementById('course_bundle_btn_7').classList.add("price-btn-active-class");
  }
  
}

function handleVisit(event){
    let value =  event.target.value;
    console.log(value);
    if(value == 'ielts_certificate'){
      document.getElementById("ielts_certificate_div").style.display = "block";
      document.getElementById("know_about_us_id").style.display = "none";
      document.getElementById("profession").style.display = "none";
      document.getElementById("purpose_id_ielts_id").style.display = "none";
      document.getElementById("course_advisor").style.display = "none";
    }else{
      document.getElementById("ielts_certificate_div").style.display = "none";
    }
    if(value == 'ielts_registration'){
        document.getElementById("ielts_registration_id").style.display = "block";
        document.getElementById("know_about_us_id").style.display = "block";
    }else{
      document.getElementById("ielts_registration_id").style.display = "none";
    }
    if(value == 'basic_english' || value == 'spoken' || value == 'ielts_courses'|| value == 'online_courses' || value == 'others'){
        document.getElementById("know_about_us_id").style.display = "block";
        document.getElementById("profession").style.display = "block";
        document.getElementById("purpose_id_ielts_id").style.display = "block";
        document.getElementById("course_advisor").style.display = "block";
    }else{
      document.getElementById("course_advisor").style.display = "none";
    }

    if(value == 'mock'){
      document.getElementById("know_about_us_id").style.display = "block";
      document.getElementById("profession").style.display = "block";
      document.getElementById("purpose_id_ielts_id").style.display = "block";
    }else{
      //document.getElementById("ielts_registration_id").style.display = "none";
    }
    
}
function handleKnow(event){
  let value =  event.target.value;
  console.log(value);
  if(value == 'student_reference'){
    document.getElementById("reference_id").style.display = "block";
  }else{
    document.getElementById("reference_id").style.display = "none";
  }
}
function handleIELTSExamType(event){
  let value =  event.target.value;
  if(value == 'paper_based'){
    document.getElementById("category_ielts_id").style.display = "block";
    
  }else if(value == 'computed_delivered'){
    document.getElementById("category_ielts_id").style.display = "block";
    document.getElementById("purpose_id_ielts_id").style.display = "none";
  }
  else{
    document.getElementById("category_ielts_id").style.display = "none";
  }
}
function handleIELTSCategory(event){
  let value =  event.target.value;
  if(value == 'standered' || value == 'ukvi'){
    document.getElementById("purpose_id_ielts_id").style.display = "block";
  }else{
    document.getElementById("purpose_id_ielts_id").style.display = "none";
  }
}
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
    elem.style.backgroundColor = "white";
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
    elem.style.backgroundColor = "white";
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
    elem.style.backgroundColor = "white";
  }
}

// course content
$(document).ready(function(){
  $("#course_content_a1").show();
  $("#course_content_a2").hide();
  $("#course_content_b1").hide();
  $("#course_content_b2").hide();
  $("#course_content_c1").hide();
  $("#course_content_a1_btn").addClass('course_content_active_btn');
  $("#course_content_a1_btn").click(function(){
    $("#course_content_a1").show();
    $("#course_content_a2").hide();
    $("#course_content_b1").hide();
    $("#course_content_b2").hide();
    $("#course_content_c1").hide();
    $("#course_content_a1_btn").addClass('course_content_active_btn');
    $("#course_content_a2_btn").removeClass('course_content_active_btn');
    $("#course_content_b1_btn").removeClass('course_content_active_btn');
    $("#course_content_b2_btn").removeClass('course_content_active_btn');
    $("#course_content_c1_btn").removeClass('course_content_active_btn');
  });
  $("#course_content_a2_btn").click(function(){
    $("#course_content_a1").hide();
    $("#course_content_a2").show();
    $("#course_content_b1").hide();
    $("#course_content_b2").hide();
    $("#course_content_c1").hide();
    $("#course_content_a1_btn").removeClass('course_content_active_btn');
    $("#course_content_a2_btn").addClass('course_content_active_btn');
    $("#course_content_b1_btn").removeClass('course_content_active_btn');
    $("#course_content_b2_btn").removeClass('course_content_active_btn');
    $("#course_content_c1_btn").removeClass('course_content_active_btn');
  });
  $("#course_content_b1_btn").click(function(){
    $("#course_content_a1").hide();
    $("#course_content_a2").hide();
    $("#course_content_b1").show();
    $("#course_content_b2").hide();
    $("#course_content_c1").hide();
    $("#course_content_a1_btn").removeClass('course_content_active_btn');
    $("#course_content_a2_btn").removeClass('course_content_active_btn');
    $("#course_content_b1_btn").addClass('course_content_active_btn');
    $("#course_content_b2_btn").removeClass('course_content_active_btn');
    $("#course_content_c1_btn").removeClass('course_content_active_btn');
  });
  $("#course_content_b2_btn").click(function(){
    $("#course_content_a1").hide();
    $("#course_content_a2").hide();
    $("#course_content_b1").hide();
    $("#course_content_b2").show();
    $("#course_content_c1").hide();
    $("#course_content_a1_btn").removeClass('course_content_active_btn');
    $("#course_content_a2_btn").removeClass('course_content_active_btn');
    $("#course_content_b1_btn").removeClass('course_content_active_btn');
    $("#course_content_b2_btn").addClass('course_content_active_btn');
    $("#course_content_c1_btn").removeClass('course_content_active_btn');
  });
  $("#course_content_c1_btn").click(function(){
    $("#course_content_a1").hide();
    $("#course_content_a2").hide();
    $("#course_content_b1").hide();
    $("#course_content_b2").hide();
    $("#course_content_c1").show();
    $("#course_content_a1_btn").removeClass('course_content_active_btn');
    $("#course_content_a2_btn").removeClass('course_content_active_btn');
    $("#course_content_b1_btn").removeClass('course_content_active_btn');
    $("#course_content_b2_btn").removeClass('course_content_active_btn');
    $("#course_content_c1_btn").addClass('course_content_active_btn');
  });
});


var course_info = document.getElementById("course-related-info").style.display = "none";

var a1_course_lenght = document.getElementById("a1_course_duration").style.display = "none";
var a2_course_lenght = document.getElementById("a2_course_duration").style.display = "none";
var b1_course_lenght = document.getElementById("b1_course_duration").style.display = "none";
var b2_course_lenght = document.getElementById("b2_course_duration").style.display = "none";
var c1_course_lenght = document.getElementById("c1_course_duration").style.display = "none";

var a1_course_description = document.getElementById("a1-course-description").style.display = "none";
var a2_course_description = document.getElementById("a2-course-description").style.display = "none";
var b1_course_description = document.getElementById("b1-course-description").style.display = "none";
var b2_course_description = document.getElementById("b2-course-description").style.display = "none";
var c1_course_description = document.getElementById("c1-course-description").style.display = "none";

var course_price_section = document.getElementById("course_price_section").style.display = "none";

function expected_band_score_func(ev){
  document.getElementById("course-related-info").style.display = "block";
  document.getElementById("course_price_section").style.display = "block";
  if(desired_level == 'A1' && ev < 7){
    if(ev == 6.5){
      document.getElementById("targeted_band_score_6").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_6").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 6){
      document.getElementById("targeted_band_score_6").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_6").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }
    document.getElementById("a1_course_duration").style.display = "block";
    document.getElementById("a2_course_duration").style.display = "block";
    document.getElementById("b1_course_duration").style.display = "block";
    document.getElementById("b2_course_duration").style.display = "block";
    document.getElementById("c1_course_duration").style.display = "none";

    document.getElementById("a1-course-description").style.display = "block";
    document.getElementById("a2-course-description").style.display = "block";
    document.getElementById("b1-course-description").style.display = "block";
    document.getElementById("b2-course-description").style.display = "block";
    document.getElementById("c1-course-description").style.display = "none";

    document.getElementById('course_completed_time').innerHTML = 5;
  }
  if(desired_level == 'A2' && ev < 7){
    if(ev == 6.5){
      document.getElementById("targeted_band_score_6").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_6").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 6){
      document.getElementById("targeted_band_score_6").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_6").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }
    document.getElementById("a1_course_duration").style.display = "none";
    document.getElementById("a2_course_duration").style.display = "block";
    document.getElementById("b1_course_duration").style.display = "block";
    document.getElementById("b2_course_duration").style.display = "block";
    document.getElementById("c1_course_duration").style.display = "none";

    document.getElementById("a1-course-description").style.display = "none";
    document.getElementById("a2-course-description").style.display = "block";
    document.getElementById("b1-course-description").style.display = "block";
    document.getElementById("b2-course-description").style.display = "block";
    document.getElementById("c1-course-description").style.display = "none";

    document.getElementById('course_completed_time').innerHTML = 4;
  }
  if(desired_level == 'A1' && ev >= 7){
    if(ev == 7){
      document.getElementById("targeted_band_score_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 7.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 9){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.add("outline-for-score-small-sections-active");
    }
    document.getElementById("a1_course_duration").style.display = "block";
    document.getElementById("a2_course_duration").style.display = "block";
    document.getElementById("b1_course_duration").style.display = "block";
    document.getElementById("b2_course_duration").style.display = "block";
    document.getElementById("c1_course_duration").style.display = "block";

    document.getElementById("a1-course-description").style.display = "block";
    document.getElementById("a2-course-description").style.display = "block";
    document.getElementById("b1-course-description").style.display = "block";
    document.getElementById("b2-course-description").style.display = "block";
    document.getElementById("c1-course-description").style.display = "block";

    document.getElementById('course_completed_time').innerHTML = 6;
  }
  if(desired_level == 'A2' && ev >= 7){
    if(ev == 7){
      document.getElementById("targeted_band_score_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 7.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 9){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.add("outline-for-score-small-sections-active");
    }
    
    document.getElementById("a1_course_duration").style.display = "none";
    document.getElementById("a2_course_duration").style.display = "block";
    document.getElementById("b1_course_duration").style.display = "block";
    document.getElementById("b2_course_duration").style.display = "block";
    document.getElementById("c1_course_duration").style.display = "block";

    document.getElementById("a1-course-description").style.display = "none";
    document.getElementById("a2-course-description").style.display = "block";
    document.getElementById("b1-course-description").style.display = "block";
    document.getElementById("b2-course-description").style.display = "block";
    document.getElementById("c1-course-description").style.display = "block";

    document.getElementById('course_completed_time').innerHTML = 5;
  }
  if(desired_level == 'B1' && ev >= 7){
    if(ev == 7){
      document.getElementById("targeted_band_score_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 7.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 9){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.add("outline-for-score-small-sections-active");
    }
    
    document.getElementById("a1_course_duration").style.display = "none";
    document.getElementById("a2_course_duration").style.display = "none";
    document.getElementById("b1_course_duration").style.display = "block";
    document.getElementById("b2_course_duration").style.display = "block";
    document.getElementById("c1_course_duration").style.display = "block";

    document.getElementById("a1-course-description").style.display = "none";
    document.getElementById("a2-course-description").style.display = "none";
    document.getElementById("b1-course-description").style.display = "block";
    document.getElementById("b2-course-description").style.display = "block";
    document.getElementById("c1-course-description").style.display = "block";

    document.getElementById('course_completed_time').innerHTML = 4;
  }
  if(desired_level == 'B2' && ev >= 7){
    if(ev == 7){
      document.getElementById("targeted_band_score_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 7.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 8.5){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.add("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.remove("outline-for-score-small-sections-active");
    }else if(ev == 9){
      document.getElementById("targeted_band_score_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_7").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_more_than_8").classList.remove("outline-for-score-small-sections-active");
      document.getElementById("targeted_band_score_9").classList.add("outline-for-score-small-sections-active");
    }
    
    document.getElementById("a1_course_duration").style.display = "none";
    document.getElementById("a2_course_duration").style.display = "none";
    document.getElementById("b1_course_duration").style.display = "none";
    document.getElementById("b2_course_duration").style.display = "block";
    document.getElementById("c1_course_duration").style.display = "block";

    document.getElementById("a1-course-description").style.display = "none";
    document.getElementById("a2-course-description").style.display = "none";
    document.getElementById("b1-course-description").style.display = "none";
    document.getElementById("b2-course-description").style.display = "block";
    document.getElementById("c1-course-description").style.display = "block";

    document.getElementById('course_completed_time').innerHTML = 4;
  }
}
document.getElementById("courseA1TdPrice1").style.display = "none";
document.getElementById("courseA1TdPrice2").style.display = "none";
document.getElementById("courseA2TdPrice1").style.display = "none";
document.getElementById("courseA2TdPrice2").style.display = "none";
document.getElementById("courseB1TdPrice1").style.display = "none";
document.getElementById("courseB1TdPrice2").style.display = "none";
document.getElementById("courseB2TdPrice1").style.display = "none";
document.getElementById("courseB2TdPrice2").style.display = "none";
document.getElementById("courseC1TdPrice1").style.display = "none";
document.getElementById("courseC1TdPrice2").style.display = "none";
document.getElementById("coursePrivileged").style.display = "none";
var total = 0;
var discountTotalPrice = 0;
var priviligedTotalPrice = 0;
var clickCountA1  = 0;
var clickCountA2  = 0;
var clickCountB1  = 0;
var clickCountB2  = 0;
var clickCountC1  = 0;
var clickCountPriviliged  = 0;

function coursetdlist(ev){
  console.log(ev);
  if(ev == 'a1'){
    clickCountA1++
    var a1totalValue = document.getElementById('courseA1TdPrice1Input').value;
    var a1DiscountTotalValue = document.getElementById('courseA1TdDiscountPrice1Input').value;
    if(clickCountA1%2 == 0){
      document.getElementById("courseA1TdPrice1").style.display = "none";
      document.getElementById("courseA1TdPrice2").style.display = "none";
      document.getElementById("a1CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (a1totalValue);
      discountTotalPrice -= parseInt (a1DiscountTotalValue);
    }else{
      document.getElementById("courseA1TdPrice1").style.display = "block";
      document.getElementById("courseA1TdPrice2").style.display = "block";
      document.getElementById("a1CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (a1totalValue);
      discountTotalPrice += parseInt (a1DiscountTotalValue);
    }
  }
  if(ev == 'a2'){
    clickCountA2++
    var a2totalValue = document.getElementById('courseA2TdPrice1Input').value;
    var a2DiscountTotalValue = document.getElementById('courseA2TdDiscountPrice1Input').value;
    if(clickCountA2%2 == 0){
      document.getElementById("courseA2TdPrice1").style.display = "none";
      document.getElementById("courseA2TdPrice2").style.display = "none";
      document.getElementById("a2CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (a2totalValue);
      discountTotalPrice -= parseInt (a2DiscountTotalValue);
    }else{
      document.getElementById("courseA2TdPrice1").style.display = "block";
      document.getElementById("courseA2TdPrice2").style.display = "block";
      document.getElementById("a2CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (a2totalValue);
      discountTotalPrice += parseInt (a2DiscountTotalValue);
    }
  }
  if(ev == 'b1'){
    clickCountB1++
    var b1totalValue = document.getElementById('courseB1TdPrice1Input').value;
    var b1DiscountTotalValue = document.getElementById('courseB1TdDiscountPrice1Input').value;
    if(clickCountB1%2 == 0){
      document.getElementById("courseB1TdPrice1").style.display = "none";
      document.getElementById("courseB1TdPrice2").style.display = "none";
      document.getElementById("b1CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (b1totalValue);
      discountTotalPrice -= parseInt (b1DiscountTotalValue);
    }else{
      document.getElementById("courseB1TdPrice1").style.display = "block";
      document.getElementById("courseB1TdPrice2").style.display = "block";
      document.getElementById("b1CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (b1totalValue);
      discountTotalPrice += parseInt (b1DiscountTotalValue);
    }
  }
  if(ev == 'b2'){
    clickCountB2++
    var b2totalValue = document.getElementById('courseB2TdPrice1Input').value;
    var b2DiscountTotalValue = document.getElementById('courseB2TdDiscountPrice1Input').value;
    if(clickCountB2%2 == 0){
      document.getElementById("courseB2TdPrice1").style.display = "none";
      document.getElementById("courseB2TdPrice2").style.display = "none";
      document.getElementById("b2CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (b2totalValue);
      discountTotalPrice -= parseInt (b2DiscountTotalValue);
    }else{
      document.getElementById("courseB2TdPrice1").style.display = "block";
      document.getElementById("courseB2TdPrice2").style.display = "block";
      document.getElementById("b2CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (b2totalValue);
      discountTotalPrice += parseInt (b2DiscountTotalValue);
    }
  }
  if(ev == 'c1'){
    clickCountC1++
    var c1totalValue = document.getElementById('courseC1TdPrice1Input').value;
    var c1DiscountTotalValue = document.getElementById('courseC1TdDiscountPrice1Input').value;
    if(clickCountC1%2 == 0){
      document.getElementById("courseC1TdPrice1").style.display = "none";
      document.getElementById("courseC1TdPrice2").style.display = "none";
      document.getElementById("c1CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (c1totalValue);
      discountTotalPrice -= parseInt (c1DiscountTotalValue);
    }else{
      document.getElementById("courseC1TdPrice1").style.display = "block";
      document.getElementById("courseC1TdPrice2").style.display = "block";
      document.getElementById("c1CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (c1totalValue);
      discountTotalPrice += parseInt (c1DiscountTotalValue);
    }
  }
  if(ev == 'privileged'){
    clickCountPriviliged++
    var priviligedTotalPrice = document.getElementById('coursePriviligedTdPrice1Input').value;
    if(clickCountPriviliged%2 == 0){
      document.getElementById("coursePrivileged").style.display = "none";
      document.getElementById("privilegedCoursePriceBtn").classList.remove("onlclik_price_active");
      discountTotalPrice +=  parseInt(priviligedTotalPrice);
    }else{
      document.getElementById("coursePrivileged").style.display = "block";
      discountTotalPrice -= parseInt(priviligedTotalPrice);
      document.getElementById("privilegedCoursePriceBtn").classList.add("onlclik_price_active");
    }
  }
  document.getElementById('totalCourseRegularPrice').innerHTML = total.toLocaleString() + '/-';
  document.getElementById('totalCourseDiscountPrice').innerHTML = discountTotalPrice.toLocaleString() + '/-';
}
