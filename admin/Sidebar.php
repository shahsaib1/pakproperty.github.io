 <?php

  
  include('Connection.php'); 
    // Initialize the session
    session_start();
        if (!isset($_SESSION['user_id']))
     {
        header('location:login.php');       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Admin Panel</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
     <link rel="stylesheet" href="css/style.css">

<!-- <style type="text/css">

  a{
    color:white;
    font-weight: bold;
    text-decoration: none;
  }
 a:hover{
  color: black;
}
.dashboard li
{
  background: grey;
  color: white;
  width: 60%;
  margin-left: 8%;
  border-radius: 10px;
}
  
</style> -->



</head>
<body style="background: seagreen;">
 <nav class="menu" tabindex="0" style="background-color: mediumseagreen;">
  <div class="smartphone-menu-trigger"></div>
  <header class="avatar" style="background: mediumseagreen;">
    <img src="../uploads/ihtisham.jpg"style="width: 60px;height: 60px;" /><br>
 <a class="navbar-brand" style="color:wheat;" href="#"><?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>Normal User<?php } else { ?>Admin User<?php } ?></a>
 
   
  <?php if (isset($_SESSION['username'])) { ?>
  <a style="color: wheat;"><?php echo $_SESSION['username'] ?></a>
  <?php } ?>
 
  </header>
  <ul class="dashboard" style="height: 100%;width: 100%;">
  
   <li tabindex="0" style= "<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>" class="icon-dashboard"><span> <a href="index.php" class="navbar-brand" style="color:wheat;">Home</a></span></li>
    <li tabindex="0" class="icon-users" style="<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>"><span> <a href="create_new_admin.php" class="navbar-brand" style="color:wheat;">Add New Admin</a></span></li>
    <li tabindex="0" class="icon-settings" style="<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>"><span> <a href="view_all_admin.php" class="navbar-brand" style="color:wheat;">View Admins Information</a></span></li>
    <li tabindex="0" class="icon-dashboard" style="<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>"><span> <a href="view_all_users.php" class="navbar-brand" style="color:wheat;">View Users Information</a></span></li>
    
    </li>

    <li tabindex="0" class="icon-customers" style="<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>"><span> <a href="view_reports.php" class="navbar-brand" style="color:wheat;">View Reports Information</a></span></li>
    <li tabindex="0" class="icon-customers" style="<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>"><span> <a href="view_messages.php" class="navbar-brand" style="color:wheat;">View Messages</a></span></li>   
    </li> 
     <li tabindex="0" class="icon-customers" style="<?php if (isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1') { ?>display: none<?php } ?>"><span><a href="show_payments.php" class="navbar-brand" style="color:wheat;">View Payments Information</a></span>
    </li> 
    <li tabindex="0" class="icon-customers" ><span><a href="../PropertyForRent.php" class="navbar-brand" style="color:wheat">Properties For Rent</a></span></li>
  <li tabindex="0" class="icon-customers"><span><a href="../PropertyForSale.php" class="navbar-brand" style="color: wheat;">Properties For Sale</a></span></li> 
    <li tabindex="0" ><span><a href="logout.php" class="navbar-brand" style="color: wheat;">Logout</a></span></li>
   
     
  </ul>
  
 
   
 
</nav>

<!--<main>
  <div class="helper">
    RESIZE THE WINDOW
    <span>Breakpoints on 900px and 400px</span>
  </div>
</main>
  
    -->
    <script src="js/index.js"></script>

</body>