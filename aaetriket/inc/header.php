<?php
    session_start();
    include "inc/conn.php";
    include "inc/funcstion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>চিরঞ্জীব মুজিব - Chironjib Mujib || Bangla New Movie</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="https://chironjibmujib.com/wp-content/uploads/2021/09/LOGO-1.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li><a class="active" href="#0">Home</a></li>
                    <li><a href="#0">movies</a></li>       
                    <li><a href="#0">blog</a></li>
                    <li><a href="contact.html">contact</a></li>

                    <?php 
                        if (isset($_SESSION['User'])) {?>
                            <li class="header-button pr-0"><a href="profile.php"><?php UserData('Full_Name'); ?></a></li>;
                       <?php }else{?>
                            <li class="header-button pr-0"><a href="sign-in.php">Login</a></li>
                    <?php }?>
                    


                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->



