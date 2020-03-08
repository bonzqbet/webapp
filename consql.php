<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DBderdah = "webappDB";
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$DBderdah);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";

?>