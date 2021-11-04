<?php
     include('Sidebar.php');
    



//edit records
if(isset($_GET['id'])) {
$id = $_GET['id'];
$q = "delete from appointments WHERE Id='$id'";
if(mysqli_query($conn, $q)) {
	echo ("<script LANGUAGE='JavaScript'>
				alert('Deleted Record Successfully')
				window.location.href='all_appointments.php';
			</script>");
    } else {
        $error = "Error deleting record...";
    }
}
?>

