<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    
 ?>
 <?php
 include("./header.php");
 ?>
     <div class="container">
     <h1 style="margin-top:100px;">Hello, <?php echo $_SESSION['name']; ?></h1>
     <div class="row">
      <div class="col-lg-4">
     <div class="card" style="padding: 20px;">
     <div class="card-title">
     <a href="edit.php" class="btn btn-danger">Edit Profile</a>
         </div>
      <div class="card-body">
         Provide personal details and how we can reach you
      </div>
     </div>
     </div>
     <div class="col-lg-4">
     <div class="card" style="padding: 20px;">
     <div class="card-title">
     <a href="changepassword.php" class="btn btn-danger">Change Password</a>
     </div>
      <div class="card-body ">
      Change your password
      <br><br>
      </div>
     </div>
     </div>
     </div>
     </div>
     <!-- <script src="../js/nav.js"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

<?php 
}else{
     header("Location: ../");
     exit();
}
 ?>