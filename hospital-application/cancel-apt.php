<?php
session_start();
include 'connection-auth.php';
$ai= $_GET['ai'];
$data=mysqli_query($conn,"UPDATE appointment SET status='Cancelled' WHERE aptid='$ai' ");

if($data)
{
  $_SESSION['recorddeleted'] = "Deleted";

  header("Location: patient-dashboard.php");
}



 ?>
