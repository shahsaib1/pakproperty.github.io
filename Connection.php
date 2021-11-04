<?php
	$servername="localhost";
	$name="root";
	$password="";
	$db="pfu";
	$conn = new mysqli($servername, $name, $password, $db);
	if (!$conn) {
		echo "Connection is not established";
	}
?>