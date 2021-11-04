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
		<form action="SubmitAdPHP.php" method="post" enctype="multipart/form-data">
  		<h4 class="heading" id="submit_an_ad"><strong>Submit An Ad</strong></h4>
  		<div id="title_category">
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Ad Title<span>*</span></label></div>
	  			<div class="col-md-5">
			    	<input type="text" name="title" class="form-control" placeholder="Title" required />
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
	  			<div class="col-md-3"><label>House Type<span>*</span></label></div>
	  			<div class="col-md-5">
			    		<select name="houseType" class="form-control">
							<option value="ApartmentsAndPlats">Apartments And Plats</option>
							<option value="Houses">Houses</option>
							<option value="LandAndPlots">Land And Plots</option>
							<option value="PortionsAndFloors">Portions And Floors</option>
							<option value="Roommates">Roommates</option>
						</select>
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>No. of Bedrooms<span>*</span></label></div>
	  			<div class="col-md-5">
	  				<select name="bedrooms" class="form-control">
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
	  			<div class="col-md-3"><label>No. of Floors<span>*</span></label></div>
	  			<div class="col-md-5">
			    		<select name="floors" class="form-control">
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
	  			<div class="col-md-3"><label>Price in Rupees<span>*</span></label></div>
	  			<div class="col-md-5">
			    	<input type="text" name="price" class="form-control" placeholder="Price in Rupees" required />
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
	  				<textarea name="adDescription" class="form-control" placeholder="Ad Description" rows="4" required></textarea>
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
	  				<input type="file" class="form-control" name="files[]" multiple="multiple" required>
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
					<input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" required>
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
					<input type="text" name="country" class="form-control" placeholder="Country" required>
				</div>
				</div>
			</div>
	  		<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>Province<span>*</span></label></div>
	  			<div class="col-md-5">
					<input type="text" name="province" class="form-control" placeholder="Province" required>
				</div>
				</div>
			</div>
			<div class="form-group">
	  			<div class="row">
	  			<div class="col-md-1"></div>
	  			<div class="col-md-3"><label>City<span>*</span></label></div>
	  			<div class="col-md-5">
					<input type="text" name="city" class="form-control" placeholder="City" required>
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
						<button type="submit" class="btn btn-default" name="submitAd">Submit Ad</button>
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
