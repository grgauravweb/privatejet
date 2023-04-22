
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="nav1">
            <?php

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<a href="#" class="nav-link dropdown-toggle getstartm" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="./profile">Manage account</a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Trips</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout
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
                            <a class="nav-link active" href="./">Private Jet</a>
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
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="mineral-water-plant.php">New York - South Florida
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
<li><a class="dropdown-item" href="./profile">Manage account</a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Trips</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout
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
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top hide" id="nav2">
            <?php

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<a href="#" class="nav-link dropdown-toggle getstartm" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
<ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./profile">Manage account</a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Trips</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout
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
                            <a class="nav-link active" href="./">Private Jet</a>
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
<li><a class="dropdown-item" href="./profile.php">Manage account</a></li>
                                <li><a class="dropdown-item" href="pulp-juice-plant.php">Trips</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout
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