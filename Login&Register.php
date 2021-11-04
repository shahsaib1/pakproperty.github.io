<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>User Login And Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
  
        body {
    padding-top: 60px;
    background-color: seagreen;
}
.panel-login {
    border-color: #2E8B57;
    background-color: mediumseagreen;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: mediumseagreen;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #2E8B57;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 0px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid gray;
	font-size: 16px;
	background-color: lightyellow;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: wheat;
	color: black;
}
.btn-login {
	background-color: #2E8B57;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: skyblue;
}
.btn-login:hover,
.btn-login:focus {
	color: wheat;
	background-color: wheat;
	border-color: wheat;
}
.forgot-password {
	text-decoration: underline;
	color: black;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #fff;
}

.btn-register {
	background-color: #2E8B57;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #2E8B57;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
#register-form input
{
	height: 35px;
	color: black;
}
    </style>
    <?php
    if (isset($_GET['id'])) {
    	$id = $_GET['id'];
		if ($id=="login-form") { ?>
			<style type="text/css">
				#login-form
				{
					display: block;

				}
				#register-form
				{
					display: none;
				}
			</style>
		<?php	}
		elseif ($id=="register-form") { ?>
				<style type="text/css">
					#register-form
					{
						display: block;
					}
					#login-form
					{
						display: none;
					}
				</style>
		<?php	}
	}
	else
	{	?>
			<style type="text/css">
				#login-form
				{
					display: block;
				}
				#register-form
				{
					display: none;
				}
			</style>
	<?php }

    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background: seagreen;">
<div class="container">
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link" style="color: wheat;">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link" style="color:wheat;">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="Login&RegisterPHP.php" method="post" role="form">
									<div class="form-group">
										<input type="text" name="username" id="username" style="background: lemonchiffon;" class="form-control" placeholder="Enter Your Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" style="background: lemonchiffon;" class="form-control" placeholder="Enter Your Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" class="" name="rememberme" value="1" id="remember" style="background:lemonchiffon;">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Log In" style="background:lightskyblue;color: black;">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="Login&RegisterPHP.php" method="post" role="form">
									<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" name="firstName" class="form-control" placeholder="Enter Your First Name" required style="background:lemonchiffon;">
									</div>
									<div class="form-group col-sm-6">
										<input type="text" name="lastName" class="form-control" placeholder="Enter Your Last Name" required style="background:lemonchiffon">
									</div>
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username" required style="background:lemonchiffon">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address" required style="background:lemonchiffon">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" maxlength="10" placeholder="Enter Your Password" required style="background:lemonchiffon">
									</div>
									<div class="form-group">
										<input type="password" name="confirmPassword" id="confirm-password" class="form-control" maxlength="10" placeholder="Enter Again To Confirm Password" required style="background:lemonchiffon">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="register-submit" id="register-submit" class="btn btn-register form-control"style="background: lightskyblue;color: black;">Register Now</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
</body>
</html>
