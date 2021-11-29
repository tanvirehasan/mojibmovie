<?php include "inc/header.php";?>




<!-- ================= pageheader =================== -->
    <div class="pageheader">
        <div class="container">
        <div class="row mx-0 justify-content-end">
            <div class="col-md-6 slider-box text-end">
              <h2 class="text-white"><i class="fas fa-tag me-2"></i> BUY TICKET</h2>
               
            </div>
        </div>
    </div>
    </div>

    <section class="ticket py-5">
    <div class="container" >
        <form action="ticketest.php" method="POST">
        <div class="row d-flex justify-content-center p-3">            
             <div class="col-md-6 p-4 py-5 rounded">
                 <h1 class="m-0 text-center pb-4">Take Your<span class="color-default"> Ticket</span></h1>
                 <div class="form-gorup mb-3">
                     <input type="date" class="form-control" name="Ticket_date">
                 </div>
                <div class="row mb-3">
                    <div class="col">
                        <select name="Hall_Country" class="countries form-control " id="countryId">
                        <option value="">Select Country</option>
                  </select>
                    </div>
                    <div class="col">
                        <select name="Hall_state" class="states form-control " id="stateId">
                            <option value="">Select State</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="Hall_City" class="cities form-control" id="cityId"  onchange="Hall_Select(this.value)">
                            <option value="">Select City</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <select name="Ticket_Hall_ID" id="HallName" class="form-control" onchange="Time_Select(this.value)"  >
                            <option>Select Hall</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="Ticket_Show_Time" id="Show_Time" class="form-control" onchange="Sit_Type(this.value)" >
                            <option>Select Show Time</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <select name="Ticket_Sit_Type" id="SitType" class="form-control" >
                            <option>Select Sit Type</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name='Ticket_Qty' class="form-control">
                            <option value="">Select Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>

                <button type="submit" name="submit" class="form-control btn-danger text-white">Submit</button>

            </div>
            
        </div>
        </form>
    </div>
</section>

<?php include "inc/footer.php";?>
