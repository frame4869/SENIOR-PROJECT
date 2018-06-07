<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM customer WHERE ctid = '".$_GET["id"]."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้ =".$_GET["ctid"];
	}
	else
	{
		
?>
<body>
สวัสดีคุณ <?php echo $objResult["ctname"];?>
<form id="form1" name="form1" method="post" action="edit_save.php?id=<?php echo $_GET["ctid"];?>">
  <table width="77%" border="1">
    <tr>
      <td width="38%">ชื่อ</td>
      <td width="62%"><?php echo $objResult["ctname"];?></td>
    </tr>
    <tr>
      <td>นามสกุล</td>
      <td><?php echo $objResult["ctlastname"];?></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><?php echo $objResult["ctmobile"];?></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><?php echo $objResult["ctaddress"];?></td>
    </tr>
    <tr>
      <td>วันที่</td>
      <td><?php echo $objResult["ctdate"];?></td>
    </tr>
       <td>รวม</td>
      <td><?php echo $objResult["sum"];?></td>
    </tr>
  </table>
  <p><a href="select.php">กลับหน้าหลัก</a></p>
  <p>
    <?php
}
mysql_close($objConnect);
?></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>