<?php

include("conn.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$password = $_POST['password'];

$password = hash('sha256',$password);


$sql = "INSERT INTO kids (Name  , Email, PhoneNo, Password)
VALUES ('$fullname', '$email', $phoneNo, '$password')";

if (mysqli_query($conn, $sql)) {
    header("location:/task2/signup.php?status=sucessS");
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }