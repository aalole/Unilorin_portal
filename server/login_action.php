<?php
session_start();

require_once('connect.php');

$email=$_POST['email'];
$password=$_POST['password'];



$result = "SELECT * FROM rem_applicant WHERE EmailAddress='$email' && Password='$password'";
$query=mysqli_query($conn, $result);
 $row = mysqli_fetch_array($query);
 if($row == true) {
  $_SESSION['email']=$email;
header("location:welcome_action.php");
 }
else{
    // echo 'Incorrect login parameters!! Please Try again';
    $_SESSION['failureMsg'] = "Incorrect login parameters!! Please Try again";
    header("location:login_2.php");
 }


?>