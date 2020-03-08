<table border="1">
            <tr>
                <td>ลำดับที่</td>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>เลขบัตรประชาชน</td>
                <td>เพศ</td>
                <td>จบจาก</td>
                <td>เกรดสะสม</td>
                <td>เลือกมหาลัย</td>
                <td>เลือกคณะ</td>
            </tr>
            <?php 
            //$type = $_GET['Type'];
            $sql = 'SELECT * FROM student ';
            require("consql.php"); //เชื่อม data base 
                    
                    //$sql="SELECT * FROM STATUS WHERE STATUS_ID =" . $textSearch;
                    //1 is STATUS_ID
                   

                    $result=mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)> 0) {

                        // output data of each row
                        while($row=mysqli_fetch_assoc($result)) { //นี้คือลูปใช้แสดงผล
                            //echo "id: " . $row["STATUS_ID"]. "- TH " . $row["STATUS_TH"]. " " . $row["STATUS_EN"]. "<br>";
                            echo "<form action='update_status.php' method='get' >";
                            echo "<tr>";
                            echo "<td><input type='text' name='status_id' size='7' value=". $row["STU_ID"]. " readonly></td>"; //สร้างปุ่มลบ //readonly อ่านได้อย่างเดียว
                            echo "<td><input type='text' name='status_id' size='7' value=". $row["Fname"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='7' value=". $row["Lname"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='10' value=". $row["UID"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='7' value=". $row["Gender"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='9' value=". $row["FSchool"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='7' value=". $row["GPX"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='15' value=". $row["Univer"]. " readonly></td>";
                            echo "<td><input type='text' name='status_id' size='25' value=". $row["Faculty"]. " readonly></td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                    }

                    else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                ?></tr>
        </table>
</body>

</html>