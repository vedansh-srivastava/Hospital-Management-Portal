<?php
include("connection-auth.php");

extract($_POST);


$sql=mysqli_query($conn,"SELECT * FROM patient where p_email='$email'");
if(mysqli_num_rows($sql)>0)
{
	goto label1;
}
if(isset($_POST['submit']))
{
	/*filling data in patient details table*/
  $sql=mysqli_query($conn,"INSERT INTO patient(p_email, password, firstname, lastname, age,gender,contact,bloodgroup ) VALUES
('$email', '$password', '$firstname', '$lastname', $age, '$gender',$phone,'$bloodgroup')")or die("Could Not Register 1s the Query in the Database");


  $_SESSION["p_email"]= $email;

  header("Location: patient-dashboard.php");



}

label1: echo "Email Id Already Exists";


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>You are already registered!</h1>
    <h2>Try signing in <a href="patient-login.php">here</a></h2>
  </body>
</html>
