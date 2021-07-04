<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Success</title>
</head>

<body style="   background: linear-gradient(60deg, #bdc3c7 0%,#2c3e50 100%); height: 750px;">


<div class="card" style="width: 30rem;
	position: relative;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: 55px auto 10px auto;

  ">

  <img src="images/pic1.jpg" class="card-img-top" alt="success-img">
  <div class="card-body" >
  <center>  <h3 class="card-title">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
</svg> <p style="display:inline-block;">        </p>
Successfully Deregistered</h3></center> </div>

                                   <?php
                           session_start();
                           include 'connection-auth.php';
                           $email=$_SESSION["d_email"];
                           $firstname=$_SESSION["firstname"];
                                $lastname=$_SESSION["lastname"];   ?>

                              <center> <p><b>Information of Removed Doctor </b></p></center>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="margin-left:20px;"><p><b>Email :</b>  <?php echo $email?>  </p></li>
    <li class="list-group-item" style="margin-left:20px;"> <p><b> Name :</b> <?php echo $firstname?> <?php echo $lastname?> </p></li>


  </ul>
  <center>

  
  <div class="card-body">
    <a href="admin-dashboard.php" class="btn btn-outline-dark">Return to HomePage</a>
  </div></center>
  </div>
</div>
</body>
</html>
