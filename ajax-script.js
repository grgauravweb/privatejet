//check email
function checkEmail(emailInput){
    $.ajax({
     method:"POST",
     url: "validate.php",
     data:{emailId:emailInput},
     success: function(data){
       $('#emailStatus').html(data);
     }
   });
}
$(document).on('input','#email',function(e){

let emailInput = $('#email').val();
let msg;
if(emailInput.length==0){
msg="<div class='alert alert-danger'>Enter email</div>";
}
else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(emailInput)){
msg="<div class='alert alert-danger'>Email is not Valid</div>";
}else{
checkEmail(emailInput);
}
$('#emailStatus').html(msg);
});
//check mobile number
function phone(phoneinput){
    $.ajax({
     method:"POST",
     url: "validate.php",
     data:{phoneId:phoneinput},
     success: function(data){
       $('#phonestatus').html(data);
     }
   });
}
$(document).on('input','#phone',function(e){

let phoneinput = $('#phone').val();
let msg;
if(phoneinput.length==0){
msg="<div class='alert alert-danger'>Enter phone number</div>";
}
else{
phone(phoneinput);
}
$('#phonestatus').html(msg);
});
//email not present
function email2(emailinput2){
  $.ajax({
   method:"POST",
   url: "validate.php",
   data:{emailId2:emailinput2},
   success: function(data){
     $('#emailStatus2').html(data);
   }
 });
}
$(document).on('input','#email2',function(e){

let emailinput2 = $('#email2').val();
let msg;
if(emailinput2.length==0){
msg="<div class='alert alert-danger'>Enter email</div>";
}
else{
email2(emailinput2);
}
$('#emailStatus2').html(msg);
});