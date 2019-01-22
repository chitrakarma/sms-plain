<?php
    $conn = new mysqli("localhost","root","","student");
    
    $usern = $_POST["username"];
    $passw = $_POST["pass"];
    $sql = "SELECT firstName,lastName,email,contact,dob,pass,username from studentdata;";            
    $result = $conn->query($sql, MYSQLI_STORE_RESULT);  
    while(list($fname,$lname,$email,$contact,$dob,$pass,$username) = $result->fetch_row()){ 
        if((strcmp($pass,$passw)==0)&&(strcmp($username,$usern)==0)){     
            echo 
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <title>
                        Student Details
                    </title>
                    <script src=\"../js/drop.js\"></script>
                </head>
                <body onload=\"back()\">
                <div id=\"drop\">
                    <div id=\"form\">
                        <p id=\"sms\" align=\"center\">SMS</p>
                        <form action=\"login.php\" method=\"POST\">
                            <input type=\"text\" name=\"UserName\" placeholder=$usern value=$usern readonly/>
                            <input type=\"password\" name=\"PassWord\" placeholder=\"Enter Password to Continue\" required />
                            <input type=\"submit\" name=\"submit\" value=\"Continue\" />
                        </form>
                    </div>
                </div>
                <p align=\"center\" id=\"heading\">Student Details</p>
                <table align=\"center\" cellpadding=\"10\" border=\"1\" id=\"myTable\">
                    <tr>
                        <td>
                            First Name : 
                        </td>
                        <td>
                            $fname
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Last Name :
                        </td>
                        <td>
                            $lname
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email :
                        </td>
                        <td>    
                            $email
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contact No. :
                        </td>
                        <td>    
                            $contact
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth :
                        </td>
                        <td>    
                            $dob
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username :  
                        </td>
                        <td>    
                            $username
                        </td>
                    </tr>
            </table>
            <div id=\"button\" onclick=\"drop()\" >
                Edit Details
            </div>
                <style>
                    #sms{
                        font-weight: 600;
                        font-size: 2em;
                    }
                    #form{
                        padding-top: 5%;
                        height: 80%;
                    }
                    input{
                        display: block;
                        height: 3em;
                        width: 20em;
                        border-radius: 3px;
                        margin-left: 15%;
                        margin-top: 10%;
                    }
                    #button{
                        padding-top: 1%;
                        height: 2em;
                        width: 8em;
                        font-weight: 600;
                        border: none;
                        margin-left: 56.5%;
                        margin-top: 2%;
                        background-color: white;
                        transition: 0.5s;
                        z-index: -1;
                        cursor: pointer;
                        text-align: center;
                        display:block;
                    }
                    #button:hover{
                        background-color: lightgray;
                        box-shadow: 2px 2px 5px darkgray:
                        z-index: -1;
                    }
                    table{
                        margin-top: 1%;
                        font-size: 1.5em;
                        z-index: -1;
                    }
                    p{
                        margin-top: 10%;
                        font-weight: 600;
                        font-size: 3em;
                        z-index: -1;
                    }
                    #drop{
                        z-Index: 0;
                        height: 25em;
                        width: 25em;
                        background-color: #c2c2c2;
                        transition: 1s;
                        margin-top: -40%;
                        margin-left: 35%;
                    }
                    #drop:hover{
                        box-shadow: 2px 2px 5px darkgray;
                    }
                </style>
                </body>
                </html>
                ";
        }
    }
    
?>