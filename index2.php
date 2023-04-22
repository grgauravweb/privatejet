<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Private Jet</title>
    <!-- Stylesheets & Fonts -->
    <!-- <link href="css/plugins.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./ajax-script.js"></script>
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

        .container #header {
            display: none;
        }

        .carousel-caption {
            position: absolute;
            top: 0rem;
            bottom: 0rem;
            color: #fff;
            text-align: left;
            right: 14%;
            left: 0%;
            width: 100%;
        }

        button .bg-light {
            display: flex;
        }

        ._0m {
            width: 100%;
            padding: 9.57px 45px;
            background-color: #e7e3e0;
        }

        ._1m {
            font-size: 26px;
            line-height: 34px;
            margin-bottom: 18px;
            font-weight: 600;
        }

        ._2m {
            font-size: 36px;
            line-height: 1;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 12px;
        }

        ._2m svg {
            width: 30px;
            margin: 0 15px;
        }

        ._3m {
            color: #646771;
            margin-top: 7px;
            font-size: 24px;
            line-height: 32px;
        }

        ._4m {
            padding-right: 30px;
            margin-top: 10px;
        }

        ._Ym,
        ._Zm {
            width: 50%;
            position: relative;
        }

        ._in {
            color: #393b41;
            line-height: 1.2;
        }

        ._mn {
            margin-top: 30px;
        }

        ._dF a,
        ._dF button {
            position: relative;
            text-decoration: none;
            font-weight: 600;
            color: #d8353b;
        }

        ._on video {
            max-width: 100%;
            display: block;
        }

        ._yR {
            width: 100%;
            height: auto;
            background-color: #e7e3e0;
            padding: 160px 65px 1px 75px;
            z-index: 2;
            position: relative;
        }

        ._aR {
            width: 100%;
            height: auto;
            background-color: #e7e3e0;
            padding: 160px 65px 1px 75px;
            z-index: 2;
            position: relative;
        }

        ._bR {
            width: 100%;
            height: auto;
            background-color: #e7e3e0;
            padding: 160px 65px 1px 75px;
            z-index: 2;
            position: relative;
        }

        ._cR {
            width: 100%;
            height: auto;
            background-color: #e7e3e0;
            padding: 160px 65px 33px 75px;
            z-index: 2;
            position: relative;
        }

        ._BR {
            margin-bottom: 18px;
        }

        .t20 {
            font-size: 20px;
            line-height: 1.5;
        }

        .h1,
        h1 {
            font-size: 64px;
        }

        .h4,
        h4 {
            font-size: 36px;
        }

        body,
        p {
            font-size: 20px;
        }

        .hide {
            display: none;
        }
    </style>
</head>

