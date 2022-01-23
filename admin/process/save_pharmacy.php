<?php

if(isset($_POST)){
	include('connection.php');
	// var_dump($_POST);exit();
	$name = $_POST['name'];
	$address = $_POST['address'];
	$opening_time = $_POST['opening_time'];
	$closing_time = $_POST['closing_time'];
	$delivery_type = $_POST['delivery_type'];
	if(isset($_GET['id'])){
		$sql = "update pharmacies set name = '{$name}', address = '{$address}', opening_time = '{$opening_time}', closing_time = '{$closing_time}', delivery_type = '{$delivery_type}' WHERE id=".$_GET['id'];
	}
	else{
		$sql = "INSERT INTO pharmacies (name, address, opening_time, closing_time, delivery_type) VALUES ('{$name}', '{$address}', '{$opening_time}', '{$closing_time}', '{$delivery_type}')";	
	}
	if ($conn->query($sql) === TRUE) {
		if(isset($_GET['id'])){
			header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Pharmacy Updated successfully.");
		}
		else{
			header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Pharmacy added successfully.");
		}
	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>