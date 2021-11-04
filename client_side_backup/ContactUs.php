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
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="submitAd">
	<div class="submitAdInner">
		<form action="ContactUsPHP.php" method="post">
  		<h4 class="heading" id="submit_an_ad"><strong>Contact Us</strong></h4>
  		<div id="title_category">
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Your Name<span>*</span></label></div>
	  			<div class="col-md-7">
			    	<input type="text" name="senderName" class="form-control" placeholder="Name" required />
				</div>
				</div>
			</div>
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Email<span>*</span></label></div>
	  			<div class="col-md-7">
			    	<input type="email" name="senderEmail" class="form-control" placeholder="Email" required />
				</div>
				</div>
			</div>
		</div><br>
		<div id="title_category">
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Subject<span>*</span></label></div>
	  			<div class="col-md-7">
			    	<input type="text" name="subject" class="form-control" placeholder="Subject" required />
				</div>
				</div>
			</div>
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Message<span>*</span></label></div>
	  			<div class="col-md-7">
	  				<textarea name="message" class="form-control" placeholder="Message Body" rows="4" required></textarea>
				</div>
				</div>
			</div>
		</div><br>
		<div id="title_category">
			<div class="adButton">
		  		<div class="form-group">
		  			<div class="row">
		  			<div class="col-md-1"></div>
		  			<div class="col-md-3"></div>
		  			<div class="col-md-5">
						<button type="submit" class="btn btn-default" name="btnContact">Send Message</button>
					</div>
					</div>
				</div>
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
