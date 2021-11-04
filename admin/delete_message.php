<?php
     include('Sidebar.php');
    



//edit records
if(isset($_GET['Id'])) {
$id = $_GET['Id'];
$q = "delete from messages WHERE Id='$id'";
if(mysqli_query($conn, $q)) {
		header("location:view_messages.php");
	echo ("<script LANGUAGE='JavaScript'>
				alert('Message Delete Successfully')
			
		
			</script>");
    } else {
        $error = "Error deleting record...";
    }
}
?>