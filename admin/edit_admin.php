<?php
    include('Sidebar.php');
  	$id = $_GET['Id'];
  	$sql = "SELECT * FROM admin WHERE Id = '$id'";
  	$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
  	if (mysqli_num_rows($result) > 0) {
  	    while ($row = mysqli_fetch_assoc($result)) {
  	?>



		<div class="col-md-8" id="md-8" style=" padding-left: 30px; color: black;">
			<h1>Edit Admin Form </h1>
			 <input type="hidden" value="<?php echo $row['Id'] ?>" name="id" />
				<form action="admin_list.php" method="post">
					<div class="form-group" id="UserInputs">
					<label for="Id">id:</label>
					 <input type="text" value="<?php echo $row['Id'] ?>" name="id" /> <br />
				</div>
				<div class="form-group" id="UserInputs">
					<label for="Username">Username:</label>
					 <input type="text" value="<?php echo $row['Username'] ?>" name="username" /> <br />
				</div>
				<div class="form-group" id="UserInputs">
					<label for="Role">Role:</label>
					<select class="select2" value="<?php echo $row['Role']; ?>" name="role">
                        <?php
                        if ($row['Role'] == 'Admin') {
                        echo "
                            <option selected value='Admin'>Admin</option>
                            <option value='Normal'>Normal</option>";
                        } elseif ($row['Role'] == 'Normal') {
                        echo "
                        	<option selected value='Normal'>Normal</option>
                            <option value='Admin'>Admin</option>";
                        } else {
                        echo "<option selected value=''>Select User Role</option>
                            <option value='Admin'>Admin</option>
                            <option value='Normal'>Normal</option>";
                        }?>
                    </select>
				</div>
				<div class="form-group" id="UserInputs">
					<label for="pwd">Password:</label>
					<input type="password" value="<?php echo $row['Password']?>" class="form-control" name="password" placeholder="Enter password">
				</div>
					<button type="submit" class="btn btn-default" name="edit">edit</button>
				</form>
			<?php } }?>
		</div>