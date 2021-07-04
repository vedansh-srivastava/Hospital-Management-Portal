<?php
include("connection-auth.php");
session_start();


if(isset($_POST['submit']))
{
  extract($_POST);

  $email = $_POST["email"];
  	/*filling data in patient details table*/
      $sql1=mysqli_query($conn,"SELECT * FROM doctor WHERE d_email='$email'")or die("Could Not Perform the Query in the Database");
      $row  = mysqli_fetch_array($sql1);

      if(is_array($row))
      {
        $_SESSION["d_email"]=$row['d_email'];
          $_SESSION["firstname"]=$row['firstname'];
            $_SESSION["lastname"]=$row['lastname'];
      $sql5=mysqli_query($conn,"DELETE FROM appointment WHERE d_email='$email'")or die("Could Not Perform the Query in the Database");
      $sql2=mysqli_query($conn,"DELETE FROM specialization WHERE d_email='$email'")or die("Could Not Perform the Query in the Database");
      $sql3=mysqli_query($conn,"DELETE FROM doctor WHERE d_email='$email'")or die("Could Not Perform the Query in the Database");

    
      echo "Done";
      header("Location: remove-doctor-success-page.php");

      }

      else {
        echo "Doctor Credential not found in the database";
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
    <h1>Doctor was not found in the database</h1>
    <h3>Return to Homepage from <a href="admin-dashboard.php">Here</a>
    </h3>
  </body>
</html>
