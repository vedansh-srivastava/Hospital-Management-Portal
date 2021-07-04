<?php
if(isset($_SESSION['exists']) || isset($_SESSION['patientloggedout']) || isset($_SESSION['doctorloggedout']) )
   session_destroy();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <div class="top-container">

      <nav class="navbar navbar-light bg-light navbar-expand-lg ">

        <div class="container">
          <a class="navbar-brand"> <img src="images/logo.png" alt="" style="width:8%; margin-left:10px;">  </a>

        </div>

        <div class="d-flex" style="margin-right: 40px;">
         <a class="nav-link active" aria-current="page" href="feedback.php">Feedback</a>
         <a class="nav-link active" aria-current="page" href="aboutus.php">Developer</a>
        </div>

      </nav>


    </div>

    <div class="header">



  <div class="Center_Text flex">
  </div>
  <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="background_wave">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
      </g>
    </svg>
  </div>
</div>





    <div class="middle-container">
      <center><b><h1 style="font-family: 'Sacramento', cursive; margin-bottom:0px; margin-top:25px; font-size: 55px; color:white;">Welcome to MediCare</h1></b></center>
      <div class="card" style="width: 20rem; display: inline-block; margin: 40px 0px 0px 222px;" >
        <center>
          <img src="https://i.pinimg.com/originals/2a/28/89/2a28892a55fe98461d8a532cb98b2820.gif" class="card-img-top" alt="patient-img" style="width:132px;" >

  <div class="card-body">
      <center>
    <h5 class="card-title"><b>Patient</b></h5>
    <p class="card-text">"In an emergency, what treatment is given by ear? Words of Comfort."</p>
    <p class="card-text" style="font-style: italic;">~Abraham Verghese, MD</p><br>
    <a href="patient-login.php" class="btn btn-primary">Login</a>
    <div style="display:inline-block; width:5px;"> </div>
    <a href="patient-signup.php" class="btn btn-primary">Register</a>
    </center>
    </div>
    <center>
  </div>


      <div class="card" style="width: 20rem; display: inline-block; margin: 40px 0px 0px 50px; ">
          <img src="https://cdn.dribbble.com/users/1015854/screenshots/3569620/day270_doctor-and-patient_1_2.gif" class="card-img-top" alt="patient-img" style="width:319px;"">
  <div class="card-body" >
      <center>
        <h5 class="card-title"><b>Doctor</b></h5>
        <p class="card-text">“The good physician treats the disease; the great physician treats the patient who has the disease.” </p>
        <p class="card-text" style="font-style: italic;">~ William Osler</p>
        <a href="doctor-login.php" class="btn btn-primary">Login</a>

    </center>
  </div>
</div>

    <div class="card" style="width: 20rem; display: inline-block; margin: 40px 0px 0px 50px;">
        <img src="https://i.pinimg.com/originals/d7/ab/5f/d7ab5f8402e2d08ae29259c898d2f19c.gif" class="card-img-top" alt="admin-img" style="width:312px;">
    <div class="card-body" >
    <center>
      <h5 class="card-title"><b>Administration</b></h5>
      <div style="height:5px">

      </div>
      <p class="card-text">“Goals must always be to be happy, healthy and to be surrounded by loved ones.” </p>
        <p class="card-text" style="font-style: italic;">~ George White</p>
      <a href="admin-login.php" class="btn btn-primary">Login</a>
    </center>
    </div>
    </div>


        </div>



    <div class="lower-container">

    </div>

  </body>
</html>
