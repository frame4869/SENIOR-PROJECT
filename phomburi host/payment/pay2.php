<meta charset="utf-8">
<style>

.bb {
 		margin: 10px 100px 0 100px;
		border-radius: 10px;
    background-color: #ffffff;
    padding: 1px;
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
    background-color: #F00;
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
	height:5%;
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
	height:5%;
    width: 20%;
    padding: 2px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:#CCC;
}
</style>

<!DOCTYPE html>
<html>
<head>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
</head>
<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM payment ORDER BY payid ASC";
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



<div class="bb" >
  <form action="order.php" method="post" enctype="multipart/form-data" name="form1" id="form1">





   <br> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="lname">ชื่อลูกค้า</label>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <select class="big" name="lmName1" OnChange="resutctid(this.value);">
			<option value=""></option>
			<?php
			$strSQL = "SELECT * FROM customer ORDER BY ctid ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResult["ctname"];?>"><?php echo $objResult["ctname"];?> <?php echo $objResult["ctlastname"];?></option>
			<?php
			}
			?>
		  </select>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="lname">รหัสลูกค้า</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="big2" name="txtctid" type="text" value="">


   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="lname">รายการสินค้า</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="big" name="lmName1" OnChange="resutName(this.value);">
			<option value=""></option>
			<?php
			$strSQL = "SELECT * FROM products ORDER BY id ASC";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResult["id"];?>|<?php echo $objResult["pdprice"];?>"><?php echo $objResult["pdname"];?></option>
			<?php
			}
			?>
		  </select>


&nbsp;&nbsp;&nbsp;<label for="lname">รหัสสินค้า</label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="big2" name="txtid" type="text" value="<?=$objResult["id"];?>"><br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label for="">จำนวณ</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="big" type='txtQty' id='txtQty' name='txtQty'  onkeyup='plus()' value="1" size="2" name="txtQty" size="2"> <input type="submit" value="เพิ่ม">


&nbsp;&nbsp;&nbsp;&nbsp;<label for="lname">ราคาต่อหน่วย</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input class="big2" type='txttwo' id='txttwo' name='txttwo' placeholder="" value='' onKeyUp='plus()' />

  <?php
	mysql_close();
?>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="lname">รวมเงิน</label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="big2" type='text' id='txtthree' name='txtthree' placeholder="" readonly  />


  <br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  </form>
</div>
</body>
</html>
