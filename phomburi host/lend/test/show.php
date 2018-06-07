<style>


@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#000000;
  background-color:#ffffff;
}

h1 {
  font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em;
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #FFF;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 40 85px 1em 0;
}

.container td, .container th {
	  padding-bottom: 1%;
	  padding-top: 1%;
  padding-left:1%;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #FFF;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #000000;
}

.container th {
	  background-color: #b7bdb7;
}

.container td:first-child { color: #000000; }

.container tr:hover {
   background-color: #f2f4f4;

}




@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
.ok {
	height:5%;
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 1px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok:hover {
    background-color: #45a049;
	}

.ok2 {
	height:5%;

    width: 40%;
    background-color: #EC7063;
    color: white;
    padding: 3px 20px;
    margin: 1px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok2:hover {
    background-color: #EA4838  ;
}

.ok3 {
	height:5%;

    width: 35%;
    background-color: #D7DBDD;
    color: white;
    padding: 5px 25px;
    margin: 2px 100px;
    border: none;
	border-radius: 4px;

    cursor: pointer;
	font-size:15px
}

.ok3:hover {
    background-color: #BDC3C7;
}
.update
{
	 text-align: left;
	  overflow: hidden;
	  width: 55%;
	  margin: 0 auto;
  display: table;
  padding: 10 700px 1em 0;

}




</style>


<?
session_start();
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?
include"../connectdb.php";
?>
<body>

<div>
<form action="update.php" method="post">
<table class="container" >
   <thead>
  <tr>
   <th><h1>รหัสสินค้า</h1></th>
   <th><h1>ชื่อสินค้า</h1></th>
   <th><h1>ราคา</h1></th>
   <th><h1>จำนวณ</h1></th>
   <th><h1>รวม</h1></th>
    <th><h1></h1></th>
     </tr>
</thead>

  <?
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strid"][$i] != "")
	  {
		$strSQL = "SELECT * FROM products WHERE id = '".$_SESSION["strid"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["pdprice"];
		$SumTotal = $SumTotal + $Total;
	  ?>

      <tbody>
       <tr>
		<td><?php echo $_SESSION["strid"][$i];?><input type="hidden" name="txtid<?php echo $i;?>" value="<?php echo $_SESSION["strid"][$i];?>"></td>
		<td><?=$objResult["pdname"];?></td>
		<td><?=$objResult["pdprice"];?></td>
		<td><input type="text" name="txtQty<?php echo $i;?>" value="<?php echo $_SESSION["strQty"][$i];?>" size="2"></td>
		<td><?=number_format($Total,2);?></td>
		<td><a href="delete.php?Line=<?=$i;?>"> <input class="ok2" type="button" value="ลบ"   onclick="myFunction()" />
           <script>
function myFunction() {
    alert("เรียบร้อย");
}
</script></td>
        </tr>
       </tbody>
	  <?
	  }
  }
  ?>

</table>


<table class="update">
  <tr>
  <td><input class="ok3" type="submit" value="Update"></td>
  <td align="right">รวม&nbsp;<?php echo number_format($SumTotal,2);?>&nbsp;บาท</td>
  </tr>
  </table>


</form>

<center>
<br><br>
<a href="pay.php"><input class="ok" type="submit" value="กลับไปหน้าสินค้า"/></a>
<?
if($SumTotal > 0)
	{
?>&nbsp;<a href="checkout.php"><input class="ok" type="submit" value="ยืนยันการสั่งซื้อ"/></a>
<?
	}
?>
<?
mysql_close();
?>
</center>
</body>
</html>
</div>
