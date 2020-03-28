<script>
    function confirmDelete() {
        return confirm("Are you sure to Update?");
    }
</script>
<?php
session_start();
//check session
if(!isset($_SESSION['user'])) {
    header("Location:login.html");
}
$stu_id = $_SESSION['STU_ID'];
$iden = $_SESSION['iden'];

//start function
require("consql.php");

$sql = "SELECT * FROM user INNER JOIN student ON user.iden = student.ID";
$result = mysqli_query($conn,$sql);
    
echo "<!doctype html>";
echo "<html lang='en'>";
echo  "<head>";
echo "<!-- Required meta tags -->";
echo "<meta charset='utf-8'>";
echo    "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";

echo   "<!-- Bootstrap CSS -->";
echo    "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
$status = $_SESSION['stu'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
echo    "<title>แก้ไขข้อมูลส่วนตัว!</title>";
echo  "</head>";
echo  "<body>";
echo    "<h1>Show and edit</h1>";
echo  "<h5>ยินดีต้อนรับ : $fname $lname</h5>";
echo "<div class='row'>";
echo "<div class='col-sm'>";
echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'>";
echo    "<div class='card-header'>สถานะ</div>";
echo    "<div class='card-body'>";
echo    "<h5 class='card-title'>$status</h5>";
echo    "<p class='card-text'>โปรดรอยืนยันสิทธิ์</p>";
echo "</div>";
echo "</div>";

//echo "</div>";

echo "<table class='table'>";
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
echo "<th scope='col'>Edit</th>";
echo "<tbody>";
while($row = mysqli_fetch_assoc($result)){
    if($row['iden']== $iden){
        echo "<form action='update.php' method='get' >";
        echo "<tr>";
        echo "<th><input type='text' name='status_id' size='7' value=". $row["STU_ID"]. " readonly></th>"."<td><input type='text' name='Fname' size='7' value=". $row["Fname"] 
        . " required></td>"."<td><input type='text' name='Lname' size='7' value=". $row["Lname"]. " required></td>" . "<td><input type='text' name='ID' size='10' value=". $row["ID"]. " required></td>" 
        . "<td><input type='text' name='Gender' size='7' value=". $row["Gender"]. " required></td>" . "<td><input type='text' name='FSchool' size='9' value=". $row["FSchool"]. " required></td>" 
        . "<td><input type='text' name='GPX' size='7' value=". $row["GPX"]. " required></td>" . "<td><input type='text' name='Tel' size='15' value=". $row["Tel"]. " required></td>" 
        . "<td><input type='text' name='Univer' size='15' value=". $row["Univer"]. " required></td>" . "<td><input type='text' name='Faculty' size='25' value=". $row["Faculty"]. " required></td>" 
        . "<td><input type='submit' name='send' value='Edit' onClick='return confirmDelete()'></td>"; 
        echo "</tr>"; 
        echo "</form>";
        

    }}
    
    echo "</tbody>";
    
echo "</table>";
$ID = $_SESSION['uid'];
$check_data = "SELECT * FROM loguser WHERE ID ='$ID'";
$query_data = mysqli_query($conn,$check_data);
$check_result = mysqli_num_rows($query_data);
if($check_result > 0){
    echo "ข้อมูลของคุณสูญหายหรือเกิดปัญหา โปรดติดต่อเจ้าหน้าที่";
    echo "<script>";
    echo "alert('ข้อมูลของคุณสูญหายหรือเกิดปัญหา โปรดติดต่อเจ้าหน้าที่');";
    //echo "window.location=''";
    echo "</script>"; 
}


echo    "<!-- Optional JavaScript -->";
echo    "<!-- jQuery first, then Popper.js, then Bootstrap JS -->";
echo    "<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>";
echo    "<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>";
echo    "<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>";
echo  "</body>";
echo "</html>";
$_SESSION['test'] = "1";
if($_SESSION['stu'] == "ไม่พบข้อมูลของผู้ใช้"){
    echo    "<br><br><form action='tcasRe.php'>";
    echo        "<input type='submit' value='ลงทะเบียน'>";
    echo    "</form>";
}
?>
<html>
    <form action="logout.php" method="GET">
        <input type="submit" value="logout">
    </form>
</html>