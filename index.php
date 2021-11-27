
<?php include "inc/header.php";?>
<!-- ================= SLIDER =================== -->
    <div class="slider">
        <div class="container">
        <div class="row mx-0 justify-content-end">
            <div class="col-md-6 slider-box text-center">
                <div id="coverflow">
                    <ul class="flip-items">
                        <?php            
                        $Selet_Data = SelectData('slide','');
                        while ($row = $Selet_Data->fetch_assoc()) {?>
                            <li><img src="assets/img/slider/<?= $row['slide_image']; ?>"></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>


<!-- ================= TRAILER =================== -->
<section class="trailer py-5">
    <div class="container">
        <div class="section_Heading">
            <h1>Movie <span class="color-default">Trailer & Teaser</span></h1>
            <span>Chironjib Mujib Official Trailer</span>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="trailer-video">                
                    <img src="assets/img/banner/<?php echo Trailer('Trailer_image'); ?>" alt="">
                        <button class="btn" onclick="Video_link(<?php $videoid=Trailer('Trailer_video'); echo "'inc/popup.php?vid=".$videoid."'"; ?>)" ><i class="fas fa-play text-white"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <h3><?= Trailer('Trailer_title'); ?></h3>
                <p><?=  Trailer('Trailer_text'); ?></p>
            </div>
        </div>
        <hr class="border border-top border-danger">

        <!-- ================= TRAISER =================== -->
        <div class="owl-carousel"> 
            <?php            
                $Selet_Data = SelectData('teaser','');
                while ($row = $Selet_Data->fetch_assoc()) {?>           
                <div class="trailer-video">                
                    <img src="assets/img/banner/<?php echo $row['Teaser_image'];?>" alt="">
                    <button class="btn" onclick="Video_link(<?php $videoid=$row['Teaser_video']; echo "'inc/popup.php?vid=".$videoid."'"; ?>)"   ><i class="fas fa-play"></i></button>
                </div>  
            <?php } ?>   
        </div>

    </div>
</section>

<!-- ================= DIALOGUES =================== -->
<section class="Dialogues bg-light py-5">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Movie Best <span class="color-default">Dialogues</span></h1>
            <span class="m-0">Best Dialogues of Chironjib Mujib Movie</span>
        </div>
        <div class="row">
            <?php            
            $Selet_Data = SelectData('movie_dialogue','');
            while ($row = $Selet_Data->fetch_assoc()) {?>
                <div class="col-md-3"><img src="assets/img/qutation/<?= $row['md_image']; ?>" alt=""></div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- =================MOVIE GALLERY =================== -->
<section class="Gallery py-5">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Movie <span class="color-default">Gallery</span></h1>
            <span class="m-0">Some Photos to  Chironjib Mujib Movie</span>
        </div>
        <div class="row">
             <?php            
            $Selet_Data = SelectData('gallery','');
            while ($row = $Selet_Data->fetch_assoc()) {?>
            <div class="col-md-3" onclick="Video_link(<?php $imgid=$row['g_image']; echo "'inc/popup.php?imgid=".$imgid."'"; ?>)"><figure><img src="assets/img/gallery/<?= $row['g_image']; ?>" alt="Chironjib Mujib Dialogues"></figure></div>
             <?php } ?>
        </div>
    </div>
</section>


<!-- =================OUR TEAM=================== -->
<section class="Team py-5 bg-light" id="team">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Team<span class="color-default"> Leaders</span></h1>
            <span class="m-0">Team Leaders of Chironjib Mujib Movie</span>
        </div>
        <div class="row">
            <!-- Team 1 -->

           <?php            
            $Selet_Data = SelectData('team_leader','');
            while ($row = $Selet_Data->fetch_assoc()) {?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/team/<?= $row['leader_image'] ?>" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer text-center p-4">
                        <h4 class="py-1 color-default"><?= $row['leader_name'] ?></h4>
                        <p><?=$row['leader_desgnation'] ?></p>
                    </div>
                </div>     
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<!-- =================BEHIND THE SCENE =================== -->
<section class="behindthescene Gallery py-5">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Movie Behind <span class="color-default">The Scene</span></h1>
            <span class="m-0">Best Behind The Scene of Chironjib Mujib Movie</span>
        </div>
        <div class="row">
           <?php            
            $Selet_Data = SelectData('movie_scene','');
            while ($row = $Selet_Data->fetch_assoc()) {?>
            <div class="col-md-4"><figure><img src="assets/img/behindthescene/<?= $row['m_image'];?>" alt=""></figure></div>
          <?php } ?>
        </div>
    </div>
</section>



<!-- =================OUR TEAM=================== -->
<section class="Team py-5 bg-light" id="Actress">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Movie <span class="color-default">Actress & Actors</span></h1>
            <span class="m-0">Actress & Actors of Chironjib Mujib Movie</span>
        </div>
        <div class="row">

        <?php            
            $Selet_Data = SelectData('characters','');
            while ($row = $Selet_Data->fetch_assoc()) {?>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/team/<?= $row['c_image']; ?>" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer text-center p-4" style="background-color:var(--default);">
                        <h4 class="py-1 text-white"><?= $row['c_name']; ?></h4>
                    </div>
                </div>     
            </div>
                <?php } ?>
        </div>
    </div>
</section>

<!-- ================= BLOGS AND NEWS =================== -->
<section class="Team blog py-5">
    <div class="container" >
        <div class="section_Heading">
            <h1 class="m-0">Movie <span class="color-default">Blogs & News</span></h1>  
            <span class="m-0">Information & News of Chironjib Mujib Movie</span>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/blogs/blog1.JPG" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer p-4">
                        <h4 class="pb-3 blog-title">‘চিরঞ্জীব মুজিব’ চলচ্চিত্রের টিজার উদ্বোধন</h4>
                        <p>জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের ‘অসমাপ্ত আত্মজীবনী’ অবলম্বনে নির্মিত, প্রধানমন্ত্রী শেখ হাসিনা এবং তার ছোটবোন শেখ রেহানা নিবেদিত পূর্ণদৈর্ঘ্য চলচ্চিত্র ‘চিরঞ্জীব মুজিব’ এর টিজার উদ্বোধন করেছেন তথ্য ও সম্প্রচারমন্ত্রী ড. হাছান মাহমুদ।</p>
                    </div>
                </div>     
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/blogs/blog2.JPG" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer p-4">
                        <h4 class="pb-3 blog-title">ছাড়পত্র পেলো ‘চিরঞ্জীব মুজিব’</h4>
                        <p>ছাড়পত্র পেয়েছে পূর্ণদৈর্ঘ্য চলচ্চিত্র ‘চিরঞ্জীব মুজিব’। শুক্রবার (৩ সেপ্টেম্বর) চলচ্চিত্রটির একটি প্রদর্শনী দেখে কোনো ধরনের কাট-ছাঁট ছাড়াই ছাড়পত্র দেন বাংলাদেশ চলচ্চিত্র সেন্সর বোর্ডের সদস্যরা। জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের</p>
                    </div>
                </div>     
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0 m-0">
                        <img src="assets/img/blogs/blog3.JPG" alt="Chironjib Mujib Dialogues">
                    </div>
                    <div class="card-footer p-4">
                        <h4 class="pb-3 blog-title">চিরঞ্জীব মুজিব’ চলচ্চিত্রের পোস্টার উদ্বোধন করলেন প্রধানমন্ত্রী</h4>
                        <p>ঙ্গবন্ধু শেখ মুজিবুর রহমানের ‘অসমাপ্ত আত্মজীবনী’ গ্রন্থ অবলম্বনে নির্মিত ‘চিরঞ্জীব মুজিব’ চলচ্চিত্রের পোস্টার উদ্বোধন করেছেন প্রধানমন্ত্রী শেখ হাসিনা। বৃহস্পতিবার (২৪ জুন) </p>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>

<?php include "inc/footer.php";?>