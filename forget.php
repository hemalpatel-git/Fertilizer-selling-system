<?php

include("header.php");
?>
<div class="transparent-bg">

<div class="container">

  <table class="table">
     <thread>
     <tr align="center">
	    <th style="background-color: #00cccc"><center>Forgot Password</center><th>
	 </tr>
	 </thread>
    <tbody>
      <form action="mail.php" method="post">
      <tr>
        <td>
          
          <input type="email" class="form-control" onchange="Email();"  placeholder="Enter Email"  name="email" id="email" type="email"  required>
        </td>
      </tr>
      <tr>
        <td><button type="submit" name="s1" class="btn btn-primary btn-block btn-flat" style="background-color:#b30000" >Send Password</button></td>
      </tr>
    </form>
    </tbody>
  </table>
 
</div>


 </div>
 <script type="text/javascript">
   function Email(){
             var Number = document.getElementById('email').value;
              var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

              if (filter.test(email.value)) {
                   
                   return;
             }
             else{
                alert("Enter valid Email e.g:abc@..com");
                email.value="";
                email.focus();

             }
  }
 </script>

<?php
include("footer.php");
?>