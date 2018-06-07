<?php
session_start();
?>
<meta charset="utf-8">
<?php

	include('../connectdb.php');
	$strSQL = "SELECT * FROM member WHERE username = '".mysql_real_escape_string($_POST['txtusername'])."' and password = '".mysql_real_escape_string($_POST['txtpassword'])."'";

	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	if(!$objResult)
	{
		header("location:incorrect.php");
	}
	else
	{
		$_SESSION["id"] = $objResult["id"];
		$_SESSION["status"] = $objResult["status"];

		session_write_close();

	if($objResult["status"] == "admin")
	{
		header("location:../payment/pay.php");
	}
	else
	{
		header("location:user_page.php");
	}
	}
	mysql_close();
?>
