<?php
session_start();
//check session
if(!isset($_SESSION['test'])) {
    header("Location:addRe.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="add.php" method="GET">
    <header>
        <div class="overlay">
            <h1>ลงทะเบียน</h1>
            ชื่อ : <input type="text" name="Fname" required> นามสกุล : <input type="text" name="Lname" id="aa" required><br>
            เพศ : ชาย<input type="radio" name="gender" value="ชาย">หญิง<input type="radio" name="gender" value="หญิง"><br>
            จบจากสถานศึกษา : <input type="text" name="school" id="aa" required><br>
            GPX : <input type="text" name="GPX" id="aa" required><br>
            เบอร์โทรศัพท์ : <input type="text" name="tel" id="aa" pattern="[0-9]{10,15}" title="กรอกเบอร์โทรไม่ถูกต้อง" required><br>
            เลือกศึกษาต่อ : <select name="univer" id="Uni">
                <option value="มหาวิทยาลัยแม่โจ้">มหาวิทยาลัยแม่โจ้</option>
                <option value="มหาวิทยาลัยนเรศวร">มหาวิทยาลัยนเรศวร</option>
                <option value="มหาวิทยาลัยเชียงใหม่">มหาวิทยาลัยเชียงใหม่</option>
                <option value="มหาวิทยาลัยแม่ฟ้าหลวง">มหาวิทยาลัยแม่ฟ้าหลวง</option>
                <option value="มหาวิทยาลัยพะเยา">มหาวิทยาลัยพะเยา</option>
                <option value="มหาวิทยาลัยราชภัฏเชียงใหม่">มหาวิทยาลัยราชภัฏเชียงใหม่</option>
                <option value="มหาวิทยาลัยราชภัฏเชียงราย">มหาวิทยาลัยราชภัฏเชียงราย</option>
                <option value="มหาวิทยาลัยราชภัฏลำปาง">มหาวิทยาลัยราชภัฏลำปาง</option>
                <option value="มหาวิทยาลัยราชภัฏเพชรบูรณ์">มหาวิทยาลัยราชภัฏเพชรบูรณ์</option>
                <option value="มหาวิทยาลัยราชภัฏนครสวรรค์">มหาวิทยาลัยราชภัฏนครสวรรค์</option>
                <option value="มหาวิทยาลัยราชภัฏพิบูลสงคราม">มหาวิทยาลัยราชภัฏพิบูลสงคราม</option>
                <option value="มหาวิทยาลัยราชภัฏอุตรดิตถ์">มหาวิทยาลัยราชภัฏอุตรดิตถ์</option>
                <option value="มหาวิทยาลัยราชภัฏกำแพงเพชร">มหาวิทยาลัยราชภัฏกำแพงเพชร</option>
                <option value="มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา">มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา</option>
                <option value="มหาวิทยาลัยนอร์ท-เชียงใหม่">มหาวิทยาลัยนอร์ท-เชียงใหม่</option>
                <option value="มหาวิทยาลัยฟาร์อีสเทอร์น">มหาวิทยาลัยฟาร์อีสเทอร์น</option>
                <option value="มหาวิทยาลัยพายัพ">มหาวิทยาลัยพายัพ</option>
                <option value="มหาวิทยาลัยเนชั่น">มหาวิทยาลัยเนชั่น</option>
                <option value="มหาวิทยาลัยเจ้าพระยา">มหาวิทยาลัยเจ้าพระยา</option>
                <option value="มหาวิทยาลัยภาคกลาง">มหาวิทยาลัยภาคกลาง</option>
                <option value="มหาวิทยาลัยพิษณุโลก">มหาวิทยาลัยพิษณุโลก</option>
            </select><br>
            <select name="branch" id="major">
                <option value="คณะเทคโนโลยีสารสนเทศและการสื่อสาร">คณะเทคโนโลยีสารสนเทศและการสื่อสาร</option>
                <option value="คณะเกษตรศาสตร์และทรัพยากรธรรมชาติ">คณะเกษตรศาสตร์และทรัพยากรธรรมชาติ</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                <option value="คณะสถาปัตยกรรมศาสตร์และศิลปกรรมศาสตร์">คณะสถาปัตยกรรมศาสตร์และศิลปกรรมศาสตร์</option>
                <option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
                <option value="คณะนิสิตคณะนิติศาสตร์">คณะนิสิตคณะนิติศาสตร์</option>
                <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                <option value="คณะรัฐศาสตร์และสังคมศาสตร์">คณะรัฐศาสตร์และสังคมศาสตร์</option>
                <option value="คณะวิทยาการจัดการและสารสนเทศศาสตร์">คณะวิทยาการจัดการและสารสนเทศศาสตร์</option>
                <option value="คณะวิทยาศาสตร์การแพทย์">คณะวิทยาศาสตร์การแพทย์</option>
                <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
                <option value="คณะสหเวชศาสตร์">คณะสหเวชศาสตร์</option>
                <option value="คณะพลังงานและสิ่งแวดล้อม">คณะพลังงานและสิ่งแวดล้อม</option>
                <option value="วิทยาลัยการศึกษา">วิทยาลัยการศึกษา</option>
                <option value="วิทยาลัยการจัดการ">วิทยาลัยการจัดการ</option>
            </select><br>
            <br>
            <input type="submit" value="ยืนยัน" id="log">
        </div>
    </header>
    </form>
</body>
</html>