<?php include 'inc/header.php';?>

<?php 

 if(isset($_POST['submit'])){

      $slide_image          =$_FILES["slide_image"]["name"];
      //photos
      $target_dir           = "../assets/img/slider/";
      $target_file          = $target_dir . basename($_FILES["slide_image"]["name"]);
      move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file);

      $sql="INSERT INTO slide (slide_image)VALUES('$slide_image')";
        if (mysqli_query($conn,$sql)) {
          $mess = alert('success', 'SUCCESS');
        }else{
            $mess = alert('danger', 'SORRY');

        }

}
?>





   <div class="layout-content">
         <!-- content  Start -->
        <div class="container-fluid flex-grow-1 container-p-y">
         <?php  if (isset($mess)) { echo $mess; } ?>
          <div class="row">                        
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Slide List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Slide</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Slide Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                            <?php 
                                $data = SelectData('slide','');
                                while ($row = $data->fetch_assoc()) {?>                                
                                <tr>
                                   <td><img src="../assets/img/slider/<?= $row['slide_image']; ?>" class="" width="40px"></td>                                       
                                        <td class="text-right">
                                            <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                        </td> 
                                    </tr>
                            <?php }?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>

        </div>
     </div>
</div>


<!-- modal form for order -->

<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
     <div class="container my-3">
              
          <form method="POST" action="" enctype="multipart/form-data">

              <div class="row">
                    <div class="col-12">
                        
                            <div class="modal-header">
                                <h3 class="modal-title">Add Slide</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                        
                        <div class="container my-5">
                            <div class="row">

                           
                             

                             <div class="col-12"> 
                                <label for="slidephoto" class=" form-label my-3" style="font-weight:700;">Slide Image</label>
                               <input type="file" class="form-control p-1 border-dark mb-4" id="slidephoto" name="slide_image">
                             </div>
                                
                                      
                            </div>  
                            
                              <div class="float-right m-0 mt-4">
                                 <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                             </div>

                        </div> 
                    </div>
                 </div>
              </form>
           </div>
        </div>
      </div>
   </div>


<?php include 'inc/footer.php';?>