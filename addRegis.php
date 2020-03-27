<?php
session_start();
require("consql.php");
$iden = $_REQUEST['iden'];
$ID_USER = $_REQUEST['id'];
$Tel = $_REQUEST['tel'];
$pass1 = $_REQUEST['pass1'];
$pass2 = $_REQUEST['pass2'];
$STATUS_S = "1";
$email = $_REQUEST['email'];

$_SESSION['test'] = "1";

if($pass1 == $pass2){
    $sql = "INSERT INTO user (iden, ID_USER, Tel, PASS_S, STATUS_ID, email) VALUE";
    $sql .= "('". $iden ."','". $ID_USER ."','". $Tel ."','". $pass1 ."','". $STATUS_S ."','". $email ."')";
    echo $sql;
    if(mysqli_query($conn,$sql)){
        echo "Udate sucessfuly";
        header("Location:tcasRe.php");
    }
    else{
        echo "Error";
    }
    mysqli_close($conn);    
}
else{
    echo "<script>";
    echo "alert('the two password do not match');";
    echo "window.location='addRe.html';";
    echo "</script>";
}


?>
