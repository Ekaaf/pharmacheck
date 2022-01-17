<?php

if(isset($_POST)){
	include('connection.php');
	// var_dump($_POST);exit();
	$name = $_POST['name'];
	$address = $_POST['address'];
	$opening_time = $_POST['opening_time'];
	$closing_time = $_POST['closing_time'];
	$delivery_type = $_POST['delivery_type'];
	$sql = "INSERT INTO pharmacies (name, address, opening_time, closing_time, delivery_type) VALUES ('{$name}', '{$address}', '{$opening_time}', '{$closing_time}', '{$delivery_type}')";

	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Pharmacy added successfully.");
	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>