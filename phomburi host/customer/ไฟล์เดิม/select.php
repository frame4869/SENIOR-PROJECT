<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM customer ORDER BY ctid ASC";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");	
?>
<body>
<table width="101%" border="1">
  <tr>
    <td width="7%">ID</td>
    <td width="7%">ชื่อ</td>
    <td width="18%">นามสกุล</td>
    <td width="17%">เบอร์โทร</td>
    <td width="15%">ที่อยู่</td>
    <td width="17%">วันที่</td>
    <td width="3%">จำนวณเงิน</td>
    <td width="5%">view</td>
    <td width="5%">edit</td>
    <td width="6%">delete</td>
  </tr>
  <?php
  	while($objResult = mysql_fetch_array($objQuery))
		{
		?>
  <tr>
    <td><?php echo $objResult["ctid"];?></td>
    <td><?php echo $objResult["ctname"];?></td>
    <td><?php echo $objResult["ctlastname"];?></td>
    <td><?php echo $objResult["ctmobile"];?></td>
    <td><?php echo $objResult["ctaddress"];?></td>
    <td><?php echo $objResult["ctdate"];?></td>
    <td><?php echo $objResult["sum"];?></td>
    <td><a href="view.php?id=<?php echo $objResult["ctid"];?>">view</a></td>
    <td><a href="edit.php?id=<?php echo $objResult["ctid"];?>">edit</a></td>
    <td><a href="delete.php?id=<?php echo $objResult["ctid"];?>">delete</a></td>
  </tr>
  <?php
		}
		?>
</table>
<p><a href="form_add.php">เพิ่มข้อมูล</a></p>
</body>
</html>