<body>


    <!-- Body Inner -->
    <div class="body-inner">
        <header class="header">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video autoplay loop playsinline style="width: 100%; height:auto;">
                            <source src="https://website-cdn.flyxo.com/data/webapi/xo_video_e7c796e154_76b57c0965.mp4"
                                type="video/mp4">
                        </video>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="container" style="margin-top: 124px;">
                                <p>Fly Beyond.<sup style="font-size:10px; top: -1.1em;">TM</sup></p>
                                <h3>The open future
                                    of private aviation.</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Header -->
            <?php
            include("header.php");
            ?>
        </header>
        <!-- end: Header -->


        <!-- SECTION IMAGE FULLSCREEN -->
        <!-- <section class="fullscreen background-dark ">
            <div class="container">
                <div class="container-fullscreen text-center">
                    <div class="text-middle">
                        <h4 class="text-light" data-animate="fadeInUp" data-animate-delay="700">Fly Beyond.™</h4>
                        <h1 class="text-light text-lg" data-animate="fadeIn" data-animate-delay="500"><span
                                class="text-rotator" data-animation="fadeIn" data-speed="3000">The open future
                                of private aviation.</span> </h1>

                        <div data-animate="fadeInDown" data-animate-delay="900">
                            <a class="btn btn-light btn-outline" href="#"><span>Get in Touch</span></a>
                        </div>
                        <div class="scrolldown-animation" id="scroll-down">
                            <a class="scroll-to" href="#easy-fast"><img src="images/scrolldown.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end: SECTION IMAGE FULLSCREEN -->

        <!-- COMPANY -->
        <section class="p-b-10">
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4">
                            <input class="form-control me-2" type="search" id="search" class="airport-search__input"
                                placeholder="Where From?" aria-label="Search">
                            <select id="airportList" class="form-select airport-search__results"
                                aria-label="Default select example"></select>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control me-2" type="search" id="search2" class="airport-search__input"
                                placeholder="Where To?" aria-label="Search">
                            <select id="airportList2" class="form-select airport-search__results"
                                aria-label="Default select example"></select>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-danger" style="width: 100%;">Search</button>
                        </div>
                    </div>
                </form>
        </section>
        <section class="p-b-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="_0m">
                            <div class="_1m">Announcing a New Shared Flight Route</div>
                            <h1 class="_2m"><span>Palm Beach</span><svg width="58" height="48" viewBox="0 0 58 48"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M34.928 11.37c-.217-.012-.33-.022-.443-.022-6.216.002-12.433-.052-18.647.032-3.473.047-6.423 1.46-8.838 3.977-1.966 2.048-3.147 4.494-3.41 7.293-.418 4.437 1.123 8.142 4.545 11.025.575.485 1.224.887 1.857 1.3.886.58 1.2 1.555.725 2.349a1.851 1.851 0 0 1-2.55.633C3.73 35.283.982 31.424.196 26.31c-.646-4.204.31-8.116 2.823-11.58 2.534-3.493 5.944-5.682 10.183-6.501 1.19-.23 2.424-.318 3.64-.325 5.784-.032 11.57-.014 17.355-.014h.754c-.197-.238-.317-.39-.445-.534-1.061-1.199-2.13-2.392-3.184-3.596-.763-.87-.765-1.909-.026-2.581.733-.667 1.879-.554 2.625.287 2.068 2.331 4.13 4.668 6.183 7.01.6.685.6 1.58.044 2.207l-6.305 7.109c-.67.757-1.448.914-2.256.455-.976-.553-1.182-1.684-.421-2.598.803-.965 1.658-1.888 2.49-2.83.404-.458.806-.917 1.272-1.448ZM22.2 36.669h.67c5.87 0 11.742-.013 17.613.005 3.124.01 5.948-.87 8.384-2.828 2.753-2.215 4.411-5.092 4.696-8.635.425-5.297-1.796-9.286-6.242-12.093-.853-.537-1.24-1.223-1.064-1.985.271-1.18 1.511-1.704 2.598-1.087 2.254 1.28 4.132 2.978 5.541 5.156 3.064 4.736 3.562 9.775 1.42 14.965-1.735 4.202-4.855 7.115-9.092 8.798-2.04.809-4.163 1.142-6.356 1.136-5.87-.016-11.741-.005-17.612-.005h-.643c.114.158.179.267.261.36 1.122 1.262 2.239 2.526 3.37 3.778.374.414.629.874.581 1.438-.055.647-.277 1.202-.974 1.435-.764.256-1.465.215-2.03-.421-1.487-1.672-2.965-3.352-4.447-5.03-.615-.696-1.238-1.386-1.842-2.093-.608-.712-.589-1.655.028-2.351 2.032-2.293 4.066-4.584 6.097-6.879.374-.423.777-.775 1.39-.783.747-.008 1.298.329 1.64.968.365.682.243 1.342-.256 1.914-1.11 1.27-2.236 2.526-3.355 3.79-.101.114-.197.234-.375.447Z"
                                        fill="#393b41"></path>
                                </svg><span>Farmingdale</span></h1>
                            <div class="_3m">
                                <p>Seat prices start at $1,500.<br>Flights begin January 6th.&nbsp;</p>
                            </div><span>
                                <div class="_dF _4m"><a href="https://flyxo.com/shared-charter/ny_south_florida/">Learn
                                        more and book now</a></div>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="./images/man_plane2_4091542623_d524a0fe38.webp" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </section>
        <section class="p-b-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="_in h1">The most innovative <br>way to fly private.</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>Instantly book an entire private aircraft as well as seats on a private jet seamlessly
                            through the XO mobile app. Our technology makes it possible to book 2,400 private jets on
                            your phone. Our service makes it perfect.

                        </p>
                        <div class="_dF _mn"><a href="https://flyxo.com/download/">Get the XO mobile app</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COMPANY -->
        <section class="p-b-10">
            <div class="container">
                <video autoplay loop playsinline style="width: 100%;">
                    <source type="video/mp4"
                        src="https://website-cdn.flyxo.com/data/webapi/home_app_desktop_140e735e7c_d8940d2e63.mp4">
                </video>
            </div>
        </section>
        <section class="p-b-10">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">Value and flexibility</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">Elevated service</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false">Peace of mind</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="convenience-tab" data-bs-toggle="tab"
                            data-bs-target="#convenience-tab-pane" type="button" role="tab"
                            aria-controls="convenience-tab-pane" aria-selected="false">Convenience</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="_yR">
                                    <h3 class="_BR h4">Value and flexibility</h3>
                                    <div class="_CR t20">
                                        <p class="_dF">As the most innovative private aviation company, XO is able to
                                            bring you efficient,
                                            accessible, and transparent ways to <a href="/membership/">buy</a> and <a
                                                href="/ways-to-fly/">fly</a>. Charter an entire jet, or offer seats you
                                            don’t
                                            need through our app. Either way, there’s no longer a need for full or even
                                            fractional jet ownership.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="./images/Value_and_flexibility_29ff8e3795_58398ad8c0.webp"
                                    style="width:100%; height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="_aR">
                                    <h3 class="_BR h4">Enjoy elevated service</h3>
                                    <div class="_CR t20">
                                        <p class="_dF">XO’s unparalleled attention to service detail takes your flying
                                            experience to new heights — whether through <a href="/download/">our mobile
                                                app</a> , personal connections with our trusted Aviation Advisors,
                                            well-appointed cabins supported by experienced crew, or curated <a
                                                href="/benefits/">Member Benefits</a> beyond the jet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="./images/Value_and_flexibility_29ff8e3795_58398ad8c0.webp"
                                    style="width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="_bR">
                                    <h3 class="_BR h4">Gain peace of mind</h3>
                                    <div class="_CR t20">
                                        <p class="_dF">With <a href="/fleet/">the Vista Members’ fleet</a>, XO provides
                                            a private and safe way to travel in uncertain times — with the assurance of
                                            our operational excellence, exemplary safety record, and exacting
                                            cleanliness standards. Avoid the crowds, and ensure privacy and discretion.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="./images/Value_and_flexibility_29ff8e3795_58398ad8c0.webp"
                                    style="width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="convenience-tab-pane" role="tabpanel"
                        aria-labelledby="convenience-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="_cR">
                                    <h3 class="_BR h4">Make time fly</h3>
                                    <div class="_CR t20">
                                        <p>The XO Experience allows business and leisure travelers to make the most of
                                            their time in the air and on the ground. With global route coverage, XO
                                            offers convenience, dependability, and efficiency — from booking to landing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="./images/Value_and_flexibility_29ff8e3795_58398ad8c0.webp"
                                    style="width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-b-10">
            <div class="container">
                <h2 style="font-size:64px;">No crowds. All comfort.</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="./images/Skipping_crowds_11fd4bd959_d25391c0af.webp" style="width: 100%;height:400px;"
                            alt="">
                    </div>
                    <div class="col-lg-6" style="padding-right:68px;">
                        <p class="_dF">When you consider everything that comes with flying commercial - the long
                            security lines, inevitable flight delays, crowded cabins, limited food options, mass
                            confusion at baggage claim, and the added safety concerns - it's no surprise why so many
                            frequent flyers opt to fly private. While booking a <a href="https://flyxo.com/charter/"
                                target="_blank" rel="noopener noreferrer nofollow">charter flight</a> is always easy to
                            do with XO, doing so as an <a href="https://flyxo.com/membership/" target="_blank"
                                rel="noopener noreferrer nofollow">XO Member</a> offers many additional benefits, such
                            as improved cancellation terms, priority boarding, and exclusive brand partner benefits.
                            Plus, all unused funds are fully refundable.</p>
                        <div class="_dF" style="margin-top:30px;"><a href="https://flyxo.com/how-it-works/"> See how it
                                works</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-b-10">
            <div class="container">
                <h2 class="h1">Featured Flights</h2>
            </div>
        </section>
        <!-- <section class="p-b-10">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/abstract-2.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/abstract-2.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/abstract-2.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section> -->
        <!-- COUNTERS -->

        <!-- end: Post item-->
    </div>
    <!-- end: Blog post-->

    <!-- end: BLOG -->

    <!-- Footer -->
    <!-- end: Footer -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Create account</h1> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="signup" data-bs-toggle="tab"
                                data-bs-target="#signup-pane" type="button" role="tab" aria-controls="signup-pane"
                                aria-selected="true">Create account</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="login" data-bs-toggle="tab" data-bs-target="#login-pane"
                                type="button" role="tab" aria-controls="login-pane" aria-selected="false">Login
                                account</button>
                        </li>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="signup-pane" role="tabpanel" aria-labelledby="signup"
                            tabindex="0">
                            <form action="register.php" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Legal Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Legal Full Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        required>
                                </div>
                                <div id="emailStatus"></div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        placeholder="Confirm Password" required>
                                </div>
                                <span id="confirm_password_msg"></span>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Mobile With Country
                                        Code</label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="Mobile With Country Code" required>
                                </div>
                                <div id="phonestatus"></div>
                                <div class="mb-3">
                                    <label for="flownornot" class="form-label">Have you flown private
                                        before?</label>
                                    <select class="form-select" name="flown_or_not" aria-label="Default select example"
                                        required>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                            required>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-danger" style="width:100%;" name="submit">Register</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="login-pane" role="tabpanel" aria-labelledby="login" tabindex="0">
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email2" name="email2" placeholder="Email"
                                        required>
                                </div>
                                <div id="emailStatus2"></div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password2"
                                        placeholder="Password" required>
                                </div>
                                <button class="btn btn-danger" style="width:100%;" name="login">Login</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="./js/nav.js"></script>
    <!--Plugins-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>