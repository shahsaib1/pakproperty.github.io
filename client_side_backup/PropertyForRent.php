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
  if (isset($_SESSION['adminusername'])) {
  	?> <a href="admin/index.php"><button type="button" class="btn btn-primary" style="margin-top: 30px; margin-left: 43%; margin-bottom: 30px;">Back To Admin Panel</button></a> <?php
  }
  else
  {
  	include('BodyNavSection.php');
  }
 ?> 
<div class="container text-center"> 
<div class="col-md-1"></div>
<div class="col-md-10">
<?php include('Filters.php'); ?>
<div class="submitAd">
	<div id="ads">
		<?php 
			$sql = "SELECT * FROM ads WHERE Category = 'PropertyForRent' ORDER BY AdId DESC";
			$runQuery = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($runQuery)) { ?>
		<div class="row">
			<div class="col-md-4">
				<?php echo "<img src='".$row['ImagePath']."' class='img-responsive'/>"; ?>
			</div>
			<div class="col-md-4">
				<h4><strong><?php echo $row['Title']?></strong></h4>
				<p>
					<?php echo $row['AdDescription']?>
				</p>
			</div>
			<div class="col-md-4">
				<h3 style="color: #ff7700; text-align: center;"><strong>RS<?php echo " ".$row['Price']?></strong></h3>
				<div class="adButton">
					<button type="button" class="btn btn-default" name="adDetail" id="adDetail"><a href="AdDetail.php?adid=<?php echo $row['AdId']?>">View Details</a></button>
					<?php
						if (isset($_SESSION['adminusername'])) {
							?>
								<button type="button" class="btn btn-default" id="adDetail">
								<a href="DeleteAd.php?adid=<?php echo $row['AdId']?>">Delete This Ad</a>
								</button>
							<?php
						}
					?>
				</div>
			</div>
		</div>
		<hr id="hr">
		<?php } ?>
	</div>
</div> 
</div>
<div class="col-md-1"></div>
  
</div>
<?php include('footer.php'); ?>
</body>
</html>
