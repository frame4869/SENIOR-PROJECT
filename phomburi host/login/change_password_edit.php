<meta charset="utf-8">
<?php
session_start();
?>
<?php
include('../connectdb.php');
$txtpassword = $_POST["txtpassword"];

$strSQL = "UPDATE member SET ";
$strSQL .= "password = '$txtpassword' ";
$strSQL .= "WHERE id = '".$_GET["id"]."'";
$objQuery = mysql_query($strSQL);

if($objQuery)
{
	echo"แก้ไขข้อมูลสำเร็จแล้ว<br>";
	echo"<a href='admin_page.php'>ดูข้อมูล</a>";
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='admin_page.php'>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>