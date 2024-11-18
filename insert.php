<?php
require_once('config.php');

// ตรวจสอบค่าที่ส่งมาใน $_POST
if (
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['lastname']) && !empty($_POST['lastname']) &&
    isset($_POST['address']) && !empty($_POST['address']) &&
    isset($_POST['district']) && !empty($_POST['district']) &&
    isset($_POST['dis']) && !empty($_POST['dis']) &&
    isset($_POST['county']) && !empty($_POST['county']) &&
    isset($_POST['code']) && !empty($_POST['code']) &&
    isset($_POST['tel']) && !empty($_POST['tel']) &&
    isset($_POST['date']) && !empty($_POST['date']) &&
    isset($_POST['namee']) && !empty($_POST['namee']) &&
    isset($_POST['lastnamee']) && !empty($_POST['lastnamee']) &&
    isset($_POST['addres']) && !empty($_POST['addres']) &&
    isset($_POST['districtt']) && !empty($_POST['districtt']) &&
    isset($_POST['diss']) && !empty($_POST['diss']) &&
    isset($_POST['countyy']) && !empty($_POST['countyy']) &&
    isset($_POST['codee']) && !empty($_POST['codee']) &&
    isset($_POST['tell']) && !empty($_POST['tell']) &&
    isset($_POST['datee']) && !empty($_POST['datee'])
) {
    // กำหนดค่าจาก $_POST
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $dis = $_POST['dis'];
    $county = $_POST['county'];
    $code = $_POST['code'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];

    $namee = $_POST['namee'];
    $lastnamee = $_POST['lastnamee'];
    $addres = $_POST['addres'];
    $districtt = $_POST['districtt'];
    $diss = $_POST['diss'];
    $countyy = $_POST['countyy'];
    $codee = $_POST['codee'];
    $tell = $_POST['tell'];
    $datee = $_POST['datee'];

    // SQL Query โดยไม่ระบุ id ถ้า id เป็น AUTO_INCREMENT
    $sql = "INSERT INTO `panggg`(`name_s`, `lastn_s`, `address_s`, `tumbol_s`, `district_s`, `province_s`, `code_s`, `phonenum_s`, `date_s`, `name_r`, `lastn_r`, `address_r`, `tumbol_r`, `district_r`, `province_r`, `code_r`, `phonenum_r`, `date_r`) 
            VALUES (:name, :lastname, :address, :district, :dis, :county, :code, :tel, :date, :namee, :lastnamee, :addres, :districtt, :diss, :countyy, :codee, :tell, :datee)";

    // Prepare SQL statement
    $query = $dbcon->prepare($sql);

    // Bind parameters
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':district', $district, PDO::PARAM_STR);
    $query->bindParam(':dis', $dis, PDO::PARAM_STR);
    $query->bindParam(':county', $county, PDO::PARAM_STR);
    $query->bindParam(':code', $code, PDO::PARAM_STR);
    $query->bindParam(':tel', $tel, PDO::PARAM_STR);
    $query->bindParam(':date', $date, PDO::PARAM_STR);

    $query->bindParam(':namee', $namee, PDO::PARAM_STR);
    $query->bindParam(':lastnamee', $lastnamee, PDO::PARAM_STR);
    $query->bindParam(':addres', $addres, PDO::PARAM_STR);
    $query->bindParam(':districtt', $districtt, PDO::PARAM_STR);
    $query->bindParam(':diss', $diss, PDO::PARAM_STR);
    $query->bindParam(':countyy', $countyy, PDO::PARAM_STR);
    $query->bindParam(':codee', $codee, PDO::PARAM_STR);
    $query->bindParam(':tell', $tell, PDO::PARAM_STR);
    $query->bindParam(':datee', $datee, PDO::PARAM_STR);

    // Execute query
    $result = $query->execute();

    if ($result) {
        echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว'); window.location='select.php';</script>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด'); window.location='select.php';</script>";
    }
} 
?>
