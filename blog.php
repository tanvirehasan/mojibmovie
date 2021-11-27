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

<section class="Team blog py-5">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Movie <span class="color-default">Blogs & News</span></h1>
            <span class="m-0">Chironjib Mujib Official Trailer</span>
        </div>

        <div class="row">

        <?php            
            $Selet_Data = SelectData('blog','');
            while ($row = $Selet_Data->fetch_assoc()) {?>
            <div class="col-md-4">
                <div class="card">
                    <a class="text-decoration-none" href="post.php?post=<?= $row['b_id']; ?>">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/blogs/<?= $row['b_image']; ?>" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer p-4">
                        <h4 class="pb-3 blog-title text-danger"><?= $row['b_title']; ?></h4>
                        <div>
                            <?= $row['b_description']; ?>
                        </div>
                    </div>
                    </a>
                </div>     
            </div>
            <?php } ?>


        </div>
    </div>
</section>


<?php include "inc/footer.php";?>
