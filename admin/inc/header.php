<?php 
    include ("db.php");
    include ("function.php");
?>


<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    <title>চিরঞ্জীব  মুজিব  | Admin</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">
   <!--  <link rel="stylesheet" href="assets/fonts/fontawesome.css"> -->
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">
    <link rel="stylesheet" href="assets/libs/datatables/datatables.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/libs/flot/flot.css">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">
                    </span>
                    <a href="index.php" class="app-brand-text demo sidenav-text font-weight-normal ml-2">চিরঞ্জীব  মুজিব </a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                 <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item open">
                        <a href="index.php" class="sidenav-link">
                            <i class="sidenav-icon fas fa-home"></i>
                            <div>Dashboards</div>
                            
                        </a>
                   
                    </li>

                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-camera-movie"></i>
                           <!--  <i class="sidenav-icon feather icon-layers"></i> -->
                            <div>Hall</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="hall.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule  px-2"></i>All Hall Information</div>
                                </a>
                            </li>
                       
                        </ul>
                    </li>

                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                           <i class="sidenav-icon fas fa-users"></i>
                            <div>User</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="user.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>All User</div>
                                </a>
                            </li>
                       
                        </ul>
                    </li>

                      <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                           <i class="sidenav-icon fas fa-user-shield"></i>
                            <div>Admin</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="admin.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>All Admin</div>
                                </a>
                            </li>
                       
                        </ul>
                    </li>

                     <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                           <i class="sidenav-icon fas fa-history"></i>
                            <div>Show Time</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="showtime.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>All Show Time</div>
                                </a>
                            </li>
                       
                        </ul>
                    </li>

                      <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                           <i class="sidenav-icon far fa-ticket fw-bold"></i>
                            <div>Ticket Category</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="ticketcategory.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>All Show Time</div>
                                </a>
                            </li>
                       
                        </ul>
                    </li>

                     <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                           <i class="sidenav-icon fas fa-ticket-alt fw-bold"></i>
                            <div>Ticket Order</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="order.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>All Order</div>
                                </a>
                            </li>
                       
                        </ul>
                    </li>
                      <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fw-bold fas fa-browser"></i>
                            <div> Website</div>
                           
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="slide.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Slide</div>
                                </a>
                            </li>

                             <li class="sidenav-item">
                                <a href="trailer.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Trailer</div>
                                </a>
                            </li>

                             <li class="sidenav-item">
                                <a href="teaser.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Teaser</div>
                                </a>
                            </li>

                             <li class="sidenav-item">
                                <a href="dialoge.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Movie Dialogue</div>
                                </a>
                            </li>

                            <li class="sidenav-item">
                                <a href="moviegallery.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Movie Gallery</div>
                                </a>
                            </li>

                             <li class="sidenav-item">
                                <a href="team.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Team Leader</div>
                                </a>
                            </li>

                              <li class="sidenav-item">
                                <a href="behindthescene.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Behind The Scene</div>
                                </a>
                            </li>
                             <li class="sidenav-item">
                                <a href="characters.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Characters</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="blog.php" class="sidenav-link">
                                    <div><i class="fas fa-horizontal-rule px-2"></i>Blog</div>
                                </a>
                            </li>
                            
                            
                           
                            

                            
                       
                        </ul>
                    </li>
                   

                    <!-- Layouts -->
               
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">চিরঞ্জীব  মুজিব </span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            

                           

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="assets/img/avatars/1.png" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Sumi Akter</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
            
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->