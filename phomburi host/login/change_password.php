<?php
session_start();
?>
<?php
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
	$strSQL = "SELECT * FROM member WHERE id = '".$_GET["id"]."'";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "ไม่สามารถเลือกค่า id นี้ได้=".$_GET["id"] ;
	}
	else
	{
	?>
<p>Change Password</p>
<form name="form1" method="post" action="change_password_edit.php?id=<?php echo $_GET["id"];?>">
  <p>&nbsp;</p>
  <table width="100%" border="1">
    <tr>
      <td width="49%">name - lastname</td>
      <td width="51%"><?php echo $objResult["name"];?> <?php echo $objResult["name"];?></td>
    </tr>
    <tr>
      <td>mobile</td>
      <td><?php echo $objResult["mobile"];?></td>
    </tr>
    <tr>
      <td>username</td>
      <td><?php echo $objResult["username"];?></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input name="txtpassword" type="text" id="txtpassword" value="<?php echo $objResult["password"];?>"></td>
    </tr>
  </table>
  <p>
  <?php
	}//mysql_close($objConnect);
	?>
    <input type="submit" name="button" id="button" value="ตกลง">
    <input type="reset" name="button2" id="button2" value="ยกเลิก">
  </p>
</form>
<p>&nbsp;</p>
