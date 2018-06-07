<meta charset="utf-8">
<?php
session_start();
include('../connectdb.php');
$txtname =$_POST["txtname"];
$txtlastname =$_POST["txtlastname"];
$txtmobile =$_POST["txtmobile"];

$strSQL = "UPDATE member SET ";
$strSQL .= "name = '$txtname' ";
$strSQL .= ",lastname = '$txtlastname' ";
$strSQL .= ",mobile = '$txtmobile' ";
$strSQL .= "WHERE id = '".$_SESSION["id"]."'";
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