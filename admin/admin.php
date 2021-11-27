    <?php include 'inc/header.php';?>

   <div class="layout-content">

         <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y"> 


         <div class="row">
                        
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> All Admin List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Admin</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Admin Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Admin Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tanvir Hasan</td>
                                        <td>patient@example.com</td>
                                        <td>9876543</td>
                                        <td>Super ADmin</td>
                                        <td><a href="" class="bg-danger fs-6 p-1 px-3 text-white"style="border-radius: 25px; font-size:12px;">Deactive</a></td>
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
                            <h3 class="modal-title">Add Admin</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                       </div>
                
                <div class="container my-5">

                  <label for="admnname" class=" form-label" style="font-weight:700;">Admin Name</label>
                  <input type="text" class="form-control mb-4 " id="admnname" name="admn_name" >

                  <label for="email" class=" form-label" style="font-weight:700;">Email</label>
                  <input type="email" class="form-control mb-4 " id="email" name="admin_email" >

                  <label for="phone" class=" form-label" style="font-weight:700;">Phone Number</label>
                  <input type="text" class="form-control mb-4 " id="phone" name="admin_phone" >


                   <label for="admin_type" class=" form-label" style="font-weight:700;">Admin Type</label>
                  <select name="admin_type" class="countries form-control mb-4" id="admin_type">
                        <option value="">Super Admin</option>
                        <option value="">Admin</option>
                        <option value="">Ticket Master</option>
                  </select>

                 

                  <label for="password" class=" form-label" style="font-weight:700;">Password</label>
                  <input type="password" class="form-control mb-4 " id="password" name="date" >

                  <div class="float-right m-0">
                     <button type="submit" name="create" class="btn btn-primary"> Submit</button>
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