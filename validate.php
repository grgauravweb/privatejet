<?php
include("connect.php");
//check email
if(!empty(isset($_POST['emailId'])) && isset($_POST['emailId'])){

   $emailInput= $_POST['emailId'];
   checkEmail($conn, $emailInput);
  
}


function checkEmail($conn, $emailInput){

  $query = "SELECT email FROM user WHERE email='$emailInput'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    echo "<div class='alert alert-danger'>This Email is alredy exists </div>";
  }
}

//check phone number
if(!empty(isset($_POST['phoneId'])) && isset($_POST['phoneId'])){

    $phoneinput= $_POST['phoneId'];
    checkphone($conn, $phoneinput);
   
 }
 function checkphone($conn, $phoneinput){

    $query = "SELECT `mobile` FROM `user` WHERE `mobile`='$phoneinput'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      echo "<div class='alert alert-danger'>This Phone number is alredy exists </div>";
    }
  }
  //email not exist
  if(!empty(isset($_POST['emailId2'])) && isset($_POST['emailId2'])){

    $emailinput2= $_POST['emailId2'];
    checkemail2($conn, $emailinput2);
   
 }
 function checkemail2($conn, $emailinput2){

    $query = "SELECT `email` FROM `user` WHERE `email`='$emailinput2'";
    $result = $conn->query($query);
    if ($result->num_rows < 1) {
      echo "<div class='alert alert-danger'>This Email not exists </div>";
    }
  }