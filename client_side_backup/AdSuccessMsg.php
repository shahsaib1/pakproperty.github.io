<?php
include('Connection.php');
session_start();
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
	<h2 class="heading" style="color: #1db734"><strong>Your Ad Submitted Successfully</strong></h2>
	<br>
	<button type="button" class="btn btn-primary"><a href="Index.php" style="color: white">Go Back To Homepage!</a></button>
</div>
<div class="col-md-4"></div>
  
</div>
<?php //include('footer.php'); ?>
</body>
</html>
