<?php 
    include "inc/header.php";
?>

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
        <form action="ticketconf.php" method="POST">
        <div class="row d-flex justify-content-center p-3">            
             <div class="col-md-6 p-4 py-5 rounded">
                 <h1 class="m-0 text-center pb-4">Take Your<span class="color-default"> Ticket</span></h1>
                 <div class="form-gorup mb-3">
                     <input type="date" class="form-control" name="Ticket_date">
                 </div>

                 <div class="row mb-3">
                     <div class="col">
                         <input type="text" name="full_name" placeholder="Full Name"  class="form-control">
                     </div>

                    <div class="col">
                         <input type="email" name="user_email" placeholder="Enter Your Email" class="form-control"> 
                    </div>
                 </div>

                <div class="row mb-3">

                    <div class="col">
                         <input type="text" name="Phone_no" placeholder="Enter Your Phone No." class="form-control">
                     </div>



                    <div class="col">

                <?php
                    //Get all country data
                    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
                    $run_query = mysqli_query($conn, $query);
                    //Count total number of rows
                    $count = mysqli_num_rows($run_query);
                    
                    ?>
                    <select name="Hall_Country" id="country"  class="form-control">
                        <option value="">Select Country</option>
                        <?php
                        if($count > 0){
                            while($row = mysqli_fetch_array($run_query)){
                                $country_id=$row['country_id'];
                                $country_name=$row['country_name'];
                                echo "<option value='$country_id'>$country_name</option>";
                            }
                        }else{
                            echo '<option value="">Country not available</option>';
                        }
                        ?>
                    </select>

                    </div>
                </div>

                    <div class="row mb-3">

                    <div class="col">
                        <select name="state" id="state"  class="form-control">
                            <option value="">Select country first</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="city" id="city" class="form-control" onchange="Hall_Select(this.value)">
                            <option value="">Select state first</option>
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
