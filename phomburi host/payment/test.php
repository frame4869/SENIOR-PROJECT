<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<?php
	mysql_connect("localhost","root","12345678") or die(mysql_error());
	mysql_select_db("mydatabase");
?>

<script language="JavaScript">
	function resutName(strCusName)
	{
			frmMain.txtID.value = strCusName.split("|")[0];
			frmMain.txtName.value = strCusName.split("|")[1];
	}
</script>

<body>
	<form action="page.php" method="post" name="frmMain">
		List Menu 
		  <select name="lmName1" OnChange="resutName(this.value);">
			<option value=""><-- Please Select Item --></option>
			<?php
			$strSQL = "SELECT * FROM customer ORDER BY CustomerID ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResult["Name"];?>|<?php echo $objResult["Email"];?>"><?php echo $objResult["CustomerID"];?></option>
			<?php
			}
			?>
		  </select>
		  <input name="txtID" type="text" value="">
		  <input name="txtName" type="text" value="">
	</form>
</body>
</html>
<?php
	mysql_close();
?>