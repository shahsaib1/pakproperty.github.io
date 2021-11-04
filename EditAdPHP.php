<?php
include('Connection.php');
session_start();
if (isset($_POST['updateAd'])) {
	include('ImageUpload.php');
	$adid=$_GET['adid'];
	$userid = $_SESSION['userid'];
	$title=mysqli_real_escape_string($conn, $_POST['title']);
	$category=mysqli_real_escape_string($conn, $_POST['category']);
	$price=mysqli_real_escape_string($conn, $_POST['price']);
	$adDescription=mysqli_real_escape_string($conn, $_POST['adDescription']);
	$phoneNumber=mysqli_real_escape_string($conn, $_POST['phoneNumber']);
	$country=mysqli_real_escape_string($conn, $_POST['country']);
	$province=mysqli_real_escape_string($conn, $_POST['province']);
	$city=mysqli_real_escape_string($conn, $_POST['city']);
	$query="UPDATE ads SET Title='$title', Category='$category', Price='$price', AdDescription='$adDescription', ImagePath='$fileDestination', PhoneNumber='$phoneNumber', Country='$country', Province='$province', City='$city' WHERE AdId='$adid' AND UserId='$userid'";
		$runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
		if(!$runQuery)
		{
			echo ("<script LANGUAGE='JavaScript'>
				alert('Ad Updation Failed. Please Try Again!!')
				window.location.href='Profile.php?Edit_Ad=Failed';
			</script>");
		}
		else
		{
			header("Location:Profile.php?Edit_Ad=Successful");
		}
}
?>