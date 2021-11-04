<?php
include('Connection.php');
session_start();
                    // Retrieving data of user 
                    
                      $userid = $_COOKIE['userid'];
                      $sql = "SELECT * FROM users WHERE UserId = '$userid'";
                      $runQuery = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_assoc($runQuery);
                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('Head.php'); ?>
</head>
<body style="background: seagreen;">
<?php 
  $currentPage = 'Profile';
  include('BodyNavSection.php');
 ?> 
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 
        <div class="well" style="background: mediumseagreen;">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <?php echo "<img src='".$row['ImagePath']."' height='380' width='240' class='img-responsive'/>"; ?>   
                    </div>

                    <div class="col-md-6 col-md-8">
                    	<form class="form-horizontal" action="ProfileEditPHp.php" method="post">
						<div class="form-group" style="margin-top: 10px;">
						
							<label class="col-sm-4">FirstName:</label>
								<div class="col-sm-8"><input type="text" name="firstName" class="form-control" value="<?php echo $row['FirstName'] ?>" placeholder="Enter Your First Name" style="background: lemonchiffon;"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-4">LastName:</label>
							<div class="col-sm-8"><input type="text" name="lastName" class="form-control" value="<?php echo $row['LastName'] ?>" placeholder="Enter Your Last Name" style="background: lemonchiffon;"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-4">Username:</label>
							<div class="col-sm-8"><input type="text" name="username" class="form-control" value="<?php echo $row['Username'] ?>" placeholder="Enter Your Username" style="background: lemonchiffon;"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-4">Email:</label>
							<div class="col-sm-8"><input type="email" name="email" class="form-control" value="<?php echo $row['Email'] ?>" placeholder="Enter Your Email Address" style="background: lemonchiffon;"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-4">Password:</label>
							<div class="col-sm-8"><input type="password" name="password" class="form-control" value="<?php echo $row['Password'] ?>" placeholder="Enter Your Password" style="background: lemonchiffon;"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-4">Conform Password:</label>
							<div class="col-sm-8"><input type="password" name="confirmPassword" class="form-control" placeholder="Conform Your Password" style="background: lemonchiffon;">
						</div>
						<div class="form-group">
							<button type="submit" name="updateProfile" class="form-control btn btn-primary" style="width: 40%; margin-left: 40%; margin-top: 15px;background: lightskyblue;color: black;"><strong>Update Profile</strong></button>
						</div>
					</form>
                    </div>
                </div>
            </div>
      </div>
   <!--  <div class="col-sm-2 sidenav">
    </div> -->
  </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
