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

if(isset($_POST["country_id"])){
    //Get all state data
	$country_id= $_POST['country_id'];
    $query = "SELECT * FROM states WHERE country_id = '$country_id' 
	ORDER BY state_name ASC";
	$run_query = mysqli_query($conn, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        echo '<option value="">Select state</option>';
        while($row = mysqli_fetch_array($run_query)){
		$state_id=$row['state_id'];
		$state_name=$row['state_name'];
        echo "<option value='$state_id'>$state_name</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"])){
	$state_id= $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM cities WHERE state_id = '$state_id' 
	ORDER BY city_name ASC";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_array($run_query)){
		$city_id=$row['city_id'];
		$city_name=$row['city_name']; 
        echo "<option value='$city_name'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
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