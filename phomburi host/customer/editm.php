<meta charset="utf-8">
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sun Nov 20 2016 12:37:34 GMT+0000 (UTC) -->
<html data-wf-domain="peerapongs-dynamite-site.webflow.io" data-wf-page="582ee6a9f5562dd3132c7f0a" data-wf-site="582ee6a9f5562dd3132c7f09" data-wf-status="1" style="" class=" w-mod-js w-mod-no-touch w-mod-video w-mod-no-ios"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="utf-8"><title>Peerapong's Dynamite Site</title><meta content="width=device-width, initial-scale=1" name="viewport"><meta content="Webflow" name="generator"><link href="editm_files/peerapongs-dynamite-site.css" rel="stylesheet" type="text/css"><script src="editm_files/modernizr-2.js" type="text/javascript"></script><link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon"><link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon"></head>
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM member WHERE id = '".$_GET["id"]."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้ =".$_GET["id"];
	}
	else
	{

?>
<body class="navbar"><div class="section"><img sizes="(max-width: 479px) 100vw, 435px" src="editm_files/582ee72d5cf9d5b76b364e74_Untitled-1.png" srcset="http://uploads.webflow.com/582ee6a9f5562dd3132c7f09/582ee72d5cf9d5b76b364e74_Untitled-1-p-500x100.png 500w, http://uploads.webflow.com/582ee6a9f5562dd3132c7f09/582ee72d5cf9d5b76b364e74_Untitled-1.png 800w" height="145" width="435"></div><h3 class="head">แก้ไขข้อมูลสมาชิก</h3><div><div><div class="w-form"><form action="edit_save.php?id=<?php echo $_GET["id"];?>" method="post" name="email-form" id="email-form" data-name="Email Form"><div class="w-row"><div class="w-col w-col-6"><h3 class="head1">ชื่อ</h3></div><div class="w-col w-col-6"><input name="txtname" type="text" required class="txt1 w-input" id="txtname" value="<?php echo $objResult["name"];?>" maxlength="256"></div></div><div class="w-row"><div class="w-col w-col-6"><h3 class="head1">นามสกุล</h3></div><div class="w-col w-col-6"><input name="txtlastname" type="text" required class="txt2 w-input" id="txtlastname" value="<?php echo $objResult["lastname"];?>" maxlength="256"></div></div><div class="w-row"><div class="w-col w-col-6"><h3 class="head1">เบอร์โทรศัพท์</h3></div><div class="w-col w-col-6"><input name="txtmobile" type="text" required class="txt3 w-input" id="txtmobile" value="<?php echo $objResult["mobile"];?>" maxlength="256"></div></div><div class="w-row"><div class="w-col w-col-6"><h3 class="head1">ชื่อผู้ใช้</h3></div><div class="w-col w-col-6"><input name="txtusername" type="text" required class="txt4 w-input" id="txtusername" value="<?php echo $objResult["username"];?>" maxlength="256"></div></div><div class="row11 w-row"><div class="w-col w-col-6"><h3 class="head1">รหัสผ่าน</h3></div><div class="w-col w-col-6"><input name="txtpassword" type="password" required class="txt5 w-input" id="txtpassword" value="<?php echo $objResult["password"];?>" maxlength="256"></div></div><div class="row11 w-row"><div class="w-col w-col-6"><h3 class="head1">ที่อยู่</h3></div><div class="w-col w-col-6"><input name="txtaddress" type="text" required class="txt5 w-input" id="txtaddress" value="<?php echo $objResult["address"];?>" maxlength="256" data-name="Field 6"></div></div><input class="summit1 w-button" data-wait="Please wait..." value="ยกเลิก" type="submit"><input class="summit2 w-button" data-wait="Please wait..." value="ตกลง" type="submit"></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form</div><?php
}
mysql_close($objConnect);
?></div></div></div></div>
