    <?php include 'inc/header.php';?>

   <div class="layout-content">

         <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y"> 


         <div class="row">
                        
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>  Order List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Order</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Ticket ID</th>
                                        <th> User ID</th>
                                        <th> Hall ID</th>
                                        <th>Ticket Category ID</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>State</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>33326</td>
                                        <td>12346</td>
                                        <td>556236</td>
                                        <td>1234</td>
                                        <td>500 &#2547;</td>
                                        <td>20</td>
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


<!-- modal form for order -->

<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
     <div class="container my-3">
              
          <form method="POST" action="" enctype="multipart/form-data">

              <div class="row">
                    <div class="col-12">
                        
                            <div class="modal-header">
                                <h3 class="modal-title">Add Order</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                        
                        <div class="container my-5">
                            <div class="row">


                                <div class="col-6"> 
                                    <label for="countryId" class=" form-label" style="font-weight:700;">Select Country</label>
                                    <select name="country" class="countries form-control mb-4" id="countryId">
                                    
                                        <option value="">Select Country</option>
                                    </select>
                                </div>

                                <div class="col-6"> 
                                    <label for="countryId" class=" form-label" style="font-weight:700;">Select State</label>
                                    <select name="state" class="states form-control mb-4" id="stateId">
                                      <option value="">Select State</option>
                                    </select>
                                </div>

                                <div class="col-6"> 
                                     <label for="countryId" class=" form-label" style="font-weight:700;">Select City</label>
                                      <select name="city" class="cities form-control mb-3" id="cityId">
                                             <option value="">Select City</option>
                                      </select>

                                </div>



                                <div class="col-6 d-flex flex-column"> 
                                     <label for="tcketid" class=" form-label" style="font-weight:700;">Select Ticket ID</label>
                                      <select name="tcketid" class="countries form-control mb-4" id="tcketid">
                                        
                                            <option value="">22345</option>
                                            <option value="">22345</option>
                                            userid
                                      </select>
                                  </div>
                                  <div class="col-6 d-flex flex-column"> 
                                      <label for="userid" class=" form-label" style="font-weight:700;">Select User ID</label>
                                      <select name="userid" class="states form-control mb-4" id="userid">
                                             <option value="">63464775</option>
                                             <option value="">63464775</option>

                                      </select>
                                 </div>

                                <div class="col-6 d-flex flex-column"> 

                                     <label for="hallid" class=" form-label" style="font-weight:700;">Select Hall ID</label>
                                      <select name="hallid" class="states form-control mb-4" id="hallid">
                                             <option value="">63464775</option>
                                             <option value="">63464775</option>

                                      </select>
                                </div>

                                <div class="col-6 d-flex flex-column"> 


                                    <label for="catid" class=" form-label" style="font-weight:700;">Select Category ID</label>
                                    <select name="catid" class="states form-control mb-4" id="catid">
                                             <option value="">63464775</option>
                                             <option value="">63464775</option>

                                      </select>
                                </div>

                                 <div class="col-6 d-flex flex-column"> 

                                    <label for="price" class=" form-label" style="font-weight:700;">Select Price</label>
                                    <select name="price" class="states form-control mb-4" id="price">
                                            <option value="">300 </option>
                                            <option value="">466 </option>

                                    </select>
                                </div>

                             <div class="col-6 d-flex flex-column"> 

                                <label for="status" class=" form-label" style="font-weight:700;">Select Satus</label>
                                  <select name="status" class="states form-control mb-4" id="status">

                                         <option value="">confirm </option>
                                         <option value="">pending </option>
                                         <option value="">cancel </option>
                                  </select>
                             </div>

                             <div class="col-6 d-flex flex-column"> 
                                 <label for="quantity" class=" form-label" style="font-weight:700;">Ticket Quantity</label>
                                  <input type="text" class="form-control mb-4 " id="quantity" name="quantity" >

                             </div>

                                      
                            </div>  
                            
                              <div class="float-right m-0">
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