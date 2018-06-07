<?
session_start();

include"../connectdb.php";

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders2 (OrderDate,Name,Address,Tel)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtctname"]."','".$_POST["txtctaddress"]."','".$_POST["txtctmobile"]."')
  ";
  mysql_query($strSQL) or die(mysql_error());

  $strOrderID = mysql_insert_id();

  for($i=0;$i<=(int)$_SESSION["intLine2"];$i++)
  {
	  if($_SESSION["strlid"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail2 (OrderID,id,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strlid"][$i]."','".$_SESSION["strlQty"][$i]."')
			  ";
			  mysql_query($strSQL) or die(mysql_error());
	  }
  }

  

mysql_close();

session_destroy();

header("location:finish_order.php?OrderID=".$strOrderID);
?>
