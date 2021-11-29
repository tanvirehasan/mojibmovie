<?php include "inc/header.php";

if(isset($_POST['submit'])){

   $Ticket_ID          ="CM". rand(111111,999999);
   $Ticket_User_ID     ='tavnir@gmail.com';
   $Ticket_User_Name   ='TANVIR HASAN';
   $Ticket_Hall_ID     =$_POST['Ticket_Hall_ID'];
   $Ticket_Hall_Name   =Hall_Name('Hall_Name',$Ticket_Hall_ID);
   $Ticket_Show_Time   =$_POST['Ticket_Show_Time'];
   $Ticket_date        =$_POST['Ticket_date'];
   $Ticket_Sit_Type    =Sit_Catagory('Cat_SitType', $_POST['Ticket_Sit_Type']);
   $Ticket_Price       =Sit_Catagory('Cat_Price', $_POST['Ticket_Sit_Type']);
   $Ticket_Qty         =$_POST['Ticket_Qty'];
   $Ticket_Total_Price =$Ticket_Qty*$Ticket_Price;


    $Insert = "INSERT INTO `admin_ticket_order`(

            `Ticket_ID`,
            `Ticket_User_ID`,
            `Ticket_User_Name`,
            `Ticket_Hall_ID`,
            `Ticket_Hall_Name`,
            `Ticket_Show_Time`,
            `Ticket_date`,
            `Ticket_Sit_Type`,
            `Ticket_Price`,
            `Ticket_Qty`,
            `Ticket_Total_Price`,
            `Ticket_Buy_Date`


            )VALUES(

            '$Ticket_ID',
            '$Ticket_User_ID',
            '$Ticket_User_Name',
            '$Ticket_Hall_ID',
            '$Ticket_Hall_Name',
            '$Ticket_Show_Time',  
            '$Ticket_date' , 
            '$Ticket_Sit_Type',  
            '$Ticket_Price',  
            '$Ticket_Qty',  
            '$Ticket_Total_Price',
            NOW()                    

        )";

    if ($conn->query($Insert) ===TRUE) {
        // $mess = alert('success', 'SUCCESS');            
    }else{
        // $mess = alert('danger', 'SORRY');

    }

 
?>


<div class="pageheader">
    <div class="container">
        <div class="row mx-0 justify-content-end">
            <div class="col-md-6 slider-box text-end">
            <h2 class="text-white">Check Out</h2>
            
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <img src="assets/img/banner/ticketbg.jpg" alt="">
        </div>


        <div class="col-md-4 p-0 m-0">
            <div class="booking-summery bg-danger p-5">
                <h2 class="text-white text-center">BOOKING SUMMERY</h2>
                <hr class="text-white">

                <div class="hall-name">
                    <h5 class="text-white" >CINEMA HALL</h5>
                    <P class="pt-1 text-uppercase "><?= $Ticket_Hall_Name; ?></P>
                </div>
                <div class="date-ticket d-flex justify-content-between">
                    <h5 class="text-white" >DATE-TIME</h5>
                    <h5 class="text-white " ><?= $Ticket_Qty; ?></h5>
                </div>

                <div class="date-ticket d-flex justify-content-between">
                    <P class="pt-1"><?php $d=strtotime($Ticket_Show_Time); $Show_Time=date("h:i:s A", $d); echo $Ticket_date." || ".$Show_Time;     ;                  ?></P>
                    <P class="pt-1">TICKETS</P>
                </div>

                <div class="date-ticket d-flex justify-content-between">
                    <h5 class="text-white" >TICKETS PRICE</h5>
                    <h5 class="text-white " ><?= $Ticket_Price; ?></h5>
                </div>
            </div>

            <div class="amount-payble px-5 p-4">
                <div class="d-flex justify-content-between">
                    <h5 class="text-white" >AMOUNT PAYABLE</h5>
                    <P class=""><?=  $Ticket_Qty ." x ". $Ticket_Price ;  ?></P>
                    <h5 class="text-white " ><?= $Ticket_Total_Price; ?></h5>
                </div>
            </div>
            <form action="" method="POST">
                <div class="pay-now text-center bg-danger mt-3 p-3">
                    <button type="submit" name="proceed" class="btn btn-danger"><h5 class="text-white" > PROCEED <i class="fad fa-angle-double-right"></i></h5></button>
                 </div>
            </form>

        </div>
    </div>
</div>





<?php }else{

    Reconect('ticket.php');

} ?>



<?php include "inc/footer.php";?>
