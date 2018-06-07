<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Phomburi ice</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

	<style>

		textarea:focus, input:focus{
			outline: 0;
		}

		input:focus:invalid,
		textarea:focus:invalid{
			border:1px solid #F5192F;
			box-shadow:0 0 4px #F5192F;
		}

		input:focus:valid,
		textarea:focus:valid{
			border: 1px solid #64C364;
			box-shadow: 0 0 4px #64C364;
		}

	</style>

</head>
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM payment WHERE payid = '".$_GET["id"]."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้ =".$_GET["id"];
	}
	else
	{

?>
<body>



	<form action="edit_save.php?id=<?php echo $_GET["id"];?>" method="post">
		<div class="form-title-row">
			<h1>แก้ไขข้อมูล</h1>
		</div>

		<div class="form-row">
			<label>
				<span>ชื่อ</span>
				<input type="text" name="txtctname" id="txtctname" value="<?php echo $objResult["ctname"];?>" required>
			</label>
		</div>
<div class="form-row">
			<label>
				<span>นามสกุล</span>
				<input type="text" name="txtctlastname" id="txtctlastname" value="<?php echo $objResult["ctlastname"];?>" required>
			</label>
		</div>
<div class="form-row">
	  <label>
				<span>จำนวณเงิน</span>
				<?php echo $objResult["sum"];?>
			</label>
		</div>

		<div class="form-row">
			<button onclick="myFunction()"  type="submit">ตกลง</button >
              <script>
function myFunction() {
    alert("แก้ไขข้อมูลเรียบร้อย");
}
</script>


            <button type="reset">ยกเลิก</button>
		</div>



	</form>
 <?php
}
mysql_close($objConnect);
?>
</body>

</html>
