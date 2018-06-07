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
	margin: 25px 200px 0;
}
form .form-row2{
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
	box-sizing: 50px;
	color:  #5f5f5f;
	padding: 0 0 12px;
	font-weight: bold;
}

form input{
	color:  #5f5f5f;
	box-sizing: border-box;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 12px 18px;
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
.bt{
	border-radius: 2px;
	background-color:  #6caee0;
	color: #ffffff;
	font-weight: bold;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 9px 22px;
	border: 0;
	margin-top: 15px;
}
.bt:hover{
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
}
.ok2:hover {
background-color:#00abe5;

}
.big2 {

    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:#e9ebe9;
}
	</style>

</head>
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM products2

	WHERE id = '".$_GET["id"]."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้ =".$_GET["id"];
	}
	else
	{

?>
<script language='javascript' type='text/javascript'>
function p(){
var four = document.form1.txtfour.value;
var five = document.form1.txtfive.value;

if(four == "" || five == ""){return false;}
var pdcount = 0;
pdcount = Number(four)  + Number(five);
form1.txtpdcount.value = pdcount;
}
  </script>
<body>
<?php include"head/head.php" ?>


	<form action="edit_save.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<div class="form-title-row">
			<h1>จัดการสินค้า</h1>
		</div>

		<div class="form-row">
			<label>
				<span>จำนวณสินค้าในคลัง</span>
				<input  class="big2"  value="<?php echo $objResult["pdcount"];?>" type='text' id='txtfour' name='txtfour' onKeyUp='p()' readonly >
			</label>
		</div>
		<div class="form-row">
			<label>
				<span>คืนสินค้า</span>
				<input  type="text" id="txtfive" name="txtfive" value="" onkeyup='p()' placeholder="">
			</label>
		</div>
<div class="form-row">
			<label>
				<span>รวม</span>
				<input class="big2" type="text" id="txtpdcount" name="txtpdcount"  readonly >
			</label>
		</div>
		

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
