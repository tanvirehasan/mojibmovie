<?php include 'inc/header.php';?>

<?php 
    if(isset($_POST['submit'])){
        
        $c_name               =$_POST['c_name'];
        $c_image              =$_FILES["c_image"]["name"];
        $target_dir           = "../assets/img/team/";
        $target_file          = $target_dir . basename($_FILES["c_image"]["name"]);

        $sql="INSERT INTO characters (c_name,c_image)VALUES('$c_name','$c_image')";
            if (move_uploaded_file($_FILES["c_image"]["tmp_name"], $target_file)) {
                mysqli_query($conn,$sql);
                $mess = alert('success', 'SUCCESS');
                }else{
                    $mess = alert('danger', 'SORRY');
            }
    }
?>


   <div class="layout-content">

         <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y"> 

        <?php  if (isset($mess)) { echo $mess; } ?>
         <div class="row">
                        
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Characters List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Characters</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Characters Image</th>
                                        <th>Characters Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <td><img src="assets/img/user/avatar-1.jpg" class="" width="80px" height="50px"></td>
                                        <td>আজাদ আবুল কালাম</td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                        </td> 
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
                                <h3 class="modal-title">Add Characters</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                        
                        <div class="container my-5">
                            <div class="row">

                            <div class="col-12"> 
                                <label for="name" class=" form-label" style="font-weight:700;">Characters Name</label>
                                <input type="text" class="form-control mb-4 " id="name" name="c_name" >

                            </div>

                             <div class="col-12"> 
                                <label for="image" class=" form-label my-3" style="font-weight:700;">Image</label>
                               <input type="file" class="form-control p-1 border-dark mb-4" id="image" name="c_image">
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