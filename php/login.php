<?php
    $conn = new mysqli("localhost","root","","student");
    $usern = $_POST["UserName"];
    $passw = $_POST["PassWord"];
    $sql = "SELECT firstName,lastName,email,contact,dob,pass,username from studentData;";
    $result = $conn->query($sql, MYSQLI_STORE_RESULT);
    while(list($fname,$lname,$email,$contact,$dob,$pass,$username) = $result->fetch_row()){ 
        if((strcmp($pass,$passw)==0)&&(strcmp($username,$usern)==0)){     
            echo "
                <!DOCTYPE html>
                <html>
                    <head>
                        <title>
                            Edit Details
                        </title>
                        <link rel=\"stylesheet\" href=\"../bs/css/bootstrap.min.css\" />
                        <style>
                            input[type=\"date\"]{
                                width: 100%;
                            }
                            input[type=\"submit\"]{
                                width: 100%;
                            }
                            table{
                                margin-top: 5%;
                            }
                            #heading{
                                font-size: 3em;
                                font-weight: 600;
                                margin-top: 7%;
                            }
                        </style>
                    </head>
                    <body>
                        <p align=\"center\" id=\"heading\">Edit Details</p>
                        <div align=\"center\" class=\"container\">
                            <form action=\"update.php\" method=\"POST\" >
                                <table cellpadding=\"15\">
                                    <tr>
                                        <td>
                                            <input type=\"text\" name=\"fname\" placeholder=\"$fname\" value=\"$fname\" required/>
                                        </td>
                                        
                                        <td>
                                            <input type=\"text\" name=\"lname\" value=$lname  placeholder=$lname required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type=\"email\" name=\"mail\" value=$email  placeholder=$email required/>
                                        </td>
                                        <td>
                                            <input type=\"tel\" name=\"num\" value=$contact placeholder=$contact required/>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <input type=\"text\" name=\"pass\" value=$pass placeholder=$pass required />
                                        </td>
                                        <td>
                                            <input type=\"text\" name=\"username\" value=$username placeholder=$username readonly />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\">
                                            <input type=\"submit\" value=\"Submit\"/>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </body>
                </html>
            ";
        }
    }
?>