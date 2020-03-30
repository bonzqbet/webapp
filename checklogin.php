<?php
session_start();
require("consql.php");
require("count.php");

$id = $_REQUEST['ID'];
$pass = $_REQUEST['pass'];
$_SESSION['uid'] = "";
$sql = "SELECT * FROM user WHERE ID_USER ='$id' AND PASS_S ='$pass'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $_REQUEST['ID'];
    $_SESSION['pass'] = $_REQUEST['pass'];
    $_SESSION['status'] = $row['STATUS_ID'];
    $_SESSION['iden'] = $row['iden'];
    $uid = $row['iden'];
    $_SESSION['ID_USER'] = $row['ID_USER'];
    $iden = $_SESSION['iden'];
    if($_SESSION['status']=="1"){ //โชว์สถานะของผู้ใช้คนนั้น
        $res = mysqli_query($conn,"SELECT * FROM `student` WHERE ID ='$iden'");
        $row = mysqli_fetch_assoc($res);
        $stu = $row['SHOW_STATUS'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        if($stu == null){
            $check_iden = "SELECT * FROM user WHERE iden = '$uid'";
            $check_query = mysqli_query($conn, $check_iden);
            $row = mysqli_fetch_assoc($check_query);
            $_SESSION['uid'] = $row['iden'];
            echo $_SESSION['uid'];
            $_SESSION['stu'] = "ไม่พบข้อมูลของผู้ใช้";
        }
        if($stu != null){
            $_SESSION['stu'] = $stu;
        }
        header("Location:edituser.php");
    }
    if($_SESSION['status']=="2"){
        $res1 = mysqli_query($conn,"SELECT * FROM `loguser`");
        $row1 = mysqli_fetch_assoc($res1);
        $_SESSION['log'] = $row1['Log'];
        header("Location:editadmin.php");
        //header("Location:logadmin.php");
    }
    //รับ session เพื่อ แสดงข้อมูลผู้ใช้งานคนนั้น
    $sqq = "SELECT * FROM student";
    $sq = mysqli_query($conn,$sqq);
    if(mysqli_num_rows($sq)){
        $row = mysqli_fetch_assoc($sq);
        $_SESSION['STU_ID'] = "";
        $_SESSION['STU_ID'] = $row['STU_ID'];
        $s = $_SESSION['STU_ID'];   
    }
    mysqli_close($conn);
}
else{
    echo "<script>";
    echo "alert('รหัสผ่านผิด');";
    echo "window.location='login.html';";
    echo "</script>";
    //header("Location:login.html");
}

?>