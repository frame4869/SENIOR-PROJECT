<meta charset="utf-8">
<?php
class Paginator{
	var $items_per_page;
	var $items_total;
	var $current_page;
	var $num_pages;
	var $mid_range;
	var $low;
	var $high;
	var $limit;
	var $return;
	var $default_ipp;
	var $querystring;
	var $url_next;

	function Paginator()
	{
		$this->current_page = 1;
		$this->mid_range = 7;
		$this->items_per_page = $this->default_ipp;
		$this->url_next = $this->url_next;
	}
	function paginate()
	{

		if(!is_numeric($this->items_per_page) OR $this->items_per_page <= 0) $this->items_per_page = $this->default_ipp;
		$this->num_pages = ceil($this->items_total/$this->items_per_page);

		if($this->current_page < 1 Or !is_numeric($this->current_page)) $this->current_page = 1;
		if($this->current_page > $this->num_pages) $this->current_page = $this->num_pages;
		$prev_page = $this->current_page-1;
		$next_page = $this->current_page+1;


		if($this->num_pages > 10)
		{
			$this->return = ($this->current_page != 1 And $this->items_total >= 10) ? "<a class=\"paginate\" href=\"".$this->url_next.$this->$prev_page."\">&laquo; Previous</a> ":"<span class=\"inactive\" href=\"#\">&laquo; Previous</span> ";

			$this->start_range = $this->current_page - floor($this->mid_range/2);
			$this->end_range = $this->current_page + floor($this->mid_range/2);

			if($this->start_range <= 0)
			{
				$this->end_range += abs($this->start_range)+1;
				$this->start_range = 1;
			}
			if($this->end_range > $this->num_pages)
			{
				$this->start_range -= $this->end_range-$this->num_pages;
				$this->end_range = $this->num_pages;
			}
			$this->range = range($this->start_range,$this->end_range);

			for($i=1;$i<=$this->num_pages;$i++)
			{
				if($this->range[0] > 2 And $i == $this->range[0]) $this->return .= " ... ";
				if($i==1 Or $i==$this->num_pages Or in_array($i,$this->range))
				{
					$this->return .= ($i == $this->current_page And $_GET['Page'] != 'All') ? "<a title=\"Go to page $i of $this->num_pages\" class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" title=\"Go to page $i of $this->num_pages\" href=\"".$this->url_next.$i."\">$i</a> ";
				}
				if($this->range[$this->mid_range-1] < $this->num_pages-1 And $i == $this->range[$this->mid_range-1]) $this->return .= " ... ";
			}
			$this->return .= (($this->current_page != $this->num_pages And $this->items_total >= 10) And ($_GET['Page'] != 'All')) ? "<a class=\"paginate\" href=\"".$this->url_next.$next_page."\">Next &raquo;</a>\n":"<span class=\"inactive\" href=\"#\">&raquo; Next</span>\n";
		}
		else
		{
			for($i=1;$i<=$this->num_pages;$i++)
			{
				$this->return .= ($i == $this->current_page) ? "<a class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" href=\"".$this->url_next.$i."\">$i</a> ";
			}
		}
		$this->low = ($this->current_page-1) * $this->items_per_page;
		$this->high = ($_GET['ipp'] == 'All') ? $this->items_total:($this->current_page * $this->items_per_page)-1;
		$this->limit = ($_GET['ipp'] == 'All') ? "":" LIMIT $this->low,$this->items_per_page";
	}

	function display_pages()
	{
		return $this->return;
	}
}
?>
<style>
/*
	Side Navigation Menu V2, RWD
	===================
	License:
	https://goo.gl/EaUPrt
	===================
	Author: @PableraShow

 */

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

