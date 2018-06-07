<?php
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],"myfile/".$_FILES["fileupload"]["name"]))
{
	echo "Upload Complete<br>";

	include ('../connectdb.php');
	$strSQL = "INSERT INTO products2 ";
	$strSQL .="(pdname, pdprice, pdcount, pdimg) VALUES ('".$_POST["txtpdname"]."', '".$_POST["txtpdprice"]."', '".$_POST["txtpdcount"]."' ,'".$_FILES["fileupload"]["name"]."')" ;
	$objQuery = mysql_query($strSQL);
	header("Location:http:index1111.php");

}
?>
