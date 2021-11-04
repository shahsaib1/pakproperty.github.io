<?php 
 $connection =  mysqli_connect("localhost" , "root" , "" , "pfu");
include('header.php');

?>
<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <a href="">Dashboard</a>
  </li>
  
</ol>
<!-- Page Content -->
<div class="container-fluid">
   <!-- DataTables Example -->
   <div class="card mb-3">
	  <div class="card-header">
		 <i class="fa fa-fw fa-user"></i>
		Admin Data
	  </div>
	  <div class="card-body">
		 <div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			   <thead>
				  <tr>
					 <th>Id</th>
					 <th>Username</th>
					
				  </tr>
			   </thead>
			  
			    <?php 
                $result = mysqli_query($connection, "SELECT * FROM admin"); 
                      
                        while($row = mysqli_fetch_array($result)){?>
                      <tr>
                        <td><?php echo $row['Id'];?></td>
                        <td><?php echo $row['Username'];?></td>                        
                                                               
                      </tr>
                     <?php  };?>
			   </tbody>
			</table>
		 </div>
	  </div>
   </div>
</div>
<hr>

</div>
<?php include('footer.php')?>