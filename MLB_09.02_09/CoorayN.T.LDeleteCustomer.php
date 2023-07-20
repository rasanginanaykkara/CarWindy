<?php
//echo "SS";
// include database connection file
include_once("CoorayN.T.Ldbh.inc.php");

// Get id from URL to delete that user
//$id = $_GET['idUUsers'];




// Delete user row from table based on given id
//$result = mysqli_query($conn, "DELETE FROM users WHERE idUUsers =$id");

//$sql = "DELETE * FROM users WHERE idUUsers =$id";
//$result = mysqli_query($conn, $sql);
//$query_resulte = mysqli_num_rows($result);
// After delete redirect to Home, so that latest user list will be displayed.
//header("Location: CoorayN.T.LCustomerDetailsTable.php");


// if (isset($_GET['Delete'])) {
//     $id = $_GET['idUUsers'];
//     $result = mysqli_query($conn, "DELETE FROM users WHERE idUUsers=$id");
//     $_SESSION['message'] = "Address deleted!";
//     header('location:CoorayN.T.LCustomerDetailsTable.php');
// }

error_reporting(0);

$id = $_GET['idUUsers'];
$query = "delete from users where idUUsers=$id ";

$data = mysqli_query($conn, $query);

echo "sss";
header("location:CoorayN.T.LCustomerDetailsTable.php?Delete Successfully");
