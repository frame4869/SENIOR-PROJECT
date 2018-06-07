<?php
include('../connectdb.php');

$txtstatus=$_POST["txtstatus"];



$strSQL = "UPDATE orders2 SET ";
$strSQL .= "status = '$txtstatus' ";



$strSQL .= "WHERE OrderID = '".$_GET["id"]."' ";
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
