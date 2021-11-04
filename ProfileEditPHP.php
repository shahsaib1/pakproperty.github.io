<?php
include('connection.php');
session_start();
$id = $_COOKIE['userid'];
if(isset($_POST['updateProfile'])) {
	$firstName=mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn, $_POST['lastName']);
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$confirmPassword=mysqli_real_escape_string($conn, $_POST['confirmPassword']);
	if ($password!=$confirmPassword) {
		echo ("<script LANGUAGE='JavaScript'>
				alert('Password do not match!')
				window.location.href='ProfileEdit.php';
			</script>");
	}
	else
	{
		$updatequery="UPDATE users SET FirstName='$firstName', LastName='$lastName', Username='$username', Email='$email', Password='$password' WHERE UserId ='$id'";
		$runQuery=mysqli_query($conn, $updatequery) or die(mysqli_error($conn));
		if(!$runQuery)
		{
			echo ("<script LANGUAGE='JavaScript'>
				alert('Profile Updation failed!!')
				window.location.href='Profile.php';
			</script>");
		}
		else
		{
			header("Location:Profile.php?Update_Profile=Success");
		}
	}
	
}
elseif (isset($_POST['profileImageSubmit'])) {
	include('ImageUpload.php');
	$updatequery="UPDATE users SET ImagePath='$fileDestination' WHERE UserId ='$id'";
			$result=mysqli_query($conn,$updatequery);
			if (!$result) {
				echo ("<script LANGUAGE='JavaScript'>
				alert('Profile Picture updation failed!')
				window.location.href='ProfileEdit.php';
			</script>");
			}
			else
			{
				header("Location: Profile.php?Update_Profile_Image=Success");
			}
}
?>