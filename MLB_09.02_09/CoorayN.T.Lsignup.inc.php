<?php
echo "suc!";
if (isset($_POST['signUp'])) {

  // include ('includes/dbh.inc.php');

  require 'CoorayN.T.Ldbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  //include_once("dbh.inc.php");
  // $result= mysqli_query($conn,"INSERT INTO logingsystem4 (uidUsers,emailUsers,passwordUsers) VALUES('$uername','$email','$password','$passwordRepeat')");


  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("location: CoorayN.T.Llogin.php?error=you miss some row(s) in your file time duration here");
    exit();
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: CoorayN.T.Llogin.php?error=invalidmail&mail");
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: CoorayN.T.Llogin.php?error=invalidmail&uid" . $username);
    exit();
  } else if ($password !== $passwordRepeat) {
    header("location: CoorayN.T.Llogin.php?error=passwordcheck&uid" . $username . "&email=" . $email);
    exit();
  } else { //username allredy have data base  check it and get slution kind of probalem 

    $sql = "SELECT uidUsers from users where uidUsers=?"; //? mark like placeholder
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: CoorayN.T.Llogin.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
    }

    if ($resultCheck > 0) { //display msg user name is alrady in data base
      header("location: CoorayN.T.Llogin.php?error=usertaken&email=" . $email);

      exit();
    } else {

      $sql = "INSERT INTO users(uidUsers,emailUsers,passwordUsers) VALUES(?,?,?)";
      // INSERT INTO users(uidUsers,emailUsers,passwordUsers) VALUES('','tl482842@gmail.com',''
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {

        header("location: CoorayN.T.Llogin.php?error=sqlerror" . $sql); //get load msg 

        exit();
      }

      $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpassword);

      mysqli_stmt_execute($stmt);

      //  mysqli_stmt_store_resulte($stmt); alwas enter to database that's why not need 
      header("location: CoorayN.T.Llogin.php?error=sucssess signup"); //get load sucssess signup msg
      exit();
    }
  }

  //$result = mysqli_query($conn, "INSERT INTO logingsystem4 (uidUsers,emailUsers,passwordUsers) VALUES('$uername','$email','$password')");
  mysqli_stmt_close($stmt);
  mysqli_close($conn);


  echo "User added successfully . <a href='CoorayN.T.Llogin.php'>View Users</a>";
}
