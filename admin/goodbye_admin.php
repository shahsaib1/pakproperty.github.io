<?php
   
   $connection =  mysqli_connect("localhost" , "root" , "" , "pfu");
   

?>

<table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                $result = mysqli_query($connection, "SELECT * FROM admin"); 
                      
                        while($row = mysqli_fetch_array($result)){?>
                      <tr>
                        <td><?php echo $row['Id'];?></td>
                        <td><?php echo $row['Username'];?></td>                        
                                                               
                      </tr>
                     <?php  };?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                        
                      </tr>
                    </tfoot>
                  </table>
<br><br>

<a href="view_all_admin.php">view all admins</a><br>
<a href="logout.php">view all admins</a>
                  