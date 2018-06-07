<meta charset="utf-8">
<?php
include('../connectdb.php');

$strSQL = "DELETE FROM member ";
$strSQL .= "WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);

mysql_close($objConnect);

if($objQuery)
{
	header("Location:http:select.php");
}
else
{
	echo"ไม่สามารถดูข้อมูลได้<br>";
	echo"<a href='select'.php>กลับไปหน้าหลัก</a>";
}
?>
