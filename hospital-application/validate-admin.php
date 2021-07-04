<?php
session_start();
  include 'connection-auth.php';
if(isset($_POST['submit']))
{
    extract($_POST);

    $sql=mysqli_query($conn,"SELECT * FROM adminlogin where a_email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        $_SESSION["a_email"]=$row['a_email'];

        header("Location: admin-dashboard.php");
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
      <a href="admin-login.php">TryAgain?</a>
    </p>
  </body>
</html>
