    <?php include 'inc/header.php';?>

   <div class="layout-content">

         <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y"> 


         <div class="row">
                        
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="">  Hall List </h5>
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
                                        <th>Hall Logo</th>
                                        <th>Hall Name</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/img/user/avatar-1.jpg" class="" width="80px" height="50px"></td>
                                        <td>Tanvir Hasan</td>
                                        <td>patient@example.com</td>
                                        <td>9876543</td>
                                        <td>hjfjgj</td>
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
                            <h3 class="modal-title">Add Hall</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                       </div>
                
                <div class="container my-5">

                  <label for="hallname" class=" form-label" style="font-weight:700;">Hall Name</label>
                  <input type="text" class="form-control mb-4 " id="hallname" name="hall_name" >

                  <label for="countryId" class=" form-label" style="font-weight:700;">Select Country</label>
                  <select name="country" class="countries form-control mb-4" id="countryId">
                    
                        <option value="">Select Country</option>
                  </select>

                  <label for="countryId" class=" form-label" style="font-weight:700;">Select State</label>
                  <select name="state" class="states form-control mb-4" id="stateId">
                         <option value="">Select State</option>
                  </select>

                  <label for="countryId" class=" form-label" style="font-weight:700;">Select City</label>
                  <select name="city" class="cities form-control mb-3" id="cityId">
                         <option value="">Select City</option>
                  </select>

                  <label for="hallLogo" class=" form-label" style="font-weight:700;">Hall Logo</label>
                  <input type="file" class="form-control p-1  mb-3" id="hallLogo" name="hall_logo">

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