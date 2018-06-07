<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
เพิ่มข้อมูล
<form id="form1" name="form1" method="post" action="save_add.php">
  <table width="100%" border="1">
    <tr>
      <td>ชื่อ</td>
      <td><input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <td>นามสกุล</td>
      <td><input type="text" name="txtlastname" id="txtlastname" /></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><input type="text" name="txtmobile" id="txtmobile" /></td>
    </tr>
    <tr>
      <td>ชื่อผู้ใช้</td>
      <td><input type="text" name="txtusername" id="txtusername" /></td>
    </tr>
    <tr>
      <td>รหัสผ่าน</td>
      <td><textarea name="textarea" id="textarea" cols="20" rows="5"></textarea></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="Submit" id="button" value="ตกลง" />
    <input type="reset" name="button2" id="button2" value="ยกเลิก" />
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>