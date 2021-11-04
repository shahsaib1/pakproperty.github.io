<?php
session_start();
require('Connection.php');
if (isset($_POST['btnSearch'])) {
	$location=mysqli_real_escape_string($conn, $_POST['location']);
	$category=mysqli_real_escape_string($conn, $_POST['category']);
	$bedrooms=mysqli_real_escape_string($conn, $_POST['bedrooms']);
	$floors=mysqli_real_escape_string($conn, $_POST['floors']);
	$houseType=mysqli_real_escape_string($conn, $_POST['houseType']);
	$pricemin=mysqli_real_escape_string($conn, $_POST['pricemin']);
	$pricemax=mysqli_real_escape_string($conn, $_POST['pricemax']);
	//Query Starts Here..
	$query = "SELECTS * FROM ads";
	$conditions = array();

	if (!empty($location)) {
		$conditions[] = "City LIKE '%$location%' OR Country LIKE '%$location%'";
	}

	if (!empty($category)) {
		$conditions[] = "Category = '%$category%'";
	}

	if (!empty($houseType)) {
		$conditions[] = "HouseType = '%$houseType%'";
	}

	if (!empty($bedrooms)) {
		$conditions[] = "Bedrooms = '%$bedrooms%'";
	}

	if (!empty($floors)) {
		$conditions[] = "Floors = '%$floors%'";
	}

	if (!empty($pricemin)) {
		$conditions[] = "Price = '%$pricemin%'";
	}

	if (!empty($pricemax)) {
		$conditions[] = "Price = '%$pricemax%'";
	}

	$sql = $query;
	if (count($conditions>0)) {
		$sql .= "WHERE ". implode('AND', $conditions);
		$result = mysqli_query($conn, $sql);
	}
}
?>