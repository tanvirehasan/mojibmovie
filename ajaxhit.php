<?php 

$conn = new mysqli('localhost','root','','chironjib_mojib');


if (isset($_REQUEST["q"])) {

	$q = $_REQUEST["q"];
	$dataselect = $conn->query("SELECT * FROM customers WHERE name LIKE '%%%$q%%%' ");

	if ($dataselect->num_rows>0) {
		while ($data = $dataselect->fetch_assoc()) {
			$data=$data['name'];
			echo $data.", ";
			}

		}else{
			echo "SORRY!";
		}
}


//
if (isset($_REQUEST["get_option"])) {

	$q = $_REQUEST["get_option"];
	$dataselect = $conn->query("SELECT * FROM admin_cinema_hall WHERE Hall_City='$q' ");

	if ($dataselect->num_rows>0) {
		while ($data = $dataselect->fetch_assoc()) {
			$HallName=$data['Hall_Name'];
			$id=$data['Hall_ID'];
			
				echo "<option value=".$id.">".$HallName."</option>";

			 } }else{
			echo "SORRY!";
		}
}


?>