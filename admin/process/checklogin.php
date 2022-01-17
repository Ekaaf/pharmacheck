<?php
	if(!isset($_SESSION['user'])){
		header("Location: http://localhost/pharmacheck/admin/login.php");
	}
?>