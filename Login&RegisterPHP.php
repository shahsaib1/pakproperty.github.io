<?php
require('Connection.php');

session_start();
  
  
if (isset($_POST['login-submit'])) {
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$query="SELECT * FROM users WHERE Username='$username' AND Password='$password'";
	$runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count=mysqli_num_rows($runQuery);
	if ($count>0) {
		$user=mysqli_fetch_assoc($runQuery);
		$_SESSION['firstname']=$user['FirstName'];
		$_SESSION['user_name']=$user['FirstName']." ".$user['LastName'];
		$_SESSION['userid']=$user['UserId'];
		$_SESSION['email']=$user['Email'];
		if (isset($_REQUEST['rememberme']) && $_REQUEST['rememberme']==='1') {
			$time = time()+(30*24*60*60);
			setcookie("userid",$user['UserId'], $time);
		}
		else
		{
			setcookie("userid",$user['UserId']);
		}
		
			 
			  $_SESSION['userid'] =  $user['UserId'];

		
		
		header("location:Index.php");

	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
				alert('Login Failed!')
				window.location.href='Registeration.php';
			</script>");
	}
}
elseif (isset($_POST['register-submit'])) {
	$firstName=mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn, $_POST['lastName']);
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$confirmPassword=mysqli_real_escape_string($conn, $_POST['confirmPassword']);
	$fileDestination = 'uploads/default-profile-picture.jpg';
	if ($password!=$confirmPassword) {
		echo ("<script LANGUAGE='JavaScript'>
				alert('Password do not match!')
				window.location.href='Registeration.php';
			</script>");
	}
	else
	{
		$query="INSERT INTO users (FirstName, LastName, Username, Email, Password, ImagePath) VALUES ('$firstName', '$lastName', '$username', '$email', '$password', '$fileDestination')";
		$runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
		if(!$runQuery)
		{
			echo ("<script LANGUAGE='JavaScript'>
				alert('Your Account Creation has failed. Please Try Again!!')
				window.location.href='Registeration.php';
			</script>");
		}
		else
		{
			$_SESSION['firstname']=$firstName;
			$_SESSION['user_name']=$firstName." ".$lastName;
			$_SESSION['email']=$email;
			$userid=$conn->insert_id;
			$_SESSION['userid']=$userid;
			header("location:Index.php");
		}
	}
}
?>