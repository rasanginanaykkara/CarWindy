<?php
    if(isset($_SESSION['id'])){
        echo "<script>alert('You need to be loggedin first') </script>";
        
    }
    if(isset($_POST['reserved'])){
        $conn = new mysqli("localhost","root","","test");
        $sql = "INSERT INTO reserve VALUES(".$_POST['driver_id'].",'".$_POST['registration_number']."','".$_POST['pickup_date']."','".$_POST['dropoff_date']."','')";
        if($conn->query($sql)){
            echo "<script>alert('".$_SESSION['id']."') </script>";
            echo "<script>window.location = '../index.php';</script>";
        }
    }
?>
