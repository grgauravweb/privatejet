<?php
session_start();
$id=$_SESSION['id'];
include "../connect.php";
if(isset($_POST['update'])){
      {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $mobile = $_POST['phone'];
$sql = "UPDATE `user` SET `name`='$name',`email`='$email',`mobile`='$mobile' where `id`='$id'";
          $mysqli = mysqli_query($conn, $sql);
          if ($sql)
          {
            echo "<script>alert('Profile update successful')</script>";
            echo '<script>window.location.href="./edit.php";</script>';
            // header("Location: ./edit.php");
          }
        }
        mysqli_close($conn);
        }
?>