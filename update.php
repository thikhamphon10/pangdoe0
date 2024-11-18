
<?php
include('config.php');

$id = $_POST['id']; 
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

$sql = "UPDATE `panggg` SET `id`='$id',`name`='$name',`lastn_s`='$lastname',`address_s`='$address',` tumbol_s`='$district',`district_s`='$dis',`province_s`='$county',`code_s`='$code',`phonenum_s`='$tel',`date_s`='$date',
`name_r`='$namee',`lastn_r`='$lastnamee',`address_r`='$addres',`tumbol_r`='$districtt',`district_r`='$diss',`province_r`='$countyy',`code_r`='$codee',`phonenum_r`='$tell',`date_r`='$datee'
 WHERE `id`='$id'";

 $query = $dbcon->prepare($sql);
 $query->bindParam(':id', $id, PDO::PARAM_STR);
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

 $query->execute();
 if ($query->rowCount()>0){
     echo"<script>alert('แก้ไขเรียบร้อยแล้ว'); window.location='select.php'</script>";
 } else {
   echo"<script>alert('มีบางอย่างผิดพลาด'); window.location='select.php'</script>";
 }
?>


