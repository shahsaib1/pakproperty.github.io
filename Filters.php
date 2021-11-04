<div class="submitAd" style="background:mediumseagreen;" style="padding-bottom: 20px;">
	<form action="" method="post">
	<div  style="margin-top: -20px;"><br>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label id="filterlabel">Select Your Location</label>
						<input type="text" name="location" class="form-control" placeholder="Enter Location" style="background: lightyellow;">
					</div>
				</div>
				<div class="col-md-4">
						<label id="filterlabel">Categories</label>
						<select name="category" class="form-control">
			    		<option value="">Select Category</option>
				    		<option value="PropertyForRent">Property For Rent</option>
				    		<option value="PropertyForSale">Property For Sale</option>
			    		</select>
				</div>
				<div class="col-md-4">
						<label id="filterlabel">Types</label>
						<select name="houseType" class="form-control">
							<option value="ApartmentsAndPlats">Apartments And flats</option>
							<option value="Houses">Houses</option>
							<option value="LandAndPlots">Land And Plots</option>
							<option value="PortionsAndFloors">Portions And Floors</option>
						</select>
				</div>
			</div>
	</div><br>
	<div  style="background:mediumseagreen;">
			<div class="row">
				<div class="col-md-4">
					<label id="filterlabel">Select Price Range</label>
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
						<label id="filterlabel">No of Bedrooms</label>
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
					<label id="filterlabel">No of Floors</label>
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
	</div><br>

	<div><br>
		<center><button type="submit" class="btn btn-default" style="width: 160px;background:lightskyblue; color: black;" name="btnSearch" >Search</button></center>
	</div>
	</form>
</div><br><br>

<?php 
include('Connection.php');
if(isset($_POST['btnSearch'])){
$location= $_POST['location'];
$category= $_POST['category'];
$houseType= $_POST['houseType'];
$pricemin=$_POST['pricemin'];
$pricemax= $_POST['pricemax'];
$bedrooms=$_POST['bedrooms'];
$floors= $_POST['floors'];

$sql = "SELECT * FROM ads WHERE City='$location' AND Category='$category' AND HouseType='$houseType' AND Bedrooms='$bedrooms' AND Floors='$floors'";
			$runQuery = mysqli_query($conn, $sql);

 
			  
				while (@$row = mysqli_fetch_array($runQuery)) { ?>

			<tr style="border:3px solid black">
                 <td><img src="<?php echo $row['ImagePath'];?>" alt=""></td>
				<td><?php echo $row['Title'];?></td>
				<td><?php echo $row['City'];?></td>
				<td><?php echo $row['Bedrooms'];?></td>
				<td><?php echo $row['Floors'];?></td>
				<td><?php echo $row['Price'];?></td>
				 


			</tr>
			<a href="buyer_signup.php"><button class="btn btn-primary">Buy</button></a>

			<?php } } ?>
			 
			
		
