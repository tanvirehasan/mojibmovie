    <?php include 'inc/header.php';?>

   <div class="layout-content">

         <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y"> 


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
                                        <th>Sit Type</th>
                                        <th>Ticket Price</th>
                                        <th>Capacity</th>
                                        <th>Hall ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>VIP</td>
                                        <td>200 &#2547; </td>
                                        <td>300</td>
                                        <td>9876543</td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>   
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

                 
                  <label for="sittype" class=" form-label" style="font-weight:700;">Select Sit Type</label>
                  <select name="sittype" class="countries form-control mb-4" id="sittype">
                        <option value="">VIP</option>
                        <option value="">Regular</option>
                        <option value="">VIP</option>
                  </select>

                  <label for="hallid" class=" form-label" style="font-weight:700;">Select Hall ID</label>
                  <select name="hall_id" class="countries form-control mb-4" id="hallid">
                        <option value="">20034</option>
                        <option value="">44857</option>
                        <option value="">6768778</option>
                  </select>

                   <label for="price" class=" form-label" style="font-weight:700;">Price</label>
                  <input type="text" class="form-control mb-4 " id="price" name="ticket_price" >

                   <label for="capacity" class=" form-label" style="font-weight:700;">Capacity</label>
                  <input type="text" class="form-control mb-4 " id="capacity" name="capacity" >



                 
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