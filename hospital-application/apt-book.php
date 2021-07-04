<?php
session_start();
include 'connection-auth.php';


if(isset($_POST['submit']))
{

  $patientemail=  $_SESSION['passingpatientemail'];
  $date = Date('Y-m-d',strtotime($_POST['date']));
  $doctoremail = $_POST['doctor'];
  echo $doctoremail;
  echo $date;

    $sqlQUERYhere=mysqli_query($conn,"SELECT pid FROM patient WHERE p_email='$patientemail'");
    $row  = mysqli_fetch_array($sqlQUERYhere);
    $pid = $row['pid'];

$sqlQUERY=mysqli_query($conn,"INSERT INTO appointment (date,a_email,pid,d_email) VALUES ('$date','admin@gmail.com','$pid','$doctoremail')");


}

if($sqlQUERY)
{
  $_SESSION['booksuccess']= "Yes";
    header("Location: patient-dashboard.php");

}
else {

  echo "Failed";
}







  ?>
