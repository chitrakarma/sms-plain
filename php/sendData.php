<?php
    $conn = new mysqli("localhost","root","","student");
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $email = $_POST["mail"];
    $num = $_POST["num"];
    $dob = $_POST["dob"];
    $roll = $_POST["roll"];
    $pass = $_POST["pass"];
    $user = $_POST["username"];
    $ins = "INSERT INTO studentData VALUES ('$fname','$mname','$lname','$email',$num,'$dob','$roll','$pass','$user');";
    $conn->query($ins);
    header("Location: http://localhost/Student/html/Home.html");
?>