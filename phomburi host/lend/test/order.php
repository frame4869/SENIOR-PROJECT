<?php
ob_start();
session_start();

include('../connectdb.php');
		$strSQL = "UPDATE products2 SET ";
		$strSQL .= "pdcount = '".$_POST["txtpdcount"]."' ";
		$strSQL .= "WHERE id = '".$_POST["id"]."'";
		$objQuery = mysql_query($strSQL);


if(!isset($_SESSION["intLine2"]))
{
	if(isset($_POST["txtid"]))
	{
		 $_SESSION["intLine2"] = 0;
		 $_SESSION["strlid"][0] = $_POST["txtid"];
		 $_SESSION["strlQty"][0] = $_POST["txtQty"];


		 header("location:pay.php");
	}
}
else
{

	$key = array_search($_POST["txtid"], $_SESSION["strlid"]);
	if((string)$key != "")
	{
		 $_SESSION["strlQty"][$key] = $_SESSION["strlQty"][$key] + $_POST["txtQty"];
	}
	else
	{

		 $_SESSION["intLine2"] = $_SESSION["intLine2"] + 1;
		 $intNewLine = $_SESSION["intLine2"];
		 $_SESSION["strlid"][$intNewLine] = $_POST["txtid"];
		 $_SESSION["strlQty"][$intNewLine] = $_POST["txtQty"];


	}

	 header("location:pay.php");

}
?>
