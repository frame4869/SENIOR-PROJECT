<html>
<head>
<title></title>
</head>
<body>
<?

		//*** Update Record ***//
		include('../connectdb.php');

	$txtpdname=$_POST["txtpdname"];
	$txtpdprice=$_POST["txtpdprice"];
	$txtpdcount=$_POST["txtpdcount"];


	$strSQL = "UPDATE products2 SET ";
	$strSQL .= "pdname = '$txtpdname' ";
	$strSQL .= ",pdprice = '$txtpdprice' ";
	$strSQL .= ",pdcount = '$txtpdcount' ";


	$strSQL .= "WHERE id = '".$_GET["id"]."' ";
	$objQuery = mysql_query($strSQL);	
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("myfile/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE products2 ";
			$strSQL .=" SET pdimg = '".$_FILES["filUpload"]["name"]."' WHERE id = '".$_GET["id"]."' ";
			$objQuery = mysql_query($strSQL);		

		}
	}
			if($objQuery)
{
	header("Location:http:index1111.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='select.php'>ดูข้อมูล</a>";
}

	mysql_close($objConnect);
?>
</body>
</html>