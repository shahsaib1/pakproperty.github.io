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
  $id = $_GET['adid'];
  $sql = "SELECT * FROM ads WHERE AdId = '$id'";
  $runQuery = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($runQuery);
  $userid = $row['UserId'];
  $sql2 = "SELECT * FROM users WHERE UserId = '$userid'";
  $runQuery2 = mysqli_query($conn, $sql2);
  $user = mysqli_fetch_assoc($runQuery2);
  $username = $user['FirstName']." ".$user['LastName'];
 ?>
<div class="container text-center"> 
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="submitAd">
	<div class="row">
		<div class="col-md-8">
			<h4 class="titleofad"><strong><?php echo $row['Title']; ?></strong></h4>
			<h5 class="titleofad">23-5-2018,   <?php echo " ".$row['City'].", ".$row['Province'].", ".$row['Country']; ?></h5>
			<!-- Slider Code -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		        <?php echo "<img id='image2' src='".$row['ImagePath']."' class='img-responsive'/>"; ?>
		      </div>

		      <div class="item">
		        <?php echo "<img id='image2' src='".$row['ImagePath']."' class='img-responsive'/>"; ?>
		      </div>
		      <div class="item">
		        <?php echo "<img id='image2' src='".$row['ImagePath']."' class='img-responsive'/>"; ?>
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
			<!-- Slider Code -->
			<h5 class="titleofad"><strong>Ad Description</strong></h5>
			<p>
				<?php echo $row['AdDescription']; ?>
			</p>
		</div>
		<div class="col-md-4">
			<h3 id="adPrice"><strong>Rs <?php echo " ".$row['Price']; ?></strong></h3>
			<hr id="hr">
			<div class="userdetail">
				<h3><strong>Posted By:</strong></h3>
				<h4><strong><?php echo $username; ?></strong></h4>
				<h4>Phone Number:</h4>
				<h4><strong><?php echo $row['PhoneNumber']; ?></strong></h4>
			</div>
			<hr id="hr">
			<h4 class="heading"><strong>Safety Tips for Buyers,</strong></h4>
			<h5 class="titleofad">1. Meet seller at a safe location</h5>
			<h5 class="titleofad">2. Check the item before you buy</h5>
			<h5 class="titleofad">3. Pay only after collecting item</h5>
			<a href="#" style="text-align: center;">Know more</a>
			<hr id="hr">
			<div>
				<a href="#ReportAd"><button type="button" class="btn btn-danger" onclick="reportAd()">Report This Ad</button></a>
			</div>
			<hr id="hr">
		</div>
						<div id="ReportAd" style="display: none; width: 60%; margin-left: 20%;">
                          <form action="ReportSuccessMsg.php?adid=<?php echo $id; ?>" method="post">
                            <div class="form-group" style="margin-top: 20px;">
								<textarea name="reportText" class="form-control" placeholder="Write Report Here..." rows="4"></textarea>
                             </div>
                             <div class="secondButton form-group">
                                 <button type="submit" name="reportSubmit" class="btn btn-md btn-danger">Submit Report</button>
                             </div>
                          </form>
                        </div>
	</div>
</div> 
</div>
<div class="col-md-1"></div>
  
</div>
<script type="text/javascript">
  function reportAd()
  {
    var x = document.getElementById("ReportAd");
    if (x.style.display === "none") {
      x.style.display = "block";
    }
    else
    {
      x.style.display = "none;"
    }
  }
</script>
<?php //include('footer.php'); ?>
</body>
</html>
