<?
	ob_start();
	session_start();

	$Line = $_GET["Line"];
	$_SESSION["strid"][$Line] = "";
	$_SESSION["strQty"][$Line] = "";

	header("location:http:pay.php");
?>
<meta charset="utf-8">
