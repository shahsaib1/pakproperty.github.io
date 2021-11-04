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
 </br>
</br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
    <div class="panel panel-danger">
      <img src="uploads/Maj Abid.png" class="img-responsive img-circle " width="70">
      <div class="panel panel-heading">
        <div class="panel-body">
        <p>Property Dealers Association)</p>
        <p>Askari VI Nasir Bagh Road Peshawar</p>
        <p>Behram Estates</p>
        <p>0332-9333040</p>
        <div class="panel-footer">
          <h3 class=" bg-warning">Maj ® Abid Hayat(President DHA Peshawar</h3>
        </div>
        </div>
      </div>
    </div>  
    </div>
    <div class="col-md-4">
    <div class="panel panel-success">
      <img src="uploads/AhmadShafaa79.png" class="img-responsive img-circle" width="90">
      <div class="panel panel-heading">
        <div class="panel-body">
          
        <p> Mr. Ahmad Shafaa</p>
        <p>5G Properties Real Estate Consultant &Builders</p>
        <p>office 504 B,4th floor,JB Tower , University road peshawar</p>
        <p>091-5854084</p><br>
        <div class="panel-footer">
          <h3 class=" bg-warning">Mr. Ahmad Shafaa</h3>
        </div>
          
        </div>
      </div>
    </div>  
  </div>
    <div class="col-md-4">
    <div class="panel panel-warning">
      <img src="uploads/MuhammadWasimKhatak.jpg" class="img-responsive img-circle" width="70">
      <div class="panel panel-heading">
        <div class="panel-body">
      
        <p> M&Ms Property Zone & Construction</p>
        <p>office# 33 Sector D.2,Zone 3 Regi Model Town Peshawar</p>
        <p>091-5846826</p>
                 <p>0334-0992248</p>
      <p>0334-0992248</p>
        <div class="panel-footer">
          <h3 class=" bg-warning">Muhammad Waseem Khatak</h3>
        </div>
        </div>
      </div>
    </div>  
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
    <div class="panel panel-info">
      <img src="uploads/najeebullah.png" class="img-responsive img-circle" width="80">
      <div class="panel panel-heading">
        <div class="panel-body">
      
        <p>Al-Najeeb Real Estate Center </p>
        <p>Shop No-II, Block-A,b3 ,PDA Comercial Building hayatabad Peshawar</p>
        <p>091-5822663</p>
        <p>0300-5666685</p>
        
        <div class="panel-footer">
          <h3 class=" bg-warning">Najeeb ullah</h3>
        </div>
        </div>
      </div>
    </div>  
    </div>
    <div class="col-md-4">
    <div class="panel panel-primary">
      <img src="uploads/EmaduddinQazi44.png" class="img-responsive img-circle" width="80">
      <div class="panel panel-heading">
      
        <div class="panel-body">
        
        <p> Ocean Developers and Consultant ODC</p>
        <p>Near Warsak CNG Warsak Road, Peshawar.</p>
        <p>0300-9352112</p>
        <p>0333-8581294</p>
        <p>0333-8581294</p>
  
        <div class="panel-footer">
          <h3 class=" bg-success">Emaduddin Qazi</h3>
        </div>
        
          
        </div>
      </div>
    </div>  
  </div>
    <div class="col-md-4">
    <div class="panel panel-danger text-center">
      <img src="uploads/RuhulAmin81.png" class=" img-circle" width="80">
      
      <div class="panel panel-heading text-center">
      
        <div class="panel-body">
        <p> Shamal Real Estate & Builders</p>
        <p> LG Shop Cantt Plaza Warsak Peshawar.</p>
        <p>0321-5442932</p>
        <p>0321-5442932</p><br>
        
        <div class="panel-footer">
          <h3 class=" bg-warning">Lt col ® Ruhul Amin</h3>
        </div>
        </div>
      </div>
    </div>  
    </div>
  </div>