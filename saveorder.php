<?php
	error_reporting(E_ALL);
	session_start();
	if(isset($_POST)){
		include('admin/process/connection.php');
		
		$total = $_POST['total'];
		$address = $_POST['address'];
		$delivery_type = $_POST['delivery_type'];
		$payment_method = $_POST['payment_method'];

		$user_id = $_SESSION['user']['id'];
		$sql = "INSERT INTO orders (order_date, total, delivery_address, user_id, delivery_type, payment_method) VALUES ('{$date}', '{$total}', '{$address}','{$user_id}')";
		if ($conn->query($sql) === TRUE) {
			$cart = $_SESSION['cart'];
			$order_id = $conn->insert_id;
			foreach($cart as $c){
				$sql = "INSERT INTO order_medicines (order_id, med_id) VALUES ('{$order_id}', '{$c['id']}')";
				if ($conn->query($sql) != TRUE) {
					var_dump($conn->error);exit;
				}
			}
		}
		else{
			echo "Couldn't save order";
		}
		unset($_SESSION['cart']);
		header("Location: http://localhost/pharmacheck/message.php?success=true&message=Order Completed Successfully.");

		if ($conn->query($sql) === TRUE) {
			
		} else {
			var_dump($conn->error);exit;
			header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
		}
	}
?>