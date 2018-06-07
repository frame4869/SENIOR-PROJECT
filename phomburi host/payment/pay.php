<meta charset="utf-8">
<?
session_start();
?>
<style>
/*
	Side Navigation Menu V2, RWD
	===================
	License:
	https://goo.gl/EaUPrt
	===================
	Author: @PableraShow

 */

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
	  width: 90%;
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
	  background-color: #252525;
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

    width: 15%;
    background-color: #EC7063;
    color: white;
    padding: 1px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok2:hover {
    background-color: #000 ;
}

.ok3 {
	height:10%;

    width: 40%;
    background-color: #D7DBDD;
    color: white;
    padding: 1px 20px;
    margin: 2px 80px;
    border: none;

    cursor: pointer;
	font-size:15px
}

.ok3:hover {
    background-color: #BDC3C7;
}
.ok4 {
	height:10%;

    width: 50%;
    background-color: #EC7063;
    color: white;
    padding: 1px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok4:hover {
    background-color: #EA4838 ;
}

.container2 th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #FFF;
}

.container2 td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container2 {
	  text-align: left;
	  overflow: hidden;
	  width: 90%;
	  margin: 10 auto;
  display: table;
  padding: 4 85px 1em 0;
}

.container2 td, .container2 th {
	  padding-bottom: 1%;
	  padding-top: 1%;
  padding-left:1%;
}

/* Background-color of the odd rows */
.container2 tr:nth-child(odd) {
	  background-color: #FFF;
}

/* Background-color of the even rows */
.container2 tr:nth-child(even) {
	  background-color: #000000;
}

.container2 th {
	  background-color: #b7bdb7;
}

.container2 td:first-child { color: #000000; }

.container2 tr:hover {
   background-color: #f2f4f4;

}




@media (max-width: 800px) {
.container2 td:nth-child(4),
.container2 th:nth-child(4) { display: none; }
}

	</style>
<style>
.update
{
	 text-align: left;
	  overflow: hidden;
	  width: 55%;
	  margin: 0 auto;
  display: table;
  padding: 10 900px 1em 0;

}
</style>
<style>

.bb {
 		margin: 10px 100px 0 100px;
		border-radius: 10px;
    background-color: #ffffff;
    padding: 1px;
}

.save {
	height:4%;
    width: 58px;
    background-color: #199AD9;
    color: white;
    padding: 1px 10px;
    margin: 8px 40;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.save:hover {
    background-color: #168ac3;
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

    width: 15%;
    background-color: #FF3737;
    color: white;
    padding: 1px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok2:hover {
    background-color: #ff1919;
}




.small {
	height:5%;
	 width: 10%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:#ccc;
	}
.big {
	height:4%;
    width: 20%;
    padding: 2px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:#FFF;

}
.big2 {
	height:4%;
    width: 10%;
    padding: 2px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:#CCC;
}
</style>

</head>

<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM products ";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");
?>

<script language='javascript' type='text/javascript'>
    function plus(){
   var Qty = document.form1.txtQty.value;
   var two = document.form1.txttwo.value;

   if(Qty == "" || two == "" ){return false;}
   var three = 0;

   three = Number(Qty)  * Number(two);

    form1.txtthree.value = three;

	}
    function p(){
   var four = document.form1.txtfour.value;
   var five = document.form1.txtfive.value;

   if(four == "" || five == ""){return false;}
   var six = 0;
    six = Number(four)  - Number(five);
	form1.txtsix.value = six;
	}
  </script>

 <script language="JavaScript">
	function resutctid(CusID)
	{
		switch(CusID)
		{
			<?php
			$strSQL = "SELECT * FROM customer ORDER BY ctid ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
				case "<?php echo $objResult["ctname"];?>":
				form1.txtctid.value = "<?php echo $objResult["ctid"];?>";
				break;
			<?php
			}
			?>
			default:
			 form1.txtctid.value = "";
		}
	}
</script>

  <script language="JavaScript">
	function resutpdcount(CusID)
	{
		switch(CusID)
		{
			<?php
			$strSQL = "SELECT * FROM product ORDER BY ProductID ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
				case "<?php echo $objResult["ProductName"];?>":
				form1.txtfour.value = "<?php echo $objResult["pdcount"];?>";
				break;
			<?php
			}
			?>
			default:
			 form1.txtfour.value = "";
		}
	}
</script>

  </script>

 <script language="JavaScript">
	function resutName(strCusName)
	{
			form1.txtid.value = strCusName.split("|")[0];
			form1.txttwo.value = strCusName.split("|")[1];
	}
</script>
<body>
<?php include"head/head.php" ?>

<div>
<form action="order.php" method="post" enctype="multipart/form-data" name="form1" id="form1">




    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="lname">รายการสินค้า</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="big" name="lmName1" OnChange="resutName(this.value);">
			<option value=""></option>
			<?php
			$strSQL = "SELECT * FROM products ORDER BY id ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResult["id"];?>|<?=$objResult["pdprice"];?>"><?php echo $objResult["pdname"];?></option>
			<?php
			}
			?>
		  </select>


&nbsp;&nbsp;&nbsp;&nbsp;<label for="lname">รหัสสินค้า</label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="big2" name="txtid" type="text" value="<?=$objResult["id"];?>" readonly ><br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label for="">จำนวน</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="big" type='txtQty' id='txtQty' name='txtQty'  onkeyup='plus()' value="" size="2" name="txtQty" size="2">


&nbsp;&nbsp;&nbsp;&nbsp;<label for="lname">ราคาต่อหน่วย</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input class="big2" type='txttwo' id='txttwo' name='txttwo' placeholder="" value='' onKeyUp='plus()' readonly />

  <?php
	mysql_close();
?>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="lname">รวมเงิน</label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="big2" type='text' id='txtthree' name='txtthree' placeholder="" readonly  />


  <input type="submit"   class="save"  value="บันทึก"><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  </form>

</div>
</body>
</div>
</head>
<?
mysql_connect("localhost","zp10502","gzY7k_-3_W");
mysql_select_db("phomburi");
?>
<body>

<div>
<form action="update.php" method="post">
<table class="container2" >
   <thead>
  <tr>
   <th><h1>รหัสสินค้า</h1></th>
   <th><h1>ชื่อสินค้า</h1></th>
   <th><h1>ราคา</h1></th>
   <th><h1>จำนวน</h1></th>
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
		<td><a href="delete.php?Line=<?=$i;?>"> <input class="ok4" type="button" value="ลบ"   onclick="myFunction()" />
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

  <?
mysql_close();
?>

</form>
<br><center><a href="checkout.php"><input class="ok" type="submit" value="ยืนยันการสั่งซื้อ"/></a> <a href="clear.php"> <input class="ok2" type="button" value="ยกเลิกรายการสั่งซื้อ"onclick="myFunction()"/><script>
function myFunction() {
    alert("ยกเลิกเรียบร้อย");
}</script></a> </center>
