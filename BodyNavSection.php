    <?php if (!isset($_SESSION['userid'])) { echo ""; } ?>    
<nav class="navbar" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="color:black; font-size: 23px;"><b>PakProperty</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav menus">
        <li><a href="index.php" style="color: white;">Home</a></li>
        <li><a href="PropertyForRent.php" style="color: white;">Property For Rent</a></li>
        <li><a href="PropertyForSale.php" style="color: white;">Property For Sale</a></li>
        <li><a href="SubmitAd.php" style="color: white">Submit Ads</a></li>
        <li><a href="Dealers.php" style="color: white">Dealers</a></li>
        <li><a href="ContactUs.php" style="color: white;">Contact Us</a></li>
        <li><a href="AboutUs.php" style="color: white;">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        <?php if (isset($_SESSION['userid'])) { ?>


          

        <li class="dropdown" style="color: wheat;" >
            <?php 
              $userid = $_SESSION['userid'];
              $query="SELECT * FROM users WHERE UserId='$userid'";
              $runQuery=mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row=mysqli_fetch_assoc($runQuery);
            ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"style="color: wheat;">
                        <span class="glyphicon glyphicon-user" style="color:white;"></span> 
                        <strong><?php echo $row['FirstName']; ?></strong>
                        <strong><?php echo $row['LastName']; ?></strong>
                        <span class="glyphicon glyphicon-chevron-down" style="color:wheat;"></span>
                    </a>
                    <ul class="dropdown-menu" style="background: gray;;">
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
                                            <a href="Profile.php" class="btn btn-primary btn-block btn-sm" style="background:lightskyblue;color: black;">View Profile</a>
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
                                            <a href="Logout.php" class="btn  btn-block" style="background:lightskyblue;color: black">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
      <?php  }  
      else { ?>
          <li><a href="Login&Register.php?id=<?php echo 'login-form' ?>" style="color:wheat;"><span class="glyphicon glyphicon-user" style="color: white;"></span> Login</a></li>
          <li><a href="Login&Register.php?id=<?php echo 'register-form' ?>" style="color:wheat;"><span class="glyphicon glyphicon-user" style="color: white;"></span> Sign Up</a></li>
        <?php } ?>
        
      </ul>
    </div>
  </div>
</nav>
