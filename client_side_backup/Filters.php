<div class="submitAd" style="padding-bottom: 20px;">
	<form action="FiltersPHP.php" method="post">
	<div id="filters" style="margin-top: -20px;">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label id="filterlabel"><i>Select your location and view local Ads</i></label>
						<input type="text" name="location" class="form-control" placeholder="Enter City">
					</div>
				</div>
				<div class="col-md-4">
						<label id="filterlabel"><i>Browse Categories</i></label>
						<select name="category" class="form-control">
			    		<option value="">Select Category</option>
				    		<option value="PropertyForRent">Property For Rent</option>
				    		<option value="PropertyForSale">Property For Sale</option>
			    		</select>
				</div>
				<div class="col-md-4">
						<label id="filterlabel"><i>Browse Types</i></label>
						<select name="houseType" class="form-control">
							<option value="ApartmentsAndPlats">Apartments And Plats</option>
							<option value="Houses">Houses</option>
							<option value="LandAndPlots">Land And Plots</option>
							<option value="PortionsAndFloors">Portions And Floors</option>
							<option value="Roommates">Roommates</option>
						</select>
				</div>
			</div>
	</div><br>
	<div id="filters" style="background: #ccced1">
			<div class="row">
				<div class="col-md-4">
					<label id="filterlabel"><i>Price Range</i></label>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="pricemin" class="form-control" placeholder="Min-Price">
						</div>
						<div class="col-md-6">
							<input type="text" name="pricemax" class="form-control" placeholder="Max-Price">
						</div>
					</div>
				</div>
				<div class="col-md-4">
						<label id="filterlabel"><i>Bedrooms</i></label>
						<select name="bedrooms" class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>6+</option>
						</select>
				</div>
				<div class="col-md-4">
					<label id="filterlabel"><i>Floors</i></label>
						<select name="floors" class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>6+</option>
						</select>
				</div>
			</div>
	</div>
	<div id="searchDiv">
		<button type="submit" id="btnSearch" class="btn btn-default" name="btnSearch">Search</button>
	</div>
	</form>
</div><br>