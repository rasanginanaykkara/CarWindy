<?php
//connection

$server = "localhost";
$user = "root";
$password = "";
$dbname =  "reservation";

//create connection
$con = new mysqli($server, $user, $password, $dbname);

//check connnection

if($con->connect_error){
	die("Connection faild: " . $con->connect_error);
}