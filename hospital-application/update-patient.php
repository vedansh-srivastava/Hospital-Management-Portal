<?php
session_start();
  include 'connection-auth.php';
if(isset($_POST['submit']))
{
    extract($_POST);

    $email = $_POST['email'];
        $password = $_POST['password'];
            $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                    $gender = $_POST['gender'];
                        $contact = $_POST['phone'];
                          $age = $_POST['age'];
                            $bloodgroup = $_POST['blood'];



    $sql=mysqli_query($conn,"UPDATE patient SET password='$password',
      firstname='$firstname',
      lastname = '$lastname',
      gender='$gender',
      contact = '$contact',
      age ='$age',
      bloodgroup='$bloodgroup' WHERE
      p_email = '$email'
      ");


        $_SESSION["updatepatientdetails"]=1;

        header("Location: patient-dashboard.php");


}
?>
