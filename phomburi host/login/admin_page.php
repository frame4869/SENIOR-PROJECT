<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
	include('../connectdb.php');
	if($_SESSION['id']=="")
	{
		echo"Please Login";
		exit();
	}
	if($_SESSION['status']!= "admin")
	{
		echo "FOR Admin only";
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
<p>Hello &quot;<?php echo $objResult["name"];?>&quot; Status &quot;<?php echo $objResult["status"];?>&quot;
</p>
<p><a href="edit_admin.php">Edit Profile</a> || <a href="logout.php">Logout</a></p>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1">
    <tr>
     <td>Name</td>
      <td>Username</td>
      <td>Password</td>
      <td>Change Password</td>
    </tr>
    <?php
	while($objResult = mysql_fetch_array($objQuery))
	{
		?>
    <tr>
      <td><?php echo $objResult["name"];?> <?php echo $objResult["lastname"];?></td>
      <td><?php echo $objResult["username"];?></td>
      <td><?php echo $objResult["password"];?></td>
      <td><a href="change_password.php?id=<?php echo $objResult["id"];?>">Change Password</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>