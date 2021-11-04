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
<h2 class="heading"><strong>"Do not Think Of Cost, Think Of Value"</strong></h2>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="homebuttons" style="background-color: #b2ffff">
  <h4 class="heading"><strong>What are you looking for,</strong></h4>
  <a href="PropertyForRent.php"><button class="btn btn-default" style="background-color: #ec3b83">Property For Rent</button></a><br>
  <a href="PropertyForSale.php"><button class="btn btn-default" style="background-color: #ec3b83">Property For Sale</button></a><br>
  <a href="SubmitAd.php"><button class="btn btn-default" style="background-color: #ec3b83">Submit an Ad</button></a>
</div> 
</div>
<div class="col-md-4"></div>
</div>
<br><br><br><br>

<div class="container-fluid busy">
  		<div class="row">
  	<div class="col-md-4">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="uploads/60fe609ed0ffb5.55854087.jpg" alt="Los Angeles" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="uploads/4.jpg" alt="Chicago" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="uploads/2.jpg" alt="New york" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="uploads/610cfb0be7f3d7.18131616.jpg" alt="New york" style="width:100%; height: 550px">
      </div>
      <div class="item">
        <img src="uploads/60fe609ed0ffb5.55854087.jpg" alt="New york" style="width:100%; height: 550px;">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
          </div>
       </div>

<div class="col-md-4"><br><br><br>
		 <button class="btn btn-block btn-primary " data-toggle="collapse" data-target="#jan">HOUSES <span class="glyphicon glyphicon-arrow-right"></span></button>
	
		 <br><br><br>

		 <button class="btn btn-block btn-danger" data-toggle="collapse" data-target="#haris">LANDS AND PLOTS<span class="glyphicon glyphicon-arrow-right"></span></button>
		 
		 <br><br><br>
		 <button class="btn btn-block btn-primary " data-toggle="collapse" data-target="#saqib">APARTMENT AND PLATS<span class="glyphicon glyphicon-arrow-right"></span></button>
		 

		 <br><br><br>

		 <button class="btn btn-block btn-info" data-toggle="collapse" data-target="#anam">PORTION AND FLOORS <span class="glyphicon glyphicon-arrow-right"></span></button>
		 

		 <br><br><br>
		 <button class="btn btn-block btn-success" data-toggle="collapse" data-target="#hiii">ROOMATES <span class="glyphicon glyphicon-arrow-right"></span></button>
		

		 <br><br><br>
            </div>


  	<div class="col-md-4">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="uploads/pexels-photo-106399.jpeg" alt="Los Angeles" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="uploads/21368595449_5d1d5e60bc_n.jpg" alt="Chicago" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="uploads/37682935944_342e9f1d99_n.jpg" alt="New york" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="uploads/pexels-photo-106399.jpeg" alt="New york" style="width:100%; height: 550px">
      </div>
      <div class="item">
        <img src="uploads/37682935944_342e9f1d99_n.jpg" alt="New york" style="width:100%; height: 550px;">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
          </div>
       </div>

		
	</div>
	</div>
	<div class="row text-center bg-info">
		<ul class="pagination ">
   	 	<li><a href="#">1</a></li>
   	 	<li><a href="#">2</a></li>
   	 	<li><a href="#">3</a></li>
   	 	<li><a href="#">4</a></li>
   	 	<li><a href="#">5</a></li>
   	 	<li><a href="#">6</a></li>
   	 	<li><a href="#">7</a></li>
   	 	<li><a href="#">8</a></li>
   	 </ul>

	</div>

	
	<div class="container-fluid" style="background-color: white">
		<div class="row">
			<h2>Pakproperty Description</h2>
			<p>Property Dealers, Residential  Sale / Purchase, Investment Advisor, Sale Purchase  of Plots, Real Estate Agents, Rental Services, Sale & Purchase of Houses & Plots, Shops for Rent, Land Sale - Purchase.Curious about your property's selling Instantly . we capture everything that is important for your property and present it to buyers in a clear way thats find the buyers much easier.Hurry to get rental, we can match you with a house you will want to call home. Get face-to-face with people every day to help us finding your dream home. Get Partner with growing company, making you feel comfortable and safe.Browse properties for sale alongside properties that aren’t. Save key searches, get alerted when specific properties that makes finding your next property to purchase simpler.
</p>
		</div>
<div class="row text-center bg-info">
		<ul class="pagination ">
   	 	<li><a href="#">1</a></li>
   	 	<li><a href="#">2</a></li>
   	 	<li><a href="#">3</a></li>
   	 	<li><a href="#">4</a></li>
   	 	<li><a href="#">5</a></li>
   	 	<li><a href="#">6</a></li>
   	 	<li><a href="#">7</a></li>
   	 	<li><a href="#">8</a></li>
   	 </ul>

	</div>
<?php include('footer.php'); ?>
</body>
</html>
