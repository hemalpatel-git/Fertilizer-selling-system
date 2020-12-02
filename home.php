<?php
include("conn.php");
include("header.php");


?>

<head>
  <title>Home|Fertilizer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
hr.style-eight {
height: 10px;
border: 1;
box-shadow: inset 0 9px 9px -3px rgba(11, 99, 184, 0.8);
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
border-radius: 5px;
} 
</style>
  
</head>
<body>
   <?php
              if(isset($_GET["msg1"]))
               echo "<div class='alert alert-success'   role='alert'><b>Your Password has been sent  Successfully....</b></div>";
 ?>
  <?php
              if(isset($_GET["msg"]))
               echo "<div class='alert alert-success'   role='alert'><b>Logout Successfully....</b></div>";
 ?>
   <marquee><font size="4" color="#D35400"><b>"Plant food" is available here...</b> </font></marquee>
   
<div class="container"  style="border: solid;border-color:black;border-width: 0px;margin-top: 0px">
 
  <div id="myCarousel"  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./loginpic/caros1.jpg" alt="Los Angeles" >
      </div>

      <div class="item">
        <img src="./loginpic/caros2.jpg" alt="Chicago">
      </div>
    
      <div class="item">
        <img src="./loginpic/caros3.jpg" alt="New york">
      </div>
       <div class="item ">
        <img src="./loginpic/caros4.jpg" alt="Fertilizer" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control"  href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
 <div  class="get-started center wow fadeInDown"  align="center" style="margin-bottom:50px;margin-top:50px; height:100px;background-color: #F0F3F4">
          <marquee><font style="color:#909497;" size="7"><b>Are you ready to buy fertilizer ?</b></font></marquee> 
                
    </div>
    <hr class="style-eight" />
 
<?php
include("fetchig.php"); 
?>
&nbsp;
<?php
include("footer.php"); 
?>
