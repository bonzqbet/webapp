<?php
$status_id = $_REQUEST['status_id'];
$show_status = $_REQUEST['show_status'];
$send = $_REQUEST['send'];
require("consql.php");

if($send == 'Delete'){
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