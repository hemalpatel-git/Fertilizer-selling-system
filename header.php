<?php
  include "allses.php";
?>

<html lang="en">

<head>
  <title>Fertilizer Selling System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="image/logo1.jpg">
  <link href="css/font-awesome.css" rel="stylesheet">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.js"></script>
  
  <style>
.btn1 {
  background-color:  #135b75;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn1:hover {
  background-color: #FF6633;
}
  
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius:0px;
       background-color: #135b75;
       box-shadow: ;
     
     
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
   
    /* Set black background color, white text and some padding */
  
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .col-sm-6{
      
        text-shadow:2px 2px gray ;
        text-decoration-color: ;
  }
  
 
  </style>
</head>
<body>
  <div class="jumbotron" style="background-color:#DAF7A6;margin-bottom: 0" align="center" >
  <div class="row">
  <div class="col-md-2">    
          <img src="image/logo1.jpg" style="height: 80px;width: 80px;">
      </div>
      <div class="col-md-8">
          <a href="home.php"><h1><b style="font-size: 50px;color: #21618C; font-family: comic sans MS">Fertilizer Selling System</b></h1></a>
      </div> 
      <div class="col-md-2">    
          <img src="image/aau.gif"  style="height: 80px;width: 80px;">
      </div>  
   </div>
 </div>

 <nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
       <a href="home.php" style="color: white">  <button id="dgn" class="btn1"><i class="fa fa-home"></i> Home</button></a>
        <a href="gall.php" style="color: white">  <button id="dgn" class="btn1"><i class="fa fa-camera"></i> Gallery</button></a>
	   <a href="about.php" style="color: white"><button class="btn1"><i class="fa fa-user"></i>About Us</button></a>
       <a href="contact.php" style="color: white"><button class="btn1"><i class="fa fa-phone-square"></i>Contact Us</button></a>

       </ul>
  <ul class="nav navbar-nav navbar-right">
  <a href="login.php" style="color: white"><button class="btn1"><i class="fa fa-sign-in"></i>Login</button></a>
        
             
        </ul>
      </div>
  </div>
</nav>

