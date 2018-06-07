<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>PHOMBURI ICE</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<?
include 'function.inc.php';
mysql_connect("localhost","zp10502","gzY7k_-3_W");
mysql_select_db("zp10502_project");

$strSQL = "SELECT * FROM orders WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);



?>

<body onload="window.print()">
	<div class="container">
		<div class="page-header">
			<h2>ใบเสร็จรับเงิน</h2>
			<p>เลขที่ : <?=$objResult["OrderID"];?> ออกให้ ณ วันที่ <?php echo thaidate($curdate); ?></p>
			<p>ชื่อลูกค้า : <?=$objResult["Name"];?></p>
		</div>



  <br>
<table class="table table-striped">
			<thead>
				<tr>
					<th>รหัสสินค้า</th>
					<th>รายการสินค้า</th>
					<th>ราคา</th>
					<th>จำนวณ</th>
					<th>รวมเงิน</th>
				</tr>
			</thead>
            <?

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM orders_detail WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysql_query($strSQL2)  or die(mysql_error());

while($objResult2 = mysql_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM products WHERE id = '".$objResult2["id"]."' ";
		$objQuery3 = mysql_query($strSQL3)  or die(mysql_error());
		$objResult3 = mysql_fetch_array($objQuery3);
		$Total = $objResult2["Qty"] * $objResult3["pdprice"];
		$SumTotal = $SumTotal + $Total;
	  ?>
			<tbody>
				<tr>
					<td><?=$objResult2["id"];?></td>
					<td><?=$objResult3["pdname"];?></td>
					<td><?=$objResult3["pdprice"];?></td>
					<td><?=$objResult2["Qty"];?></td>
					<td><?=number_format($Total,2);?></td>
				</tr>
				<tr>
					<td colspan="4">&nbsp;</td>
					<td></td>
				</tr>
                  <?
 }
  ?>
			</tbody>
		</table>

รวม<?=number_format($SumTotal,2);?>

<div class="form-row">
		<center>
		<a href="pay.php"><input class="ok" type="submit" value="ย้อนกลับ"/></a>
	</center>



</div>
</div>
</div>
</body>
</html>