.blue { color: #185875; }
.yellow { color: #FFF842; }

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
	  width: 90%;
	  margin: 0 auto;
  display: table;
  padding: 30 0 1em 0;
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




@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
input.MyButton {
width: 60px;
height: 30 px;
cursor: pointer;

font-size: 80%;

background: #199AD9;
color: #fff;
border: 1px solid #568bb3;
border-radius: 5px;
-moz-box-shadow:: 6px 6px 5px #999;
-webkit-box-shadow:: 6px 6px 5px #999;
box-shadow:: 6px 6px 5px #999;
}
input.MyButton:hover {
color: #fff;
background: #6cbbe1S;
border: 1px solid #fff;
-moz-box-shadow:: 5px 5px 4px #adadad;
-webkit-box-shadow:: 5px 5px 4px #adadad;
box-shadow:: 5px 5px 4px #adadad;
}

input.MyButton3 {
width: 60px;
height: 30 px;
cursor: pointer;

font-size: 80%;

background: #ee4545;
color: #fff;
border: 1px solid #d41818;
border-radius: 5px;
-moz-box-shadow:: 6px 6px 5px #999;
-webkit-box-shadow:: 6px 6px 5px #999;
box-shadow:: 6px 6px 5px #999;
}
input.MyButton3:hover {
color: #fff;
background: #6cbbe1S;
border: 1px solid #fff;
-moz-box-shadow:: 5px 5px 4px #adadad;
-webkit-box-shadow:: 5px 5px 4px #adadad;
box-shadow:: 5px 5px 4px #adadad;
}

input.MyButton2 {
margin : 0 0 0 75 ;

width: 120px;
height: 35px;
cursor: pointer;
font-size: 100%;
padding: 3 0 20 0 ;


background: #4BA233;
color: #fff;
border: 1px solid #508a05
;
border-radius: 5px;
-moz-box-shadow:: 6px 6px 5px #999;
-webkit-box-shadow:: 6px 6px 5px #999;
box-shadow:: 6px 6px 5px #999;

}
input.MyButton2:hover {
color: #fff;
background: #6cbbe1S;
border: 1px solid #fff;
-moz-box-shadow:: 5px 5px 4px #adadad;
-webkit-box-shadow:: 5px 5px 4px #adadad;
box-shadow:: 5px 5px 4px #adadad;
}

.ok {
	height:5%;
    width: 8%;
    background-color: #e7ebe9;
    color: #7c857f;
    padding: 1px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok:hover {
    background-color: #c9d2cb;
		color: #fff;
	}
.ok2 {
	height:5%;
    width: 8%;
    background-color: #46a865;
    color: white;
    padding: 1px 20px;
    margin: 8px 0 0 100px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:15px
}

.ok2:hover {
    background-color: #327848;
	}

</style>
<style type="text/css">
<!--
	.paginate {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	}
	a.paginate {
	border: 1px solid #b2bbae;
	padding: 8px 16px;
	text-decoration: none;
	color: #000;
	}

	a.paginate:hover {
	background-color: #b2bbae;
	color: #FFF;
	text-decoration: underline;
	}
	a.current {
	border: 1px solid #b2bbae;
	font: bold .7em Arial,Helvetica,sans-serif;
	padding: 8px 16px;
	cursor: default;
	background:#b2bbae;
	color: #FFF;
	text-decoration: none;
	}
	span.inactive {
	border: 1px solid #999;
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	padding: 8px 16px;
	color: #999;
	cursor: default;
	}
</style>
<?php

include"../connectdb.php";
$strSQL = "SELECT * FROM products ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);

$Per_Page = 4;   // Per Page

$Page = $_GET["Page"];
if(!$_GET["Page"])
{
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$strSQL .=" order  by id ASC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysql_query($strSQL);
?>
<body>
<?php include"head.php" ?>
<br>

<div>
  <table class="container">
    <thead>
      <tr>
        <th><h1>ID</h1></th>
        <th><h1>ภาพ</h1></th>
        <th><h1>ชื่อสินค้า</h1></th>
        <th><h1>ราคา</h1></th>
        <th><h1></h1></th>
        <th><h1></h1></th>
      </tr>
    </thead>
    <?php
  	while($objResult = mysql_fetch_array($objQuery))
		{
		?>
    <tbody>
      <tr>
        <td><?php echo $objResult["id"];?></td>
        <td><img src="myfile/<?=$objResult["pdimg"];?>" width="40" height="20"></td>
        <td><?php echo $objResult["pdname"];?></td>
        <td><?php echo $objResult["pdprice"];?></td>
        </a></td>
        <td ><a href="upimg4.php?id=<?php echo $objResult["id"];?>">
          <input class="MyButton" type="button" value="แก้ไข" onClick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
        </a></td>
        <td ><a href="delete.php?id=<?php echo $objResult["id"];?>">
          <input class="MyButton3" type="button" value="ลบ"   onClick="if(confirm('ยืนยันการลบ')) return true; else return false;"/>
           <script>
function myFunction() {
    alert("ลบข้อมูลเรียบร้อย");
}
</script>
        </a></td>
      </tr>
      <?php
		}
		?>
    </tbody>
  </table>
  <br>
    <center>
Total <?php echo $Num_Rows;?> Record

<?php

$pages = new Paginator;
$pages->items_total = $Num_Rows;
$pages->mid_range = 10;
$pages->current_page = $Page;
$pages->default_ipp = $Per_Page;
$pages->url_next = $_SERVER["PHP_SELF"]."?QueryString=value&Page=";

$pages->paginate();

echo $pages->display_pages()
?>
</center>
<?php
mysql_close($objConnect);
?>
<br>
<hr width=80% >
<br>
  <td >
  <a href="form_upload.php?id=<?php echo $objResult["id"];?>"><input class="ok2" name="submit" type="submit" value="เพื่มข้อมูล"></a>
	<a href="../products2/index1111.php"><input class="ok" type="submit" value="ถังนํ้าแข็ง"></a>

    </td>
</div>
