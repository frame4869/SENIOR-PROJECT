<meta charset="UTF-8">
<?php
if (isset($_SESSION['sess_id'])=='') {
	msgbox('กรูณาเข้าสู่ระบบ','index.php');
} else if ($_SESSION['sess_id']!=session_id()) {
	msgbox('กรูณาเข้าสู่ระบบ','index.php');
}
?>