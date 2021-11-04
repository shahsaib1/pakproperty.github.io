<?php
include('Connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('Head.php'); ?>
</head>
<body style="background: seagreen;">
<?php 
  $currentPage = 'Index';
  include('BodyNavSection.php');
 ?> 
<div class="container text-center"> 
<div class="col-md-4"></div>
<div class="col-md-4" style="margin-top: 70px;">
	<h2 class="heading" style="color:wheat;"><strong><i>Your Ad Submitted Successfully!<br>Thank You For Submitting Ad</i></strong></h2>
	<br>
	<button type="button" class="btn btn-primary" style="background:lightskyblue;"><a href="Index.php" style="color: black;">Go Back To Homepage</a></button>
</div>
<div class="col-md-4"></div>
  
</div>
<?php //include('footer.php'); ?>
</body>
</html>
