<meta charset="utf-8">
<?php
include('../connectdb.php');

$strSQL = "DELETE FROM customer ";
$strSQL .= "WHERE ctid = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);

mysql_close($objConnect);

if($objQuery)
{
	echo "ลบข้อมูลเรียบร้อบแล้ว<br>";
	echo "<a href='select.php'>ดูข้อมูล</a>";
}
else
{
	echo"ไม่สามารถดูข้อมูลได้<br>";
	echo"<a href='select'.php>กลับไปหน้าหลัก</a>";
}
?>