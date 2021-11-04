<?php
      include('Connection.php');
      session_start();
      if (!isset($_SESSION['user_id']))
   {
    echo "Sorry brother invalid access";
    exit();
  }
       if (isset($_POST['submit']))
   {
      $loginuser_name = $_POST['login_user'];     
      $property_name    = $_POST['selected_property'];    
      $cardname = $_POST['input_name_on_card'];
      $cardnumber = $_POST['input_card_number'];
      $securitycode = $_POST['input_security_code'];
      $postacode = $_POST['input_postalcode'];
      $country = $_POST['selected_country']; 
     
    
      
      
     
           $result_query =  mysqli_query($conn, "INSERT INTO sales (buyer_id , property_name, cardname , cardnumber , securitycode , postacode , country) VALUES ('$loginuser_name', '$property_name' , '$cardname' , '$cardnumber' , '$securitycode'  , '$postacode' , '$country')");


      
     
       if($result_query){
        echo "<script>alert('Payment Add successfully.');</script>";
       }
       else{
        echo "<script>alert('Payment insertion failed.');</script>";
       }

     }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Buy Property Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</head>
<body style="background: seagreen;"><br>
   <div class="container" style="background:mediumseagreen; width: 650px; height: 100%;">   
  <div class="row">

    <div class="col-sm-8 offset-sm-2">
      <form method="post" action=""><br>
    <h3 class="text-center" style="color: wheat;">Buy Property Form</h3>
            <div class="form-group">
         
          <input type="hidden" class="form-control"  placeholder=" " name="login_user" value="<?php if (isset($_SESSION['user_id'])) { ?>
          <?php echo $_SESSION['user_id'] ?>
          <?php } ?>">
        </div><br>
  
       
                       <div class="form-group">
                      <label for="inputEmail3" ><strong>Select Property</strong></label>
    
                      <div>
                       <select name="selected_property" class="form-select form-select-lg col-md-12 from-controll" aria-label=".form-select-lg example">
                        <?php
                       $result =  mysqli_query($conn, "SELECT * FROM ads");
                        
                          while($row = mysqli_fetch_array($result)){?>
                        
                        <option value="<?php echo $row['AdId'];?>"><?php echo $row['Title'];?></option>
                     
                          <?php };?> 
                        
                      </select>
                    </div><br>
                      <div class="form-group">
          <label><strong>Name On Card</strong></label>
          <input type="text" class="form-control" placeholder="Enter Your Name Same As On Your Bank Card" name="input_name_on_card">
        </div><br>


         <div class="form-group">
          <label><strong>Card Number</strong></label>
          <input type="text" class="form-control" placeholder="Enter Your Bank Card Number" name="input_card_number">
        </div><br>

        <div class="form-group">
          <label><strong>Security Code</strong></label>
          <input type="text" class="form-control" placeholder="Enter Your Security Code" name="input_security_code">
        </div><br>

        <div class="form-group">
          <label><strong>Postal Code</strong></label>
          <input type="text" class="form-control" placeholder="Enter Your Country/City Postal Code " name="input_postalcode">
        </div><br>
        <div class="form-group">
           <label><strong>Select Country Card</strong></label>
        <select name="selected_country" class="form-select form-select-lg col-md-12 from-controll" aria-label=".form-select-lg example">
        <option selected>Select Your Country Card</option>
        <option value="1">Pakistani</option>
        <option value="2">Turki</option>
        <option value="3">Afghani</option>
    </select>
    </div><br>

          <div class="col-sm-8 offset-sm-2">
            <input type="submit" name="submit" value="Buy" class="btn btn-success btn-block" style="background:lightskyblue;color: black;">
           
        </div>
       
      </form>
    </div>
  </div>
   </div> 
</body>
</html>