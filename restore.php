<?php
require("consql.php");
session_start();
$status_id = "";
$send = "";
if(isset($_REQUEST['status_id'])) $status_id = $_REQUEST['status_id'];
if(isset($_REQUEST['send'])) $send = $_REQUEST['send'];
$user = $_SESSION['user'];
$iden = $_SESSION['iden'];

if($send == 'Restore'){ 
    $sql = "SELECT * FROM loguser WHERE STU_ID = '$status_id'"; //เลือกข้อมูลจากตาราง loguser 
    $restore_query = mysqli_query($conn,$sql);
    $restore_fet = mysqli_fetch_assoc($restore_query);
    $STU_ID = $restore_fet['STU_ID'];
    $Fname = $restore_fet['Fname'];
    $Lname = $restore_fet['Lname'];
    $ID = $restore_fet['ID'];
    $Gender = $restore_fet['Gender'];
    $Fschool = $restore_fet['Fschool'];
    $GPX = $restore_fet['GPX'];
    $Tel = $restore_fet['Tel'];
    $Univer = $restore_fet['Univer'];
    $Faculty = $restore_fet['Faculty'];
    $STATUS_ID = "1";
    $SHOW_STATUS = $restore_fet['SHOW_STATUS'];
    //นำข้อมูลไปเพิ่มลงตาราง student 
    $add = "INSERT INTO student (STU_ID, Fname, Lname, ID, Gender, Fschool, GPX, Tel, Univer, Faculty, STATUS_ID, SHOW_STATUS) VALUE";
    $add .= "('". $STU_ID ."','". $Fname ."','". $Lname ."','". $ID ."','". $Gender ."','". $Fschool ."','". $GPX ."','". $Tel ."',";
    $add .= "'". $Univer ."','". $Faculty ."','". $STATUS_ID ."','". $SHOW_STATUS ."')";
    $add_query = mysqli_query($conn,$add);
    //ลบข้อมูลผู้ใช้คนนี้ออกจากตาราง loguser
    $delete = "DELETE FROM loguser WHERE STU_ID = $status_id";
    if(mysqli_query($conn,$delete)){
        echo "<script>";
        echo "alert('การกู้ข้อมูลสำเร็จ');";
        echo "</script>";
    }
    //ลบข้อมูลผู้ที่ขอ request เข้ามา
    $request = "SELECT * FROM request WHERE iden = '$ID'";
    $request_query = mysqli_query($conn,$request);
    $row = mysqli_fetch_assoc($request_query);
    $data = $row['iden'];
    $update = "DELETE FROM request WHERE iden = $ID";
    echo $update;
    mysqli_query($conn,$update);
    header("location:logadmin.php");





 }

if($send == 'ติดต่อขอกู้ข้อมูลคืน'){
$sql = "INSERT INTO request (iden, username, status_1) VALUE ('$iden','$user','1')";
echo $sql;
$query = mysqli_query($conn,$sql);
if($query){
    echo "<script>";
    echo "alert('คำร้องของท่านสมบูรณ์');";
    echo "window.location='edituser.php'";
    echo "</script>";
}
}
?>
