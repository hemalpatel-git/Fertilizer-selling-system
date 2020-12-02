<?php
 include("header.php");
?>


<html>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<head>
<title> IMAGE GALLERY</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<style>
	img {
vertical-align: middle;
}
.img-responsive,.thumbnail a > img {
display: block;
max-width: 100%;
height: auto;
}
.container {
padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto;
}
@media (min-width: 1200px) {
.container {
width: 1170px;
}
}
.container-fluid {
padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto;
}
.row {
margin-right: -15px;
margin-left: -15px;
}
.col-lg-3, .col-md-4, .col-xs-6, .col-lg-12 {
position: relative;
min-height: 1px;
padding-right: 15px;
padding-left: 15px;
}
.col-xs-6 {
width: 50%;
float:left;
}
@media (min-width: 1200px) {
.col-lg-3, .col-lg-12 {
float: left;
}
.col-lg-12 {
width: 100%;
}
.col-lg-3 {
width: 25%;
}
}
.thumbnail {
display: block;
padding: 4px;
margin-bottom: 20px;
background-color: #fff;
//border: 1px solid #ddd;
border-radius: 4px;
-webkit-transition: border .2s ease-in-out;
-o-transition: border .2s ease-in-out;
transition: border .2s ease-in-out;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
border-color: #337ab7;
}
</style>
</head>
<body>
<!-- The main container DIV starts here -->
<div class="container">
<div class="row">
<!--First row containing the main Heading-->
<div class="col-lg-12">
<h1 class="page-header">Fertilizers Image Gallery</h1>
</div>
<!--Next row containing the respective images in 3x4 grids starts here -->
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" data-toggle="tooltip" title="UREA" href="https://en.wikipedia.org/wiki/Urea#Agriculture">
<img class="img-responsive" src="gall/urea.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" data-toggle="tooltip" title="MOP" href="https://investingnews.com/daily/resource-investing/agriculture-investing/potash-investing/types-of-potash-sop-mop/">
<img class="img-responsive" src="gall/mop.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" data-toggle="tooltip" title="SOP" href="https://investingnews.com/daily/resource-investing/agriculture-investing/potash-investing/types-of-potash-sop-mop/">
<img class="img-responsive" src="gall/sop.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" data-toggle="tooltip" title="SSP" href="https://www.cropnutrition.com/single-superphosphate">
<img class="img-responsive" src="gall/ssp.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" data-toggle="tooltip" title="DAP" href="https://www.cropnutrition.com/diammonium-phosphate">
<img class="img-responsive" src="gall/dap.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/1.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/2.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/3.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/8.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/5.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/6.jpg" alt="">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#">
<img class="img-responsive" src="gall/7.jpg" alt="">
</a>
</div>
</div>
</div>
</body>
</html>
<?php
 include("footer.php");
?>
