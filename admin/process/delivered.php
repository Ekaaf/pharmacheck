<?php

if(isset($_POST)){
	include('connection.php');
	// var_dump($_POST);exit();
	$delivery_date = $_POST['delivery_date'];
	$id = $_POST['id'];
	// var_dump($delivery_date);exit;
	$sql = "update orders set delivery_date= '{$delivery_date}' where id =".$id;
	if ($conn->query($sql) === TRUE) {
		header('Location: ' . $_SERVER['HTTP_REFERER']);

	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>