<?php include 'inc/header.php';?>

   <div class="layout-content">

         <!-- [ content ] Start -->
         <div class="container-fluid flex-grow-1 container-p-y">

            <div class="container my-3">
               <h3>Add Hall</h3>
              <form method="POST" action="" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="container my-5">
                              <label for="hallname" class=" form-label" style="font-weight:700;">Hall Name</label>
                              <input type="text" class="form-control mb-4 " id="hallname" name="product_name" >

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
                                 <button type="submit" class="btn btn-primary"> Submit</button>
                             </div>

                           </div> 
                       </div>
                     </div>
                  </div>
               </form>






         </div>
    </div>

<?php include 'inc/footer.php';?>
