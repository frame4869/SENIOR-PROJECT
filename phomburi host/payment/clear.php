<?
	ob_start();
	session_start();
	session_destroy();

	header("location:http:pay.php");
?>
<meta charset="utf-8">
