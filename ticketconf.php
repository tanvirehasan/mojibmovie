<?php 

  include "config/conn.php";
  include "config/funcstion.php";


if(isset($_POST['submit'])){

   $Ticket_ID          ="CM". rand(111111,999999);
   $Ticket_User_ID     =$_POST['user_email'];
   $Ticket_User_Name   =$_POST['full_name'];
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
  }
 
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title></title>

</head>
<body>

  <style > 
    body{
      background: #dfe6e9;

      font-size: 12px;
    }
    .cardWrap {
   width: 100%;
  
   color:#000;
   padding: 10px;
   background: #fff;
   border-radius: 10px;
   font-family: sans-serif;
}

h1,h2,h3,h4,h5,h6,p{
  margin: 0px!important;
  padding: 0px!important;
 
}
p{
  font-family: sans-serif;
  font-size: 10px!important;
}
h3{
   font-size: 14px!important;
}
h2{
  color: red;
  text-align: center;
 }
.cardup p{
  color: black;
  text-align: center;
  margin: 0px!important;
  padding: 0px!important;

 }
 .cardup{
  padding: 20px;
  width: 100%;
  border-bottom: 0.18em dashed #dfe6e9; 
 }
 .carddown{
  display: flex;
  flex: column;
 }
  </style>

<div class="cardWrap"> 
 <div class="container">
    <div class=" cardup"> 

    <h2 class="fs-5">YOUR BOOKING IS CONFIRMED!</h2>
    <p class="mt-2 h2">Booking ID <?=$Ticket_ID?></p>

   </div>
  <div class="   mt-4"> 
    <div class="row d-flex justify-content-around border-bottom pb-4 "> 

      <div class="col-8"> 
        <div class="d-flex flex-row justify-content-beetween"> 
          <img src="https://image.tmdb.org/t/p/original/5I7f49AGbOza4qLtjGDtqDgmSqG.jpg" height="160" width="100">
          <div class="px-3 py-2 pb-1"> 
            <h3 class="fw-bold pb-1">চিরঞ্জীব মুজিব | Chronjib Mujib</h3>
            <p>Full length film based on Sheikh Mujib Rahmans</p>
            <p>Unfinished  autobiography</p>
            <p>Dedcated to Sheikh Hasina and Sheikh Rehena</p>
            <h3 class="py-1 fw-bold"> <?=date('D, m M Y', strtotime($Ticket_date))?> | <?=date('h:i A', strtotime($Ticket_Show_Time))?></h3>
            <b><?=$Ticket_User_Name?></b>
            <p><?=$Ticket_Hall_Name?></p>
            <p><?=Hall_Name('Hall_Address',$Ticket_Hall_ID);?></p>
          </div>

        </div>
      </div>

      <div class="col-4 d-flex justify-content-end "> 
        <div class="text-center p-2 px-3"> 
          <h3 class="fw-bold"> <?=$Ticket_Qty?> TCKETS</h3>
          <h3 class="h6 text-end"><?=$Ticket_Sit_Type?></h3>
         
        </div>
        <div class="text-end "> 
          <img  src="https://www.freepnglogos.com/uploads/qr-code-png/qr-code-skriblcms-features-list-includes-seo-report-for-each-page-2.png" width="100">
         <div class="text-center mx-4">
            <p>Booking ID</p>
          <p><?=$Ticket_ID?></p>
         </div>
        </div>
      </div>

    </div>
  </div>
 </div>
  <div class="p-2 mt-2 px-5"> 
    <span class="text-start fw-bold fs-6 px-5">Total Amount</span>
    <span class="fw-bold float-end me-5 pe-5">&#2547; <?=$Ticket_Qty*$Ticket_Price?> /-</span>
  </div>


  <div class="text-end px-5 my-4 ps-5"> 
    <a href="ticketPrint.php?Ticket_ID=<?=$Ticket_ID?>" class="btn btn-danger text-white px-5"> Print</a>
  </div>


</div>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>