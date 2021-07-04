<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>

      <link rel="stylesheet" href="styles/admin-login.css">
  </head>
  <body>
    <div class="login-box">
  <h2>Adminisitrator Panel</h2>
  <form action="validate-admin.php" method="post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="email" name="email" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
    <center>


    <a>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
        <input style="border:none; background:none; font-size:16px; color:white; cursor:pointer;" type="submit" name="submit" value="Login">

    </a>
  </center>
  </form>
</div>

  </body>
</html>
