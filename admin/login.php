    <?php
    // Include Connection file
      require_once 'Connection.php';
    include('Connection.php');
    session_start();

       if (isset($_POST['submit'])) {
          $username=mysqli_real_escape_string($conn, $_POST['username']);
          $password=mysqli_real_escape_string($conn, $_POST['password']);
      $sql="select * from admin where Username='$username' and Password='$password'";
  $res=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($res);
  if($count>0){
    $row=mysqli_fetch_assoc($res);
    $_SESSION['ROLE']=$row['role'];
    $_SESSION['username']=$row['Username'];    
    $_SESSION['IS_LOGIN']='yes';
    $_SESSION['user_id'] =  $row['Id'];
    if($row['role']==1){
      header('location:index.php');
      die();
    }else if($row['role']==2){
       header('location:index.php');
    }
  }else{
    $error='Please enter correct login details';
  }
}

    ?>

  

 <!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Admin Login Form</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
 <style>
body {
  background-image: url('chuttersnap-awL_YCtPGv4-unsplash.jpg');
}
</style>
</head>
<body style="background: seagreen;"><br><br>

<div class="container" style="background:mediumseagreen;width: 450px; height: 430px;" >
        <div class="container" >

       <br>

            <h3 style="padding-left: 30px;"><strong>Admin Login Form </strong></h3>

            <p style="padding-left:70px"><strong>Please fill your credentials to login</strong></p>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group" style="padding-left:30px">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Your Username" style="background:lemonchiffon; width: 300px;">
                </div>
                
                <div class="form-group" style="padding-left:30px">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" style="width: 300px; background:lemonchiffon;">
                </div><br>
                <div class="form-group" style="padding-left:30px;">
                   <button type="submit" name="submit" class="btn btn-primary" style="background:lightskyblue;color: black;width: 40%;">Login</button>
                </div>
               <!-- <p style="color:red;">Don't have an account? <a href="reg.php">Sign up now</a>.</p>
-->
            </form>

        </div>
</div>
    </body>

    </html>

