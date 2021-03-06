<style>
*{
	/* Universal reset: */
	margin:0;
	padding:0;
}

footer,
article,section,
hgroup,wnav,
figure{
	/* Giving a display value to the HTML5 rendered elements: */
	display:block;
}

body{
	/* Setting the default text color, size, page background and a font stack: */
	font-size:0.825em;
	color:#fcfcfc;
	background-color:#eaf0f2;
	font-family:Arial, Helvetica, sans-serif;
}

/* Hyperlink Styles: */

a, a:visited {
	color:#0196e3;
	text-decoration:none;
	outline:none;
}

a:hover{
	text-decoration:underline;
}

wa img{
	border:none;
}

/* Headings: */

wh1,wh2,wh3{
	font-family:"Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
	text-shadow:0 1px 1px black;
}

wh1{
	/* The logo text */
	font-size:3.5em;
	padding:0.5em 0 0;
	text-transform:uppercase;
}

wh3{
	/* The slogan text */
	font-family:forte,"Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
	font-size:2em;
	font-weight:normal;
	margin:0 0 1em;
}


wh2{
	font-size:2.2em;
	font-weight:normal;
	letter-spacing:0.01em;
	text-transform:uppercase;
}

p{
	line-height:1.5em;
	padding-bottom:1em;
}

.line{
	/* The dividing line: */
	height:1px;
	background-color:#FFF;
	border-bottom:1px solid #416371;
	margin:1em 0;
	overflow:hidden;
}

article .line{
	/* The dividing line inside of the article is darker: */
	background-color:#ffffff;
	border-bottom-color:#204656;
	margin:1.3em 0;
}

footer .line{
	margin:2em 0;
}

wnav{
	background: url(img/gradient_light.jpg) repeat-x 50% 50% #f8f8f8;
	padding: 0 5px;
	position: absolute;
	right: 41px;
	top: 18px;
	border: 1px solid #FCFCFC;
	-moz-box-shadow: 0 1px 1px #333333;
	-webkit-box-shadow: 0 1px 1px #333333;
	box-shadow: 0 1px 1px #333333;
}

/* The clearfix hack to clear the floats: */

.clear:after{
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}

/* The navigation styling: */

wnav ul li{
	display:inline;
}

wnav ul li a,
wnav ul li a:visited{
	color:#565656;
	display:block;
	float:left;
	font-size:1.25em;
	font-weight:bold;
	margin:1px 2px;
	padding:7px 10px 4px;
	text-shadow:0 1px 1px white;
	text-transform:uppercase;
}

wnav ul li a:hover{
	text-decoration:none;
	background-color:#f0f0f0;
}

wnav, article, wnav ul li a,figure{
	/* Applying CSS3 rounded corners: */
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
}

/* Article styles: */

#page{
	width:960px;
	margin:0 auto;
	position:relative;
}

article{
	background-color:#292c2f;
	margin:4em 0;
	padding:20px;
	
	text-shadow:0 2px 0 black;
}

figure{
	border:3px solid #142830;
	float:right;
	height:300px;
	margin-left:15px;
	overflow:hidden;
	width:500px;
}

figure:hover{
	-moz-box-shadow:0 0 2px #4D7788;
	-webkit-box-shadow:0 0 2px #4D7788;
	box-shadow:0 0 2px #4D7788;
}

figure img{
	margin-left:-60px;
}

/* Footer styling: */





footer p{
	margin-bottom:-2.5em;
	position:relative;
}

footer a,footer a:visited{
	color:#cccccc;
	background-color:#213e4a;
	display:block;
	padding:2px 4px;
	z-index:100;
	position:relative;
}

footer a:hover{
	text-decoration:none;
	background-color:#142830;
}

footer a.by{
	float:left;

}

footer a.up{
	float:right;
}

