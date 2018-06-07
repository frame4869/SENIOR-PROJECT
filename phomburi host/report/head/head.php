<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

html{
	background-color: #ffffff;
}

body{
	font:14px/1.5 Arial, Helvetica, sans-serif;
	padding:0;
	margin:0;
}

.menu{
	text-align: center;
	padding-top: 25px;
	margin-bottom:200px;
}

.menu img{
	opacity: 0.4;
	margin: 20px auto;
}

.menu h1{
	margin-top:0;
	font: normal 32px/1.5 'Open Sans', sans-serif;
	color: #3F71AE;
	padding-bottom: 16px;
}

.menu h2{
	color: #F05283;
}

.menu h2 a{
	color:inherit;
	text-decoration: none;
	display: inline-block;
	border: 1px solid #F05283;
	padding: 10px 15px;
	border-radius: 3px;
	font: bold 14px/1 'Open Sans', sans-serif;
	text-transform: uppercase;
}

.menu h2 a:hover{
	background-color:#F05283;
	transition:0.2s;
	color:#fff;
}

.menu ul {
	max-width: 600px;
	margin: 60px auto 0;
}

.menu ul a{
	text-decoration: none;
	color: #FFF;
	text-align: left;
	background-color: #B9C1CA;
	padding: 10px 16px;
	border-radius: 2px;
	opacity: 0.8;
	font-size: 16px;
	display: inline-block;
	margin: 4px;
	line-height: 1;
	outline: none;

	transition: 0.2s ease;
}

.menu ul li a.active{
	background-color: #66B650;
	pointer-events: none;
}

.menu ul li a:hover {
	opacity: 1;
}

.menu ul{
	list-style: none;
	padding: 0;
}

.menu ul li{
	display: inline-block;
}

@media (max-height:800px){
	.menu { padding-top:40px; }
}


/* -- Demo ads -- */

@media (max-width: 1200px) {
	#bsaHolder{ display:none;}
}

/* -- Link to Tutorialzine -- */

.tz-link{
	text-decoration: none;
	color: #fff !important;
	font: bold 36px Arial,Helvetica,sans-serif !important;
}

.tz-link span{
	color: #da431c;
}

.header-two-bars{
	font:13px Arial, Helvetica, sans-serif;
}

.header-two-bars .header-limiter{
	max-width: 1200px;
	text-align: center;
	margin: 0 auto;
}

/* Logo */

.header-two-bars h1{
	float: left;
	font: normal 28px Cookie, Arial, Helvetica, sans-serif;
	line-height: 40px;
	margin: 0;
}

.header-two-bars h1 span {
	color: #fff;
}

/* The first bar */

.header-two-bars .header-first-bar{
	background-color:#292c2f;
	box-shadow:0 1px 1px #ccc;
	padding: 7px 40px;
	height: 50px;
	color: #ffffff;
	box-sizing: border-box;
}

.header-two-bars .header-first-bar a {
	color: #b7bdb7;
	text-decoration: none;
}

.header-two-bars .header-first-bar nav {
	font:14px Arial, Helvetica, sans-serif;
	line-height: 40px;
	float: left;
	margin: 0 0 0 60px;
	padding: 0;
}

.header-two-bars .header-first-bar nav a{
	display: inline-block;
	padding: 0 5px;
	opacity: 0.9;
	text-decoration:none;
	line-height: 1;
}

.header-two-bars .header-first-bar nav a:hover {
	opacity: 1;
	color: #fff;
}

.header-two-bars .header-first-bar nav a.selected {
	border-radius: 2px;

	color: #fff;
	padding: 8px 12px;
}

.header-two-bars .header-first-bar a.logout-button {
	font-size: 11px;
	font-weight: bold;
	float: right;
	border-radius: 3px;
	background-color: rgba(58, 60, 62, 0);
	color: #fff;
	height: 30px 30px;
	padding: 1 20px;
	margin-right: -10px;
	border: 2px solid #5E6367;
	line-height: 30px;
	box-sizing: border-box;
}

