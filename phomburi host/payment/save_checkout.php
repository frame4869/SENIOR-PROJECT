<meta charset="utf-8">
<?
session_start();

include"../connectdb.php";

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders (OrderDate,Name,Address,Tel,total)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtctname"]."','".$_POST["txtctaddress"]."','".$_POST["txtctmobile"]."','".number_format($Total,2)."')
  ";
  mysql_query($strSQL) or die(mysql_error());

  $strOrderID = mysql_insert_id();

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strid"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,id,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strid"][$i]."','".$_SESSION["strQty"][$i]."')
			  ";
			  mysql_query($strSQL) or die(mysql_error());
	  }
  }

mysql_close();



header("location:http:finish_order.php?OrderID=".$strOrderID);
?>
