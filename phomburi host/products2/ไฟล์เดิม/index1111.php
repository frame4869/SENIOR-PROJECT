<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM products ORDER BY id asc";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");	
?>
<body>
<table width="100%" border="1">
  <tr>
    <td width="7%">ID</td>
    <td width="7%">ภาพ</td>
    <td width="18%">ชื่อสินค้า</td>
    <td width="15%">ราคา</td>
    <td width="17%">จำนวน</td>
    <td width="3%">ประเภท</td>
    <td width="5%">edit</td>
    <td width="6%">delete</td>
  </tr>
  <?php
  	while($objResult = mysql_fetch_array($objQuery))
		{
		?>
  <tr>
    <td><center><?php echo $objResult["id"];?></td>
    <td><img src="myfile/<?=$objResult["pdimg"];?>" width="64" height="64"></td>
    <td><?php echo $objResult["pdname"];?></td>
    <td><center><?php echo $objResult["pdprice"];?></td>
    <td><center><?php echo $objResult["pdcount"];?></td>
    <td><center><?php echo $objResult["pdtype"];?></td>
    <td><a href="upimg4.php?id=<?php echo $objResult["id"];?>">edit</a></td>
    <td><a href="delete.php?id=<?php echo $objResult["id"];?>">delete</a></td>
  </tr>
  <?php
		}
		?>
</table>
<p><a href="form_upload.php">เพิ่มข้อมูล</a></p>
</body>
</html>