<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
         <a class="navbar-brand mr-1" href="index.php">PFU</a>
         <div class="d-none d-md-inline-block ml-auto"></div>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="../logout.php">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <?php if($_SESSION['ROLE']==1){?>
			<li class="nav-item">
               <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Student</span></a>
            </li>
			<?php } ?>
           
             <li class="nav-item">
               <a class="nav-link" href="../index.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>Home</span></a>
            </li>

              <li class="nav-item">
               <a class="nav-link" href="../create_new_admin.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>Register New Admin</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="../view_all_admin.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>View All Admin</span></a>
            </li>

             <li class="nav-item">
               <a class="nav-link" href="../view_all_users.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>View All Users</span></a>
            </li>

              <li class="nav-item">
               <a class="nav-link" href="../PropertyForRent.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>Property for Rent</span></a>
            </li>


              <li class="nav-item">
               <a class="nav-link" href="../PropertyForSale.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>Property for Sale</span></a>
            </li>


              <li class="nav-item">
               <a class="nav-link" href="../view_reports.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>View All Reports</span></a>
            </li>


           

            <li class="nav-item">
               <a class="nav-link" href="../logout.php">
               <i class="menu-icon fa fa-user bg-yellow"></i>
               <span>Logout</span></a>
            </li>
         </ul>
         <div id="content-wrapper">