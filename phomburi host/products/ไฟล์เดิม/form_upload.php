<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="save_image.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="1">
  <td><table width="100%" border="1">
    <tr></tr>
    <tr></tr>
    <tr>
      <td>ชื่อสินค้า</td>
      <td><input type="text" name="txtpdname" id="txtpdname" /></td>
    </tr>
    <tr>
    
    </tr>
    <tr>
      <td>ราคา</td>
      <td><input type="text" name="txtpdprice" id="txtpdprice" /></td>
    </tr>
  <td>ประเภท</td>
    <td>
      <input type="text" name="txtpdtype" id="txtpdtype" />
   </td>
  </tr>
    <td>จำนวณ</td>
      <td><input type="text" name="txtpdcount" id="txtpdcount" /></td>
      </tr>
  <td>รูปภาพ</td>
    <td><input type="file" name="fileupload" id="fileupload" /></td>
  <tr></tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
  </tr>
  </table></td></tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>