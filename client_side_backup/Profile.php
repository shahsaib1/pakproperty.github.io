<?php
include('Connection.php');
session_start();
if (!isset($_SESSION['userid']))
	 {
		echo "Sorry brother invalid login";
		exit();
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
  $userid = $_COOKIE['userid'];
  $sql = "SELECT * FROM users WHERE UserId = '$userid'";
  $runQuery = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($runQuery);
  $username = $row['FirstName']." ".$row['LastName'];
 ?> 
<div class="container text-center"> 
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="submitAd">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<div class="profile">
				<?php echo "<img id='profileimage' src='".$row['ImagePath']."' class='img-responsive'/>"; ?>
				<div class="img-overlay">
                   <button id="btn" class="btn btn-md btn-success" onclick="editFunction()"><strong>Edit Picture</strong></button>
                </div>
			</div>
		</div>
		<div class="col-md-6">
			<h3><strong><?php echo $username; ?></strong></h3>
			<div class="row">
				<div class="col-md-4">
					<h4 class="titleofad"><strong>Username:</strong></h4>
					<h4 class="titleofad"><strong>Email:</strong></h4>
				</div>
				<div class="col-md-8">
					<h4 class="titleofad"><?php echo $row['Username']; ?></h4>
					<h4 class="titleofad"><?php echo $row['Email']; ?></h4>
				</div>
			</div>
			<hr id="hr">
			<div class="bottom">
				<a class="btn btn-primary  " href="https://twitter.com/ihtisham467">
                        <i class="fa fa-facebook-official" style="font-size:36px; color: #4267B2"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://facebook.com/ihtisham467">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/ihtisham467">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/ihtisham467">
                        <i class="fa fa-behance"></i>
                    </a>
			</div>
		</div>
		<div class="col-md-1"></div>
		<div class="row">
			<div class="col-md-5">
				<div id="profileEditButton" style="display: none; width: 80%; margin-left: 20%;">
                          <form action="ProfileEditPHP.php" method="post" enctype="multipart/form-data">
                            <div class="form-group" style="margin-top: 20px;">
                               <input type="file" name="imageFile" class="form-control"><br>
                             </div>
                             <div class="secondButton form-group">
                                 <button type="submit" name="profileImageSubmit" class="btn btn-md btn-success">Update Picture</button>
                             </div>
                          </form>
                        </div>
			</div>
			<div class="col-md-7">
				<a href="ProfileEdit.php"><button class="btn btn-md btn-success"><strong>Edit Profile</strong></button></a>
			</div>
		</div>
	</div>
	<hr id="hr">
	<h3 class="heading" style="text-align: center;"><strong>My Posts</strong></h3>
	<hr id="hr">
	<div id="ads">
			<?php 
			$sql = "SELECT * FROM ads WHERE UserId = '$userid' ORDER BY AdId DESC";
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
			<div class="col-md-2">
				<h3 style="color: #ff7700; text-align: center;"><strong>Rs <?php echo " ".$row['Price']?></strong></h3>
				<div class="adButton">
					<button type="button" class="btn btn-default" name="adDetail" id="adDetail"><a href="AdDetail.php?adid=<?php echo$row['AdId'] ?>">View Details</a></button>
				</div>
			</div>
			<div class="col-md-2 editdeletebuttons">
				<a href="EditAd.php?adid=<?php echo $row['AdId']; ?>"><button type="button" class="btn btn-primary">Edit Ad</button></a>
				<a href="DeleteAd.php?adid=<?php echo $row['AdId']; ?>"><button type="button" class="btn btn-primary">Delete Ad</button></a>
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
<script type="text/javascript">
  function editFunction()
  {
    var x = document.getElementById("profileEditButton");
    if (x.style.display === "none") {
      x.style.display = "block";
    }
    else
    {
      x.style.display = "none";
    }
    var y = document.getElementById("btn");
    y.style.display = "none";
  }
</script>
</body>
</html>
