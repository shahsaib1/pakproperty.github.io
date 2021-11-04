<?php
include('Connection.php');
if (isset($_POST['submitAd'])) {
	include('MultipleImagesUpload.php');
	//include('ImageUpload.php');
	$title=mysqli_real_escape_string($conn, $_POST['title']);
	$category=mysqli_real_escape_string($conn, $_POST['category']);
	$houseType=mysqli_real_escape_string($conn, $_POST['houseType']);
	$bedrooms=mysqli_real_escape_string($conn, $_POST['bedrooms']);
	$floors=mysqli_real_escape_string($conn, $_POST['floors']);
	$price=mysqli_real_escape_string($conn, $_POST['price']);
	$adDescription=mysqli_real_escape_string($conn, $_POST['adDescription']);
	$phoneNumber=mysqli_real_escape_string($conn, $_POST['phoneNumber']);
	$country=mysqli_real_escape_string($conn, $_POST['country']);
	$province=mysqli_real_escape_string($conn, $_POST['province']);
	$city=mysqli_real_escape_string($conn, $_POST['city']);
	$userid = $_COOKIE['userid'];
	$query="INSERT INTO ads (UserId, Title, Category, HouseType, Bedrooms, Floors, Price, AdDescription, ImagePath, PhoneNumber, Country, Province, City) VALUES ('$userid','$title', '$category', '$houseType', '$bedrooms', '$floors', '$price', '$adDescription', '$fileDestination', '$phoneNumber', '$country', '$province', '$city')";
		$runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
		if(!$runQuery)
		{
			echo ("<script LANGUAGE='JavaScript'>
				alert('Ad Submission Failed. Please Try Again!!')
				window.location.href='SubmitAd.php';
			</script>");
		}
		else
		{
			header("Location:AdSuccessMsg.php");
		}
}
?>