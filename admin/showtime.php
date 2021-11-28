    <?php include 'inc/header.php';?>


     <?php 
    if(isset($_POST['submit'])){

        $Hall_ID       =$_POST['Hall_ID'];
        $Time          =$_POST['Show_Time'];


        $Insert = "INSERT INTO `admin_show_time`( `Hall_ID`, `Show_Time`)VALUES('$Hall_ID', '$Time' )";

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
                        <h5>  Hall Time List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Time</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Hall Name</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $i=1;
                                        $data = SelectData('admin_show_time','INNER JOIN admin_cinema_hall ON admin_show_time.Hall_ID=admin_cinema_hall.Hall_ID ');
                                        while ($row = $data->fetch_assoc()) {?>   
                                            <tr>
                                                <td><?= $i++ ;?></td>
                                                <td><?= $row['Hall_Name']; ?></td>
                                                <td><?php 

                                                $d=strtotime($row['Show_Time']); echo date("h:i:s A", $d);
                                            
                                            ?>
                                            
                                            
                                            </td>
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
                            <h3 class="modal-title">Add Hall Time</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                       </div>
                
                <div class="container my-5">


                   <label for="hallid" class=" form-label" style="font-weight:700;">Select Hall Name</label>
                  <input type="text" class="form-control mb-4 " list="halllist" name="Hall_ID" >
                    <datalist id="halllist">
                        <?php 
                        $data = SelectData('admin_cinema_hall','');
                        while ($row = $data->fetch_assoc()) {?> 
                            <option value="<?= $row['Hall_ID']; ?>"><?= $row['Hall_Name']; ?></option>
                    <?php } ?>
                    </datalist>     

                 <label for="appt"class=" form-label" style="font-weight:700;">Select a time:</label>
                 <input type="time" class="form-control mb-4 " id="appt" name="Show_Time">

                 
                  <div class="float-right m-0">
                     <button type="submit" name="submit" class="btn btn-primary my-3"> Submit</button>
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