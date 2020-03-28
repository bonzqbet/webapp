<?php
session_start();
require("consql.php");
$error = array();
$iden = $_REQUEST['iden'];
$ID_USER = $_REQUEST['id'];
$Tel = $_REQUEST['tel'];
$pass1 = $_REQUEST['pass1'];
$pass2 = $_REQUEST['pass2'];
$STATUS_S = "1";
$email = $_REQUEST['email'];

$_SESSION['test'] = "1";
$_SESSION['identi'] = $ID_USER;

$user_check = "SELECT * FROM user WHERE iden = '$iden' OR email = '$email'";
$query = mysqli_query($conn, $user_check);
$result = mysqli_num_rows($query);
if($result > 0){
    echo "<script>";
    echo "alert('Identification number or Email already exists');";
    echo "window.history.back();";
    echo "</script>"; 
    }
if($result == null){
    if($pass1 == $pass2){
        $sql = "INSERT INTO user (iden, ID_USER, Tel, PASS_S, STATUS_ID, email) VALUE";
        $sql .= "('". $iden ."','". $ID_USER ."','". $Tel ."','". $pass1 ."','". $STATUS_S ."','". $email ."')";
        echo $sql;
        if(mysqli_query($conn,$sql)){
            echo "Udate sucessfuly";
            $check_iden = "SELECT * FROM user WHERE iden = '$iden'";
            $check_query = mysqli_query($conn, $check_iden);
            $row = mysqli_fetch_assoc($check_query);
            $_SESSION['uid'] = $row['iden'];
            echo $_SESSION['uid'];
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
}
?>
