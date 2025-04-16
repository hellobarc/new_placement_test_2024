function handleKnow(event){
  if(event.target.value == 'student_reference'){
    document.getElementById("reference_id").style.display = "block";
  }else{
    document.getElementById("reference_id").style.display = "none";
  }
}
var course_info = document.getElementById("course-related-info").style.display = "block";
document.getElementById("total_enrolled_course_section").style.display = "block";


var course_price_section = document.getElementById("course_price_section").style.display = "block";



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





