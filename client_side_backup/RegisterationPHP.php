<?php
session_start();
require('Connection.php');
if (isset($_POST['login'])) {
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$query="SELECT * FROM users WHERE Email='$email' AND Password='$password'";
	$runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count=mysqli_num_rows($runQuery);
	if ($count>0) {
		$user=mysqli_fetch_assoc($runQuery);
		$_SESSION['username']=$user['FirstName']." ".$user['LastName'];
		$_SESSION['userid']=$user['UserId'];
		echo ("<script LANGUAGE='JavaScript'>
				alert('You Are Successfuly Logged In')
				window.location.href='Index.php';
			</script>");
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
				alert('Login Failed!')
				window.location.href='Registeration.php';
			</script>");
	}
}
elseif (isset($_POST['register'])) {
	$firstName=mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn, $_POST['lastName']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$country=mysqli_real_escape_string($conn, $_POST['country']);
	$city=mysqli_real_escape_string($conn, $_POST['city']);
	$cnic=mysqli_real_escape_string($conn, $_POST['cnic']);
	$phoneNumber=mysqli_real_escape_string($conn, $_POST['phoneNumber']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$confirmPassword=mysqli_real_escape_string($conn, $_POST['confirmPassword']);
	$fileDestination = 'images/DefaultImage.png';
	if ($password!=$confirmPassword) {
		echo ("<script LANGUAGE='JavaScript'>
				alert('Password do not match!')
				window.location.href='Registeration.php';
			</script>");
	}
	else
	{
		$query="INSERT INTO users (FirstName, LastName, Email, Country, City, CNIC, PhoneNumber, Password, ImagePath) VALUES ('$firstName', '$lastName', '$email', '$country', '$city', '$cnic', '$phoneNumber', '$password', '$fileDestination')";
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
			$_SESSION['username']=$firstName." ".$lastName;
			$userid=$conn->insert_id;
			$_SESSION['userid']=$userid;
			echo ("<script LANGUAGE='JavaScript'>
				alert('Your Account Has Been Successfuly Created')
				window.location.href='Index.php';
			</script>");
		}
	}
}
?>