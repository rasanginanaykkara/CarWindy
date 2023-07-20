<?php

$ID = $_GET['ID'];
require("Connection.php");

echo "$ID";
$sql = "DELETE FROM reserve WHERE reservation_id = '$ID'";

if ($con->query($sql)) {

	echo "Delete successfully";
	header("location: booking.php");

}else{

	echo "error:" .$con->error;
	header("location: booking.php");

}

	
?>

<!-- $sql = "SELECT * FROM reserve ";

$result =$con->query($sql);

if ($result->num_rows > 0) {
	echo "<table border= '1'>";
	while($row = $result->fetch_assoc()){
				
		echo "<tr>"."<td>".$row["reservation_id"]."</td>"."<td>".$row["dropoff_date"]."</td>"."<td>".$row["pickup_date"]."</td>"."<td>".$row["driver_id"]."</td>"."<td>".$row["registration_number"]."</td>"."</tr>";
				
	}
		echo "</table>";
	}else{
		echo "No result :";
	} -->