<?php
//คำสั่ง connect db เขียนเพิ่มเองนะ

$strExcelFileName="Member-All.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

$sql=mysql_query("select * from tb_member");
$num=mysql_num_rows($sql);
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<strong>รายงานสมาชิก วันที่ <?php echo date("d/m/Y");?> ทั้งหมด <?php echo number_format($num);?> ท่าน</strong><br>
<br>
<div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
<table x:str border=1 cellpadding=0 cellspacing=1 width=100% style="border-collapse:collapse">
<tr>
<td width="94" height="30" align="center" valign="middle" ><strong>รหัสสมาชิก</strong></td>
<td width="200" align="center" valign="middle" ><strong>ชื่อผู้ใช้งาน</strong></td>
<td width="181" align="center" valign="middle" ><strong>ชื่อ-นามสกุล</strong></td>
<td width="181" align="center" valign="middle" ><strong>เบอร์โทรศัทพ์</strong></td>
<td width="181" align="center" valign="middle" ><strong>ที่อยู่</strong></td>
<td width="185" align="center" valign="middle" ><strong>อีเมล์</strong></td>
</tr>
<?php
if($num>0){
while($row=mysql_fetch_array($sql)){
?>
<tr>
<td height="25" align="center" valign="middle" ><?php echo"US".$row['id_member'];?></td>
<td align="center" valign="middle" ><?php echo strip($row['username']);?></td>
<td align="center" valign="middle"><?php echo strip($row['name']);?></td>
<td align="center" valign="middle"><?php echo strip($row['mobile']);?></td>
<td align="center" valign="middle"><?php echo strip($row['address']);?></td>
<td align="center" valign="middle"><?php echo strip($row['email']);?></td>
</tr>
<?php
}
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
