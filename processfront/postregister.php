<?php

if(isset($_POST)){
	include('../admin/process/connection.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	

	$sql = "INSERT INTO users (name, email, password, mobile, address) VALUES ('{$name}', '{$email}', '{$password}', '{$mobile}', '{$address}')";


	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/pharmacheck/admin/login.php?success=true&message=Registerd successfully.");
	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>