<?php
    session_start();
    $localhost = $_POST["localhost"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $db = $_POST["db"];
    $conn = new mysqli($localhost,$username,$password,$db);
    
    header("Location: http://localhost/Student/html/Home.html");
?>