<?
	ob_start();
	session_start();
	session_destroy();

	header("location:pay.php");
?>

