<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Success</title>
</head>

<body style="background: linear-gradient(60deg, #bdc3c7 0%,#2c3e50 100%); height: 750px;">


<div class="card" style="width: 25rem;
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: 10px auto 10px auto;

  ">

  <img src="images/pic1.jpg" class="card-img-top" alt="success-img">
  <div class="card-body">
    <h3 class="card-title">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
      </svg>
      Registration Successful</h3> </div>

                                   <?php
                           session_start();
                           include 'connection-auth.php';
                           $email=$_SESSION["d_email"];
                           $firstname=$_SESSION["firstname"];
                                $lastname=$_SESSION["lastname"];
                                     $age=$_SESSION["age"];
                                          $fees=$_SESSION["fees"];
                                               $contact=$_SESSION["contact"];
                                               ?>

  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="margin-left:20px;"><p><b>Email :</b>  <?php echo $email?>  </p></li>
    <li class="list-group-item" style="margin-left:20px;"> <p><b> Name :</b> <?php echo $firstname?> <?php echo $lastname?> </p></li>
    <li class="list-group-item" style="margin-left:20px;"> <p><b>Age : </b><?php echo $age ?>  </p></li>
        <li class="list-group-item" style="margin-left:20px;"> <p><b>Consultancy Fees : </b> Rs. <?php echo $fees ?>  </p></li>
            <li class="list-group-item" style="margin-left:20px;"> <p><b>Contact Number : </b> <?php echo $contact ?> </p> </li>

  </ul>
  <center>
  <div class="card-body">
    <a href="admin-dashboard.php" class="btn btn-outline-dark">Return to HomePage</a>
  </div></center>
  </div>
</div>
</body>
</html>
