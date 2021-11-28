    <?php include 'inc/header.php';?>

<?php 
    if(isset($_POST['submit'])){

        $Hall_ID        ="CH-". rand(9999, 99999);
        $Hall_Name      =$_POST['Hall_Name'];
        $Hall_Country   =$_POST['Hall_Country'];
        $Hall_state     =$_POST['Hall_state'];
        $Hall_City      =$_POST['Hall_City'];
        $Hall_Address   =$_POST['Hall_Address'];

        $Insert = "INSERT INTO `admin_cinema_hall`(

                `Hall_ID`,
                `Hall_Name`,
                `Hall_Country`,
                `Hall_state`,
                `Hall_City`,
                `Hall_Address`

                )VALUES(

                '$Hall_ID',
                '$Hall_Name',
                '$Hall_Country',
                '$Hall_state',
                '$Hall_City',
                '$Hall_Address'                

            )";

        if ($conn->query($Insert) ===TRUE) {
          $mess = alert('success', 'SUCCESS');            
        }else{
            $mess = alert('danger', 'SORRY');

        }

    }
?>



   <div class="layout-content">
        <div class="container-fluid flex-grow-1 container-p-y"> 
         <?php  if (isset($mess)) { echo $mess; } ?>
         <div class="row">                        
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class=""> Hall List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Hall</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Hall Name</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php 
                                $data = SelectData('admin_cinema_hall','');
                                while ($row = $data->fetch_assoc()) {?>   
                                    <tr>
                                        <td><?= $row['Hall_Name']; ?></td>
                                        <td><?= $row['Hall_Country']; ?></td>
                                        <td><?= $row['Hall_state']; ?></td>
                                        <td><?= $row['Hall_City']; ?></td>
                                        <td><?= $row['Hall_Address']; ?></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr> 
                                <?php } ?> 
                                    
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>

        </div>
     </div>
</div>




<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
     <div class="container my-3">
              
          <form method="POST" action="" enctype="multipart/form-data">

              <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="modal-header">
                            <h3 class="modal-title">Add Hall</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                       </div>
                
                <div class="container my-5">

                  <label for="hallname" class=" form-label" style="font-weight:700;">Hall Name</label>
                  <input type="text" class="form-control mb-4 " id="hallname" name="Hall_Name" >

                  <label for="countryId" class=" form-label" style="font-weight:700;">Select Country</label>
                  <select name="Hall_Country" class="countries form-control mb-4" id="countryId">
                        <option value="">Select Country</option>
                  </select>

                  <label for="countryId" class=" form-label" style="font-weight:700;">Select State</label>
                  <select name="Hall_state" class="states form-control mb-4" id="stateId">
                         <option value="">Select State</option>
                  </select>

                  <label for="countryId" class=" form-label" style="font-weight:700;">Select City</label>
                  <select name="Hall_City" class="cities form-control mb-3" id="cityId">
                         <option value="">Select City</option>
                  </select>

                  <label for="hallname" class=" form-label" style="font-weight:700;">Address</label>
                  <input type="text" class="form-control mb-4 " id="hallname" name="Hall_Address" >

                  <div class="float-right m-0">
                     <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                 </div>

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