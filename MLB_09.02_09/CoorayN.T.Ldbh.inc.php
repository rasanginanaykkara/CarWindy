<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "users";


$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

if ($conn->connect_error) {

    die("Connection faild : " . $conn->connect_error);
}
