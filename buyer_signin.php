<?php
include('Connection.php');
    session_start();
  
  if (isset($_POST['submit']))
   {
      $username = mysqli_real_escape_string($conn,htmlentities(trim(strip_tags($_POST['input_uname']))));
      $password = mysqli_real_escape_string($conn,htmlentities(trim(strip_tags($_POST['input_password']))));

     if (!empty($username) && !empty($password)) 
     {
      	$result_query = mysqli_query($conn, "SELECT * FROM buyer WHERE usersname = '$username' AND password = '$password'");
      	if (mysqli_num_rows($result_query) == 1)
      	 {
      		  $row = mysqli_fetch_array($result_query);
      		  $_SESSION['user_id'] =  $row['id'];
      		  header("location:buy_property.php");
           exit();

      	}
      	else
      	{
      		echo "<script>alert('username or password is incorrect');</script>";
      	}
      } 
   }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Buyer SignIn Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</head>
<body style="background: seagreen;"><br><br>
<div class="container" style="background:mediumseagreen; width:500px;height: 500px;"><br>
  <h3 class="text-center" style="color:wheat;">Buyer SignIn Form</h3><br>
  <div class="row">
    <div style="padding-left: 100px;">
      <form method="post" action="">
        <div class="form-group"><br>
          <label><strong>Buyer Name</strong></label>
          <input type="text" class="form-control" placeholder=" Enter Your Name" name="input_uname" style="background:lemonchiffon;width:300px">
        </div><br>
        <div class="form-group">
          <label><strong>Enter Password</strong></label>
          <input type="text" class="form-control" placeholder="Enter Your password" name="input_password" style="background:lemonchiffon; width: 300px;">
        </div><br>

     
        </div>
       <div style="padding-left:100px">
        <input type="submit" name="submit" value="Sigin" class="btn btn-primary" style="background:lightskyblue; color: black;width: 180px;">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>