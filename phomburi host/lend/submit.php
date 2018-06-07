<?
session_start();
$_SESSION["id"] = '0001';
$_SESSION["total"] = $objResult['total'];
$_SESSION["pdname"] = นํ้าแข็ง;

session_write_close();
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Phomburi ice</title>



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





form {
	box-sizing: border-box;
	width: 100%;
	max-width: 800px;
	margin: 1px auto;
	padding: 10px;



	font: normal 14px sans-serif;
	text-align: center;
}

form .form-row{
	text-align: left;
	max-width: 800px ;
	margin: 25px 150px 0;
}

form .form-row{
	text-align: left;
	max-width: 800px ;
	margin: 25px 150px 0;
}

form .form-title-row{
	margin: 0 auto 10px;
}

form h1{
	display: inline-block;
	box-sizing: border-box;
	color: #4C565E;
	font-size: 24px;
	padding: 0 0 12px 0;
	margin: 0;
	border-bottom: 2px solid #6CAEE0;
}

form .form-row > label span{
	display: block;
	box-sizing: border-box;
	color:  #5f5f5f;
	padding: 0 0 12px;
	font-weight: bold;
}

.forminput{
	color:  #5f5f5f;
	background: #E4E4E4;
	box-sizing: border-box;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 9px 18px;
	border: 1px solid #dbdbdb;
}
.forminput1{
	color:  #5f5f5f;
	background: #fff;
	box-sizing: border-box;

	padding: 3px 50px;
	border: 1px solid #fff;
}
.forminput2{
	color:  #5f5f5f;
	background: #;
	box-sizing: border-box;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 9px 18px;
	border: 1px solid #dbdbdb;
}

form input[type=text],
form input[type=email],
form input[type=password],
form textarea{
	max-width: 400px;
	width: 100%;
}

form input[type=number]{
	max-width: 100px;
}

form input[type=radio],
form input[type=checkbox]{
	box-shadow: none;
	width: auto;
}

form textarea{
	color:  #5f5f5f;
	box-sizing: border-box;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 12px 18px;
	border: 1px solid #dbdbdb;
	resize: none;
	min-height: 80px;
}

form select{
	background-color: #ffffff;
	color:  #5f5f5f;
	box-sizing: border-box;
	width: 240px;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 12px 18px;
	border: 1px solid #dbdbdb;
}

form .form-radio-buttons > div{
	margin-bottom: 10px;
}

form .form-radio-buttons label span{
	margin-left: 8px;
	color:  #5f5f5f;
}

form .form-radio-buttons input{
	width: auto;
}

form button{
	border-radius: 2px;
	background-color:  #6caee0;
	color: #ffffff;
	font-weight: bold;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 9px 22px;
	border: 0;
	margin-top: 15px;
}
form button:hover{
 background-color:#00abe5;

}

p.explanation{
	padding: 15px 20px;
	line-height: 1.5;
	background-color: #FFFFE0;
	font-size: 13px;
	text-align: center;
	margin-top: 40px;
	color: #fff;
	border-radius: 3px;
	border-bottom: 2px solid #ECECD0;
}

/*	Making the form responsive. Remove this media query
	if you don't need the form to work on mobile devices. */

@media (max-width: 600px) {

	form{
		padding: 30px;
	}

}

.ok2{
	border-radius: 2px;
	background-color:  #6caee0;
	color: #ffffff;
	font-weight: bold;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 9px 22px;
	border: 0;
	margin-top: 15px;
	margin-left: 15px;
}
.ok2:hover {
background-color:#00abe5;

}
	</style>


</head>
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM products2 WHERE id = '".$_GET["id"]."'";
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
<?php
include"head/head.php";
?>
		<script language='javascript' type='text/javascript'>
  		function plus(){
   		var pdcount1 = document.form1.txtpdcount1.value;
   		var total = document.form1.txttotal.value;

   		if(pdcount1 == "" || total == "" ){return false;}
   		var pdcount = 0;

   		pdcount = Number(pdcount1)  - Number(total);

    	form1.txtpdcount.value = pdcount;
			}
  		</script>

	<form action="save_image.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<div class="form-row">
			<label>
				<span>รหัสสินค้า</span>
		<input class="forminput1" type="text" name="txtid" id="txtid" value="<?php echo $objResult["id"];?>" required readonly >
			</label>
		<img src="../products2/myfile/<?=$objResult["pdimg"];?>" width="200" height="200">
<input class="forminput1" type="text" name="txtpdname" id="txtpdname" value="<?php echo $objResult["pdname"];?>" required readonly >
		</div>
		<div class="form-row">
					<label>
						<span>สินค้าในคลัง</span>
						<input class="forminput" type="text" name="txtpdcount1" id="txtpdcount1" value="<?php echo $objResult["pdcount"];?>" onkeyup='plus()' required readonly>
					</label>
				</div>
<div class="form-row">
			<label>
				<span>จำนวณ</span>
				<input class="forminput2" type="text" name="txttotal" id="txttotal" value="<?php echo $objResult["total"];?>" onkeyup='plus()' />
			</label>
		</div>

		<div class="form-row">
					<label>
						<span>สินค้าคงเหลือ</span>
						<input class="forminput" type="text" name="txtpdcount" id="txtpdcount" value="<?php echo $objResult["pdcount"];?>" required>
					</label>
				</div>

		<div class="form-row">
			<button onclick="myFunction()"  type="submit">ตกลง</button >
              <script>
function myFunction() {
    alert("เพิ่มข้อมูลเรียบร้อย");
}
</script>


            <a href="pay.php"> <input class="ok2" type="button" value="กลับ"/></a>
		</div>



	</form>
</form>
  <?php
  }
  mysql_close($objConnect);
  ?>
</body>

</html>
