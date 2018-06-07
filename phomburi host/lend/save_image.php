<meta charest="utf-8"/>
<?php
include('../connectdb.php');//เชื่อมฐานข้อมูล

//$txtpdname = $_REQUEST["txtpdname"];
//$txtctname = $_REQUEST["txtctname"];
//$txttotal = $_REQUEST["txttotal"];
//เว้นไว้ก่อน pdcount

//กำหนดตัวแปร

//$strSQL = "INSERT INTO orders2 (Products,Name,total)
//VALUES('$txtpdname','$txtctname','$txttotal')";

$txtpdcount=$_POST["txtpdcount"];
$strSQL = "UPDATE products2 SET ";
$strSQL .= "pdcount = '$txtpdcount' ";
$strSQL .= "WHERE id = '".$_GET["id"]."' ";

$objQuery = mysql_query($strSQL) or die("Error in query;$strSQL");

if($objQuery)
{
	header("Location:http:submit0.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='select.php'>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>
<meta charset="utf-8">
