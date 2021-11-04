<?php
include('Connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('Head.php'); ?>
  <style>
body {
  background-image: url('new_bg2.jpg');
  background-repeat: no-repeat;
   background-attachment: fixed;
  background-size: cover;
   /*background-size: 100% 100%;*/
}
</style>
</head>
<body>
<?php 
  $currentPage = 'Index';
  include('BodyNavSection.php');
 ?> 
<div class="container text-center"> 
<h2 class="heading"><strong style="color:white;">"Do not Think Of Cost, Think Of Value"</strong></h2>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="homebuttons">
  <h4 class="heading"><strong>What are you looking for,</strong></h4>
  <a href="PropertyForRent.php"><button class="btn btn-default">Property For Rent</button></a><br>
  <a href="PropertyForSale.php"><button class="btn btn-default">Property For Sale</button></a><br>
  <a href="SubmitAd.php"><button class="btn btn-default">Submit an Ad</button></a>
</div> 
</div>
<div class="col-md-4"></div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
