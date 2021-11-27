<div class="modal-header">
    <img src="http://localhost/mojibmovie/assets/img/logo/logored.png" width="100"  >
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body bg-dark p-0 m-0">
    <?php 
        if (isset($_GET['vid'])) {
            $video_id=$_GET['vid']; ?>
            <iframe style="width:100%;"  height="450"  src="https://www.youtube.com/embed/<?php echo $video_id;?>?controls=0&modestbranding=1&rel=0&showinfo=0" allowfullscreen></iframe>
    <?php  } ?> 


        <?php 
        if (isset($_GET['imgid'])) {
            $imgid=$_GET['imgid']; ?>
            <img src="assets/img/gallery/<?php echo $imgid; ?>" style="width:100%;" alt="">
    <?php  } ?> 




</div>