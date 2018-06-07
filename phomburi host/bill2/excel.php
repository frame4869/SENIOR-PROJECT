

<?php


$strExcelFileName="POWERBI.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

include"../connectdb.php";
$strSQL = "SELECT * FROM orders";
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
<td width="94" height="30" align="center" valign="middle" ><strong>รหัสสมาชิก</strong></td>
<td width="200" align="center" valign="middle" ><strong>ชื่อผู้ใช้งาน</strong></td>
<td width="181" align="center" valign="middle" ><strong>ที่อยู่</strong></td>
<td width="181" align="center" valign="middle" ><strong>เบอร์โทรศัทพ์</strong></td>
<td width="181" align="center" valign="middle" ><strong>วันที่</strong></td>

</tr>
 <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?> 
<tr>
<td height="25" align="center" valign="middle" ><?php echo$objResult['OrderID'];?></td>
<td align="center" valign="middle" ><?php echo $objResult['Name'];?></td>
<td align="center" valign="middle"><?php echo $objResult['Address'];?></td>
<td align="center" valign="middle"><?php echo $objResult["Tel"];?></td>
<td align="center" valign="middle"><?php echo $objResult['OrderDate'];?></td>

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