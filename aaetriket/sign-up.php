    <?php
        include "inc/conn.php";
        include "inc/funcstion.php";

        if(isset($_POST['signup'])){

            $rowcunt = mysqli_num_rows(SelectData('users',"WHERE Ueser_Email='{$_POST['email']}'"));
            if ($rowcunt==0) {
                mysqli_query($conn,"INSERT INTO users (Full_Name,Ueser_Email,User_Phone_No,User_Password) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['Phoneno']}','{$_POST['password']}')");
                session_start();
                $_SESSION['User']=$_POST['email'];
                Reconect('index.php');
                
            }else{
                $error = "Email Already Used";
            };

        }
    
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
   
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="https://chironjibmujib.com/wp-content/uploads/2021/09/alfa-home-parallax-3.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">                        
                    <div class="section-header-3">
                        <h2 class="title">Signup</h2>
                        <h3 class="text-center"><?php if (isset($error)) { echo "SORRY".$error; }?></h3>
                    </div>
                    <form class="account-form" method="POST" action="">
                        <div class="form-group">
                            <label for="name">Name<span>*</span></label>
                            <input type="text" placeholder="Enter Your Full Name" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" name="email" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="Phoneno">Phone No.<span>*</span></label>
                            <input type="text" placeholder="Phone No" name="Phoneno" id="Phoneno" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="password" id="pass2" required>
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>
                            <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a href="#0">Fees</a></label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="signup" value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="sign-in.php">Login</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>