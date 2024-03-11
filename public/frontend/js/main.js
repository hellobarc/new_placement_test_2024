
function package_value(event){
  let x = event.target.value;
  console.log(x);

  if( x == 'regular'){
    document.getElementById("discount").style.display = "none";
    document.getElementById("offered_price").style.display = "none";
    document.getElementById("duration").style.display = "block";
    document.getElementById("individual_price").style.display = "block";
  }
  else if( x == 'standard' ){
    document.getElementById("duration").style.display = "none";
    document.getElementById("individual_price").style.display = "none";
    document.getElementById("discount").style.display = "block";
    document.getElementById("offered_price").style.display = "block";
  }
  else if( x == 'privileged' ){
    document.getElementById("duration").style.display = "none";
    document.getElementById("individual_price").style.display = "none";
    document.getElementById("discount").style.display = "block";
    document.getElementById("offered_price").style.display = "block";
  }
  else{
    document.getElementById("duration").style.display = "none";
    document.getElementById("individual_price").style.display = "none";
    document.getElementById("discount").style.display = "none";
    document.getElementById("offered_price").style.display = "none";
  }
}


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
