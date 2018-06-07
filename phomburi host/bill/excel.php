

<?php


$strExcelFileName="POWERBI.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

include"../connectdb.php";
$strSQL = "SELECT * FROM orders
inner join orders_detail
on orders.OrderID = orders_detail.OrderID

order by orders.OrderID
";
$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อได้");
$num=mysql_num_rows($strSQL);

?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<strong></strong><br>
<br>
<div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
<table x:str border=1 cellpadding=0 cellspacing=1 width=100% style="border-collapse:collapse">
<tr>
<td width="94" height="30" align="center" valign="middle" ><strong>รหัสการซื้อ</strong></td>
<td width="200" align="center" valign="middle" ><strong>รหัสสินค้า</strong></td>
<td width="181" align="center" valign="middle" ><strong>จำนวณ</strong></td>
<td width="181" align="center" valign="middle" ><strong>วันที่</strong></td>
<td width="181" align="center" valign="middle" ><strong></strong></td>
<td width="181" align="center" valign="middle" ><strong>สินค้า</strong></td>
<td width="181" align="center" valign="middle" ><strong>ยอดการยืม</strong></td>
<td width="181" align="center" valign="middle" ><strong>วันที่ยืมสินค้า</strong></td>


</tr>
 <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
<tr>
<td height="25" align="center" valign="middle" ><?php echo$objResult['OrderID'];?></td>
<td align="center" valign="middle" ><?php echo $objResult['id'];?></td>
<td align="center" valign="middle"><?php echo $objResult['Qty'];?></td>
<td align="center" valign="middle"><?php echo $objResult['OrderDate'];?></td>
<td align="center" valign="middle"></td>
<td align="center" valign="middle"><?php echo $objResult['Products'];?></td>
<td align="center" valign="middle"><?php echo $objResult['total'];?></td>
<td align="center" valign="middle"><?php echo $objResult['Date'];?></td>

</tr>
<?php
}

?>
</table>
</div>
<script>
window.onbeforeunload = function(){return false;};
setTimeout(function(){window.close();}, 10000);
</script>
</body>
</html>
