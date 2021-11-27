
<!-- ============= FOOTER ================= -->
<footer class="footer bg-black pt-5">
    <div class="container">
        <div class="row">
            <!-- Footer 1 -->
            <div class="col-md-4">
                <img src="assets/img/logo/logored.png" alt="">
                <p class="footer-text">শেখ হাসিনা ও শেখ রেহানা নিবেদিত শেখ মুজিবুর রহমানের অসমাপ্ত আত্মজীবনী অবলম্বনে পূর্ণদৈর্ঘ্য চলচ্চিত্র</p>
            </div>
            <!-- Footer 2 -->
            <div class="col-md-4">                    
                <ul>
                    <h5 class="h6 text-white mb-3"><i class="fas fa-map-marked-alt"></i> Useful Links</h5>
                    <li><a href="">Buy Ticket</a></li>                 
                    <li><a href="#team">Team</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About Moive</a></li> 
                    <li><a href="#btsn">Behind The Scene</a></li> 
                    <li><a href="#Actress">Actress & Actors</a></li> 
                    <li><a href="blog.php">Blogs & News</a></li> 
                    <!-- <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li> -->
                </ul>                
            </div>
            <!-- Footer 3 -->
            <div class="col-md-4">
                <p class="text-white fw-bold"><i class="fad fa-globe"></i> Contact Us</p>
                <address class="text-secondary">চিরঞ্জীব মুজিব <br>Phone No. 01843640517 <br> Address: House No-53, First Floor, Road No-1, A Block, Niketan, Gulsan-1.</address>
                <button class="btn btn-lg bg-primary text-white me-2"><i class="fab fa-facebook-f"></i></button>
                <button class="btn btn-lg  text-white me-2" style="background: #FE2E64;"><i class="fab fa-instagram"></i></button>
                <button class="btn btn-lg  bg-info text-white me-2 "><i class="fab fa-linkedin-in"></i></button>
                <button class="btn btn-lg  bg-danger text-white "><i class="fab fa-youtube"></i></button>
            </div>
        </div>
    </div> 
    
    <div class="sub_footer text-center py-3">
        <p>Copyright &copy; চিরঞ্জীব মুজিব - <?php echo date('Y');?> | Developed By <a href="//tigerdenit.com">TigerDen IT</a></p>
    </div>
</footer>

<!--============== POP UP ============-->


<!-- video -->
<script> 
    function Video_link(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#video").html(data);
                $("#dataModal").modal("show");
            },
        });
    }
</script>

<!-- Modal for Video -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="video">

    </div>
  </div>
</div>

<!-- =============js================= -->
<script src="assets/carousel/owl.carousel.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.flipster.min.js"></script>
<script>
    var coverflow = $("#coverflow").flipster();
        var carousel = $("#carousel").flipster({
            
        style: 'carousel',
        spacing: -0.5,
        nav: true,
        buttons:   true,
    });
    var wheel = $("#wheel").flipster({
        style: 'wheel',
        spacing: 0
    });
    var flat = $("#flat").flipster({
        style: 'flat',
        spacing: -0.25
    });
</script>


<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:3,
        loop:true,
        margin:15,
        autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true
    });
</script>
  </body>
</html>