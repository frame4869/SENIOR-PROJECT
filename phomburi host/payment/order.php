<?php
ob_start();
session_start();

if(!isset($_SESSION["intLine"]))
{
	if(isset($_POST["txtid"]))
	{
		 $_SESSION["intLine"] = 0;
		 $_SESSION["strid"][0] = $_POST["txtid"];
		 $_SESSION["strQty"][0] = $_POST["txtQty"];

		 header("location:http:pay.php");
	}
}
else
{

	$key = array_search($_POST["txtid"], $_SESSION["strid"]);
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + $_POST["txtQty"];
	}
	else
	{

		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strid"][$intNewLine] = $_POST["txtid"];
		 $_SESSION["strQty"][$intNewLine] = $_POST["txtQty"];
	}

	 header("location:pay.php");

}
?>
