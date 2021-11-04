<?php
        include('Sidebar.php');
    ?>
    <br>
  

  <div class="container" style="background: mediumseagreen;width: 800px;height: 100%;"><br>
    <h3 style="padding-left: 25%;color: black;"><strong>Admins Information List</strong></h3>
    <div class="col-sm-8" style=" padding-left: 4%; color: black;">
      <div class="col-md-8" id="md-8" style="width: 870px;">
      
      <?php
      $sql = "SELECT * FROM admin ORDER BY Id";
        $result = mysqli_query($conn, $sql);
          ?>   

  <table id="view_all_users" style="border-style:ridge;border-color: seagreen;">
      <tr style="border-style:ridge;border-color: seagreen;">
        <th style="border-top: lightskyblue;border-color: seagreen;">ID</th>
        <th style="border-top: lightskyblue;border-color: seagreen;">Username</th>
        <th style="border-top: lightskyblue;border-color: seagreen;">Password</th>
         <th style="border-top: lightskyblue;border-color: seagreen;">Edit</th>
        <th style="border-top: lightskyblue;border-color: seagreen;">Delete</th>
      </tr>
   
     
     <?php
      while($row = mysqli_fetch_array($result)) { 
          ?>
    
       <tr style="border-style:ridge;border-color: seagreen;">
        <td style="text-align: center;border-top: ridge;border-color: seagreen;"><?php echo $row['Id']; ?> </td>
        <td style="text-align: center;border-top: ridge;border-color: seagreen;"><?php echo $row['Username']; ?></td>
        <td style="text-align: center;border-top: ridge;border-color: seagreen;"><?php echo $row['Password']; ?></td>

   
                                
                  
                        <td style="border-style:ridge;border-color: seagreen;"><a href="edit_admin.php?id=<?php echo $row['Id']; ?>"><button type="button" id="adminButton" style="background: lightskyblue;color: black;"> Edit</button></a> 
                         </td>
                        <td style="padding-right:20px;border-top: ridge;border-color: seagreen;"><a href="delete.php?adminid=<?php echo $row['Id']; ?>"><button type="button" id="adminButton" style="background: skyblue;color: black;">Delete</button></a> </td>
      
        </tr>
        <?php
}
?> 
 
  </table>
</div>
</div>
  </div>
         





  
  <!-- <?php
    include('footeradmin.php');
    ?>
 -->