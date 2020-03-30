<?php
session_start();
$status_id = $_REQUEST['status_id'];
$show_status = $_REQUEST['show_status'];
$send = $_REQUEST['send'];
require("consql.php");
$L1 = $_SESSION['L1']; //$STU_ID;
$L2= $_SESSION['L2'];  //$Fname;
$L3 = $_SESSION['L3']; //$Lname;
$L4 = $_SESSION['L4']; //$ID;
$L5 = $_SESSION['L5']; //$Gender;
$L6 = $_SESSION['L6']; //$Fschool;
$L7 = $_SESSION['L7']; //$GPX;
$L8 = $_SESSION['L8']; //$Tel;
$L9 = $_SESSION['L9']; //$Univer;
$L10 = $_SESSION['L10']; //$Faculty;
$L11 = $_SESSION['L11']; //$SHOW_STATUS;
$L12 = "2"; // Log
//$sqli = "INSERT INTO loguser (STU_ID, Fname, Lname, ID, Gender, Fschool, GPX, Tel, Univer, Faculty, SHOW_STATUS, STATUS_ID) VALUE";
//$sqli .= "('". $L1 ."','". $L2 ."','". $L3 ."','". $L4 ."','". $L5 ."','". $L6 ."','". $L7 ."','". $L8 ."','". $L9 ."','". $L10 ."','". $L11 ."','". $L12 ."')";
if($send == 'Delete'){
    //echo "inloop succesful";
    $dd = "SELECT * FROM student WHERE STU_ID = $status_id";
    $qq = mysqli_query($conn,$dd);
    $row = mysqli_fetch_assoc($qq);
    $s1 = $row['STU_ID'];
    $s2 = $row['Fname'];
    $s3 = $row['Lname'];
    $s4 = $row['ID'];
    $s5 = $row['Gender'];
    $s6 = $row['Fschool'];
    $s7 = $row['GPX'];
    $s8 = $row['Tel'];
    $s9 = $row['Univer'];
    $s10 = $row['Faculty'];
    $s11 = $row['SHOW_STATUS'];
    $sqli = "INSERT INTO loguser (STU_ID, Fname, Lname, ID, Gender, Fschool, GPX, Tel, Univer, Faculty, SHOW_STATUS, STATUS_ID) VALUE";
    $sqli .= "('". $s1 ."','". $s2 ."','". $s3 ."','". $s4 ."','". $s5 ."','". $s6 ."','". $s7 ."','". $s8 ."','". $s9 ."','". $s10 ."','". $s11 ."','". $L12 ."')";
    $ss = mysqli_query($conn,$sqli);
    if($ss){
        echo "insert succesful";
    }
    echo $sqli;
     $sql = "DELETE FROM student WHERE STU_ID = $status_id";
     if(mysqli_query($conn,$sql)){
         echo "delete success";
         header("location:editadmin.php");
     }
     else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

else if($send == 'Edit'){
    $sql = "UPDATE student ";
    $sql .= "SET SHOW_STATUS = '$show_status' ";
    $sql .= "WHERE STU_ID = $status_id";
    if(mysqli_query($conn,$sql)){
        echo "Edit successfully";
        header("location:editadmin.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>