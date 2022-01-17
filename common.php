<?php
	session_start();

	include('admin/process/connection.php');
	// var_dump($_SESSION['cart']);exit();
	// session_destroy();
    if(isset($_GET['medid']) && isset($_GET['quantity'])){
        $med_id = $_GET['medid'];
        $quantity = $_GET['quantity'];
        $sql = "SELECT * from medicines where id= ".$med_id;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $med_name = $row['medicine'];
            $med = $row;
          }
        }
        $med['quantity'] = $quantity;
        $cart = [];
        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            array_push($cart, $med);
        }
        else{
        	$cart[0] = $med;
        }
        
        // var_dump($cart);exit();
        $_SESSION['cart'] = $cart;
        header("Location: http://localhost/pharmacheck/pharmacy_med.php?id=".$med_id);
    }

    if(isset($_GET['medid']) && isset($_GET['type'])){
    	$cart = $_SESSION['cart'];
    	// var_dump($_GET['medid']);exit();
    	unset($cart[$_GET['medid']]);
    	$cart = array_values($cart);
    	$_SESSION['cart'] = $cart;
    	header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>