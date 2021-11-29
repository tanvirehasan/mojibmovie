<?php 
    include "conn.php";

//SELECT
function SelectData($TableName, $moresql){

    global $conn;
    $sql = "SELECT * FROM $TableName $moresql";
    $select = mysqli_query($conn, $sql);
    return $select;
}

//Hall Name
function Hall_Name($data,$hallid){
    $row = mysqli_fetch_array(SelectData('admin_cinema_hall',"WHERE Hall_ID='$hallid'"));
    return $row[$data];
}

//Hall Name
function Sit_Catagory($data,$catid){
    $row = mysqli_fetch_array(SelectData('admin_ticketcategory',"WHERE Cat_ID='$catid'"));
    return $row[$data];
}



//UserData
function UserData($U_data){
    $row = mysqli_fetch_array(SelectData('users',"WHERE Ueser_Email='{$_SESSION['User']}'"));
    echo $row[$U_data];
}

//Trailer
function Trailer($data){
    $row = mysqli_fetch_array(SelectData('trailer',"WHERE id ='1'"));
    return $row[$data];
}


//reconect
function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}

//Login Required
function If_Not_Login($url){
	if (!isset($_SESSION['User'])) {
		Reconect($url);
	}
}

//If_Login
function If_Login($url){
	if (isset($_SESSION['User'])) {
		Reconect($url);
	}
} 


?>

