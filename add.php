<?php
//1.con
require("consql.php");
$Fname = $_REQUEST['Fname'];
$Lname = $_REQUEST['Lname'];
$ID = $_REQUEST['ID'];
$Gender = $_REQUEST['gender'];
$School = $_REQUEST['school'];
$GPX = $_REQUEST['GPX'];
$Tel = $_REQUEST['tel'];
$Univer = $_REQUEST['univer'];
$Major = $_REQUEST['branch'];
$status_id = "1";
$show_status = "รอตรวจสอบ";
//2.select
$sql = "INSERT INTO student (Fname, Lname, ID, Gender, Fschool, GPX, Tel, Univer, Faculty, STATUS_ID, SHOW_STATUS) VALUE";
$sql .= "('". $Fname ."','". $Lname ."','". $ID ."','". $Gender ."','". $School ."','". $GPX ."','". $Tel ."','". $Univer ."','". $Major ."','". $status_id ."','". $show_status ."')";

if(mysqli_query($conn,$sql)){
    echo "<script>";
    echo "alert('sign up successfully');";
    echo "window.location='login.html';";
    echo "</script>";
    //header("Location:login.html");
}
else{
    echo "Error";
}
mysqli_close($conn);
?>