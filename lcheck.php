<?php

include("conn.php");
session_start();


$username = $_POST['email'];
$password = $_POST['password'];

$password = hash('sha256',$password);

$sql = "SELECT * FROM `kids` WHERE (Name = '$username' or Email = '$username') AND Password = '$password' ";
$sql1 = "SELECT * FROM `kids` WHERE PhoneNo = $username  AND Password = '$password'";
$sqlQuery = is_numeric($username)? $sql1:$sql;

$result = mysqli_query($conn, $sqlQuery);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION["userName"] = $row["Name"];
        header("location:/task2/index.php?status=sucess");

    }
  } else {
    header("location:/task2/login.php?status=error");

  }