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
เพิ่มข้อมูล
<form id="form1" name="form1" method="post" action="edit_save.php?id=<?php echo $_GET["id"];?>">
  <table width="77%" border="1">
    <tr>
      <td>ชื่อ</td>
      <td><input name="txtctname" type="text" id="txtctname" value="<?php echo $objResult["ctname"];?>" /></td>
    </tr>
    <tr>
      <td>นามสกุล</td>
      <td><input name="txtctlastname" type="text" id="txtctlastname" value="<?php echo $objResult["ctlastname"];?>" /></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><input name="txtctmobile" type="text" id="txtctmobile" value="<?php echo $objResult["ctmobile"];?>" /></td>
    </tr>
    <tr>
      
    </tr>
    <tr>
     
    <tr>
      <td>ที่อยู่</td>
      <td><input name="txtctaddress" type="ctaddress" id="txtctaddress" value="<?php echo $objResult["ctaddress"];?>" /></td><tr>
      <td>จำนวณเงิน</td>
      <td><?php echo $objResult["sum"];?></td>
    </tr>
  </table>
  <?php
}
mysql_close($objConnect);
?>

  <p>
    <input type="submit" name="Submit" id="button" value="ตกลง" />
    <input type="reset" name="button2" id="button2" value="ยกเลิก" />
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>