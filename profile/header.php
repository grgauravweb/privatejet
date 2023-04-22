<?php 
session_start();
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        #nav1 {
            background: #012d4900 !important;
        }

        #nav1 a.nav-link {
            color: #ffffff;
        }

        #nav2.nav-link {
            color: #000000 !important;
        }
        @media (max-width: 992px){
#nav1 {
    background: #ffffff !important;
}
#nav1 .nav-link{
    color:#000000!important;
}
.getstarted{
    display:none;
}
        }
        @media (min-width: 992px) {
            .getstartm{
    display:none;
}
        }
        #nav2 {
            background: #ffffff !important;
            box-shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top hide" id="nav2">
            <?php

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<a href="#" class="nav-link dropdown-toggle getstartm" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
<ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./">Manage account</a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Trips</a></li>
                                <li><a class="dropdown-item" href="../logout.php">Logout
                                    </a></li>
                            </ul>
<?php
}
else{
?>
<a href="#" class="nav-link getstartm" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
 <?php
}
 ?>
                <a class="navbar-brand" href="#">
                    <img src="./images/logo/logo.png" alt="" style="display:inline"></a>
                <!-- <a href="index.php" style="text-decoration:none"><h2 style="color:red">Aman Roofing Works</h2></a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="../">Private Jet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">The Fleet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="spare-parts.php">XO Membership</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Shared Flights
                            </a>
                            <ul class="dropdown-menu me-5">
                                <li><a class="dropdown-item" href="logout.php">New York - South Florida
                                    </a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Aspen</a></li>
                                <li><a class="dropdown-item" href="carbonated-soft-drink.php">Los Angeles</a></li>
                            </ul>
                        </li>

                    </ul>
                    <li class="navbar-nav nav-item me-5 dropdown getstarted">
                    <?php

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="./">Manage account</a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Trips</a></li>
                                <li><a class="dropdown-item" href="../logout.php">Logout
                                    </a></li>
                            </ul>
<?php
}
else{
?>
<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
 <?php
}
 ?>
                    </li>
                </div>
            </nav>