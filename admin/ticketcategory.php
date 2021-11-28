    <?php include 'inc/header.php';?>

    <?php 
    if(isset($_POST['submit'])){

        $Cat_ID        ="CAT-". rand(9999, 99999);
        $Hall_ID       =$_POST['Hall_ID'];
        $Cat_SitType   =$_POST['Cat_SitType'];
        $Cat_Price     =$_POST['Cat_Price'];
        $Cat_capacity  =$_POST['Cat_capacity'];


        $Insert = "INSERT INTO `admin_ticketcategory`(

                `Cat_ID`,
                `Hall_ID`,
                `Cat_SitType`,
                `Cat_Price`,
                `Cat_capacity`

                )VALUES(

                '$Cat_ID',
                '$Hall_ID',
                '$Cat_SitType',
                '$Cat_Price',
                '$Cat_capacity'              

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
                        <h5>  Ticket Category List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Ticket Category</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Hall Name</th>
                                        <th>Sit Type</th>
                                        <th>Price</th>
                                        <th>Sit Capacity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $i=1;
                                        $data = SelectData('admin_ticketcategory','INNER JOIN admin_cinema_hall ON admin_ticketcategory.Hall_ID=admin_cinema_hall.Hall_ID ');
                                        while ($row = $data->fetch_assoc()) {?>   
                                            <tr>
                                                <td><?= $i++ ;?></td>
                                                <td><?= $row['Hall_Name']; ?></td>
                                                <td><?= $row['Cat_SitType']; ?></td>
                                                <td><?= $row['Cat_Price']; ?></td>
                                                <td><?= $row['Cat_capacity']; ?></td>
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
                            <h3 class="modal-title">Add Ticket Category</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                       </div>
                
                <div class="container my-5">

                 

                <label for="hallname" class=" form-label" style="font-weight:700;">Hall Name</label>
                <input type="text" class="form-control mb-4 " list="halllist" name="Hall_ID" >
                <datalist id="halllist">
                      <?php 
                        $data = SelectData('admin_cinema_hall','');
                        while ($row = $data->fetch_assoc()) {?> 
                            <option value="<?= $row['Hall_ID']; ?>"><?= $row['Hall_Name']; ?></option>
                    <?php } ?>
                </datalist>          

                <label for="sit" class=" form-label" style="font-weight:700;">Sit Type</label>
                <input type="text" class="form-control mb-4 " id="sit" name="Cat_SitType" >

                <label for="Price" class=" form-label" style="font-weight:700;">Price</label>
                <input type="text" class="form-control mb-4 " id="Price" name="Cat_Price" >

                <label for="Capacity" class=" form-label" style="font-weight:700;">Capacity</label>
                <input type="number" class="form-control mb-4 " id="Capacity" name="Cat_capacity" >

                 
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