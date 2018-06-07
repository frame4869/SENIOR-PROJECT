<?php
include('../connectdb.php');

$txtpdcount=$_POST["txtpdcount"];



$strSQL = "UPDATE products2 SET ";
$strSQL .= "pdcount = '$txtpdcount' ";



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
