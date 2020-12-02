<?php
include("header.php");
?>


<html>
<head>
  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
	


  <style>
 
.form{
     background: rgba(4,10, 1,0.4); 
     padding: 15px;
     border-style: solid; border-width: 3px;border-radius: 12px; 
}
.image{
  background-image: url("./loginpic/login2.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      width: 100%;
      
}
</style>
</head>
<body>
         <div class="image">
         
     

    <div class="row">
     <div class=col-md-4></div>
       <div class="col-md-4">
        <h2 align="center" style="font-family:'Gill Sans', sans-serif; color: white">Login</h2>
        <form action="loginchk.php" method="POST" class="form">
        <div align="center">
            <img src="./image/logimg.png" style="border-radius: 50%;height: 100px;width: 100px">
          </div>
             <?php
              if(isset($_GET["msg"]))

               echo "<div class='alert alert-danger' align='center'  role='alert'><b>Invalid username or Password..!</b></div>";

              ?>
     <!--userid-->
     <div class="form-group">
      <label  for="userid" style="font-size:17;color: white" >User ID:</label>
      <input  type="text" class="form-control"  id="user" placeholder="Enter username" name="user" required>
     </div>

    <!--password-->
    <div class="form-group">
      <label  for="pwd" style="font-size: 17;color: white">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
   
    <button type="submit" name="login" id="login" class="btn btn-primary" style="width: 100%"><b>Login</b></button>

    
     <div align="center" style="font-size: 15;color: white">
      If you have not registered, press here
     </div>

     <div align="center"><a href="registration.php" style="color: white"><u>Registration Now</b></a></p></div>
      <div align="center"><a href="forget.php" style="color: white" ><u>Forgot Password?</u></a></p></div>
    
  </form>
  </div>
  </div>
 </div>
</div>
 <div class=col-md-4></div>
 </body>
</html>


<?php
include("footer.php");
?>		
