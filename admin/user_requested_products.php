<?php
        include('Sidebar.php');
    ?>
    <br>
    <br>


   </div>
   <h2 style="margin-left: 30%; color: blue"> All Products List</h2>
    <div class="col-sm-8" style=" padding-left: 10%; color: black; overflow: scroll;">
      <div class="col-md-8" id="md-8">
			
      <?php
      $sql = "SELECT * FROM buyproducts order by Id DESC";
        $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) { 
              $userid = $row['UserId'];
              $productid = $row['ProductId'];
              $query = "SELECT * FROM users WHERE Id = '$userid'";
              $runQuery = mysqli_query($conn, $query);
              $userinfo = mysqli_fetch_assoc($runQuery);
              $username = $userinfo['FirstName']." ".$userinfo['LastName'];
              $phone = $userinfo['PhoneNumber'];
              $email = $userinfo['Email'];
              $city = $userinfo['City'];
              $gender = $userinfo['Gender'];

              $q = "SELECT * FROM products WHERE Id = '$productid'";
              $runq = mysqli_query($conn, $q);
              $productinfo = mysqli_fetch_assoc($runq);
              $name = $productinfo['ProductName'];
              $price = $productinfo['ProductPrice'];
              $description = $productinfo['ProductDescription'];
            ?>
              <div style="margin-left: 20%">
                <div class="well">
                  <h3><strong><?php echo $username." "; ?></strong><span style="font-size: 20px">(<?php echo $email.", ".$phone; ?>)</span></h3>
                  <p style="margin-top: -20px"><strong>Gender:</strong><?php echo " ".$gender.", "; ?><strong>City:</strong><?php echo " ".$city; ?></p>
                </div>
                <table style="width: 400px">
                  <tr>
                    <td colspan="2">
                      <?php echo "<img src='"."../".$productinfo['ImagePath']."' height='300' width='240' class='img-responsive'/>"; ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Product Name</th>
                    <td><?php echo $name; ?></td>
                  </tr>
                  <tr>
                    <th>Product Price</th>
                    <td><?php echo $price; ?></td>
                  </tr>
                  <tr>
                    <th>Product Description</th>
                    <td><?php echo $description; ?></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <a href="#messageForm"><button style="color: blue; margin-left: 20%; background: purple; color: white" onclick="showMsgForm()">Reply This Order</button></a>
                    </td>
                  </tr>
                </table>
                <div id="messageForm" style="display: none">
                 <h5 style=" color: green"><strong>Type Message Here</strong></h5>  
                <form style="height: 100px; width: 350px; border: 1px solid green;" action="reply_user.php?id=<?php echo $row['Id'] ?>" method="post">
                  <input type="hidden" name="userid" value="<?php echo $userid ?>"/>
                  <textarea name="message" style="width: 100%; height: 100%"></textarea>
                  <button type="submit" style=" height: 40px; background: blue; color: white" name="sendOrderMsg">Send Message</button>
                </form> </div> <br>
              </div>
                 
                <?php } ?>
         <br/> 
         <script type="text/javascript">
            function showMsgForm()
            {
              var x = document.getElementById("messageForm");
                if (x.style.display === "none") {
                x.style.display = "block";
              }
              else
              {
                x.style.display = "none";
             }
           }
          </script>  
    </div>
  </div>
</div>