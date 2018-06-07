<?php
include('../connectdb.php');

$txtctname=$_POST["txtctname"];
$txtctlastname=$_POST["txtctlastname"];
$txtctmobile=$_POST["txtctmobile"];
$txtctaddress=$_POST["txtctaddress"];

$strSQL = "UPDATE customer SET ";
$strSQL .= "ctname = '$txtctname' ";
$strSQL .= ",ctlastname = '$txtctlastname' ";
$strSQL .= ",ctmobile = '$txtctmobile' ";
$strSQL .= ",ctaddress = '$txtctaddress' ";
$strSQL .= "WHERE ctid = '".$_GET["id"]."' ";
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
