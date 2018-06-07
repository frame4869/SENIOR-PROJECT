<?php
ob_start();
session_start();

  for($i=0;$i<=(int)$_SESSION["intLine2"];$i++)
  {
	  if($_SESSION["strlid"][$i] != "")
	  {
			$_SESSION["strlQty"][$i] = $_POST["txtQty".$i];
	  }
  }

	header("location:pay.php");

?>
