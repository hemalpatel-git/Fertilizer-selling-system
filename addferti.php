<head>
    <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  
</head>
<?php
   include("headeradm.php");
   include("conn.php");
if(isset($_POST['s3']))
{
     $fname=addslashes($_POST["fname"]);
    $qry2= "select * from ferti_name where fertiname='$fname'";

    $run = mysql_query($qry2);

    if (mysql_num_rows($run) > 0) {

    echo '<script>
        swal({
        title: ":(",
        text: "This Fertilizer already exist",
        type: "warning",
        showCancelButton: false,
        confirmButtonClass: "btn-danger",
        closeOnConfirm: false
      },
        function(){
        window.location = "addferti.php";
     });
      </script>';
    //     echo "<script>alert('Fertilizer $fname is already exist ') </script>";
        exit();
    }

    $query = "INSERT INTO ferti_name(fertiname) values ('$fname')";

    if (mysql_query($query)) {

 echo '<script>
     setTimeout(function() {
         swal({
             title: "Successfully !",
             text: "Data inserted!",
            
         }, function() {
             window.location = "addferti.php";
         });
     }, 100);
 </script>';

       // echo "<script>alert('Data enterd successful')</script>";
    }
}
?>
<body>
 <div class="container" style="font-family: serif; border-style: solid; border-width: 5px;border-radius: 20px; max-width:1100px;border-color:#EB984E;">

   <div class="row">
     <div class="col-md-4"></div>
    <div class="col-md-4">
    <h2 align="center" style="background-color: #F4D03F;color:black;border-radius: 5px">Add Fertilizer</h2>
    <form method="POST">
    <div class="form-group"><label for="fname">Enter Fertilizer Name:</label>
    <input type="text"  class="form-control" onchange="isalpha(this);"   placeholder="Enter FirstName" name="fname" required></div>
    
    <div align="center">
     <button type="submit" name="s3" class="btn btn-primary" >Submit</button>
     <button  type="reset" name="c2" style="background-color:#D32F2F;color: white" class="btn btn-default">Cancel</button>
     </div>

   </form>
</div>
</div>
</div>
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
                </script>
</body>
<?php
include("footer.php");
?>