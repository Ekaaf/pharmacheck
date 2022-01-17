<?php
include('connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM pharmacies WHERE id='{$id}'";

if ($conn->query($sql) === TRUE) {
	header("Location: http://localhost/pharmacheck/admin/message.php?success=true&message=Pharmacy deleted successfully.");
} else {
	header("Location: http://localhost/pharmacheck/admin/message.php?error=true&message={$conn->error}");
}

?>