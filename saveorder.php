<?php
	error_reporting(E_ALL);
	session_start();
	if(isset($_POST)){
		include('admin/process/connection.php');
		if(isset($_SESSION['user'])){
			$type = 'normal';
		}
		else{
			$type = 'guest';
		}
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$total = $_POST['total'];
		$date = date('Y-m-d H:i:s');
		$sql = "INSERT INTO guest_users (name, email, mobile, address) VALUES ('{$name}', '{$email}', '{$mobile}', '{$address}')";

		if ($conn->query($sql) === TRUE) {
			$user_id = $conn->insert_id;
			$sql = "INSERT INTO orders (type, order_date, total, delivery_date, user_id) VALUES ('{$type}', '{$date}', '{$total}', '', '{$user_id}')";
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
		} else {
			var_dump($conn->error);exit;
			header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
		}
	}
?>