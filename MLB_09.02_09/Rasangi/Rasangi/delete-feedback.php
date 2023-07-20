<?php
   $id=$_GET['ID'];
   require("connection.php");
   echo $id;
   
    $sql="DELETE FROM feedback_table WHERE ID='$id'";
    $conn->query($sql);
    if($conn->query($sql)){
        echo"deleted";
        header("Location: feedback.php");

    }

    else
    {
        echo "error";
        header("Location:feedback.php");
    }

?>