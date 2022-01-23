<?php 
    include('connection.php');
    session_start();
    $errorMessage = "";
    if(isset($_POST['email']) && isset($_POST['password'])){
        $sql = "SELECT * FROM users where email='".$_POST['email']."' and password = '".$_POST['password']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row['role'] !=1){
                    header("Location: http://localhost/pharmacheck/admin/login.php?success=true&errorMessage=You don't have permission to access this page");
                    exit;
                }
                else{
                    $_SESSION['user'] = $row;
                };
            }
          header("Location: http://localhost/pharmacheck/admin/add_pharmacy.php");
        }
        else{
            header("Location: http://localhost/pharmacheck/admin/login.php?success=true&errorMessage=Username and Password do not match.");
        }
    }
    
?>