<?php
session_start();
$_SESSION['exists'] = "yes";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>



      <link rel="stylesheet" href="styles/admin-dashboard.css">
      <link rel="stylesheet" href="styles/selector.css">
    <title>Admin Panel</title>
  </head>
  <body>

		<div class="top-container">

			<nav class="navbar navbar-light bg-light navbar-expand-lg ">
				<div class="containers" style="margin-left:10px;">
					<div id="main">
						<button class="openbtn" id="openDashauto" onclick="openNav()">&#9776; Dashboard</button>
					</div>

					</a>
				</div>

				<div class="d-flex" style="margin-right: 40px;">

				 <a class="nav-link active" style="margin-left:0px;" aria-current="page" href="aboutus.php" style="color:black;">Developers</a>
				</div>

			</nav>

		</div>


		<div id="mySidebar" class="sidebar tab">
  	<a href="javascript:void(0)" class="closebtn clbt" onclick="closeNav()">&times;</a>
<br><br>
		<a class="tablinks" style="cursor:pointer;" onclick="openCity(event, 'homepage')" id="defaultOpen">Home Page<br>
		</a>

  	<a class="tablinks" style="cursor:pointer;" onclick="openCity(event, 'patientlist')" >Patients<br>
		</a>

  	<a class="tablinks" style="cursor:pointer;" style="width:50%;" onclick="openCity(event, 'doctorlist')">Doctors<br>
		</a>

    <a class="tablinks" style="cursor:pointer;" style="width:50%;" onclick="openCity(event, 'aptlist')">Appointments<br>
    </a>


    <a class="tablinks" style="cursor:pointer;" style="width:50%;" onclick="openCity(event, 'managedoctor')">Manage Doctor<br>
    </a>

  	<a class="tablinks"  style="cursor:pointer;" onclick="openCity(event, 'feedback')">Feedbacks<br>
		</a>

    <a class="tablinks" style="cursor:pointer;" style="width:50%;" href="index.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg><?php echo " "; echo " "; ?>Logout<br>
    </a>

	</div>

	<div id="homepage" class="tabcontent" style="margin-left:0px; margin-top:0px; margin-right:0px; margin-bottom: 0px; background-color:#EFEBE6;">
    <div style="margin-left:250px;">
      <div style="margin-left:30px; margin-top:0px;" class="jumbotron">
        <?php echo "<br>"; ?>
      <h1 class="display-4">Hello, Admin!</h1>
      <p class="lead">This is the control unit for the database, where you can manage the doctors, keep a check on patients, appointments.</p>
      <hr class="my-4">
      <p>Let's get on with it, there is a website to handle.</p>
      </div>

    <center>
      <img src="https://i.pinimg.com/originals/e7/78/2b/e7782b954b20ab768c74fc1dfd6f9377.gif" alt="this slowpoke moves" width=650/>
    </center>

    </div>

	</div>





	<div id="patientlist" class="tabcontent" style="margin-left:300px; margin-top:20px; margin-right:30px;">
	<center>	<h3>List of Patients Admitted</h3></center>

    <?php
    include 'connection-auth.php';
    $sql = "SELECT pid, firstname, lastname, contact, p_email from patient";
    $result = $conn->query($sql);
    echo "<br>";
    if($result->num_rows>0)
    {  while($row = $result->fetch_assoc()){

      ?>

      <div class="card" style="width: 18rem; display:inline-block; margin-right:10px; margin-bottom:15px;">
  <div class="card-body">
  <button class="btn btn-outline-dark"><b>ID: <?php  echo $row['pid']; ?></b></button><br><br>

    <h5 class="card-subtitle mb-2"><?php echo $row["firstname"]." ".$row["lastname"];?></h5>
    <p class="card-text">Contact Number: <?php echo $row['contact']; ?></p>
    <p class="card-text">Email : <?php echo $row['p_email']; ?></p>


  </div>
</div>

      <?php
    }

    }
    else {
      echo "<br>No records found!";
    }

     ?>

	</div>


	<div id="aptlist" class="tabcontent" style="margin-left:300px; margin-top:20px; margin-right:30px;">
    <center><h1 style="margin-top:25px;">Appointments</h1><center>

      <table class="table table-striped">
        <thead>
        <tr align=center>

        <th scope="col" style="background:#dfe6e9;">APT ID</th>
        <th scope="col" style="background:#dfe6e9;">Date</th>
        <th scope="col" colspan="2" style="background:#dfe6e9;"> Patient Info</th>

        <th scope="col" colspan="2" style="background:#dfe6e9;">Doctor Info</th>

        <th scope="col" style="background:#dfe6e9;">Prescription</th>
        <th scope="col" style="background:#dfe6e9;">Status </th>
        </tr>

        <tr align=center>
          <td style="background:#dfe6e9;"></td>
          <td style="background:#dfe6e9;"></td>
          <td style="background:#dfe6e9;">Name</td>
          <td style="background:#dfe6e9;">Patient ID</td>
          <td style="background:#dfe6e9;">Name</td>
          <td style="background:#dfe6e9;">Email</td>
          <td style="background:#dfe6e9;"></td>
          <td style="background:#dfe6e9;"></td>
        </tr>
         </thead>


      <?php
      $sql = "SELECT  * FROM appointment";
      $result = $conn->query($sql);
      echo "<br>";
      if($result->num_rows>0)
      {  while($row = $result->fetch_assoc()){

        $var_doc = $row["d_email"];
        $var_pat = $row["pid"];

        $sql1=mysqli_query($conn,"SELECT firstname,lastname,pid FROM patient where pid='$var_pat' ");
        $row1  = mysqli_fetch_array($sql1);
        $sql2=mysqli_query($conn,"SELECT firstname,lastname,d_email FROM doctor where d_email='$var_doc' ");
        $row2  = mysqli_fetch_array($sql2);

        echo
        "<tr ><td  style='text-align:center;'>".$row["aptid"].
        " </td><td  style='text-align:center;'>".$row["date"].
        " </td><td  style='text-align:center;'>".$row1["firstname"]." ".$row1["lastname"].
        " </td><td  style='text-align:center;'>".$row1["pid"].
        " </td><td  style='text-align:center;'>".$row2["firstname"]." ".$row2["lastname"].
        " </td><td style='text-align:center;'>".$row2["d_email"].
        " </td><td style='word-wrap: break-word; width:400px; text-align:center;'>".$row["prescription"].
        " </td><td  style='text-align:center;'>".$row["status"]."</td>";



      }
        echo "</table>";
      }
      else {
          echo "</table>";
        echo "<br>There are no appointments registered in our record!";
      }
      $conn->close();
       ?>
	</div>

  <div id="doctorlist" class="tabcontent" style="margin-left:300px; margin-top:20px; margin-right:30px;">
  <center><h3>

    List of Doctors Registered</h3></center>

  <?php
  include 'connection-auth.php';
  $sql = "SELECT  d_email,firstname,lastname,age,fees, contact from doctor";
  $result = $conn->query($sql);
  echo "<br>";
  if($result->num_rows>0)
  {  while($row = $result->fetch_assoc())
    {
    $docemail =  $row['d_email'];
      ?>
      <div class="card" style="width: 21rem; display: inline-block; margin-bottom:20px; margin-right:50px;">
  <div class="card-body" style="height:500px;">
    <h5 class="card-title">Dr. <?php echo $row["firstname"]." ".$row["lastname"];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row["age"]." years";?></h6>
        <p style="margin-bottom:0px;" class="card-text">Contact Number: <?php echo $row['contact']; ?></p>
        <p style="margin-bottom:0px;" class="card-text">Email : <?php echo $row['d_email']; ?></p><br>
    <h6 class="card-subtitle mb-2 text-muted"> <u>Consultancy Fees: <?php echo $row["fees"];?></u></h6><br>

    <?php
    $resulth=mysqli_query($conn,"SELECT specialization FROM specialization WHERE d_email='$docemail'")or die("Could Not Perform the Query in the Database");
    if (mysqli_num_rows($resulth) > 0) {
    ?>

        <table  class="table ">
        <tr>
          <th scope="col">Specializations</th>
        </tr>

        <?php
        $i=0;
        while($row112 = mysqli_fetch_array($resulth)) {
         ?>

         <tr>
       <td><?php echo $row112["specialization"]; ?></td>
       </tr>
       <?php
       $i++;
       }
       ?>

     </table>
      <?php
      }
      else{
        echo "No result found";
      }
      ?>


      </div>
    </div>
<?php
  }

  }
  else {
      echo "</table>";
    echo "<br>There is no doctor registered in our record!";
  }
  $conn->close();
   ?>
  </div>



	<div id="managedoctor" class="tabcontent" style="margin-left:300px; margin-top:20px; margin-right:30px;">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="home" aria-selected="true">Register a Doctor</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#remove" type="button" role="tab" aria-controls="profile" aria-selected="false">Remove a Doctor</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" role="tab" aria-controls="contact" aria-selected="false">Modify Doctor Details</button>
      </li>


    </ul>
    <br>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="home-tab">
        <div class="card" style="margin-left:auto; margin-right:auto; margin-bottom:20px; width:85%;">

            <form style="width: 100%;  padding: 0px 20px 0px 20px;  margin: 20px auto 0px auto;"
            action="add-doctor.php" method="post">
                  <center>  <h1>Doctor Registration Panel</h1></center>
              <br>
            <div class="mb-3" style="display:inline-block; width:50%;">
              <label for="email" class="form-label">Doctor's Email ID</label>
              <input type="email" style="width:100%;"  class="form-control" name = "email"  required>
            </div>
            <div class="mb-3"  style="display:inline-block; width:49%;">
              <label for="password" class="form-label">Password</label>
              <input type="password"  style="width:100%;"  name="password" class="form-control"required>
            </div>
            <br>
            <div class="mb-3" style="display:inline-block; width:50%;">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" style="width:100%;" name="firstname" class="form-control"  required>
            </div>
            <div class="mb-3" style="display:inline-block;  width:49%;">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" style="width:100%;" name="lastname"  class="form-control" required>
            </div>
            <br>
            <div class="mb-3" style="display:inline-block; width:29%;">
              <label for="age" class="form-label">Age</label>
              <input type="number" style="width:100%;" class="form-control" name="age" required>
            </div>
            <div class="mb-3" style="display:inline-block; width:29%;">
              <label for="fees" class="form-label">Consultancy Fees</label>
              <input type="number" style="width:100%;" class="form-control" name="fees" required>
            </div>
            <div class="mb-3" style="display:inline-block; width:40%;">
              <label for="phone"  class="form-label">Contact Number</label>
              <input type="phone" style="width:100%;" class="form-control" name= "contact" required>
            </div>
            <div class="container">
            <section>
                <p>Specialization(s)</p>
                <select class="form-select" name = "spec[]" multiple aria-label="multiple select example" >

                <option>Allergy and Immunology</option>
                <option>Anesthesiology</option>
                <option>Dermatology</option>
                <option>Cardiology</option>
                <option>Diagnostic radiology</option>
                <option>Dentist</option>
                <option>Emergency medicine</option>
                <option>Family medicine</option>
                <option>Internal medicine</option>
                <option>Medical genetics</option>
                <option>Nuclear medicine</option>
                <option>Obstetrics and gynecology</option>
                <option>Ophthalmology</option>
                <option>Pathology</option>
                <option>Pediatrics</option>
                <option>Physical medicine and rehabilitation</option>
                <option>Preventive medicine </option>
                <option>Psychiatry</option>
                <option>Radiation Oncology</option>
                <option>Surgery</option>
                <option>Urology</option>
                <option>Gastroenterologist</option>
                <option>ENT Specialist</option>
                <option>Gynaecologist</option>

            </select>

          </section>
            </div>

            <br>

            <center>
            <button type="submit" name="submit" class="btn btn-outline-dark">Register Doctor</button>
          </center>
          <br>
        </form>
    </div>

  </div>

      <div class="tab-pane fade" id="remove" role="tabpanel" aria-labelledby="profile-tab">
        <form class="formremovedoc" action="remove-doctor.php" method="post">
          <div class="mb-3" style="display:inline-block;">
            <label for="email" class="form-label">Doctor's Email ID</label>
            <input type="email"style="width:150%;"  class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required><br>
            <button type="submit" class="btn btn-outline-dark" name="submit"> Remove</button>
          </div>
          <img src="images/improve.jpg" style="width:50%; display:inline-block; margin-left:250px;" alt="transform-img">
        </form>
      </div>



      <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="contact-tab">
        <form class="formremovedoc" action="edit-form-page1-doctor.php" method="post">
          <div class="mb-3" style="display:inline-block;">
            <label for="email" class="form-label">Doctor's Email ID</label>
            <input type="email"style="width:150%;"  class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required><br>
            <input type="submit" class="btn btn-outline-dark" name="submit" value="Review Registration Form">
          </div>
          <img src="images/management.jpg" style="width:45%; display:inline-block; margin-left:250px;" alt="transform-img">
        </form>
      </div>
    </div>

	</div>






  <div id="feedback" class="tabcontent" style="margin-left:280px; margin-top:20px;">
    <center>
    <h1 style="margin-top:20px;">Feedbacks Recieved</h1>
  </center>
    <?php
    include 'connection-auth.php';
    $sql = "SELECT * from feedback";
    $result = $conn->query($sql);
    echo "<br>";
    if($result->num_rows>0)
    {  while($row = $result->fetch_assoc()){


      ?>

      <div class="card" style="width: 55rem; margin-right:auto; margin-left: auto; margin-bottom:15px;">

  <div class="card-body">

  <button class="btn btn-outline-dark"><b>Feedback ID: <?php  echo $row['complaintid']; ?></b></button><br>
  <div style="height:4px;">

  </div>
  <center><u>
  <?php if($row['pid']){echo ''.'Submitted by a patient'.", Patient ID: ".$row['pid'].'<br><br>';} ?>
  <?php if($row['d_email']){echo ''.'Submitted by a doctor!'.'<br><br>';} ?>
  <?php if(!$row['d_email'] && !$row['pid']){echo ''.'Submitted by an unregistered user!'.'<br><br>';} ?>
</u>
</center>


  <center>
    <h3 class="card-subtitle mb-2"><?php echo "Name: ".$row["firstname"]." ".$row["lastname"];?></h3>
    <p class="card-text" style="margin-bottom:0px;"><?php echo "Contact Number: ".$row['contactno']; ?></p>
    <p class="card-text">Email : <?php echo $row['email']; ?></p><br>

    <h4>Message</h4>
    <textarea type="text" class="form-control" rows="7" cols="20" style="width:65%;" name="" placeholder="<?php echo $row['message']; ?>" readonly></textarea>


</center>

  </div>
</div>

      <?php
    }

    }
    else {
      echo "<br>No records found!";
    }

     ?>
  </div>

<script type="text/javascript">
document.getElementById("openDashauto").click();
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function openCity(evt, cityName) {
		var i, tabcontent, tablinks;


tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
	tabcontent[i].style.display = "none";
}


tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
	tablinks[i].className = tablinks[i].className.replace(" active", "");
}


document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";

}
document.getElementById("defaultOpen").click();


</script>

  </body>
</html>
