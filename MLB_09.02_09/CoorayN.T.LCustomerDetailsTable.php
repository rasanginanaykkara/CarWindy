<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width='%80' border=1>

        <tr>
            <th>U_id</th>
            <th>E-Mail</th>
            <th>Password</th>
            <!-- <th>F_Name</th>
            <th>L_Name</th>
            <th>Email</th>
            <th>Moblie_No</th>
            <th>Bank</th>
            <th>Account_no</th> -->
            <th>Update</th>
        </tr>
        <?php

        //create database connectioon using 
        //include_once("save.php");
        include_once("CoorayN.T.Ldbh.inc.php");
        //fetch all users data from user table 
        $sql = "SELECT * from users order by idUUsers  DESC";
        $result = mysqli_query($conn, $sql);
        $query_resulte = mysqli_num_rows($result);
        //$result = $conn->query("SELECT * from users order by idUUsers  DESC");
        //output data of each row 
        // $totalrows = $result->num_row;
        if ($query_resulte > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['uidUsers'] . "</td>";
                echo "<td>" . $row['emailUsers'] . "</td>";
                echo "<td>" . $row['passwordUsers'] . "</td>";
                // echo "<td>" . $row['firstName'] . "</td>";
                // echo "<td>" . $row['lastName'] . "</td>";
                // echo "<td>" . $row['email'] . "</td>";
                // echo "<td>" . $row['number'] . "</td>";
                // echo "<td>" . $row['bank'] . "</td>";
                // echo "<td>" . $row['acc_no'] . "</td>";
                // echo "<td>" . $row['Update'] . "</td>";
                echo "<td><a href='CoorayN.T.LEditeCustomer.php?idUUsers=$row[idUUsers]' >Edit</a> | <a href='CoorayN.T.LDeleteCustomer.php?idUUsers=$row[idUUsers]'>Delete</a></td>";
                echo "</tr>";
            }
        }

        ?>
</body>

</html>