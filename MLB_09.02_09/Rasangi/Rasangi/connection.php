<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'feedback';

$conn = mysqli_connect('localhost', 'root', '', 'feedback');

//checking the connection
if(mysqli_connect_error()){
    die('Database connection failed ' . mysqli_connect_error());


}

?>