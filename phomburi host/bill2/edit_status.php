
<meta charset="utf-8">
</head>
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM orders2

	WHERE OrderID = '".$_GET["id"]."'";
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


<center>
	<form action="edit_status_save.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<div class="form-title-row">
			<h1>จัดการสถานะสินค้า</h1>
		</div>

		<div class="form-row">
			<label>
				<span>สถานะ</span>
<input  class="big2"  value="<?php echo $objResult["status"];?>" type='text' id='txtstatus' name='txtstatus' onKeyUp='p()'  >
			</label>
		</div>
</center>


<center><br><br>
		<div class="">

			<button onclick="myFunction()"  type="submit">ตกลง</button >
              <script>
function myFunction() {
    alert("เรียบร้อย");
}
</script>




            <a href="select.php"><input class="bt" type="reset" value="ยกเลิก"></a>
		</div>
</center>


	</form>

 <?php
}
mysql_close($objConnect);
?>
</body>

</html>
<meta charset="utf-8">