</style>
<!DOCTYPE html> <!-- The new doctype -->
<html>
    <head>
    
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Coding A CSS3 &amp; HTML5 One Page Template | Tutorialzine demo</title>
        
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
   <?php include "head/head.php" ?>
    <body>
    	
    	<section id="page"> <!-- Defining the #page section with the section tag -->
    
            <header> <!-- Defining the header section of the page with the appropriate tag -->

              <wnav class="clear"> <!-- The nav link semantically marks your main site navigation -->
                  <ul>
                        <li><a href="#article1">แผนที่</a></li>
                        <li><a href="#article2">Sweet Tabs</a></li>
                        <li><a href="#article3">Navigation Menu</a></li>
                </ul>
              </nav>
            
    </header>
            
            <section id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start --><!-- Dividing line -->
                
                <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <h2>ข้อมูล</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                    	<figure> <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7641.172342835049!2d100.18934570598857!3d16.74748779135964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfbe986affc42d%3A0xf04fb558f3130f0!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LiZ4LmA4Lij4Lio4Lin4Lij!5e0!3m2!1sth!2sth!4v1497168690049" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>>
                        </figure>
                        
                        <p>ประวัติโดยย่อ</p>
                        <p>รู้ไหมว่าสมัยโบราณเมื่อ 1000 กว่าปีก่อน มีการใช้ประโยชน์จากน้ำแข็งแล้ว โดยมนุษย์ตัดน้ำแข็งมาแช่อาหารเพื่อยืดอายุให้ได้นานกว่าเดิม เคยมีพ่อค้าชาวอเมริกันคนหนึ่งตัดน้ำแข็งบรรทุกลงเรือแล่นออกมาหวังจะขายแก่กลุ่มประเทศในเขตร้อน แต่น้ำแข็งเหล่านั้นได้ละลายระหว่างเดินทางจนหมด

น้ำแข็งเข้ามาในประเทศไทยราวๆ สมัยรัชกาลที่ 4 โดยนำมาจากประเทศสิงคโปร์โดยอาศัยเรือกลไฟที่มีชื่อว่า “เจ้าพระยา” ต้องใช้เวลาเดินทางประมาณ 15 วัน ต่อ 1 เที่ยว </p>
                    </div>
              </article>
                
				<!-- Article 1 end -->


				<!-- Article 2 start -->

                <div class="line"></div>
                
                <article id="article2">
                    <h2>Sweet AJAX Tabs</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    	<figure>
	                    	<a href="http://tutorialzine.com/2010/01/sweet-tabs-jquery-ajax-css/"><img src="http://tutorialzine.com/img/featured/633.jpg" width="620" height="340" /></a>
                        </figure>
                        
                        <p>Here we are making sweet AJAX-powered tabs with CSS3 and the newly released version 1.4 of jQuery.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. Duis felis dui, vulputate nec adipiscing nec, interdum vel tortor. Sed gravida, erat nec rutrum tincidunt, metus mauris imperdiet nunc, et elementum tortor nunc at eros. Donec malesuada congue molestie. Suspendisse potenti. Vestibulum cursus congue sem et feugiat. Morbi quis elit odio. </p>
                    </div>
                </article>
                
				<!-- Article 2 end -->

				<!-- Article 3 start -->

                <div class="line"></div>
                
                <article id="article3">
                    <h2>Halftone Navigation Menu</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    	<figure>
	                    	<a href="http://tutorialzine.com/2010/01/halftone-navigation-menu-jquery-css/"><img src="http://tutorialzine.com/img/featured/610.jpg" width="620" height="340" /></a>
                        </figure>
                        
                        <p>Today we are making a CSS3 & jQuery halftone-style navigation menu, which will allow you to display animated halftone-style shapes in accordance with the navigation links, and will provide a simple editor for creating additional shapes as well.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. Duis felis dui, vulputate nec adipiscing nec, interdum vel tortor. Sed gravida, erat nec rutrum tincidunt, metus mauris imperdiet nunc, et elementum tortor nunc at eros. Donec malesuada congue molestie. Suspendisse potenti. Vestibulum cursus congue sem et feugiat. Morbi quis elit odio. </p>
                    </div>
                </article>
                
				

        
  