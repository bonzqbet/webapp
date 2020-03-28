<?php
session_start();
require("consql.php");
$status_id = $_REQUEST['status_id'];
$user = $_SESSION['user'];
$fname = $_REQUEST['Fname'];
$lname = $_REQUEST['Lname'];
$id = $_REQUEST['ID'];
$gender = $_REQUEST['Gender'];
$fschool = $_REQUEST['FSchool'];
$gpx = $_REQUEST['GPX'];
$tel = $_REQUEST['Tel'];
$univer = $_REQUEST['Univer'];
$faculty = $_REQUEST['Faculty'];

// update id table student
$sql = "UPDATE student ";
$sql .= "SET Fname='$fname', Lname='$lname', Gender='$gender', FSchool='$fschool', GPX='$gpx', Tel='$tel'";
$sql .= "WHERE STU_ID = $status_id" ;
//update iden table user
$sqli = "UPDATE user ";
$sqli .= "SET iden = '$id'";
$sqli .= "WHERE ID_USER = $user";
if(mysqli_query($conn,$sql)){
    echo "update success";
    if(mysqli_query($conn,$sqli)){
        header("Location:edituser.php");
    }
    header("location:edituser.php");
}
else{
    echo "Error :" . $sql . "<br>" . mysqli_error($conn);
    echo "Error :" . $sqli . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>