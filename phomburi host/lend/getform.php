<style>

form{
	width:330px;
	border-top:1px dotted #D9D9D9;
	margin:10px 180px;
	}

button{
	width:246px;
	height:40px;
	color:#4C4C4C;
	margin-bottom:20px;
	margin-left:20px;
	}
input{
	width:280px;
	height:40px;
	padding:5px;

	border-radius:5px;
	border:4px solid #acbfa5;
	}

input[type = submit]{
	width:100px;
	background-color:#35c8ef;
	border-radius:5px;
	border:2px solid blue;
	color:#fff;
}

textarea{
	width:280px;
	height:70px;
	padding:5px;
	margin:20px 0 10px 0;
	border-radius:5px;
	border:4px solid #acbfa5;
	}


.four p{
	text-align:center;
	color:#fff;
	padding:15px 0;
	}
.first p{
  	padding:15px;
	color:#fff;
}

.two{
	background-color:#fff;
	width:290px;
	float:left;
	height:600px;
	}

.main_content{

	width:960px;
	height:auto;
	background-color:#ffffff;

	}

.two h4{
	color:#4C4C4C;
	text-align:center;
	}


 .three{
	text-align:center;
	width:660px;
	border-left:1px solid #D0D0D0;
	float:left;
	background-color:#ffffff;

	}

 .four,.first{
	width:960px;
	clear:both;
	background-color:#41A2CD;
	height:55px;

	}
</style>
<html>
<head>
<title>Create Dynamic form Using JavaScript - Demo Preview</title>
<meta name="robots" content="noindex, nofollow" />

<script src="js/form.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body class="base">
  <?php
  include "head/head.php" ;
  ?>
<div class ="main_content">
<center>




<div class="two">
<h4>Frequently Used Form Fields</h4>
<button onclick="nameFunction()">Name</button><br/>
<button onclick="emailFunction()">Email</button><br/>
<button onclick="contactFunction()">Contact</button><br/>
<button onclick="textareaFunction()">Message</button>
<button onclick="resetElements()">Reset</button>
</div>


<div class="three">
<h2>Your Dynamic Form!</h2>
<form action="#" method="get" id="mainform">
<span id="myForm">
</span>
<p></p>
<input type="submit" value="Submit"></input>
</form>
</div>

 <div class="four">
 <p>2014 <a href="http://www.formget.com/app/"><img src="logo.png"/></a> All rights reserved.</p>
 </div>
</div>
</center>
</body>
</html>
