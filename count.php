<?php
require("consql.php");
session_start();
$t ="ผ่าน";
$f ="ไม่ผ่าน";
$w ="รอตรวจสอบ";
//นับจำนวน
$result = mysqli_query($conn,"SELECT COUNT(*) AS `count` FROM `student`");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
$_SESSION['count'] = $count;
//นับคนผ่าน
$result = mysqli_query($conn,"SELECT COUNT(*) AS `countt` FROM `student` WHERE SHOW_STATUS ='$t'");
$row = mysqli_fetch_assoc($result);
$countt = $row['countt'];
$_SESSION['countt'] = $countt;
//นับคนไม่ผ่าน
$result = mysqli_query($conn,"SELECT COUNT(*) AS `countf` FROM `student` WHERE SHOW_STATUS ='$f'");
$row = mysqli_fetch_assoc($result);
$countf = $row['countf'];
$_SESSION['countf'] = $countf;
//นับรอตรวจสอบ
$result = mysqli_query($conn,"SELECT COUNT(*) AS `countw` FROM `student` WHERE SHOW_STATUS ='$w'");
$row = mysqli_fetch_assoc($result);
$countw = $row['countw'];
$_SESSION['countw'] = $countw;


 
    
    


?>