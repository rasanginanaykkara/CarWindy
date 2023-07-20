<?php
// if (isset($_POST['save'])) {

// include_once("dbh.inc.php");

// $firstName = $_POST['fname'];
// $lastName = $_POST['lname'];
// $Nic = $_POST['customerNIC'];
// $email = $_POST['email'];
// $tel_number = $_POST['p_number2'];
// $CutomerId = $_POST['cutomerId'];
// $bank = $_POST['bankDet'];
// $acc_no = $_POST['acc_no'];

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$Nic = $_POST['customerNIC'];
$tel_number =  $_POST['p_number2'];
$bank = $_POST['bankDet'];
$acc_no = $_POST['accNumber'];


//databas connection

$conn = new mysqli('localhost', 'root', '', 'customers2');

if ($conn->connect_error) {
	die('Connection Faild : ' . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into customers2(firstName, lastName,Nic, email, number, bank, acc_no)
		values(?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssiss", $firstName, $lastName, $Nic, $email, $tel_number, $bank, $acc_no);
	$stmt->execute();
	echo "Successfully submitted";
	echo "<a href='CoorayN.T.LSetting.php'>Click me</a>";

	$stmt->close();
	$conn->close();
}
//}
