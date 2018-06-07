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
	?>
    <?php
	$strSQL = "SELECT * FROM member ORDER BY id ASC";
	$objQuery = mysql_query($strSQL) or die ("ไม่สามารถเลือกฐานข้อมูลได้");
	?>
<body>
<table width="100%" border="1">
  <tr>
    <td width="54%">ยินดีต้อนรับคุณ <?php echo $objResult["name"];?> </td>
    <td width="46%">สถานะ <?php echo $objResult["status"];?></td>
  </tr>
</table>
<p><a href="edit_user.php">Edit Profile</a> | <a href="logout.php">Logout</a></p>
<table width="100%" border="1">
  <tr>
    <td width="57%">username</td>
    <td width="43%"><?php echo $objResult["username"];?></td>
  </tr>
  <tr>
    <td>name-lastname</td>
    <td><?php echo $objResult["name"];?> <?php echo $objResult["lastname"];?></td>
  </tr>
  <tr>
    <td>mobile</td>
    <td><?php echo $objResult["mobile"];?></td>
  </tr>
  <tr>
    <td>status</td>
    <td><?php echo $objResult["status"];?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>