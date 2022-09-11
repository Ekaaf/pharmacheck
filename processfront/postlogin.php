<?php 
    include('../admin/process/connection.php');
    session_start();
    $errorMessage = "";
    if(isset($_POST['email']) && isset($_POST['password'])){
        $sql = "SELECT * FROM users where email='".$_POST['email']."' and password = '".$_POST['password']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION['user'] = $row;
            }
          header("Location: http://localhost/pharmacheck/index.php");
        }
        else{
            header("Location: http://localhost/pharmacheck/message.php?success=true&message=Username and Password do not match.");
        }
    }
    
?>