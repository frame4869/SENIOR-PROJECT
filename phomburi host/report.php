<?php


$strExcelFileName="Member-All.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

include 'function.inc.php';
include('../connectdb.php');
	$strSQL = "SELECT *
FROM member
INNER JOIN orderlist
ON member.memberid = orderlist.memberid
INNER JOIN rice
ON rice.id = orderlist.id
INNER JOIN category
ON category.categoryid = rice.categoryid

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
<strong>รายงานยอดขาย วันที่ <?php echo thaidate($curdate); ?></strong><br>
<br>
<div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
<table x:str border=1 cellpadding=0 cellspacing=1 width=100% style="border-collapse:collapse">
<tr>
<td width="94" height="30" align="center" valign="middle" ><strong>ชื่อ</strong></td>
<td width="200" align="center" valign="middle" ><strong>ที่อยู่</strong></td>
<td width="181" align="center" valign="middle" ><strong>จำนวน(ยอดขาย)</strong></td>
<td width="181" align="center" valign="middle" ><strong>พันธ์ุข้าว</strong></td>
<td width="181" align="center" valign="middle" ><strong>ประเภท</strong></td>

</tr>
 <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?> 

  <tr>
    <td><div class="div2"><?php echo $objResult["name"];?></div></td>
    <td><div class="div2"><?php echo $objResult["address"];?></div></td>
    <td><div class="div2"><?php echo $objResult["number"];?></div></td>
    <td><div class="div2"><?php echo $objResult["ricename"];?></div></td>
    <td><div class="div2"><?php echo $objResult["categoryname"];?></div></td>
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