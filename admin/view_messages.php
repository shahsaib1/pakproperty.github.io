<?php
        include('Sidebar.php');
    ?>
    <br>
    <br>


   </div>
   <div class="container" style="background: mediumseagreen;width: 800px;height: 100%;"><br>
   <h3 style="margin-left: 20%; color: black;"><strong>Messages Information List</strong></h3>
    <div class="col-sm-8" style=" padding-left: 4%; color: black; ">
      <div class="col-md-8" id="md-8" style="width: 870px;">
			 <?php
        $sql = "SELECT * FROM messages ORDER BY Id DESC";
        $runQuery = mysqli_query($conn, $sql);    
        while ($row = mysqli_fetch_array($runQuery)) {
          
          ?>
     
                 <table class="table" id="view_all_users" style="border-style:ridge;border-color: seagreen;">
                    <tr style="border-top:ridge;border-color: seagreen;">
                      <th style="text-align: center;border-top:ridge;border-color: seagreen;">Sender info</th>

                      <td colspan="2" style="border-top:ridge;border-color: seagreen;"><?php echo $row['Name'];
                    ?><br><span style="font-size: 12px;"style="border-top:ridge;border-color: seagreen;"><?php echo $row['Email']; ?></span></td>

                      <td rowspan="2" style="border-top:ridge;border-color: seagreen;">
                        <a href="delete_message.php?Id=<?php echo $row['Id'] ?>">
                          <button id="adminButton" style="background: skyblue;color: black;">Delete Message</button>
                        </a>

                    </tr>
                    <tr>
                      <th style="border-top:ridge;border-color: seagreen;">Subject</th>
                      <td colspan="2"style="border-top:ridge;border-color: seagreen;"><?php echo $row['Subject']; ?></td>                      
                    </tr>
                    <tr style="border-top:ridge;border-color: seagreen;">
                      <th style="border-top:ridge;border-color: seagreen;">Message</th>
                      <td colspan="3" style="font-size: 12px;"style="border-top:ridge;border-color: seagreen;"><?php echo $row['Message']; ?></td>                      
                    </tr>
                 </table>
         <br/> 
         <?php } ?>  
    </div>
  </div>
</div>
</div>