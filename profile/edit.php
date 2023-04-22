<?php 
session_start();
$id=$_SESSION['id'];
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    include "../connect.php";
    $sql = "SELECT * FROM user where id='$id'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // Output data of each row
    while($row = $result->fetch_assoc()){
        // echo "ID: " . $row["mobile"]. "<br>";
    
 ?>
 <?php
 include("./header.php");
 ?>
     <div class="container">
     <form action="update.php" method="post" style="margin-top:100px;">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Legal Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Legal Full Name" value="<?php echo $row['name'];?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" placeholder="Email"
                                        required>
                                </div>
                                <div id="emailStatus"></div>
                                <span id="confirm_password_msg"></span>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Mobile With Country
                                        Code</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $row['mobile'];?>"
                                        placeholder="Mobile With Country Code" required>
                                </div>
                                <div id="phonestatus"></div>
                                <button class="btn btn-danger" style="width:100%;" name="update">Update</button>
                            </form>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
     </body>
</html>

<?php 
}
}
}else{
     header("Location: ../");
     exit();
}
 ?>
 <!-- $id=$_SESSION['id'];
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $mysqli = new mysqli("localhost","root","","privatejet");
    $sql = "SELECT * FROM user where id='$id'";
$result = $mysqli->query($sql);

if($result->num_rows > 0){
    // Output data of each row
    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["mobile"]. "<br>";
    }
} -->