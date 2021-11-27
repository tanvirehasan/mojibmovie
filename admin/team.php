    <?php include 'inc/header.php';?>

    <?php 

 if(isset($_POST['submit'])){

      $leader_name         =$_POST['leader_name'];
      $leader_desgnation   =$_POST['leader_desgnation'];
      $leader_des          =$_POST['leader_des'];
      $leader_image        =$_FILES["leader_image"]["name"];
      $target_dir           = "../assets/img/team/";
      $target_file          = $target_dir . basename($_FILES["leader_image"]["name"]); 

      $sql="INSERT INTO  team_leader (
                    leader_name,
                    leader_desgnation,
                    leader_des,
                    leader_image
                   
                  )VALUES(                 
                   
                    '$leader_name',
                    '$leader_desgnation',
                    '$leader_des',
                    '$leader_image'
                   )";

        if (move_uploaded_file($_FILES["leader_image"]["tmp_name"], $target_file)) {
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
                        <h5> team List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add team</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Member Photo</th>
                                        <th>Member Name</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <td><img src="assets/img/user/avatar-1.jpg" class="" width="80px" height="50px"></td>
                                        <td>নজরুল ইসলাম </td>
                                        <td>পান্ডুলিপি, সংলাপ ও পরিচালক </td>

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
                                <h3 class="modal-title">Add Team Member</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                        
                        <div class="container my-5">
                            <div class="row">

                            <div class="col-12"> 
                                <label for="teamname" class=" form-label" style="font-weight:700;">Member Name</label>
                                <input type="text" class="form-control mb-4 " id="teamname" name="leader_name" >

                            </div>

                             <div class="col-12"> 

                                <label for="designation" class=" form-label" style="font-weight:700;">Designation</label>
                                <input type="text" class="form-control mb-4 " id="designation" name="leader_desgnation" >

                            </div>
                             <div class="col-12"> 
                                <label for="descrption" class=" form-label mb-3" style="font-weight:700;">Description</label>

                              <textarea id="editor" class="w-50 mb-4" name="leader_des" style="width: 100px;"> </textarea>
                             </div>

                             <div class="col-12"> 
                                <label for="teamphoto" class=" form-label my-3" style="font-weight:700;">Photo</label>
                               <input type="file" class="form-control p-1 border-dark mb-4" id="teamphoto" name="leader_image">
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