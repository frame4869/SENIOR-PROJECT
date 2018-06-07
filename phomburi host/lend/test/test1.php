<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>page1.php</title>
</head>
<body>
<?
$a = "nsb;kfgjns;kfg";
$b = "test send form2>> B";
?>
<form id="form1" name="form1" method="post" action="test2.php">
<input name="a" type="hidden" value="<? echo $a; ?>" />
<input name="b" type="hidden" value="<? echo $b; ?>" />
<input name="send" type="submit" value="ส่งค่า" />
</form>
</body>
</html>
