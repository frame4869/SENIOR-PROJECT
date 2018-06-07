<meta charset="utf-8">
<?php
include('../connectdb.php');

$strSQL = "DELETE FROM products ";
$strSQL .= "WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);

mysql_close($objConnect);

if($objQuery)
{ 	header("Location:http://127.0.0.1/phomburi/products/index1111.php");
}
else
{
	echo"ไม่สามารถดูข้อมูลได้<br>";
	echo"<a href='index1111'.php>กลับไปหน้าหลัก</a>";
}
?>