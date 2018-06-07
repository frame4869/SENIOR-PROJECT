<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<?php
	mysql_connect("localhost","root","12345678") or die(mysql_error());
	mysql_select_db("phomburi");
?>

<script language="JavaScript">
	function resutName(strCusName)
	{
			frmMain.txtctid.value = strCusName.split("|")[0];
			frmMain.txtctname.value = strCusName.split("|")[1];
			frmMain.txtctaddress.value = strCusName.split("|")[2];
			frmMain.txtctmobile.value = strCusName.split("|")[3];
	}
</script>

<body>
	<form action="page.php" method="post" name="frmMain">
		List Menu 
		  <select name="lmName1" OnChange="resutName(this.value);">
			<option value=""><-- Please Select Item --></option>
			<?php
			$strSQL = "SELECT * FROM customer ORDER BY ctid ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResult["ctid"];?>|<?php echo $objResult["ctname"];?>|<?php echo $objResult["ctaddress"];?>|<?php echo $objResult["ctmobile"];?>"><?php echo $objResult["ctid"];?></option>
			<?php
			}
			?>
		  </select>
		  <input name="txtctid" type="text" value="">
		  <input name="txtctname" type="text" value="">
      <input name="txtctlastname" type="text" value="">
      <input name="txtctaddress" type="text" value="">
	</form>
</body>
</html>
<?php
	mysql_close();
?>