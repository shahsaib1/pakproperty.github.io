<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lost&Found- Registeration</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <br><br><br>
  <div class="col-md-4"></div>
  <!-- Login Form Code -->
  <div class="col-md-4">
    <form action="RegisterationPHP.php" method="post">
      <h3 style="color: green; text-align: center;">SIGN IN HERE</h3><br>
      <div class="form-group">
        <label>Enter Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <label>Enter Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <button type="submit" name="login" class="form-control btn btn-primary">LOGIN</button>
      </div>
    </form>
  </div>
  <div class="col-md-4"></div>
  </div>
</body>
</html>