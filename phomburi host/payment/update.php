<?php
ob_start();
session_start();

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strid"][$i] != "")
	  {
			$_SESSION["strQty"][$i] = $_POST["txtQty".$i];
	  }
  }

	header("location:http:pay.php");

?>
<meta charset="utf-8">
