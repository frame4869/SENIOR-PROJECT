<meta charset="utf-8">
<?
session_start();
$_SESSION["ctname"] = $result["ctname"];
session_write_close
?>
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
	  width: 85%;
	  margin: 0 auto;
  display: table;
  padding: 40 1px 1em 0;
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

	  overflow: hidden;
	  width: 90%;
	  margin: 0 auto;
  display: table;
  padding: 40 60px 1em 70;
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

    width: 15%;
    background-color: #D7DBDD;
    color: white;
    padding: 5px 9px;
    margin: 2px 10px;
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
  padding: 10 650px 1em 0;

}




</style>


<style>
*{
	padding: 0;
	margin: 0;
}

form .form-row{
	text-align: left;
	max-width: 315px;
	margin: 25px auto 0;
}

form .form-title-row{
	margin: 0 auto 40px;
}

form input{
	color:  #000000;
	box-sizing: border-box;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
	padding: 5px 18px;
	border: 1px solid #dbdbdb;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phomburi</title>
</head>
<html>
<head>

</head>
<?php include"head/head.php" ?>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<center><br><br>
<form  name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" >
    <tr>
      <th>ชื่อลูกค้า
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="ค้นหา"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "12345678";
   $dbName = "phomburi";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

   $sql = "SELECT * FROM customer WHERE ctname LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
<form name="form1" method="post" action="save_checkout.php">
<table class="container2" >
  <thead>
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>

  </tr>
  </thead>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
 <tbody>
  <tr>
    <td><input name="txtctid" type="text" id="txtctid" value="<?php echo $result["ctid"];?>" readonly />
   <td><input name="txtctname" type="text" id="txtctname" value="<?php echo $result["ctname"];?> <?php echo $result["ctlastname"];?>" /></td>
    <td><input name="txtctaddress" type="text" id="txtctaddress" value="<?php echo $result["ctaddress"];?>" /></td>
  		<td><input name="txtctmobile" type="text" id="txtctmobile" value="<?php echo $result["ctmobile"];?>" /></td>
  </tr>
  </tbody>
<?php
}
?>
</table>
<br>
<hr width=90% >
<br>
<input class="ok" type="submit" name="Submit" value="ยืนยัน">
<a href="pay.php"> <input class="ok2" type="button" value="กลับ"/></a>
</form>
</center>
<?php
mysqli_close($conn);
?>
</body>
</html>
