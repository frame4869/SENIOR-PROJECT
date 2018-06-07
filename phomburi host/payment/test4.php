<html>
<head>
<title></title>
</head>
<body>
<form name="frmSearch" method="get" >
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
if($_GET["txtKeyword"] != "")
	{
	$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
	$objDB = mysql_select_db("phomburi");
	// Search By Name or Email
	$strSQL = "SELECT * FROM customer WHERE (ctname LIKE '%".$_GET["txtKeyword"]."%' or ctmobile LIKE '%".$_GET["txtKeyword"]."%' )";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
    
    <form name="form1" method="post" action="save_checkout.php">
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">รหัสลูกค้า </div></th>
		<th width="98"> <div align="center">ชื่อ - นามสกุล </div></th>
		
		<th width="97"> <div align="center">ที่อยู่ </div></th>
		<th width="59"> <div align="center">เบอร์โทรศัพท์ </div></th>
		
	  </tr>
	<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><input name="txtctid" type="text" id="txtctid" value="<?php echo $objResult["ctid"];?>" />
		<td><input name="txtctname" type="text" id="txtctname" value="<?php echo $objResult["ctname"];?> <?php echo $objResult["ctlastname"];?>" /></td>
		
		<td><div align="center"><input name="txtctaddress" type="text" id="txtctaddress" value="<?php echo $objResult["ctaddress"];?>" /></div></td>
		<td align="right"><input name="txtctmobile" type="text" id="txtctmobile" value="<?php echo $objResult["ctmobile"];?>" /></td>
		
	  
	<?php
	}
	?>
</table>
<input type="submit" name="Submit" value="Submit">
</form>
	<?php
	mysql_close($objConnect);
}
?>
</body>
</html>