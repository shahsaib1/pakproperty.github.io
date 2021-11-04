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
<div class="container text-center" style="background: mediumseagreen;width: 40%; height: 100%;"> 
<div class="col"></div>
<div class="col">
<div class="submitAd" style="background: #e6e8fa;">
	<div class="submitAdInner">
		<form action="ContactUsPHP.php" method="post" >
  		<h4 class="heading"  style="color: Black;"><strong>Contact Us</strong></h4><br>

  		<!-- <div id="title_category"> -->
	  		<div class="form-group">
	  			<div class="row">
					<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Your Name<span>*</span></label></div>
	  			<div class="col-md-7">
			    	<input type="text" name="senderName" class="form-control" placeholder="Enter Your Name" required style="background:lemonchiffon;" />
				</div>
				</div><br>
			<!-- </div> -->
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Email<span>*</span></label></div>
	  			<div class="col-md-7">
			    	<input type="email" name="senderEmail" class="form-control"placeholder="Enter Email Address" required style="background:lemonchiffon;"/>
				</div>
				</div>
			</div>
		</div>
		<!-- <div id="title_category"> -->
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Subject<span>*</span></label></div>
	  			<div class="col-md-7">
			    	<input type="text" name="subject" class="form-control" placeholder="Enter Subject" required style="background:lemonchiffon;"/>
				</div>
				</div><br>
		<!-- 	</div> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Message<span>*</span></label></div>
	  			<div class="col-md-7">
	  				<textarea name="message" class="form-control" placeholder="Enter Your Message" rows="4" required style="background:lemonchiffon;"></textarea>
				</div>
				</div>
			</div>
		</div><br>
		<!-- <div id="title_category"> -->
			<div class="adButton">
		  		<div class="form-group">
		  			<div class="row">
		  			<div class="col-md-1"></div>
		  			<div class="col-md-3"></div>
		  			<div class="col-md-5">
						<button type="submit" class="btn btn-default" name="btnContact" style="background:lightskyblue;color: black;width: 150px;">Send</button>
					</div>
					</div>
				<!-- </div> -->
			</div>
		</div><br>
	</div>
</div> 
</div>
<div class="col-md-2"></div>
  
</div>
<?php include('footer.php'); ?>
</body>
</html>
