<?php
include('../connectdb.php');

$txtctname=$_POST["txtctname"];
$txtctlastname=$_POST["txtctlastname"];
$txtsum=$_POST["txtsum"];


$strSQL = "UPDATE payment SET ";
$strSQL .= "ctname = '$txtctname' ";
$strSQL .= ",ctlastname = '$txtctlastname' ";


$strSQL .= "WHERE payid = '".$_GET["id"]."' ";
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
