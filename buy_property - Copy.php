<?php
      include('Connection.php');
      session_start();
      if (!isset($_SESSION['user_id']))
   {
    echo "Sorry invalid access";
    exit();
  }
       if (isset($_POST['submit']))
   {
      $loginuser_name = $_POST['login_user'];     
      $property_name    = $_POST['selected_property'];     
     
    
      
      
     
           $result_query =  mysqli_query($conn, "INSERT INTO sales (buyer_id , property_name) VALUES ('$loginuser_name', '$property_name')");


      
     
       if($result_query){
        echo "<script>alert('Post Add successfully.');</script>";
       }
       else{
        echo "<script>alert('Post insertion failed.');</script>";
       }

     }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Buy Property</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</head>
<body style="background: lightseagreen;">
      <form method="post" action="">
    
          <label>Buyer Name</label>
          <input type="text"  placeholder="Your Name" name="login_user" value="<?php if (isset($_SESSION['user_id'])) { ?>
          <?php echo $_SESSION['user_id'] ?>
          <?php } ?>">
  
       
<br>
       
    
                      <label for="inputEmail3" >Select Property</label>
    <br>
    <br>
                      <div>
                       <select  name="selected_property">
                        <?php
                       $result =  mysqli_query($conn, "SELECT * FROM ads");
                        
                          while($row = mysqli_fetch_array($result)){?>
                        
               <option value="<?php echo $row['AdId'];?>"><?php echo $row['Title'];?></option>
                     
                          <?php };?> 
                        
                      </select>
                     
    <br><br><br>
          
    <br><br><br>
        <input type="submit" name="submit" value="Buy" >
       
      </form>
   
</body>
</html>