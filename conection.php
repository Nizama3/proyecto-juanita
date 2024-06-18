<?php
 
    $servername = "localhost";
    $username = "root";
    $password = "Nicolas3";
    $db_name = "pasteleria";

    $conn = new mysqli($servername,$username,$password, $db_name);

    if($conn->connect_error){{}
        die("error" . $conn->connect_error);
    } 
    
    
?> 