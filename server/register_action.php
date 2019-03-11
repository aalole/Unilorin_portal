<?php 

session_start();

require("connect.php");

$surname = $_POST['sname']; 
$firstname = $_POST['fname'];
$midname = $_POST['mname'];
$phone = $_POST['phone']; 
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['pword'];



echo
$surname;


$query= "INSERT INTO rem_applicant (Surname, Firstname, Middlename, Phone, EmailAddress, Password, confirmPassword) 
VALUES ( '$surname', '$firstname', '$midname', '$phone', '$email', '$password', '$cpassword')";

if (mysqli_query($conn, $query)) {
    // echo "New record created successfully";
    $_SESSION['successmessage'] = "You have successfully registered. PROCEED TO LOGIN";
    header("location:../login/");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>