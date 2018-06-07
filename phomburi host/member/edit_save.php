<?php
include('../connectdb.php');

$txtname=$_POST["txtname"];
$txtlastname=$_POST["txtlastname"];
$txtmobile=$_POST["txtmobile"];
$txtusername=$_POST["txtusername"];
$txtpassword=$_POST["txtpassword"];
$txtaddress=$_POST["txtaddress"];

$strSQL = "UPDATE member SET ";
$strSQL .= "name = '$txtname' ";
$strSQL .= ",lastname = '$txtlastname' ";
$strSQL .= ",mobile = '$txtmobile' ";
$strSQL .= ",username = '$txtusername' ";
$strSQL .= ",password = '$txtpassword' ";
$strSQL .= ",address = '$txtaddress' ";
$strSQL .= "WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);

if($objQuery)
{
	header("Location:http:select.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='select.php'>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>
<meta charset="utf-8">
