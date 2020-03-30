<script>
    function confirmDelete() {
        return confirm("Are you sure to Delete?");
    }
</script>
<script>
    function confirmUpdate() {
        return confirm("Are you sure to Restroe?");
    }
</script>
<?php
session_start();
//check session
if(!isset($_SESSION['user'])) {
    header("Location:login.html");
}
$send = "";

$num = $_SESSION['count'];
$t = $_SESSION['countt'];
$f = $_SESSION['countf'];
$w = $_SESSION['countw'];
//start function
require("consql.php");
$admin = $_SESSION['ID_USER'];


echo "<!doctype html>";
echo "<html lang='en'>";
echo  "<head>";
echo "<!-- Required meta tags -->";
echo "<meta charset='utf-8'>";
echo    "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";

echo   "<!-- Bootstrap CSS -->";
echo "<link rel='stylesheet' href='count.php'>";
echo    "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
//แสดงจำนวนคนทั้งหมด
echo    "<title>จัดการข้อมูล!</title>";
echo  "</head>";
echo  "<body>";
//echo "<div class='container'>";
echo    "<h1>Show Logflie history</h1>";
echo  "<h5>ยินดีต้อนรับ : $admin</h5>";
echo "<div class='row'>";
echo "<div class='col-sm'>";
echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'>";
echo    "<div class='card-header'>ผู้ที่สมัคร</div>";
echo    "<div class='card-body'>";
echo    "<h5 class='card-title'>ทั้งหมด $num คน</h5>";
echo    "<h6 class='card-title'>จำนวนผู้ที่ผ่าน    $t คน</h6>";
echo    "<h6 class='card-title'>จำนวนผู้ที่ไม่ผ่าน  $f คน</h6>";
echo    "<h6 class='card-title'>จำนวนผู้รอสถานะ  $w คน</h6>";
echo    "<p class='card-text'>จำนวนอาจมีการเปลี่ยนแปลง</p>";
echo "</div>";
echo "</div>";
//echo "</div>";


//logout
echo "<form action='logout.php' method='GET'>";
echo       "<input type='submit' value='logout'>";
echo    "</form>";
echo "<form action='editadmin.php' method='GET'>";
echo       "<input type='submit' value='จัดการข้อมูล'>";
echo    "</form>";
echo "</div>";
echo "</div>";
//form search
$txtSearch = "";
$type = "";
if(isset($_GET['txtSearch'])){ 
    $txtSearch = $_GET['txtSearch'];}
if(isset($_GET['Type'])){
    $type = $_GET['Type'];}
echo "<table class='table' >";
echo "<thead class='thead-dark'>";
echo "<form>";
echo "<tr>";
echo "<th>ค้นหา</th>";
echo "<th><input type='text' name='txtSearch' size='14' value='$txtSearch'></th>";
echo "<th><select name='Type'>";
echo "<option value='1'  if($type == 1) echo 'selected'; >จากชื่อ</option>";
echo "<option value='2'  if($type == 2) echo 'selected'; >จากเลขประจำตัวประชาชน</option>";
echo "<option value='4'  if($type == 4) echo 'selected'; >จากมหาลัย</option>";
echo "</th>";
echo "<th>";
echo "<input type='submit' name='send' value='Search'>";
echo "</th>";
echo "</form>";
echo "</table>";


$sql = "SELECT * FROM loguser INNER JOIN status ON loguser.STATUS_ID = status.status_id ";
if($type==""){
    $sql .= "";
}
else if($type==1){
    $sql .= "WHERE Fname LIKE '%" . $txtSearch . "%'";
}
else if($type==2){
    $sql .= "WHERE ID LIKE '%" . $txtSearch . "%'";
}
else if($type==4){
    $sql .= "WHERE Univer LIKE '%" . $txtSearch . "%'";
}
//show data request
//show data request
$check_user = "SELECT * FROM request WHERE id !='1' ";  //WHERE status_1 = '1'
$user_query = mysqli_query($conn,$check_user);
$_SESSION['user'];
echo "<table class='table' >";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>เลขประจำตัวประชาชน</th>";
echo "<th scope='col'></th>";
echo "<th scope='col'>username</th>";
echo "<th scope='col'>Description</th>";
echo "<tbody>";

if(mysqli_num_rows($user_query)>=0){
    while($row = mysqli_fetch_assoc($user_query)){
        echo "<form action='restore.php' method='get' >";
        echo "<tr>";
        echo "<th><input type='text' size='13' name='iduser' value=" .$row['iden']. " readonly></th>"."<td>"
        . " </td>"."<td>". $row["username"]. "</td>" . "<td>มีการร้องขอ</td> ";
        echo "</tr>"; 
        echo "</form>";
    }}
echo "</tbody>";


//show data loguser
$result = mysqli_query($conn,$sql);
$show = mysqli_num_rows($result);
echo "<table class='table' >";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>#</th>";
echo "<th scope='col'>ชื่อ</th>";
echo "<th scope='col'>นามสกุล</th>";
echo "<th scope='col'>เลขประจำตัวประชาชน</th>";
echo "<th scope='col'>เพศ</th>";
echo "<th scope='col'>จบจาก</th>";
echo "<th scope='col'>เกรดสะสม</th>";
echo "<th scope='col'>เบอร์โทร</th>";
echo "<th scope='col'>เลือกมหาวิทยาลัย</th>";
echo "<th scope='col'>เลือกคณะ</th>";
echo "<th scope='col'>สถานะ</th>";
echo "<th scope='col'>กู้ข้อมูลกลับ</th>";
echo "<tbody>";
if($show>=0){
//if(mysqli_num_rows($result)>=0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<form action='restore.php' method='get' >";
        echo "<tr>";
        echo "<th><input type='text' size='1' name='status_id' value=" .$row['STU_ID']. " readonly></th>"."<td>". $row["Fname"] 
        . " </td>"."<td>". $row["Lname"]. "</td>" . "<td>". $row["ID"]. " </td>" 
        . "<td>". $row["Gender"]. " </td>" . "<td>". $row["Fschool"]. " </td>" 
        . "<td>". $row["GPX"]. " </td>" . "<td>". $row["Tel"]. " </td>" 
        . "<td>". $row["Univer"]. " </td>" . "<td>". $row["Faculty"]. " </td> " . "<td>". $row["SHOW_STATUS"]. "</td> " 
        . "<td><input type='submit' name='send' value='Restore' onClick='return confirmUpdate()'></td>";
        echo "</tr>"; 
        echo "</form>";
        
    }}
    
    echo "</tbody>";
    
echo "</table>";

echo    "<!-- Optional JavaScript -->";
echo    "<!-- jQuery first, then Popper.js, then Bootstrap JS -->";
echo    "<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>";
echo    "<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>";
echo    "<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>";
echo  "</body>";
echo "</html>";

?>
