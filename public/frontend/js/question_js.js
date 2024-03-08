let multiple_count = 1;
function myFunction() {
      $('#add-option').append(`<label for="name" class="mb-2 fw-bold">Question Option</label><div class="d-flex justify-content-start">
           <div class="form-group">
                <input type="text" name="blank_answer[]" class="form-control" placeholder="option">
           </div>
           <div class="form-check mt-2">
              <input class="form-check-input mx-2" type="checkbox" name="is_correct[]" value="${multiple_count}" id="flexCheckDefault${multiple_count}">
              <label class="form-check-label" for="flexCheckDefault${multiple_count}">is correct</label>
           </div>
        </div>`);
      multiple_count++;      
}

//multiple choice option selection start
function hitMultipleChoice(key,option_key) {
   let input_var = "user_multiple_choice_"+option_key;
   var element = document.getElementById(input_var).value = key;
   let myid = "#multipleColorChange_"+option_key+key;
   let myclass = ".option_item"+option_key;
   $(myclass).removeClass("mltiple_choice_option_correct");
   $(myid).addClass("mltiple_choice_option_correct");
}
//multiple choice option selection end
function addClass(col, row_item) {
   let checkId = "#right_check_"+col+"_"+ row_item;
   let input_val = [col,row_item];
   $("#checked_input_"+row_item).val(input_val);

   $(".empty_box_"+row_item).removeClass("active_check");
   $(checkId).addClass("active_check");
}

function allowDrop(ev) {
   ev.preventDefault();
 }
 
 function drag(ev) {
   ev.dataTransfer.setData("text", ev.target.id);
   
 }
 
 function drop(ev, id, ques_id) {
   ev.preventDefault();

   
   var data = ev.dataTransfer.getData("text");

   let text = document.getElementById(data).innerHTML;
  
   ev.target.appendChild(document.getElementById(data).cloneNode(true));
   let destination = "valDrop_"+id+ques_id;
   var val=document.getElementById(destination);
   //let pattern = /\d+/;
   //let seril_number = text.match(pattern);
   let input_text =  text.substr(2);
   val.value=input_text;
   

 }

 
let time = parseInt(startingMinutes - get_time);

let myInterval = setInterval(updateCountDown, 1000);
function updateCountDown(){
    var countdownEle = document.getElementById('countdown');
    const minutes = Math.floor( time /60 );
    let seconds = time % 60;
    //seconds = seconds < 10 ? '0' + seconds : seconds;
    countdownEle.innerHTML = `${minutes} : ${seconds}`;
    time--;
    if(minutes == 4 && seconds == 58){
      $('#exampleModal').modal('show');
    }else{
      $('#exampleModal').modal('hide');
    }
    if(minutes == 0 && seconds == 0){
      document.getElementById("questionForm").submit();
      
    }
    $('#time_value_minute').val(minutes);
    $('#time_value_second').val(seconds);
}


 function effect(key){
   let indicator_id = "indicator_"+key;
   $("#"+indicator_id).addClass("active_indicator");
 }
 
function countWord() {
  // Get the input text value
  var words = document
      .getElementById("word").value;
  // Initialize the word counter
  var count = 0;
  // Split the words on each
  // space character 
  var split = words.split(' ');
  // Loop through the words and 
  // increase the counter when 
  // each split word is not empty
  for (var i = 0; i < split.length; i++) {
      if (split[i] != "") {
          count += 1;
      }
  }
  // Display it as output
  document.getElementById("show")
      .innerHTML = count;
    if(task_id == 1 && count >=180){
      $('#limitedWord').modal('show');
    }
}
document.onkeydown = (e) => {
  if (e.key == 123) {
      e.preventDefault();
  }
  if (e.ctrlKey && e.shiftKey && e.key == 'I') {
      e.preventDefault();
  }
  if (e.ctrlKey && e.shiftKey && e.key == 'C') {
      e.preventDefault();
  }
  if (e.ctrlKey && e.shiftKey && e.key == 'J') {
      e.preventDefault();
  }
  if (e.ctrlKey && e.key == 'U') {
      e.preventDefault();
  }
};

 