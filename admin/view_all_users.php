<?php
        include('Sidebar.php');
    ?>
    <br>
    <br>


   </div>
   <div class="container" style="background:mediumseagreen;width: 800px;height: 100%;"><br>
   <h3 style="margin-left: 26%; color: black"><strong>Users Information List</strong></h3>
    <div class="col-sm-8" style=" padding-left: 4%; color: black;">
      <div class="col-md-8" id="md-8" style="width: 870px;">
			
      <?php
      $sql = "SELECT * FROM users order by UserId";
        $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) { ?>
                 <table  id="view_all_users" style="border-style:ridge;border-color: seagreen;">
                    <tr style="border-style: ridge;border-color: seagreen;">
                      <th style="text-align: center;border-top: ridge;border-color: seagreen;">Id</th>
                      <th style="text-align: center; border-top: ridge;border-color: seagreen;">Name</th>
                      <th style="text-align: center; border-top: ridge;border-color: seagreen;">Email</th>
                      <th style="text-align: center; border-top: ridge;border-color: seagreen;">Username</th>
                      <td rowspan="2" style="padding-right: 20px;border-top: ridge;border-color: seagreen;"><a href="delete.php?UserId=<?php echo $row['UserId']; ?>"><button type="button" id="adminButton" style="background: skyblue;color: black;">Delete User</button></a> </td>
                    </tr>
                    <tr style="text-align: center; border-top: ridge;border-color: seagreen;">
                      <td style="border-top: ridge;border-color: seagreen;"><?php echo $row['UserId']; ?></td>
                      <td style="border-top: ridge;border-color: seagreen;"><?php echo $row['FirstName']." ".$row['LastName']; ?></td>
                      <td style="border-top: ridge;border-color: seagreen;"><?php echo $row['Username']; ?></td>
                      <td style="border-top: ridge;border-color: seagreen;"><?php echo $row['Username']; ?></td>
                      
                    </tr>
                 </table>
                <?php } ?>
         <br/>   
    </div>
  </div>
</div>
</div>