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
	<h3 class="heading" style="color: wheat;"><strong><i>Your Message Has Been Successfully Send<br>Administration Team Will Contact You Soon</i></strong></h3>
	<br>
	<button type="button" class="btn btn-primary" style="background: lightskyblue;color: wheat;"><a href="Index.php"style="color: black;">Go Back To Homepage</a></button>
</div>
<div class="col-md-4"></div>
  
</div>
<?php //include('footer.php'); ?>
</body>
</html>
