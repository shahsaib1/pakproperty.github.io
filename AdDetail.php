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
<div class="container text-center" style="background: mediumseagreen; height: 500px;"> 
<div class="row"></div>
<div class="col-md-10">
<div class="submitAd" style="background:mediumseagreen;">
	<div class="row">
		<div class="col-md-8">
			<h3 class="titleofad" style="color:wheat;"><strong><?php echo $row['Title']; ?></strong></h3>
			<h4 class="titleofad" style="color:wheat">02-06-2021,   <?php echo " ".$row['City'].", ".$row['Province'].", ".$row['Country']; ?></h5>
			<!-- Slider Code -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <!-- <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol> -->

		    <!-- Wrapper for slides -->
		    <!-- <div class="col-md-4"></div> -->
		    <div class="carousel-inner">
		      <div class="item active">
		        <?php echo "<img id='image2' src='".$row['ImagePath']."' class='img-responsive'/>"; ?>
		      </div>

		      <div class="item"style="background: lightskyblue;">
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
			<!-- <h4 class="titleofad"><strong>Ad Description</strong></h4> -->
			<!-- <p>
			 <?php echo $row['AdDescription']; ?>
			</p> -->
		</div>
		<div class="col-md-4">
			<h3 id="adPrice" style="background:mediumseagreen;"><strong>Rs <?php echo " ".$row['Price']; ?></strong></h3>
			<div class="userdetail">
				<h3 style="color:wheat;"><strong>Posted By:</strong></h3>
				<h4><strong><?php echo $username; ?></strong></h4>
				<h4 style="color:wheat;"><strong>Phone Number: <?php echo $row['PhoneNumber']; ?></strong></h4>
				<!-- <h4 style="color:wheat;"><strong><?php echo $row['PhoneNumber']; ?></strong></h4> -->
			</div>
			<h4 class="heading"style="color:wheat;"><strong>Safety Tips For Buyers</strong></h4>
			<h5 class="titleofad"style="color:wheat;">1. Meet seller at a safe location</h5>
			<h5 class="titleofad"style="color:wheat;">2. Check the item before you buy</h5>
			<h5 class="titleofad"style="color:wheat;">3. Pay only after collecting item</h5>
			<a href="#" style="text-align: center;color:black;">Know more</a>
			 <?php if (isset($_SESSION['userid'])) { ?>  
			<div>
				<a href="#ReportAd"><button type="button" class="btn btn-danger" onclick="reportAd()">Report This Ad</button></a>
			</div>
		<?php }else { ?>
			
		<?php } ?>	
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
