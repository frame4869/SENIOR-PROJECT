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
   var one = document.form1.txtone.value;
   var two = document.form1.txttwo.value;

   if(one == "" || two == "" ){return false;}
   var three = 0;

   three = Number(one)  * Number(two);

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
			form1.txtID1.value = strCusName.split("|")[0];
			form1.txttwo.value = strCusName.split("|")[1];
	}
</script>
<?php include"head/head.php" ?>
<body>



<div class="bb" >
  <form action="pay_save.php" method="post" enctype="multipart/form-data" name="form1" id="form1">





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


   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="lname">ยืม-คืน</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="big" name="lmName1" OnChange="resutpdcount(this.value);">
			<option value=""></option>
			<?php
			$strSQL = "SELECT*FROM product";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResult["ProductName"];?>"><?php echo $objResult["ProductName"];?></option>
			<?php
			}
			?>
		  </select><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label for="lname">สินค้า</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="big2"   value="" type='txtfour' id='txtfour' name='txtfour' onKeyUp='plus()' readonly >&nbsp;&nbsp;



&nbsp;&nbsp;<label for="lname">จำนวณ</label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="big" type="txtfive" id="txtfive" name="txtfive" value="" onkeyup='p()' placeholder="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    คงเหลือ
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="big2" type="text" id="txtsix" name="txtsix" placeholder="" readonly >

 <br><br><br>


  <?php
	mysql_close();
?>


  <br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input class="ok" type="submit" value="ตกลง">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input name="Reset" type="reset" class="ok2" value="ยกเลิก">
  </form>
</div>
</body>
</html>
