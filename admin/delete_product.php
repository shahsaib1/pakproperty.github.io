<?php
     include('Sidebar.php');
    



//edit records
if(isset($_GET['id'])) {
$id = $_GET['id'];
$q = "delete from products WHERE Id='$id'";
if(mysqli_query($conn, $q)) {
	echo ("<script LANGUAGE='JavaScript'>
				alert('Deleted Record Successfully')
				window.location.href='view_products.php';
			</script>");
    } else {
        $error = "Error deleting record...";
    }
}
?>

