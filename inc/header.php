<?php include "config/funcstion.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
     <!-- owlcarousel -->   
    <link rel="stylesheet" href="assets/carousel/owl.carousel.min.css">
    <!-- Main CSS -->   
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">
    <link rel="stylesheet" href="assets/js/jquery.flipster.min.css">
    <script src="assets/js/jquery.js"></script>

    <title></title>
  </head>
<body>

<header>
    <!-- ================ MANUBAR ================== -->
    <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img class="logo" src="assets/img/logo/logored.png" alt="logo"></a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blogs & News</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
            </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Mobile Header -->
<header class="d-block d-lg-none MobileHeader">
	<div class="row mx-0 P-0">
		<div class="col-1 pl-3 p-2 ">
			<i class="fas fa-bars h3 ps-2 mt-2 mobilemanu text-white"></i>
		</div>
		<div class="col-9 text-center">
			<a href="index"><img class="p-2" src="assets/img/logo/logow.png" width="100"></a>
		</div>
	</div>

	<div id="Mobile_manu" style="display:none;">		
  <nav>
		<ul class="list-unstyled" style="text-transform: uppercase;">
      <li class="nav-item py-1"><a href="" class="nav-link text-white p-0"><i class="fas fa-home pe-2"></i> Home</a></li>	
      <li class="nav-item py-1"><a href="" class="nav-link text-white p-0"><i class="fas fa-info-circle pe-2"></i> About</a></li>	
      <li class="nav-item py-1"><a href="" class="nav-link text-white p-0"><i class="far fa-images pe-2"></i> Gallery</a></li>	
      <li class="nav-item py-1"><a href="" class="nav-link text-white p-0"><i class="fas fa-newspaper pe-2"></i> Blogs & News</a></li>	
      <li class="nav-item py-1"><a href="" class="nav-link text-white p-0"><i class="fas fa-user-headset pe-2"></i> Contact us</a></li>  
    </ul>
    </nav>
	</div>
</header>

<script type="text/javascript">
	$(document).ready(function(){
		  //MobileManu
		  $(".mobilemanu").click(function(){
		    $("#Mobile_manu").toggle();
		  });
	});
</script>