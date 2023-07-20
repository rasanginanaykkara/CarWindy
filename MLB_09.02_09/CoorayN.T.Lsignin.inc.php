<?php
//echo "succsss";
if (isset($_POST['SignIn'])) {

    require 'CoorayN.T.Ldbh.inc.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("location: CoorayN.T.Llogin.php?error=emptyfileds");

        exit();
    } else {

        $sql = "select*from users where emailUsers = ? ;";
        //check form data base
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: CoorayN.T.Llogin.php?error=sqlerror .$sql");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) { //use assosion array
                $pwdCheck = password_verify($password, $row['passwordUsers']); //check the password exactly same in the data base 

                if ($pwdCheck == false) {

                    header("location: CoorayN.T.Llogin.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start(); //session varibale is equla to use inside tha database
                    $_SESSION['userId'] = $row['idUUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];


                    header("location: CoorayN.T.LSetting.php?loign=success");
                    exit();
                }
            } else {
                header("location: CoorayN.T.Llogin.php ?error=nouser");
                exit();
            }
        }
    }
}

echo "succsss";











// session_start();
// session_unset();
// session_destroy();
// header("Location: ../index.php");


// include_once 'dbh.inc.php';
 
 
// $username = $_POST['uid'];
// $email = $_POST['mail'];
// $password = $_POST['pwd'];
// $passwordRepeat = $_POST['pwd-repeat'];

// $sql="INSERT INTO users ($idUUsers, $uidUsers, $emailUsers, $passwordUsers)
// VALUES('$first' , '$last' ,'$email' ,'$uid','$pwd');";

// mysqli_query($conn,$sql);

// header("location:../index.php?Loig=success!");