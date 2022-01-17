<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db="pharmacheck";
    $conn=mysqli_connect($host,$username,$pass,$db);

    if(!$conn){
        die("Data connection error");
    }
?>