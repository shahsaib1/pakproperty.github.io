<?php 
 

?>
<nav class="navbar" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">PakProperty</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav menus">
        <li><a href="index.php">Home</a></li>
        <li><a href="PropertyForRent.php">Property For Rent</a></li>
        <li><a href="PropertyForSale.php">Property For Sale</a></li>
        <li><a href="SubmitAd.php">Submit an Ad</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        <?php  if (isset($_SESSION['userid'])) { ?>
          

        <li class="dropdown">
            <?php 
             
              $userid = $_SESSION['userid'];
              
              $query="SELECT * FROM users WHERE UserId='$userid'";
              $runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row=mysqli_fetch_assoc($runQuery);
            ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php echo $row['FirstName']; ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span>
                                              <a href="Profile.php"><?php echo "<img src='".$row['ImagePath']."' height='380' width='240' class='img-responsive'/>"; ?></a>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php echo $row['FirstName'].' '.$row['LastName']; ?></strong></p>
                                        <p class="text-left small"><?php echo $row['Email']; ?></p>
                                        <p class="text-left">
                                            <a href="Profile.php" class="btn btn-primary btn-block btn-sm">View Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="Logout.php" class="btn btn-danger btn-block">Logoutkhan</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
      <?php  }  
      else { ?>
          <li><a href="Login&Register.php?id=<?php echo 'login-form' ?>"><span class="glyphicon glyphicon-user"></span> Login</a></li>
          <li><a href="Login&Register.php?id=<?php echo 'register-form' ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>