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
    $ins = "UPDATE studentData SET firstName='$fname', midName='$mname', lastName='$lname', email='$email', contact='$num', dob='$dob', roll='$roll', pass='$pass' WHERE username='$user';";
    $conn->query($ins);
    header("Location: http://localhost/Student/html/studLogin.html");
?>