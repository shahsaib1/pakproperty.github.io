<?php
include('Connection.php');
session_start();
	$adid=$_GET['adid'];
	$userid = $_SESSION['userid'];
	$sql = "DELETE FROM ads WHERE AdId='$adid' AND UserId='$userid'";
	$runQuery = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if (!$runQuery) {
		echo ("<script LANGUAGE='JavaScript'>
					alert('Your Report Failed to submit! Please Try Again!')
					window.location.href='AdDetail.php?id=$adid';
				</script>");
	}
	else
	{
		header("location:". $_SERVER['HTTP_REFERER']."?Delete_Ad=Success");
	}
?>