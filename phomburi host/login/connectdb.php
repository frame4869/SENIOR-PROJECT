<?php
$objConnect = mysql_connect(
"localhost","root","12345678") or die("ไม่สารมารถเชื่อมต่อฐานข้อมูล");
$objDB = mysql_select_db("bec");
mysql_query("SET NAMES utf8");

?>