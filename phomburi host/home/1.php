
<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM products ORDER BY id ASC";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อข้อมูลได้");	
?>
?><body>



<p>
  <label>Feet</label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>
<p>Inches: <span id="outputInches"></span></p>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputInches").innerHTML=valNum*<?php echo $objResult["pdprice"]?>;
}
</script>


</body>
 <?php
  	while($objResult = mysql_fetch_array($objQuery))
		{
		?>
<?php
		}
		?>
        </html>