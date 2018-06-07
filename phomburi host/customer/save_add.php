<meta charest="utf-8"/>
<?php
include('../connectdb.php');//เชื่อมฐานข้อมูล

$txtctname = $_REQUEST["txtctname"];
$txtctlastname = $_REQUEST["txtctlastname"];
$txtctmobile = $_REQUEST["txtctmobile"];
$txtctaddress = $_REQUEST["txtctaddress"];
//กำหนดตัวแปร

$strSQL = "INSERT INTO customer (ctname,ctlastname,ctmobile,ctaddress)
VALUES('$txtctname','$txtctlastname','$txtctmobile','$txtctaddress')";

$objQuery = mysql_query($strSQL) or die("Error in query;$strSQL");

if($objQuery){

	header("Location:http:select.php");
}
else{
	echo"ไม่สามารถบันทึกข้อมูลได้<br>";
	echo"<a href='form_add.php'>ลองใหม่</a>";
}
?>
