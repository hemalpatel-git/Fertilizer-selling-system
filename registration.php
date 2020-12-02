<?php
 include("header.php");
 include("conn.php");


?>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
  function isalpha(ele)
                {
          
                    var r=/[^a-z,A-Z,\u0a81-\u0ae6,_\s]+/i;
                    if(r.test(ele.value))
                     {
                         alert("Only Characters are valid");
                         ele.value="";
                         ele.focus();
                     }
                }
                
  function pincode(){
        var Number=document.getElementById('pc').value;
        var Num=  /^[1-9][0-9]{5}$/;

        if (Num.test(Number)) {
          return;
        }
        else{
          alert("Enter Valid Pincode");
          pc.value="";
          pc.focus();
        }

      }
   function mobileNumber(){

                  var Number = document.getElementById('no').value;
                  var Num = /^[0]?[6789]\d{9}$/;

                  if(Num.test(Number)){
                  return;
                   }

               else{
                      alert( "Enter valid phone number");
                      no.value="";
                      no.focus();
                    }
                  }
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
function pass(){

     var Number = document.getElementById('psw').value;
     var Num=/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;;
     if (Num.test(psw.value)) {

      return;
     }
     else
     {
      alert("Enter atleast 8 charcter Password e.g xyz@#$1234");
      psw.value="";
      psw.focus();
     }
  } 
  function checkpass(){

    if(document.getElementById('psw').value==document.getElementById('conpass').value)

      return;
    else

      alert("password not match");
    conpass.value="";
    conpass.focus();
  }

  
</script>
<style>



/* Add padding to containers */


</style>
</head>
<body>
 
<div class="container" style="border-style: solid; border-width: 5px;border-radius: 20px; max-width:1100px;border-color:#2E86C1;">
   <div class="row"  >
     <div class="col-md-4"></div>
    <div class="col-md-4">
    <h2 align="center" style="background-color: #FF5333;color: white;border-radius: 5px"> Registration</h2>
    <form method="POST" action="registrationdb.php">

    
    <div class="form-group"><label for="fname">FullName</label><label style="color: red">*</label><label>:</label>
    <input type="text" class="form-control" onChange="isalpha(this);" placeholder="Enter FirstName" name="fname" required></div>

    <div class="form-group"><label for="add"><b>Address</b></label><label style="color: red">*</label><label>:</label>
    <textarea type="text" class="form-control" placeholder="Enter Address" name="add" required></textarea>
  </div>


    <div class="form-group"><label for="city"><b>City</b></label><label style="color: red">*</label><label>:</label>
    <input type="text" class="form-control" onChange="isalpha(this);" placeholder="Enter City" name="city" required></div>


    <div class="form-group"><label for="pc"><b>Pincode</b></label><label style="color: red">*</label><label>:</label>
    <input type="text" class="form-control" onChange="pincode();" maxlength="6" placeholder="Enter Pincode" id="pc" name="pc" required></div>

    <div class="form-group"><label for="no"><b>Mobile-No.</b></label><label style="color: red">*</label><label>:</label>
    <input type="text" class="form-control" onChange="mobileNumber();" maxlength="10" placeholder="Enter Number" id="no" name="no" required></div>
   <?php
              if(isset($_GET["msg1"]))

               echo "<b style='color:red;'>Email Already exist</b>";

              ?>
    <div class="form-group"><label for="email"><b>Email</b></label><label style="color: red">*</label><label>:</label>
    <input type="text" class="form-control" onChange="Email();" placeholder="Enter Email" id="email" name="email" required></div>

   <?php
              if(isset($_GET["msg"]))

               echo "<b style='color:red;'>Username Already exist</b>";

              ?>
  
    <div class="form-group"><label for="uname"><b>UserName</b></label><label style="color: red">*</label><label>:</label>
    <input type="text" class="form-control" placeholder="Enter UserName" name="uname" required></div>

    <div class="form-group"><label for="psw"><b>Password:</b></label>
    <input type="password" class="form-control" onChange="pass();" minlength="8" maxlength="16" placeholder="Enter Password" id="psw" name="psw" required></div>

    <div class="form-group"><label for="conpass"><b>Conform Password:</b></label>
    <input type="password" class="form-control" onChange="checkpass();" placeholder="Re-enter Password" id="conpass" name="conpass" required></div>
  
   
    <div align="center"><button type="submit" name="sub" class="btn btn-primary" >Submit</button>
     <button id="cancel" type="reset" name="cancel" style="background-color:#D32F2F;color: white" class="btn btn-default">Cancel</button></div>

    <div><p align="center">Already have an account? <a href="login.php">Sign in</a></p></div>
    </form>
</div>
</div>
</div>

<div class="col-md-4"></div>
</body>
</html>

<?php
 include("footer.php");
?>
