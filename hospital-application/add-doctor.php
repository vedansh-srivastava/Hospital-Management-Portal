<?php
session_start();

include("connection-auth.php");

extract($_POST);


$sql=mysqli_query($conn,"SELECT * FROM doctor where d_email='$email'");
if(mysqli_num_rows($sql)>0)
{
	goto label1;
}

if(isset($_POST['submit']))
{


 $sql=mysqli_query($conn,"INSERT INTO doctor(d_email, password, firstname,lastname, age,fees,contact,a_email ) VALUES
('$email', '$password', '$firstname', '$lastname', $age, $fees,$contact,'admin@gmail.com')")or die("Could Not Register the Query in the Database");


			$_SESSION["d_email"]=$email;
			$_SESSION["firstname"]=$firstname;
			$_SESSION["lastname"]=$lastname;
			$_SESSION["age"]=$age;
			$_SESSION["fees"]=$fees;
			$_SESSION["contact"]=$contact;

			$spec = $_POST['spec'];

			foreach ($spec as $keyrow)
			{
				echo $keyrow;
				$sql2=mysqli_query($conn,"INSERT INTO specialization(d_email, specialization) VALUES('$email', '$keyrow')")or die("Could Not Register the Query in the Database");

			}



header("Location: add-doctor-success-page.php");
}

label1: echo "Email Id Already Exists<br>";


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Doctor is already registered</h1>
    <h2>Go Back to Home Page? <a href="admin-dashboard.php">Here</a></h2>
  </body>
</html>
