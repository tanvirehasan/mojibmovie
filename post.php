<?php include "inc/header.php";?>

<!-- ================= pageheader =================== -->
    <div class="pageheader">
        <div class="container">
        <div class="row mx-0 justify-content-end">
            <div class="col-md-6 slider-box text-end">
              <h2 class="text-white">News & Blogs</h2>
            </div>
        </div>
    </div>
    </div>
<?php 

if (isset($_GET['post'])) {

    $id = $_GET['post'];

     $data = SelectData('blog', "where b_id='$id'");
     $row = $data->fetch_array();


?>
        
<section class="Team blog py-5">
    <div class="container" >
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/blogs/<?= $row['b_image']; ?>" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer p-4">
                        <h4 class="pb-3 blog-title"><?= $row['b_title']; ?></h4>
                        <div>
                            <?= $row['b_description']; ?>
                        </div>
                    </div>
                </div>     
            </div>

            <div class="col-md-4">
                <div class="ad bg-success h-25">
                    <p class="text-center pt-5 text-white">Your Ad Here</p>
                </div>
            <?php             
            for ($i=0; $i < 5 ; $i++) { ?>                
                <div class="card p-1 mb-2 bg-light">
                    <div class="row">
                        <div class="col-md-4"><img src="assets/img/blogs/blog1.JPG" alt="Chironjib Mujib Dialogues"></div>
                        <div class="col-md-6">
                            <p class="fw-bold">‘চিরঞ্জীব মুজিব’ চলচ্চিত্রের টিজার উদ্বোধন</p>
                        </div>
                    </div> 
                </div> 
                <?php } ?>       

        </div>
    </div>
</section>


<?php } ?>

<?php include "inc/footer.php";?>
