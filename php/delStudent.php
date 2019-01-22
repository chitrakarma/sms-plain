<?php
    $conn = new mysqli("localhost","root","","student");
    $roll = $_POST["roll"];
    $pass = $_POST["pass"];
    $user = $_POST["adminPass"];
    $admin = "clghnpsc";
    $sql = "DELETE from studentData WHERE roll='$roll';";
    $ret = "SELECT pass,roll from studentData;";
    $result = $conn->query($ret,MYSQLI_STORE_RESULT);
    if(strcmp($admin,$user)==0){
        while(list($password,$rollno)=$result->fetch_row()){
            if((strcmp($password,$pass)==0)&&(strcmp($rollno,$roll)==0)){
                $conn->query($sql);
            }
        }
        header("Location: http://localhost/Student/html/Home.html");
    }
    else{

        header("Location: http://localhost/Student/html/delStudent.html");
    }
?>