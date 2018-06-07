<html>
<head>
<title></title>
</head>
<body>
<?
	include("../connectdb.php");
	$strSQL = "SELECT * FROM products WHERE id = '".$_GET["id"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
?>
	<form name="form1" method="post" action="upimg5.php?id=<?=$_GET["id"];?>" enctype="multipart/form-data">
	Edit Picture :<br>
	ชื่อ : 
	 <input type="text" name="txtpdname" value="<?=$objResult["pdname"];?>"><br>
	ราคา:
	<input type="text" name="txtpdprice" value="<?=$objResult["pdprice"];?>"><br>
	ประเภท
	<input type="text" name="txtpdtype" value="<?=$objResult["pdtype"];?>"><br>
	จำนวณ
	<input type="text" name="txtpdcount" value="<?=$objResult["pdcount"];?>"><br>
	<img src="myfile/<?=$objResult["pdimg"];?>" width="61" height="61"><br>
	Picture : <input type="file" name="filUpload"><br>
	<input type="hidden" name="hdnOldFile" value="<?=$objResult["pdimg"];?>">
	<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>