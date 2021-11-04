<?php
     include('Sidebar.php');
    



//edit records
if(isset($_GET['userid'])) {
$id = $_GET['userid'];
$q = "delete from users WHERE UserId='$id'";
if(mysqli_query($conn, $q)) {
	header("location:".$_SERVER['HTTP_REFERER']."?Deleted_Record_Successfully");
    } else {
        $error = "Error deleting record...";
    }
}

elseif (isset($_GET['adminid'])) {
	$id = $_GET['adminid'];
	$q = "delete from admin WHERE Id='$id'";
	if(mysqli_query($conn, $q)) {
		header("location:".$_SERVER['HTTP_REFERER']."?Deleted_Record_Successfully");
	    } else {
	        $error = "Error deleting record...";
	    }
}

elseif (isset($_GET['reportid'])) {
	$id = $_GET['reportid'];
	$q = "delete from reports WHERE ReportId='$id'";
	if(mysqli_query($conn, $q)) {
		header("location:".$_SERVER['HTTP_REFERER']."?Deleted_Record_Successfully");
	    } else {
	        $error = "Error deleting record...";
	    }
}
elseif (isset($_GET['UserId'])) {
	$id = $_GET['UserId'];
	$q = "delete from users WHERE UserId='$id'";
	if(mysqli_query($conn, $q)) {
		header("location:".$_SERVER['HTTP_REFERER']."?Deleted_Record_Successfully");
	    } else {
	        $error = "Error deleting record...";
	    }
}
?>

