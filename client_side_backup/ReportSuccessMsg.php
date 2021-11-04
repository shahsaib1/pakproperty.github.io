<?php
include('Connection.php');
session_start();
if (isset($_POST['reportSubmit'])) {
	$adid=$_GET['adid'];
	$userid = $_SESSION['userid'];
	$reportText=mysqli_real_escape_string($conn, $_POST['reportText']);
	$sql = "INSERT INTO reports (UserId, AdId, ReportText) VALUES ('$userid', '$adid', '$reportText')";
	$runQuery = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if (!$runQuery) {
		echo ("<script LANGUAGE='JavaScript'>
					alert('Your Report Failed to submit! Please Try Again!')
					window.location.href='AdDetail.php?id=$adid';
				</script>");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('Head.php'); ?>
</head>
<body>
<?php 
  $currentPage = 'Index';
  include('BodyNavSection.php');
 ?> 
<div class="container text-center"> 
<div class="col-md-4"></div>
<div class="col-md-4" style="margin-top: 70px;">
	<h2 class="heading" style="color: #1db734"><strong>Your Report has been Submitted Successfully</strong></h2>
	<br>
	<button type="button" class="btn btn-primary"><a href="Index.php" style="color: white">Go Back To Homepage!</a></button>
</div>
<div class="col-md-4"></div>
  
</div>
<?php //include('footer.php'); ?>
</body>
</html>
