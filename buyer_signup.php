<?php
  include('Connection.php');
 if (isset($_POST['submit']))
  {
     $recieved_name    = $_POST['input_uname'];
     $recieved_password  = $_POST['input_password'];
    

    $result = mysqli_query($conn, "INSERT INTO buyer (usersname , password ) VALUES ('$recieved_name' , '$recieved_password') ");
    if ($result)
     {
      echo "<script>alert('Record inserted successfully');</script>";
     }
     else
     {
      echo "<script>alert('Record insertion successfully');</script>";
     }

        
  }     
?>




<!DOCTYPE html>
<html>
<head>
  <title>Buyer Signup Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</head>
<body style="background:seagreen;"><br><br>
<div class="container" style="background:mediumseagreen; width: 500px;height: 500px;"><br><br>
  <h3 class="text-center" style="color:wheat;">Buyer Signup Form</h3><br>
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form method="post" action="">
        <div class="form-group">
          <label><strong>Username</strong></label>
          <input type="text" class="form-control" placeholder="Enter Your Name" name="input_uname" style="background: lemonchiffon;">
        </div>
        <div class="form-group"><br>
          <label><strong>Create Password</strong></label>
          <input type="text" class="form-control" placeholder="Create Password" name="input_password" style="background: lemonchiffon;">
        </div>

     
        </div>

        <div class="form-group" style="padding-left: 100px;"><br>
        
           <input type="submit" name="submit" value="Signup" class="btn btn-success" style="background:lightskyblue;color: black;width: 150px;">
           
            <button class="btn btn-success" style="background:lightskyblue;width: 150px;" ><a href="buyer_signin.php" class="text"style="color: black;">Signin</a></button>
</div>
      </form>
    </div>
  </div>
</div>
</body>
</html>