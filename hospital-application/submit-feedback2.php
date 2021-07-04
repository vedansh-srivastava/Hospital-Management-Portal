<?php
session_start();

include("connection-auth.php");

extract($_POST);

$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$pid = $_POST['pid'];




$sql=mysqli_query($conn,"INSERT INTO feedback (firstname,lastname,email,contactno,message,pid,d_email,a_email) VALUES('$firstname', '$lastname','$email','$contact','$message','$pid',null,'admin@gmail.com')")
or die("Could Not Register the Query in the Database");

  header("Location: patient-dashboard.php");

?>
