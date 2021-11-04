<?php include('Connection.php');

if(isset($_POST['edit'])) {
$id=$_POST['id'];	
$username = $_POST['username'];
$role = $_POST['role'];
$password = $_POST['password'];


$q = "UPDATE admin SET Id='$id', Username='$username', Role='$role', Password='$password' WHERE Id='$id'";
if(mysqli_query($conn, $q)) {
	echo ("<script LANGUAGE='JavaScript'>
				alert('Successfully admin edit ')
				window.location.href='view_all_admin.php';
			</script>");

    } else {
        $error = "Error inserting record...";
    }
}
?>