<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
?>
<?php
	include('../connectdb.php');
	if($_SESSION['id']=="")
	{
		echo "Please Login";
		exit();
	}
	if($_SESSION['status']!= "user")
	{
		echo "FOR user only";
		exit();
	}
	$strSQL = "SELECT * FROM member WHERE id = '".$_SESSION["id"]."'";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");
	$objResult = mysql_fetch_array($objQuery);	
	
	if(!$objResult)
	{
		echo "ไม่สามารถเลือกค่า ID นี้ได้=".$_SESSION["id"] ; 
	}
	else
	{
		?>
<body>
<p>แก้ไขข้อมูลส่วนตัว</p>
<form id="form1" name="form1" method="post" action="edit_save_user.php?id=<?php echo $_GET["id"];?>">
  <table width="100%" border="1">
    <tr>
      <td width="52%">name</td>
      <td width="48%"><input name="txtname" type="text" id="txtname" value="<?php echo $objResult["name"];?>" /></td>
    </tr>
    <tr>
      <td>lastname</td>
      <td><input name="txtlastname" type="text" id="txtlast" value="<?php echo $objResult["lastname"];?>" /></td>
    </tr>
    <tr>
      <td>username</td>
      <td><?php echo $objResult["username"];?></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input name="txtpassword" type="text" id="txtpassword" value="<?php echo $objResult["password"];?>" /></td>
    </tr>
    <tr>
      <td>mobile</td>
      <td><input name="txtmobile" type="text" id="txtmobile" value="<?php echo $objResult["mobile"];?>" /></td>
    </tr>
    <tr>
      <td>status</td>
      <td><?php echo $objResult["status"];?></td>
    </tr>
  </table>
  <?php
  }
  mysql_close($objConnect);
  ?>
  <p>
    <input type="submit" name="button" id="button" value="ตกลง" />
    <input type="reset" name="button2" id="button2" value="ยกเลิก" />
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>