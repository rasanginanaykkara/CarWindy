<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "feedback";

	$conn = new mysqli($server, $user, $password, $dbname);

	if($conn->connect_error){

		die("Connection faild: " . $con->connect_error);

	}else{	

		if(isset($_POST['submit'])){

			$name = $_POST['user'];
			$Rate = $_POST['rate'];
			$feedContent = $_POST['feedback-content'];			
									
			$sql = "INSERT INTO feedback_table(user_name,Rate,feedback)VALUES('$name','$Rate','$feedContent')";	

			if($conn->query($sql)){
				echo "Inserted Successfuly";
			}else{
				echo "<br/> Not inserted  <br/>";
				echo "Error".$conn->error;
			}	
		}else{
			echo "Not submitted : ";
		}
		header("Location:feedback.php?Feeback-send=successfully");
	}
	$conn->close();	

?>