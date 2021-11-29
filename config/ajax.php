<?php include "conn.php";

//Select Hall
if (isset($_REQUEST["get_option"])) {

	$q = $_REQUEST["get_option"];
	$dataselect = $conn->query("SELECT * FROM admin_cinema_hall WHERE Hall_City='$q' ");

	if ($dataselect->num_rows>0) {
		echo "<option>Select Hall</option>";
		while ($data = $dataselect->fetch_assoc()) {
			$HallName=$data['Hall_Name'];
			$id=$data['Hall_ID'];
			
				echo "<option value=".$id.">".$HallName."</option>";

			 } }else{
			echo "SORRY!";
		}
}



//Select Show Time
if (isset($_REQUEST["get_time"])) {

	$q = $_REQUEST["get_time"];
	$dataselect = $conn->query("SELECT * FROM admin_show_time WHERE Hall_ID='$q' ");

	if ($dataselect->num_rows>0) {
		echo "<option>Select show Time</option>";
		while ($data = $dataselect->fetch_assoc()) {
			$d=strtotime($data['Show_Time']); 
			$Show_Time=date("h:i:s A", $d);
				echo "<option value=".$data['Show_Time'].">".$Show_Time."</option>";
			 } }else{
			echo "SORRY!";
		}
}



//Select sit type
if (isset($_REQUEST["get_sit"])) {

	$q = $_REQUEST["get_sit"];
	$dataselect = $conn->query("SELECT * FROM admin_ticketcategory WHERE Hall_ID='$q' ");

	if ($dataselect->num_rows>0) {
		echo "<option>Select Sit</option>";
		while ($data = $dataselect->fetch_assoc()) {

			$Cat_SitType=$data['Cat_SitType'];
			$Cat_ID=$data['Cat_ID'];
			$Cat_price=$data['Cat_Price'];
		
				echo "<option value=".$Cat_ID.">".$Cat_SitType."-"."$Cat_price"."</option>";
			 } }else{
			echo "SORRY!";
		}
}














?>