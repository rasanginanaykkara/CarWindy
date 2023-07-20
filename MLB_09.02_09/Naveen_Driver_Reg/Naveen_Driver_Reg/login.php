<?php
echo "hello";
	//connection strings
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "test2";

	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$tel_number = $_POST['p_number1'].''.$_POST['p_number2'];
	$driverId =$_POST['driveId'];
	$file = $_POST['file'];
	$bank = $_POST['bankDet'];
	$acc_no = $_POST['accNumber'];
	$country = $_POST['country'];
	$stAddress1 = $_POST['Address1'];
	$stAddress2 = $_POST['Address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postal = $_POST['postal'];
	$experience = $_POST['Description'];
		
//databas connection

$conn = new mysqli($server, $user, $password, $dbname);

	if($conn->connect_error){

		die('Connection Faild : '.$conn->connect_error);

	}else{


		$image = "upload/".$driverId.".jpg";
		copy ($_FILES['file']['tmp_name'],"uploads/".$driverId.".jpg");
		// echo "<br/>submitted : <br/>".$image."<br/>";
		
		
		$stmt = $conn->prepare("insert into registration1(firstName, lastName, gender, email, number, driverId, file, bank, acc_no, country, stAddress1, stAddress2, city, state, postal, experience)
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssisssisssssss",$firstName, $lastName, $gender, $email,$tel_number, $driverId, $image, $bank, $acc_no, $country, $stAddress1, $stAddress2, $city, $state, $postal, $experience);
		$stmt->execute();

		 header("Location:index.php?signup=successfull");
		 
		// echo "Successfully submitted";
		// echo "<a href='index.html'>Click me</a>";
		
		$stmt->close();
		$conn->close();
	}
	
?>