<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User SignIn Form</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background: seagreen;">
  <div class="container-fluid">
    <br><br><br>
  <div class="col-md-4"></div>
  <!-- Login Form Code -->
  <div class="col-md-4" style="background:mediumseagreen;width: 500px;">
    <form action="RegisterationPHP.php" method="post" style="height: 450px;"><br>
      <h3 style="color: wheat; text-align: center;"><strong>SIGN IN HERE</strong></h3><br>
      <div class="form-group" style="padding-left: 80px;">
        <label>Enter Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" style="background:lemonchiffon; width: 80%;">
      </div><br>
      <div class="form-group" style="padding-left: 80px;">
        <label>Enter Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" style="background:lemonchiffon; width: 80%;">
      </div><br>
      <div class="form-group" style="width: 50%;padding-left: 80px;">
        <button type="submit" name="login" class="form-control btn btn-primary" style="background:lightskyblue;color: black;">LOGIN</button>
      </div>
    </form>
  </div>
  <div class="col-md-4"></div>
  </div>
</body>
</html>