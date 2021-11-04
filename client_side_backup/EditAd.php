<?php
include('Connection.php');
session_start();
	$adid=$_GET['adid'];
	$userid=$_SESSION['userid'];
	$sql = "SELECT * FROM ads WHERE AdId='$adid' AND UserId='$userid'";
	$runQuery = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$row=mysqli_fetch_assoc($runQuery);
	$title=$row['Title'];
	$adDescription=$row['AdDescription'];
	$price=$row['Price'];
	$phoneNumber=$row['PhoneNumber'];
	$country=$row['Country'];
	$province=$row['Province'];
	$city=$row['City'];
	if (!$runQuery) {
		echo ("<script LANGUAGE='JavaScript'>
					alert('There is some problem in editing the Ad! Please Try Again!')
					window.location.href='Profile.php';
				</script>");
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
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="submitAd">
	<div class="submitAdInner">
		<form action="EditAdPHP.php?adid=<?php echo $adid ?>" method="post" enctype="multipart/form-data">
  		<h4 class="heading" id="submit_an_ad"><strong>Submit An Ad</strong></h4>
  		<div id="title_category">
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Ad Title<span>*</span></label></div>
	  			<div class="col-md-5">
			    	<input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required />
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Category<span>*</span></label></div>
	  			<div class="col-md-5">
			    	<select name="category" class="form-control" required>
			    		<option value="">Select Category</option>
			    		<option value="PropertyForRent">Property For Rent</option>
			    		<option value="PropertyForSale">Property For Sale</option>
			    	</select>
				</div>
				</div>
			</div>
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Price in Rupees<span>*</span></label></div>
	  			<div class="col-md-5">
			    	<input type="text" name="price" class="form-control" placeholder="Price in Rupees" value="<?php echo $price; ?>" required/>
				</div>
				</div>
			</div>
		</div><br>
		<div id="title_category">
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Ad Description<span>*</span></label></div>
	  			<div class="col-md-5">
	  				<textarea name="adDescription" class="form-control" placeholder="Ad Description" rows="4" required><?php echo $adDescription; ?></textarea>
				</div>
				</div>
			</div>
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Upload Photos<span>*</span></label>
				<p style="font-size: 13px">Ads with photos sell fater</p>
	  			</div>
	  			<div class="col-md-6">
	  				<input type="file" name="imageFile" class="form-control" required>
				</div>
				</div>
			</div>
		</div><br>
		<div id="title_category">
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Phone Number<span>*</span></label></div>
	  			<div class="col-md-5">
					<input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" value="<?php echo $phoneNumber ?>" required>
				</div>
				</div>
			</div>
		</div><br>
		<div id="title_category">
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Country<span>*</span></label></div>
	  			<div class="col-md-5">
					<input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo $country; ?>" required>
				</div>
				</div>
			</div>
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Province<span>*</span></label></div>
	  			<div class="col-md-5">
					<input type="text" name="province" class="form-control" placeholder="Province" value="<?php echo $province; ?>" required>
				</div>
				</div>
			</div>
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>City<span>*</span></label></div>
	  			<div class="col-md-5">
					<input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $city; ?>" required>
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
						<button type="submit" class="btn btn-default" name="updateAd">Submit Ad</button>
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
<?php //include('footer.php'); ?>
</body>
</html>
