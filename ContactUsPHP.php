<?php
include('Connection.php');
session_start();
if (isset($_POST['btnContact'])) {
	$senderName=mysqli_real_escape_string($conn, $_POST['senderName']);
	$senderEmail=mysqli_real_escape_string($conn, $_POST['senderEmail']);
	$subject=mysqli_real_escape_string($conn, $_POST['subject']);
	$message=mysqli_real_escape_string($conn, $_POST['message']);
	$userid = $_SESSION['userid'];
	$query="INSERT INTO messages (UserId, Name, Email, Subject, Message) VALUES ('$userid','$senderName', '$senderEmail', '$subject', '$message')";
		$runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
		if(!$runQuery)
		{
			echo ("<script LANGUAGE='JavaScript'>
				alert('Message Sending Failed. Please Try Again!!')
				window.location.href='ContactUs.php?Message=Failed';
			</script>");
		}
		else
		{
			header("Location:MsgSending.php?Message=Successful");
		}
}
?>