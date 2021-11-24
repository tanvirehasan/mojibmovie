 <?php include "inc/header.php"; ?>

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="https://chironjibmujib.com/wp-content/uploads/2021/09/alfa-home-parallax-3.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">চিরঞ্জীব মুজিব</h3>
                    <div class="tags">
                        <a href="#0">Bashundhara Cineplex</a>
                        <a href="#0">Dhaka</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">MON, SEP 09 2020</span>
                    <select class="select-bar">
                        <option value="sc1">09:40</option>
                        <option value="sc2">13:45</option>
                        <option value="sc3">15:45</option>
                        <option value="sc4">19:50</option>
                    </select>
                </div>
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>Mins Left</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">Already have an account login?</h5>
                            <p>Sign in to earn points and make booking easier!</p>
                        </div>
                        <a href="#0" class="sign-in-area">
                            <i class="fas fa-user"></i><span>Sign in</span>
                        </a>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">Share your Contact  Details </h5>
                        <form  action="ssl/checkout_hosted.php" method="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Full Name" value="TANVIR HASAN" name="customer_name">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter your Mail" value="tanvir@tigerdenit.com" name="customer_email">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter your Phone Number" value="01843640517" name="customer_mobile">
                            </div>
                            <br>

                                <input type="hidden" value="200" name="amount">

                            <div class="form-group">
                                <input type="submit" value="Continue" class="custom-button" >
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="booking-summery" style="background-color: #1d4081;">
                        <h4 class="title">booking summery</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">Venus</h6>
                                <span class="info">Cineplex</span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>Bashundhara Cineplex</span><span>02</span></h6>
                                <div class="info"><span>31 DEC TUE, 11:00 PM</span> <span>Tickets</span></div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Tickets  Price</span><span>$150</span></h6>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="info"><span>price</span><span>$300</span></span>
                                <span class="info"><span>vat</span><span>$15</span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>Amount Payable</span><span>$315</span></h6>
                        <a href="#0" class="custom-button back-button">proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->



    <script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            //script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // NOTE: USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // NOTE: USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>






 <?php include "inc/footer.php"; ?>