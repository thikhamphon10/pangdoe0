<center><a href = "form.html">เพิ่มข้อมูล</a>

<button type="submit" class="btn btn-primary"> <a href ='form_u.html?id=$res->id'> แก้ไข</a></button>

    <body>
<table border="1" >
    <th>id </th>
    <th>ชื่อ </th>
    <th>นามสกุล</th>
    <th>ที่อยู่</th>
    <th>ตำบล</th>
    <th>อำเภอ</th>
    <th>จังหวัด </th>
    <th>รหัสไฟรษณีย์</th>
    <th>เบอร์โทร</th>
    <th>วันที่</th>
    
    <th>ชื่อ </th>
    <th>นามสกุล</th>
    <th>ที่อยู่</th>
    <th>ตำบล</th>
    <th>อำเภอ</th>
    <th>จังหวัด </th>
    <th>รหัสไฟรษณีย์</th>
    <th>เบอร์โทร</th>
    <th>วันที่</th>
    <th>ลบ</th>
    <?php

include('config.php');
        // เลือกข้อมูลจากฐานข้อมูล
        $sql = "SELECT * FROM panggg";
        $query = $dbcon->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            foreach ($result as $res) {
                echo "<tr>";
                echo "<td>" . $res->id . "</td>";
                echo "<td>" . $res->name_s . "</td>";
                echo "<td>" . $res->lastn_s . "</td>";
                echo "<td>" . $res->address_s . "</td>";
                echo "<td>" . $res->tumbol_s . "</td>";
                echo "<td>" . $res->district_s . "</td>";
                echo "<td>" . $res->province_s . "</td>";
                echo "<td>" . $res->code_s . "</td>";
                echo "<td>" . $res->phonenum_s . "</td>";
                echo "<td>" . $res->date_s . "</td>";

                echo "<td>" . $res->name_r . "</td>";
                echo "<td>" . $res->lastn_r . "</td>";
                echo "<td>" . $res->address_r . "</td>";
                echo "<td>" . $res->tumbol_r . "</td>";
                echo "<td>" . $res->district_r . "</td>";
                echo "<td>" . $res->province_r . "</td>";
                echo "<td>" . $res->code_r . "</td>";
                echo "<td>" . $res->phonenum_r . "</td>";
                echo "<td>" . $res->date_s . "</td>";
                echo "<td><a href='delect.php?id=$res->id'>ลบ</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>