.header-two-bars .header-first-bar a.logout-button:hover {
	font-size: 11px;
	font-weight: bold;
	float: right;
	border-radius: 3px;
	background-color: rgba(58, 60, 62, 0);
	color: #b7bdb7;
	height: 30px 30px;
	padding: 1 20px;
	margin-right: -10px;
	border: 2px solid #363836;
	line-height: 30px;
	box-sizing: border-box;
}

/* Second Bar */

.header-two-bars .header-second-bar {
	background-color: #ffffff;
	box-shadow: 1px 3px 3px 0 rgba(0, 0, 0, 0.05);
	padding: 10px 60px;
}

.header-two-bars .header-second-bar h2 {
	line-height: 20px;
	margin: 0;
	float: left;
}

.header-two-bars .header-second-bar h2 a {
	font-size: 16px;
	color: #4e5359;
	text-decoration: none;
}

.header-two-bars .header-second-bar nav {
	text-align: right;
	line-height: 20px;
	font-size: 15px;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap;
}

.header-two-bars .header-second-bar nav a {
	display: inline-block;
	color: #4e5359;
	text-decoration: none;
}

.header-two-bars .header-second-bar nav i.fa {
	color: #A9B7BF;
	margin: 0 4px 0 15px;
}


/*	Making the header responsive. Remove these styles, if
	you don't need the header to work on mobile devices. */

@media all and (max-width: 800px) {

	.header-two-bars .header-second-bar nav{
		font-size:14px;
	}

}

@media all and (max-width: 600px) {

	.header-two-bars .header-first-bar{
		padding:20px 0;
	}

	.header-two-bars .header-first-bar h1 {
		float: none;
		margin: -8px 0 2px;
		text-align: center;
		font-size: 24px;
		line-height: 1;
	}

	.header-two-bars .header-first-bar nav {
		margin: 0;
		float: none;
		font-size:13px;
	}

	.header-two-bars .header-first-bar nav a.selected {
		padding: 5px 8px;
	}

	.header-two-bars .header-first-bar .logout-button {
		display: none;
	}

	.header-two-bars .header-second-bar{
		padding: 20px 0;
	}

	.header-two-bars .header-second-bar h2{
		float:none;
		margin: 0 0 12px;
	}

	.header-two-bars .header-second-bar nav{
		text-align: center;
	}

	.header-two-bars .header-second-bar nav a{
		display: block;
		padding: 8px;
	}

	.header-two-bars .header-second-bar nav i.fa{
		margin-left:0;
	}
}

</style>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>



	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>

<header class="header-two-bars">

	<div class="header-first-bar">

		<div class="header-limiter">

			<h1><a href="#"><span>Phomburi ice</span></a></h1>

			<nav>
				<a href="../payment/pay.php">ขายรายวัน</a>
        <a href="../lend/pay.php">บริการยืม-คืน</a>
				<a href="../products/index1111.php">สินค้า</a>
				<a href="../customer/select.php">ข้อมูลลูกค้า</a>
        <a href="#"class="selected">รายงาน</a>
			</nav>

			<a href="../login/logout.php" class="logout-button">ออกจากระบบ</a>
		</div>

	</div>

	<div class="header-second-bar">

		<div class="header-limiter">

				<h2><a href="#">รายงาน</a></h2>

		  	<nav> <a href="../bill/select.php"><i class="fa fa-file-text"></i> รายการสั่งซื้อ</a>
						  <a href="../bill2/select.php"><i class="fa fa-file-text"></i>รายการยืม - คืนสินค้า</a>
              <a href="../member/select.php"><i class="fa fa-group"></i> ผู้ใช้ระบบ</a>
		  	</nav>

		</div>
	</div>

</header>

<!-- The content of your page would go here. -->



	<ul>



</div>



<!-- Demo ads. Please ignore and remove. -->


</body>

</html>
