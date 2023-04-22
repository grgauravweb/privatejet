<?php
include("connect.php");
if(isset($_POST['submit']))
      {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $mobile = $_POST['phone'];
          $flown = $_POST['flown_or_not'];
          
          $query2 = "SELECT email FROM user WHERE email='$email'";
  $result2 = $conn->query($query2);
  if ($result2->num_rows > 0) {
    echo "<script>alert('This Email is alredy exists')</script>";
  }else{
          $query = "INSERT INTO `user`(`name`, `email`, `password`, `mobile`, `flown_or_not`) VALUES ('$name','$email','$password','$mobile','$flown')";
          $run = mysqli_query($conn, $query);
if ($run)
          {
echo"<script>alert('Account created successfuly');</script>";
          }
      }
mysqli_close($conn);
      }


?>