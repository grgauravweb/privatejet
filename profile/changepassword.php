<?php
session_start();
$id=$_SESSION['id'];
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    include "../connect.php";
    if(isset($_POST['update'])){
        $opassword=$_POST['opassword'];
        $npassword=$_POST['npassword'];
        $cpassword=$_POST['cpassword'];
        $sql = "SELECT `password` FROM user where `id`='$id'";
        $result = $conn->query($sql);
        if($npassword===$cpassword){
        if($result->num_rows ===1){
            // Output data of each row
            while($row = $result->fetch_assoc()){
                if($row["password"]!=$opassword){
                    echo "<script>alert('Old Password is incorrect')</script>";
                }
                else{
                    $query="UPDATE `user` SET `password`='$npassword' WHERE `id`='$id'";
                    $run = $conn->query($query);
                    if($run){
                        echo "<script>alert('Password Updated Successfuly')</script>";
                    }
                }
            }
        }
    }else{
        echo "<script>alert('New Password and Confirm Passwor not matched')</script>";
    }
    }
    include "./header.php";
    ?>
<div class="container">
    <form action="changepassword.php" method="post" style="margin-top:100px;">
    <div class="mb-3">
        <label for="opassword" class="form-label">Old Password</label>
        <input type="password" class="form-control" id="opassword" name="opassword" placeholder="Old Password" required>
    </div>
    <div class="mb-3">
        <label for="npassword" class="form-label">New Password</label>
        <input type="password" class="form-control" id="npassword" name="npassword" placeholder="New Password" required>
    </div>
    <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
    </div>
    <button class="btn btn-danger" style="width:100%;" name="update">Change Password</button>
    </form>
</div>
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