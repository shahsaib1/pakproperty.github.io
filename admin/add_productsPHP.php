<?php
include('Connection.php');
if (isset($_POST['submitProduct'])) {
	include('ImageUpload.php');
	$productName = $_POST['productName'];
	$productPrice = $_POST['productPrice'];
	$productDescription = $_POST['productDescription'];
	$sql = "INSERT INTO products (ProductName, ImagePath, ProductPrice, ProductDescription) VALUES ('$productName', '$fileDestination', '$productPrice', '$productDescription')";
	$runQuery =  mysqli_query($conn, $sql);
	if (!$runQuery) {
		echo ("<script LANGUAGE='JavaScript'>
				alert('Product Submission Failed..!')
				window.location.href='Registeration.php';
			</script>");
	}
	else
	{
		header("location:index.php");
	}
}

?>