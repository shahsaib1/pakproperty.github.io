<?php
        include('Sidebar.php');
    ?>

    <br>


   </div>
   <div class="container" style="background:mediumseagreen;width: 800px;height: 100%;"><br>
   <h3 style="margin-left: 20%; color: black;"><strong>Payments Information Page</strong></h3>
    <div class="col-sm-8" style=" padding-left: 4%; color: black; ">
      <div class="col-md-8" id="md-8" style="width: 870px;">
			
      
                 <table class="table" id="view_all_users" style="border-style:ridge;border-color: seagreen;">
                    <tr>
                     
                      <th style="border-top:ridge;border-color: seagreen;">Buyername</th>
                    
                      <th style="border-top:ridge;border-color: seagreen;">Property Id</th>
                     
                     
                    </tr>
                   <?php
       $result_post = mysqli_query($conn, "SELECT s. * , b.usersname AS Uname  FROM sales s, buyer b WHERE s.buyer_id = b.id"); 
                       
                        while($row = mysqli_fetch_array($result_post)){?>

                    <tr style="border-top:ridge;border-color: seagreen;">
                   
                      
                      <td style="border-top:ridge;border-color: seagreen;"><?php echo $row['Uname']; ?></td>
                      <td ><?php echo $row['property_name']; ?></td>
                     
               
                     
                      
                      
                    </tr>
                     <?php } ?>
                 </table>
               
         <br/>   
       
      
                     <h4 style="margin-left: 27%; color: black;"><strong>Property Information</strong> </h4>
           <table class="table" id="view_all_users" style="border-style:ridge;border-color: seagreen;">
                    <tr>
                     
                     
                    
                      <th style="border-top:ridge;border-color: seagreen;">Property Id</th>
                       <th>Property Name</th>
                     
                     
                    </tr>
                   <?php
       $aresult_post = mysqli_query($conn, "SELECT * FROM ads"); 
                       
                        while($arow = mysqli_fetch_array($aresult_post)){?>

                    <tr style="border-top:ridge;border-color: seagreen;">
                   
                      
                      <td style="border-top:ridge;border-color: seagreen;"><?php echo $arow['AdId']; ?></td>
                      <td ><?php echo $arow['Title']; ?></td>
                     
               
                     
                      
                      
                    </tr>
                     <?php } ?>
                 </table>
    </div>
  </div>
</div>
</div>

