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
	</style>

</head>
<?php
session_start();
?>
<?php
	include('../connectdb.php');
	if($_SESSION['id']=="")
	{
		echo "Please Login";
		exit();
	}
	if($_SESSION['status']!= "admin")
	{
		echo "FOR admin only";
		exit();
	}
	$strSQL = "SELECT * FROM member WHERE id = '".$_SESSION["id"]."'";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");
	$objResult = mysql_fetch_array($objQuery);

	if(!$objResult)
	{
		echo "ไม่สามารถเลือกค่า ID นี้ได้=".$_SESSION["id"] ;
	}
	else
	{
		?>
<body>
<?php include"head/head.php" ?>


	<form action="edit_save_admin.php?id=<?php echo $_GET["id"];?>" method="post">
		<div class="form-title-row">
			<h1>แก้ไขข้อมูล</h1>
		</div>

		<div class="form-row">
			<label>
				<span>ชื่อ</span>
				<input type="text" name="txtname" id="txtname" value="<?php echo $objResult["name"];?>" required>
			</label>
		</div>
<div class="form-row">
			<label>
				<span>นามสกุล</span>
				<input type="text" name="txtlastname" id="txtlastname" value="<?php echo $objResult["lastname"];?>" required>
			</label>
		</div>
		<div class="form-row">
			<label>
				<span>เบอร์โทรศัพท์</span>
				<input type="text" name="txtmobile" id="txtmobile" value="<?php echo $objResult["mobile"];?>" required>
			</label>
		</div>
<div class="form-row">
			<label>
				<span>ชื่อผู้ใช้</span>
				<input type="text" name="txtusername" id="txtusername" value="<?php echo $objResult["username"];?>" required>
			</label>
		</div>
		<div class="form-row">
			<label>
				<span>รหัสผ่าน</span>
				<input type="text" name="txtpassword" id="txtpassword" value="<?php echo $objResult["password"];?>" required>
			</label>
		</div>
<div class="form-row">
			<label>
				<span>ที่อยู่</span>
				<input type="text" name="txtaddress" id="txtaddress" value="<?php echo $objResult["address"];?>" required>
			</label>
		</div>
		<div class="form-row">
			<button onclick="myFunction()"  type="submit">ตกลง</button >
              <script>
function myFunction() {
    alert("แก้ไขข้อมูลเรียบร้อย");
}
</script>


            <a href="select.php"> <input class="ok2" type="button" value="ยกเลิก"/></a>
		</div>



	</form>
 <?php
}
mysql_close($objConnect);
?>
</body>

</html>
