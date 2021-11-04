<?php
  include('Connection.php');
   session_start();
 if (isset($_POST['submit']))

  {
      $loginuser_id = $_POST['login_user'];
      $cardname = $_POST['input_name_on_card'];
      $cardnumber = $_POST['input_card_number'];
      $securitycode = $_POST['input_security_code'];
      $postacode = $_POST['input_postalcode'];
      $country = $_POST['selected_country'];


    $result = mysqli_query($conn, "INSERT INTO payment_tbl (sigin_buyer , cardname , cardnumber , securitycode , postacode , country) VALUES ('$loginuser_id' , '$cardname' , '$cardnumber' , '$securitycode' , '$postacode' , '$country') ");
    if ($result)
     {
      echo "<script>alert('Record inserted successfully');</script>";
     }
     else
     {
      echo "<script>alert('Record insertion Failed');</script>";
     }

        
  }     
?>


<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</head>
<body>
<div class="container">
  <h3 class="text-center text-success">Payment Form</h3>
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form method="post" action="">
       <div class="form-group">
       
	   </div>	

	   	  <input type="hidden"  placeholder="Your Name" name="login_user" value="<?php if (isset($_SESSION['user_id'])) { ?>
          <?php echo $_SESSION['user_id'] ?>
          <?php } ?>">

         <div class="form-group">
          <label>Name On Card</label>
          <input type="text" class="form-control" placeholder="Your Name" name="input_name_on_card">
        </div>


         <div class="form-group">
          <label>Card Number</label>
          <input type="text" class="form-control" placeholder="Your Name" name="input_card_number">
        </div>

        <div class="form-group">
          <label>Security Code</label>
          <input type="text" class="form-control" placeholder="Your Name" name="input_security_code">
        </div>

        <div class="form-group">
          <label>Postal Code</label>
          <input type="text" class="form-control" placeholder="Your Name" name="input_postalcode">
        </div>
        <div class="form-group">
        <select name="selected_country" class="form-select form-select-lg col-md-12 from-controll" aria-label=".form-select-lg example">
  			<option selected>Select Country</option>
  			<option value="1">Pakistan</option>
  			<option value="2">Turki</option>
  			<option value="3">Afghanistan</option>
		</select>





		</div>

     
        </div>
       <div class="col-sm-8 offset-sm-2">
        <input type="submit" name="submit" value="Sigin" class="btn btn-success btn-block">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>