<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<style type="text/css">
		body{

			background-color:seagreen;
		}
	</style>
	<div class="container-fluid">
		<br><br>
	<div class="col-md-4"></div>
	<!--Registeration Form Code-->
	<div class="col-md-4" style="background:mediumseagreen;width: 40%;height: 100%;">
		<form action="RegisterationPHP.php" method="post" style="padding-left: 30px;padding-right: 30px;">
			<h2 style="color: wheat; text-align: center;"><strong>REGISTER HERE</strong></h3><br>
			<div class="row">
			<div class="form-group col-md-12">
				<input type="text" name="firstName" class="form-control" placeholder="Enter Your First Name" style="background:lemonchiffon;">
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="lastName" class="form-control" placeholder="Enter Your Last Name" style="background:lemonchiffon">
			</div>
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" style="background:lemonchiffon">
			</div>
			<div class="form-group">
				<input type="text" name="country" class="form-control" placeholder="Enter Your Country Name" style="background:lemonchiffon">
			</div>
			<div class="form-group">
				<input type="text" name="city" class="form-control" placeholder="Enter Your City Name" style="background:lemonchiffon">
			</div>
			<div class="form-group">
				<input type="text" name="cnic" class="form-control" placeholder="Enter Your National Identity Card Number" style="background:lemonchiffon">
			</div>
			<div class="form-group">
				<input type="tel" name="phoneNumber" class="form-control" placeholder="Enter Your Contact Number" style="background:lemonchiffon">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Your Password" style="background:lemonchiffon">
			</div>
			<div class="form-group">
				<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Your Password" style="background:lemonchiffon">
			</div>
			<div class="form-group col-md-6">
				<button type="submit" name="register" class="form-control btn btn-primary" style="background-color: lightskyblue;color: black;"><strong>Register</strong></button>
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
	</div>
</body>
</html>