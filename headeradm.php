<?php
  include "adses.php";
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
  <link rel="stylesheet" href="dist/sweetalert.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href = "css/jquery-ui.css"rel = "stylesheet">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="dist/sweetalert-dev.js"></script>
  <script src = "js/jquery-1.10.2.js"></script>
  <script src = "js/jquery-ui.js"></script>
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
      border-radius: 0;
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
  .nav.navbar-nav {
       color: white;

    }
    li:hover{
       background-color:#45BAE5;
       color:white;
       border-radius: 10px;

  }
  .dropbtn {
  background-color:transparent;
  color:white;
  padding: 15px;
  font-size: 16px;
  border: none;
  border-radius: 10px
}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#45BAE5;}
  </style>
</head>
<body>
  <div class="jumbotron" style="background-color:#bcd890;margin-bottom: 0" align="center" >
  <div class="row">
  <div class="col-md-2">    
          <img src="image/logo1.jpg" style="height: 80px;width: 80px;">
      </div>
      <div class="col-md-8">
          <h1><b style="font-size: 50px;color: #21618C; font-family: comic sans MS">Fertilizer Selling System-Admin</b></h1>
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
         <a href="add.php" style="color: white"><button class="btn1"><i class="fa fa-plus"></i> Add Fertilizer Details</button></a>
         <a href="addferti.php" style="color: white"><button class="btn1"><i class="fa fa-plus"></i> Add Fertilizer</button></a>
          <a href="addbrand.php" style="color: white"><button class="btn1"><i class="fa fa-plus"></i> Add Company Name</button></a>
          <a href="manage.php" style="color: white"><button class="btn1"><i class="fa fa-tasks" aria-hidden="true"></i>Manage Fertilizer</button></a>
          <a href="fdetails.php" style="color: white"><button class="btn1"><i class="fa fa-info-circle" aria-hidden="true"></i>Farmer Details</button></a>
            <a href="report.php" style="color: white"><button class="btn1"><i class="fa fa-rocket" aria-hidden="true"></i>Selling Report</button></a>
           
   </ul>
   <ul class="nav navbar-nav navbar-right" > 
       <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <div class="col-md-4 srvc-grids-info team-grids">
                             <div class="srvc-img team-thmnl">
                            <a href="msg.php" target="main"><img src="image/bell.png"  width=45" height="45" alt="noty"/></a> 
                         </div>
                      </div>
                      </div>
                    </div>       
              <a href="logout.php" style="color: white"><button class="btn1"><i class="fa fa-sign-out"></i>Logout</button></a>
 </ul>

         </div>
        </ul>
      </div>
  </div>
</nav>


