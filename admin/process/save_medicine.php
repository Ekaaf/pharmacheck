<?php

if(isset($_POST)){
	include('connection.php');
	// var_dump($_POST);exit();
	$medicine = $_POST['medicine'];
	$description = $_POST['description'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$new_arrival = $_POST['new_arrival'];
	
	$file_name = $_FILES['file']['name'];
	$file_tmp =$_FILES['file']['tmp_name'];
	$image = "public/".$file_name;
	$sql = "INSERT INTO medicines (medicine, brand, description, price, image, new_arrival) VALUES ('{$medicine}', '{$brand}', '{$description}', '{$price}', '{$image}', '{$new_arrival}')";


	move_uploaded_file($file_tmp,"../public/".$file_name);
	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Medicine added successfully.");
	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>