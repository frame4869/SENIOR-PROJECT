<meta charest="utf-8"/>
<?php
include('../connectdb.php');//เชื่อมฐานข้อมูล

$txtname = $_REQUEST["txtname"];
$txtlastname = $_REQUEST["txtlastname"];
$txtmobile = $_REQUEST["txtmobile"];
$txtusername = $_REQUEST["txtusername"];
$txtpassword = $_REQUEST["txtpassword"];
$txtaddress = $_REQUEST["txtaddress"];
$txtstatus = $_REQUEST["txtstatus"];
//กำหนดตัวแปร

$strSQL = "INSERT INTO member (name,lastname,mobile,username,password,address,status)
VALUES('$txtname','$txtlastname','$txtmobile','$txtusername','$txtpassword','$txtaddress','$txtstatus')";

$objQuery = mysql_query($strSQL) or die("Error in query;$strSQL");

if($objQuery){
	header("Location:http:select.php");
}
else{
	echo"ไม่สามารถบันทึกข้อมูลได้<br>";
	echo"<a href='form_add.php'>ลองใหม่</a>";
}
?>
