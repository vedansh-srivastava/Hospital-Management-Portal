<?php
session_start();

include("connection-auth.php");

extract($_POST);

$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];




$sql=mysqli_query($conn,"INSERT INTO feedback (firstname,lastname,email,contactno,message,pid,d_email,a_email) VALUES('$firstname', '$lastname','$email','$contact','$message',null,'$email','admin@gmail.com')")
or die("Could Not Register the Query in the Database");

  header("Location: doctor-dashboard.php");

?>
