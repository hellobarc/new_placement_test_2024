
var course_info = document.getElementById("course-related-info").style.display = "block";
document.getElementById("total_enrolled_course_section").style.display = "block";


var course_price_section = document.getElementById("course_price_section").style.display = "block";

document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
document.getElementById("b1_course_benefit_icon").style.visibility = "hidden";
document.getElementById("b2_course_benefit_icon").style.visibility = "hidden";
document.getElementById("c1_course_benefit_icon").style.visibility = "hidden";


document.getElementById("a1_course_benefit").style.display = "none";
document.getElementById("a2_course_benefit").style.display = "none";
document.getElementById("b1_course_benefit").style.display = "none";
document.getElementById("b2_course_benefit").style.display = "none";
document.getElementById("c1_course_benefit").style.display = "none";

document.getElementById("a1_course_level_duration").style.display = "none";
document.getElementById("a2_course_level_duration").style.display = "none";
document.getElementById("b1_course_level_duration").style.display = "none";
document.getElementById("b2_course_level_duration").style.display = "none";
document.getElementById("c1_course_level_duration").style.display = "none";

function expected_band_score_func(ev){
  if(desired_level == 'A2' && ev == 6){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.add("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.remove("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "hidden";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "block";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "none";

    document.getElementById("course_completed_time").innerText = 3;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.add("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.remove("details-border-active");

  }else if(desired_level == 'A1' && ev == 6){
    document.getElementById("a1_course_duration").classList.add("a1_course_bar");
    document.getElementById("a2_course_duration").classList.add("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.remove("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("a2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "hidden";

    

    document.getElementById("a1_course_level_duration").style.display = "block";
    document.getElementById("a2_course_level_duration").style.display = "block";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "none";

    document.getElementById("course_completed_time").innerText = 4;

    document.getElementById("a1-course-description").classList.add("details-border-active");
    document.getElementById("a2-course-description").classList.add("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.remove("details-border-active");
  }else if(desired_level == 'A1' && ev == 7){
    document.getElementById("a1_course_duration").classList.add("a1_course_bar");
    document.getElementById("a2_course_duration").classList.add("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("a2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "block";
    document.getElementById("a2_course_level_duration").style.display = "block";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 5;

    document.getElementById("a1-course-description").classList.add("details-border-active");
    document.getElementById("a2-course-description").classList.add("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'A2' && ev == 7){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.add("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "block";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 4;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.add("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'A1' && ev == 8){
    document.getElementById("a1_course_duration").classList.add("a1_course_bar");
    document.getElementById("a2_course_duration").classList.add("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.add("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("a2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "block";
    document.getElementById("a2_course_level_duration").style.display = "block";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 5;

    document.getElementById("a1-course-description").classList.add("details-border-active");
    document.getElementById("a2-course-description").classList.add("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'A2' && ev == 8){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.add("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.add("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";

    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "block";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 4;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.add("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'B1' && ev == 6){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.remove("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "hidden";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "none";

    document.getElementById("course_completed_time").innerText = 2;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.remove("details-border-active");
  }else if(desired_level == 'B1' && ev == 7){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 3;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'B1' && ev == 8){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.add("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.add("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "visible";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "block";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 3;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.add("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'B2' && ev == 6){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.remove("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.remove("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "hidden";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "none";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "none";

    document.getElementById("course_completed_time").innerText = 1;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.remove("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.remove("details-border-active");
  }else if(desired_level == 'B2' && ev == 7){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.remove("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.add("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.remove("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "none";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 2;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.remove("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'B2' && ev == 8){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.remove("b1_course_bar");
    document.getElementById("b2_course_duration").classList.add("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.add("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b2_course_benefit_icon").style.visibility = "visible";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";


    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "none";
    document.getElementById("b2_course_level_duration").style.display = "block";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 2;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.remove("details-border-active");
    document.getElementById("b2-course-description").classList.add("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }else if(desired_level == 'C1' && ev == 8){
    document.getElementById("a1_course_duration").classList.remove("a1_course_bar");
    document.getElementById("a2_course_duration").classList.remove("a2_course_bar");
    document.getElementById("b1_course_duration").classList.remove("b1_course_bar");
    document.getElementById("b2_course_duration").classList.remove("b2_course_bar");
    document.getElementById("c1_course_duration").classList.add("c1_course_bar");

    document.getElementById("targeted_band_score_6").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_7").classList.remove("desired_btn_active");
    document.getElementById("targeted_band_score_8").classList.add("desired_btn_active");

    document.getElementById("a1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("a2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b1_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("b2_course_benefit_icon").style.visibility = "hidden";
    document.getElementById("c1_course_benefit_icon").style.visibility = "visible";

    document.getElementById("a1_course_level_duration").style.display = "none";
    document.getElementById("a2_course_level_duration").style.display = "none";
    document.getElementById("b1_course_level_duration").style.display = "none";
    document.getElementById("b2_course_level_duration").style.display = "none";
    document.getElementById("c1_course_level_duration").style.display = "block";

    document.getElementById("course_completed_time").innerText = 1;

    document.getElementById("a1-course-description").classList.remove("details-border-active");
    document.getElementById("a2-course-description").classList.remove("details-border-active");
    document.getElementById("b1-course-description").classList.remove("details-border-active");
    document.getElementById("b2-course-description").classList.remove("details-border-active");
    document.getElementById("c1-course-description").classList.add("details-border-active");
  }
}

document.getElementById("regular-batch-day").style.display = "none";
document.getElementById("weekend-batch-day").style.display = "none";
function classSchdule(value){
  if(value == 'regular'){
    document.getElementById("regular-batch-day").style.display = "block";
    document.getElementById("weekend-batch-day").style.display = "none";
  }else if(value == 'weekly'){
    document.getElementById("regular-batch-day").style.display = "none";
    document.getElementById("weekend-batch-day").style.display = "block";
  }
}

function courseBenefitRadio(ev){
  if(ev == 'a1'){
    document.getElementById("a1_course_benefit_active_1").classList.add("course-benefit-icon-active");
    document.getElementById("a1_course_benefit_active_2").classList.add("course-benefit-icon-active");
    document.getElementById("a1_course_benefit_active_3").classList.add("course-benefit-icon-active");
    document.getElementById("a1_course_benefit_active_4").classList.add("course-benefit-icon-active");

    document.getElementById("a1_course_benefit").style.display = "block";
    document.getElementById("a2_course_benefit").style.display = "none";
    document.getElementById("b1_course_benefit").style.display = "none";
    document.getElementById("b2_course_benefit").style.display = "none";
    document.getElementById("c1_course_benefit").style.display = "none";
    
    document.getElementById("a1_course_benefit_radio").checked = true;
    document.getElementById("a2_course_benefit_radio").checked = false;
    document.getElementById("b1_course_benefit_radio").checked = false;
    document.getElementById("b2_course_benefit_radio").checked = false;
    document.getElementById("c1_course_benefit_radio").checked = false;

  }
  else if(ev == 'a2'){
    document.getElementById("a2_course_benefit_active_1").classList.add("course-benefit-icon-active");
    document.getElementById("a2_course_benefit_active_2").classList.add("course-benefit-icon-active");
    document.getElementById("a2_course_benefit_active_3").classList.add("course-benefit-icon-active");
    document.getElementById("a2_course_benefit_active_4").classList.add("course-benefit-icon-active");

    document.getElementById("a1_course_benefit").style.display = "none";
    document.getElementById("a2_course_benefit").style.display = "block";
    document.getElementById("b1_course_benefit").style.display = "none";
    document.getElementById("b2_course_benefit").style.display = "none";
    document.getElementById("c1_course_benefit").style.display = "none";

    document.getElementById("a1_course_benefit_radio").checked = false;
    document.getElementById("a2_course_benefit_radio").checked = true;
    document.getElementById("b1_course_benefit_radio").checked = false;
    document.getElementById("b2_course_benefit_radio").checked = false;
    document.getElementById("c1_course_benefit_radio").checked = false;
  }
  else if(ev == 'b1'){
    document.getElementById("b1_course_benefit_active_1").classList.add("course-benefit-icon-active");
    document.getElementById("b1_course_benefit_active_2").classList.add("course-benefit-icon-active");
    document.getElementById("b1_course_benefit_active_3").classList.add("course-benefit-icon-active");
    document.getElementById("b1_course_benefit_active_4").classList.add("course-benefit-icon-active");

    document.getElementById("a1_course_benefit").style.display = "none";
    document.getElementById("a2_course_benefit").style.display = "none";
    document.getElementById("b1_course_benefit").style.display = "block";
    document.getElementById("b2_course_benefit").style.display = "none";
    document.getElementById("c1_course_benefit").style.display = "none";

    document.getElementById("a1_course_benefit_radio").checked = false;
    document.getElementById("a2_course_benefit_radio").checked = false;
    document.getElementById("b1_course_benefit_radio").checked = true;
    document.getElementById("b2_course_benefit_radio").checked = false;
    document.getElementById("c1_course_benefit_radio").checked = false;
  }
  else if(ev == 'b2'){
    document.getElementById("b2_course_benefit_active_1").classList.add("course-benefit-icon-active");
    document.getElementById("b2_course_benefit_active_2").classList.add("course-benefit-icon-active");
    document.getElementById("b2_course_benefit_active_3").classList.add("course-benefit-icon-active");
    document.getElementById("b2_course_benefit_active_4").classList.add("course-benefit-icon-active");
    document.getElementById("b2_course_benefit_active_5").classList.add("course-benefit-icon-active");

    document.getElementById("a1_course_benefit").style.display = "none";
    document.getElementById("a2_course_benefit").style.display = "none";
    document.getElementById("b1_course_benefit").style.display = "none";
    document.getElementById("b2_course_benefit").style.display = "block";
    document.getElementById("c1_course_benefit").style.display = "none";

    document.getElementById("a1_course_benefit_radio").checked = false;
    document.getElementById("a2_course_benefit_radio").checked = false;
    document.getElementById("b1_course_benefit_radio").checked = false;
    document.getElementById("b2_course_benefit_radio").checked = true;
    document.getElementById("c1_course_benefit_radio").checked = false;
  }
  else if(ev == 'c1'){
    document.getElementById("c1_course_benefit_active_1").classList.add("course-benefit-icon-active");
    document.getElementById("c1_course_benefit_active_2").classList.add("course-benefit-icon-active");
    document.getElementById("c1_course_benefit_active_3").classList.add("course-benefit-icon-active");
    document.getElementById("c1_course_benefit_active_4").classList.add("course-benefit-icon-active");
    document.getElementById("c1_course_benefit_active_5").classList.add("course-benefit-icon-active");
    document.getElementById("c1_course_benefit_active_6").classList.add("course-benefit-icon-active");

    document.getElementById("a1_course_benefit").style.display = "none";
    document.getElementById("a2_course_benefit").style.display = "none";
    document.getElementById("b1_course_benefit").style.display = "none";
    document.getElementById("b2_course_benefit").style.display = "none";
    document.getElementById("c1_course_benefit").style.display = "block";

    document.getElementById("a1_course_benefit_radio").checked = false;
    document.getElementById("a2_course_benefit_radio").checked = false;
    document.getElementById("b1_course_benefit_radio").checked = false;
    document.getElementById("b2_course_benefit_radio").checked = false;
    document.getElementById("c1_course_benefit_radio").checked = true;
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


document.getElementById("a1CourseOverview").style.display = "none";
document.getElementById("a2CourseOverview").style.display = "none";
document.getElementById("b1CourseOverview").style.display = "none";
document.getElementById("b2CourseOverview").style.display = "none";
document.getElementById("c1CourseOverview").style.display = "none";


var total = 0;
var discountTotalPrice = 0;
var priviligedTotalPrice = 0;
var clickCountA1  = 0;
var clickCountA2  = 0;
var clickCountB1  = 0;
var clickCountB2  = 0;
var clickCountC1  = 0;
var clickCountPriviliged  = 0;
var totalOnlyDiscountedPrice = 0;
var courseOverviewTime = 0;
function coursetdlist(ev){
  console.log(ev);
  var inputHTML = " ";
  if(ev == 'a1'){
    clickCountA1++
    var a1totalValue = document.getElementById('courseA1TdPrice1Input').value;
    var a1DiscountTotalValue = document.getElementById('courseA1TdDiscountPrice1Input').value;
    if(clickCountA1%2 == 0){
      document.getElementById("courseA1TdPrice1").style.display = "none";
      document.getElementById("courseA1TdPrice2").style.display = "none";
      document.getElementById("a1CourseOverview").style.display = "none";
      document.getElementById("a1CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (a1totalValue);
      discountTotalPrice -= parseInt (a1DiscountTotalValue);
      totalOnlyDiscountedPrice -= parseInt (a1DiscountTotalValue);
      courseOverviewTime -= 1;
      let idOnek = 'clickCourseBtn_'+ev;
      document.getElementById(idOnek).remove();
    }else{
      document.getElementById("courseA1TdPrice1").style.display = "block";
      document.getElementById("courseA1TdPrice2").style.display = "block";
      document.getElementById("a1CourseOverview").style.display = "block";
      document.getElementById("a1CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (a1totalValue);
      discountTotalPrice += parseInt (a1DiscountTotalValue);
      totalOnlyDiscountedPrice += parseInt (a1DiscountTotalValue);
      courseOverviewTime += 1;
      inputHTML = `<input type="hidden" id="clickCourseBtn_${ev}" name="total_enrolled_course[]" value="${ev}">`;
    }
  }
  if(ev == 'a2'){
    clickCountA2++
    var a2totalValue = document.getElementById('courseA2TdPrice1Input').value;
    var a2DiscountTotalValue = document.getElementById('courseA2TdDiscountPrice1Input').value;
    if(clickCountA2%2 == 0){
      document.getElementById("courseA2TdPrice1").style.display = "none";
      document.getElementById("courseA2TdPrice2").style.display = "none";
      document.getElementById("a2CourseOverview").style.display = "none";
      document.getElementById("a2CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (a2totalValue);
      discountTotalPrice -= parseInt (a2DiscountTotalValue);
      totalOnlyDiscountedPrice -= parseInt (a2DiscountTotalValue);
      courseOverviewTime -= 1;
      let idOnek = 'clickCourseBtn_'+ev;
      document.getElementById(idOnek).remove();
    }else{
      document.getElementById("courseA2TdPrice1").style.display = "block";
      document.getElementById("courseA2TdPrice2").style.display = "block";
      document.getElementById("a2CourseOverview").style.display = "block";
      document.getElementById("a2CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (a2totalValue);
      discountTotalPrice += parseInt (a2DiscountTotalValue);
      totalOnlyDiscountedPrice += parseInt (a2DiscountTotalValue);
      courseOverviewTime += 1;
      inputHTML = `<input type="hidden" id="clickCourseBtn_${ev}" name="total_enrolled_course[]" value="${ev}">`;
    }
  }
  if(ev == 'b1'){
    clickCountB1++
    var b1totalValue = document.getElementById('courseB1TdPrice1Input').value;
    var b1DiscountTotalValue = document.getElementById('courseB1TdDiscountPrice1Input').value;
    if(clickCountB1%2 == 0){
      document.getElementById("courseB1TdPrice1").style.display = "none";
      document.getElementById("courseB1TdPrice2").style.display = "none";
      document.getElementById("b1CourseOverview").style.display = "none";
      document.getElementById("b1CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (b1totalValue);
      discountTotalPrice -= parseInt (b1DiscountTotalValue);
      totalOnlyDiscountedPrice -= parseInt (b1DiscountTotalValue);
      courseOverviewTime -= 1;
      let idOnek = 'clickCourseBtn_'+ev;
      document.getElementById(idOnek).remove();
    }else{
      document.getElementById("courseB1TdPrice1").style.display = "block";
      document.getElementById("courseB1TdPrice2").style.display = "block";
      document.getElementById("b1CourseOverview").style.display = "block";
      document.getElementById("b1CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (b1totalValue);
      discountTotalPrice += parseInt (b1DiscountTotalValue);
      totalOnlyDiscountedPrice += parseInt (b1DiscountTotalValue);
      courseOverviewTime += 1;
      inputHTML = `<input type="hidden" id="clickCourseBtn_${ev}" name="total_enrolled_course[]" value="${ev}">`;
    }
  }
  if(ev == 'b2'){
    clickCountB2++
    var b2totalValue = document.getElementById('courseB2TdPrice1Input').value;
    var b2DiscountTotalValue = document.getElementById('courseB2TdDiscountPrice1Input').value;
    if(clickCountB2%2 == 0){
      document.getElementById("courseB2TdPrice1").style.display = "none";
      document.getElementById("courseB2TdPrice2").style.display = "none";
      document.getElementById("b2CourseOverview").style.display = "none";
      document.getElementById("b2CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (b2totalValue);
      discountTotalPrice -= parseInt (b2DiscountTotalValue);
      totalOnlyDiscountedPrice -= parseInt (b2DiscountTotalValue);
      courseOverviewTime -= 1;
      let idOnek = 'clickCourseBtn_'+ev;
      document.getElementById(idOnek).remove();
    }else{
      document.getElementById("courseB2TdPrice1").style.display = "block";
      document.getElementById("courseB2TdPrice2").style.display = "block";
      document.getElementById("b2CourseOverview").style.display = "block";
      document.getElementById("b2CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (b2totalValue);
      discountTotalPrice += parseInt (b2DiscountTotalValue);
      totalOnlyDiscountedPrice += parseInt (b2DiscountTotalValue);
      courseOverviewTime += 1;
      inputHTML = `<input type="hidden" id="clickCourseBtn_${ev}" name="total_enrolled_course[]" value="${ev}">`;
    }
  }
  if(ev == 'c1'){
    clickCountC1++
    var c1totalValue = document.getElementById('courseC1TdPrice1Input').value;
    var c1DiscountTotalValue = document.getElementById('courseC1TdDiscountPrice1Input').value;
    if(clickCountC1%2 == 0){
      document.getElementById("courseC1TdPrice1").style.display = "none";
      document.getElementById("courseC1TdPrice2").style.display = "none";
      document.getElementById("c1CourseOverview").style.display = "none";
      document.getElementById("c1CoursePriceBtn").classList.remove("onlclik_price_active");
      total -= parseInt (c1totalValue);
      discountTotalPrice -= parseInt (c1DiscountTotalValue);
      totalOnlyDiscountedPrice -= parseInt (c1DiscountTotalValue);
      courseOverviewTime -= 1;
      let idOnek = 'clickCourseBtn_'+ev;
      document.getElementById(idOnek).remove();
    }else{
      document.getElementById("courseC1TdPrice1").style.display = "block";
      document.getElementById("courseC1TdPrice2").style.display = "block";
      document.getElementById("c1CourseOverview").style.display = "block";
      document.getElementById("c1CoursePriceBtn").classList.add("onlclik_price_active");
      total += parseInt (c1totalValue);
      discountTotalPrice += parseInt (c1DiscountTotalValue);
      totalOnlyDiscountedPrice += parseInt (c1DiscountTotalValue);
      courseOverviewTime += 1;
      inputHTML = `<input type="hidden" id="clickCourseBtn_${ev}" name="total_enrolled_course[]" value="${ev}">`;
    }
  }
  
  document.getElementById('enrolled_course_stu').insertAdjacentHTML("beforeend", inputHTML);
  
  //price
  let totalOnlyDiscountPrice = parseInt(total)-parseInt(totalOnlyDiscountedPrice);
  document.getElementById('courseOverviewRegularPrice').innerHTML = total.toLocaleString() + '/-';
  document.getElementById('courseOverviewDiscountPrice').innerHTML = '- '+ totalOnlyDiscountPrice.toLocaleString() + '/-';
  document.getElementById('courseOverviewDiscountedPrice').innerHTML = totalOnlyDiscountedPrice.toLocaleString() + '/-';

  document.getElementById('courseOverviewTotalPrice').innerHTML = totalOnlyDiscountedPrice.toLocaleString() + '/-';
  document.getElementById('courseOverviewTime').innerHTML = courseOverviewTime;

  if(ev == 'privileged'){
    clickCountPriviliged++
    var priviligedTotalPrice = document.getElementById('coursePriviligedTdPrice1Input').value;
    if(clickCountPriviliged%2 == 0){
      document.getElementById("coursePrivileged").style.display = "none";
      document.getElementById("privilegedCoursePriceBtn").classList.remove("onlclik_price_active");
      discountTotalPrice +=  parseInt(priviligedTotalPrice);

      document.getElementById('courseOverviewPrivileged').innerHTML = 0 + '/-';
      document.getElementById('courseOverviewTotalPrivileged').innerHTML = totalOnlyDiscountedPrice.toLocaleString() + '/-';

      document.getElementById('courseOverviewTotalPrice').innerHTML = totalOnlyDiscountedPrice.toLocaleString() + '/-';
    }else{
      document.getElementById("coursePrivileged").style.display = "block";
      discountTotalPrice -= parseInt(priviligedTotalPrice);
      document.getElementById("privilegedCoursePriceBtn").classList.add("onlclik_price_active");
      
      document.getElementById('courseOverviewPrivileged').innerHTML = '- ' + priviligedTotalPrice.toLocaleString() + '/-';
      let totalOnlyPriviligedPrice = parseInt(totalOnlyDiscountedPrice)-parseInt(priviligedTotalPrice);
      document.getElementById('courseOverviewTotalPrivileged').innerHTML = totalOnlyPriviligedPrice.toLocaleString() + '/-';

    document.getElementById('courseOverviewTotalPrice').innerHTML = totalOnlyPriviligedPrice.toLocaleString() + '/-';

    }
  }
  
  document.getElementById('totalCourseRegularPrice').innerHTML = total.toLocaleString() + '/-';
  document.getElementById('totalCourseDiscountPrice').innerHTML = discountTotalPrice.toLocaleString() + '/-';
  
  
  
  
  
  
  
}
if(desired_level == 'A1'){
  $("#activeClass1").removeClass('inner_box_top_1');
  $("#activeClass1").addClass('inner_box_top_1_another');
}
if(desired_level == 'A2'){
  $("#activeClass2").removeClass('inner_box_top_2');
  $("#activeClass2").addClass('inner_box_top_2_another');
}
if(desired_level == 'B1'){
  $("#activeClass3").removeClass('inner_box_top_3');
  $("#activeClass3").addClass('inner_box_top_3_another');
}
if(desired_level == 'B2'){
  $("#activeClass4").removeClass('inner_box_top_4');
  $("#activeClass4").addClass('inner_box_top_4_another');
}
if(desired_level == 'C1'){
  $("#activeClass5").removeClass('inner_box_top_5');
  $("#activeClass5").addClass('inner_box_top_5_another');
}
if(desired_level == 'C2'){
  $("#activeClass6").removeClass('inner_box_top_6');
  $("#activeClass6").addClass('inner_box_top_6_another');
}