<?php
include('Connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('Head.php'); ?>
</head>
<body style="background:seagreen;">
<?php 
  $currentPage = 'Index';
  include('BodyNavSection.php');
 ?> 
<div class="container text-center" style="background: #e6e8fa;width: 50%; height: 100%;"> 
<!-- <div class="col"></div> -->
<div class="col">
<div class="submitAd" style="background:#e6e8fa;">
	<div class="submitAdInner" style="background: #e6e8fa;">
		<form action="SubmitAdPHP.php" method="post" enctype="multipart/form-data">
  		<h4 class="heading" style="color:black;"><strong>Submit Ads</strong></h4><br><br>
  		<!-- <div id="title_category"> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3" style="color:black;"><label>Ad Title<span>*</span></label></div>
	  			<div class="col-md-6">
			    	<input type="text" name="title" class="form-control" placeholder="Enter Ad Title" required style="background: lemonchiffon;width: 310px;"text-align: center; />
				</div>
				</div><br>
			<!-- </div> -->
			<div class="form-group">
				<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black"><label>Category<span>*</span></label></div>
	  			<div class="col-md-6">
			    	<select name="category" class="form-control" required style="background: lemonchiffon;width: 310px;">
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
	  			<div class="col-md-3" style="color:black;"><label>House Type<span>*</span></label></div>
	  			<div class="col-md-6">
			    		<select name="houseType" class="form-control" style="background: lemonchiffon;width: 310px;">
							<option value="ApartmentsAndPlats">Apartments And Flats</option>
							<option value="Houses">Houses</option>
							<option value="LandAndPlots">Land And Plots</option>
							<option value="PortionsAndFloors">Portions And Floors</option>
							
						</select>
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3" style="color:black;"><label>No of Bedrooms<span>*</span></label></div>
	  			<div class="col-md-6">
	  				<select name="bedrooms" class="form-control" style="background: lemonchiffon;width: 310px;">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="6+">6+</option>
						</select>
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black"><label>No of Floors<span>*</span></label></div>
	  			<div class="col-md-6">
			    		<select name="floors" class="form-control" style="background: lemonchiffon;width: 310px;">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="6+">6+</option>
						</select>
				</div>
				</div>
			</div>
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black;"><label>Price In Rupees<span>*</span></label></div>
	  			<div class="col-md-6">
			    	<input type="number" name="price" class="form-control" placeholder="Enter Price in Rupees" required style="background:lemonchiffon;width: 310px;text-align: center;"/>
				</div>
				</div>
			</div>
		</div>
		<!-- <div id="title_category"> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black;"><label>Ad Description<span>*</span></label></div>
	  			<div class="col-md-6">
	  				<textarea name="adDescription" class="form-control" placeholder="Enter Ad Description" rows="4" required style="background: lemonchiffon;width: 310px;text-align: center;"></textarea>
				</div>
				</div><br>
		<!-- 	</div> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color: black;"><label>Upload Photos<span>*</span></label>
				<p style="font-size: 13px">Ads with Photos Sell Faster</p>
	  			</div>
	  			<div class="col-md-6">
	  				<input type="file" class="form-control" name="files[]" multiple="multiple" required style="background: lemonchiffon;width: 310px;text-align: center;">
				</div>
				</div>
			</div>
		</div>
	<!-- 	<div id="title_category"> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black;"><label>Contact Number<span>*</span></label></div>
	  			<div class="col-md-6">
					<input type="number" name="phoneNumber" class="form-control" placeholder="Enter Contact Number" required style="background: lemonchiffon;width: 310px;text-align: center;">
				</div>
				</div>
			</div>
		<!-- </div -->
		<!-- <div id="title_category"> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black;"><label>Country Name<span>*</span></label></div>
	  			<div class="col-md-6">
					<input type="text" name="country" class="form-control" placeholder="Enter Country Name" required style="background: lemonchiffon;width: 310px;text-align: center;">
				</div>
				</div><br>
			<!-- </div> -->
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black;"><label>Province Name<span>*</span></label></div>
	  			<div class="col-md-6">
					<input type="text" name="province" class="form-control" placeholder="Enter Province Name" required style="background: lemonchiffon;width: 310px;text-align: center;">
				</div>
				</div>
			</div>
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"style="color:black;"><label>Location Name<span>*</span></label></div>
	  			<div class="col-md-6">
					<input type="text" name="city" class="form-control" placeholder="Enter Location Name" required style="background: lemonchiffon;width: 310px;text-align: center;">
				</div>
				</div>
			</div>
		</div>
		<!-- <div id="title_category"> -->
			<div class="adButton">
		  		<div class="form-group">
		  			<div class="row">
		  			<div class="col-md-1"></div>
		  			<div class="col-md-3"></div>
		  			<div class="col-md-5">
						<button type="submit" class="btn btn-default" name="submitAd" style="background: lightskyblue;color: black;">Submit</button>
					</div>
					</div>
				</div>
			</div><br>
		<!-- </div> -->
	</div>
</div> 
</div>
<div class="col-md-2"></div>
  
</div>
<?php include('footer.php'); ?>
</body>
</html>
