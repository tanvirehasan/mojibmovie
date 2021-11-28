<?php 
    include "conn.php";

//SELECT
function SelectData($TableName, $moresql){

    global $conn;
    $sql = "SELECT * FROM $TableName $moresql";
    $select = mysqli_query($conn, $sql);
    return $select;
}


//reconect==========================================================

function UserData($U_data){
    $row = mysqli_fetch_array(SelectData('users',"WHERE Ueser_Email='{$_SESSION['User']}'"));
    echo $row[$U_data];
}


function Trailer($data){
    $row = mysqli_fetch_array(SelectData('trailer',"WHERE id ='1'"));
    return $row[$data];
}



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

