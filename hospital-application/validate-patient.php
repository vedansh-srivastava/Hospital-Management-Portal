<?php
session_start();
  include 'connection-auth.php';
if(isset($_POST['submit']))
{
    extract($_POST);

    $sql=mysqli_query($conn,"SELECT p_email,password FROM patient where p_email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        $_SESSION["p_email"]=$row['p_email'];

        header("Location: patient-dashboard.php");
    }
    else
    {
        echo "<br> Invalid Email ID/Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error</title>
  </head>
  <body>
    <h1>Invalid Credentials</h1>
    <p>
      <a href="patient-login.php">TryAgain?</a>
    </p>
  </body>
</html>
