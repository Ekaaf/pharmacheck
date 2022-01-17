<?php

if(isset($_POST)){
	include('connection.php');
	// var_dump($_POST);exit();
	$pharm_id = $_POST['pharm_id'];
	$med_id = $_POST['med_id'];
	$quantity = $_POST['quantity'];
	$sql = "INSERT INTO medicine_pharmacy (pharm_id, med_id, available) VALUES ('{$pharm_id}', '{$med_id}', '{$quantity}')";

	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Medicine added to pharmacy successfully.");
	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>