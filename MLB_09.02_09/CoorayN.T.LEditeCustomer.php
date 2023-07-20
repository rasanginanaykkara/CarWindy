<?php
// include database connection file
include_once("CoorayN.T.Ldbh.inc.php");
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {header("Location: CoorayN.T.LCustomerDetailsTable.php");
    error_reporting(0);
    $id = $_POST['idUUsers'];
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    // update user data
    $result = mysqli_query($conn, "UPDATE users SET uidUsers='$username',emailUsers='$email',passwordUsers='$password' WHERE idUUsers=$id");

    // Redirect to homepage to display updated user in list
    
}
?>
<?php
error_reporting(0);

$id = $_GET['idUUsers'];

// Display selected user data based on id
// Getting id from url

// $UsersN = $_GET['UsersN'];
// $emailUsrs = $_GET['emailUsrs'];
// $passwordUsrs = $_GET['passwordUsrs'];
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM users WHERE idUUsers=$id");

while ($row = mysqli_fetch_array($result)) {

    $username = $row['uidUsers'];
    $email = $row['emailUsers'];
    $password = $row['passwordUsers'];
}
?>


<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="CoorayN.T.LCustomerDetailsTable.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="CoorayN.T.LEditeCustomer.php">
        <table >
            <tr>
                <td>User Name</td>
                <td><input type="text" name="uid" value=<?php echo   $username; ?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email; ?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd" value=<?php echo $password; ?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['idUUsers']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>







</html>