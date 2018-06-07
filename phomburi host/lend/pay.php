<meta charset="utf-8">
<head>
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
</head>
<?php include "head/head.php" ?>
<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM products2 ORDER BY id asc ";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");
?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
<meta name="author" content="FREEHTML5.CO" />




<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/icomoon.css">

<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/style.css">


<script src="js/modernizr-2.6.2.min.js"></script>


</head>
<body>



<header id="fh5co-header">

	<div class="container-fluid">

		<div class="row">

			<ul class="fh5co-social">

			</ul>
			<div class="col-lg-12 col-md-12 text-center">

			</div>

		</div>

	</div>

</header>

<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
<div class="container-fluid">
	<div class="row fh5co-post-entry">
		<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
			<figure>

				<a href="submit.php?id=<?php echo $objResult["id"];?>"><img src="../products2/myfile/<?=$objResult["pdimg"];?>" width="200" height="200"></a>
			</figure>
			<span class="fh5co-meta fh5co-date"><a href="single.html"><?php echo $objResult["pdname"];?></a></span>
			<span class="fh5co-meta fh5co-date">ราคา <?php echo $objResult["pdprice"];?><br>คงเหลือ  <?php echo $objResult["pdcount"];?></span>

		</article>




		<?php
				}
				?>




<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>
