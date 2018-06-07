<?
	ob_start();
	session_start();

	$Line = $_GET["Line"];
	$_SESSION["strlid"][$Line] = "";
	$_SESSION["strlQty"][$Line] = "";

	header("location:pay.php");
?>
