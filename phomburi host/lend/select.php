<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
    border: 1px solid #ccc;

}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    margin: 30px 35px;
	width: 80%;
    height: 200px;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 60px;
    float: left;
    width: 500px;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>



<div class="responsive">
  <div class="gallery">
    <a href="index1111.php">
      <img src="img/cold-ice-cubes (1).png" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">นํ้าแข็ง</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="img_forest.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>



<div class="clearfix"></div>



</body>
</html>
