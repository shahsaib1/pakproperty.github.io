
<?php
include('Connection.php');
include('Sidebar.php');
   
 
    ?>
    <br>
    <br>

  
    <div class="col-sm-8" style=" padding-left: 10%; color: black;">
      <div class="col-md-8" id="md-8">
      
      <?php
      $sql = "SELECT * FROM admin ORDER BY Id";
        $result = mysqli_query($conn, $sql);
          ?>
<div class="container">
  <h2>all admins new</h2>          
  <table id="view_all_users">`
    
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Password</th>
         <th>Edit</th>
        <th>Delete</th>
      </tr>
    
     
     <?php
      while($row = mysqli_fetch_array($result)) { 
          ?>
    
       <tr>
        <td><?php echo $row['Id']; ?> </td>
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Role']; ?></td>
        <td><?php echo $row['Password']; ?></td>
        <td><a href="edit_admin.php?Id=<?php echo $row['Id']; ?>"><button type="button" id="adminButton"> Edit</button></a>  </td>
        <td><a href="delete.php?adminid=<?php echo $row['Id']; ?>"><button type="button" id="adminButton">Delete</button></a> </td>
        </tr>
        <?php
}
?> 
 
  </table>
</div>

  
         
  
  <?php
    include('footeradmin.php');
    ?>
