<?php

if(isset($_POST)){
	include('connection.php');
	// var_dump($_POST);exit();
	$medicine = $_POST['medicine'];
	$description = $_POST['description'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];

	$new_arrival = 0;
	if(isset($_POST['new_arrival'])){
		$new_arrival = $_POST['new_arrival'];
	}
	
	if(isset($_FILES['file']['name'])){
		$file_name = $_FILES['file']['name'];
		$file_tmp =$_FILES['file']['tmp_name'];
		$image = "public/".$file_name;
		move_uploaded_file($file_tmp,"../public/".$file_name);
	
	}
	
	if(isset($_GET['id'])){
		$sql = "update medicines set medicine= '{$medicine}', brand= '{$brand}', description= '{$description}', price= '{$price}', image= '{$image}', new_arrival= '{$new_arrival}' where id =".$_GET['id'];
	}
	else{
		$sql = "INSERT INTO medicines (medicine, brand, description, price, image, new_arrival) VALUES ('{$medicine}', '{$brand}', '{$description}', '{$price}', '{$image}', '{$new_arrival}')";
	}

	if ($conn->query($sql) === TRUE) {
		if(isset($_GET['id'])){
			header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Medicine updated successfully.");
		}
		else{
			header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Medicine added successfully.");
		}
	} else {
		header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
	}
}

?>