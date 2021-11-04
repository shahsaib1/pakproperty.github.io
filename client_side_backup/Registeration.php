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
  	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="container-fluid">
		<br><br><br>
	<div class="col-md-4"></div>
	<!--Registeration Form Code-->
	<div class="col-md-4">
		<form action="RegisterationPHP.php" method="post">
			<h3 style="color: green; text-align: center;">REGISTER HERE</h3><br>
			<div class="row">
			<div class="form-group col-sm-6">
				<input type="text" name="firstName" class="form-control" placeholder="Fist Name">
			</div>
			<div class="form-group col-sm-6">
				<input type="text" name="lastName" class="form-control" placeholder="Last Name">
			</div>
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<input type="text" name="country" class="form-control" placeholder="Country">
			</div>
			<div class="form-group">
				<input type="text" name="city" class="form-control" placeholder="City">
			</div>
			<div class="form-group">
				<input type="text" name="cnic" class="form-control" placeholder="National Identity Card Number">
			</div>
			<div class="form-group">
				<input type="tel" name="phoneNumber" class="form-control" placeholder="Phone Number">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<button type="submit" name="register" class="form-control btn btn-primary">REGISTER</button>
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
	</div>
</body>
</html>