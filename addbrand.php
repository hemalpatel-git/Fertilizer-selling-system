<head>
    <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  
</head>
<?php
   include("headeradm.php");
   include("conn.php");
    
 if(isset($_POST['s2']))
 {   
    $fname=addslashes($_POST["fname"]);
    $bname=addslashes($_POST["bname"]);
    $qry1= "select * from brand where fertiname='$fname' and brandname='$bname' ";
    $run = mysql_query($qry1);
    $rec=mysql_fetch_assoc($run);

  
    if ($rec['fertiname']==$fname && $rec['brandname']==$bname) 
  {

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
        window.location = "addbrand.php";
     });
      </script>';
    //     echo "<script>alert('Fertilizer $fname is already exist ') </script>";
        exit();
    }
    else{

     $qry2="INSERT INTO brand(fertiname,brandname) values ('$fname','$bname')";
     if (mysql_query($qry2)) {

     echo '<script>
         setTimeout(function() {
             swal({
                 title: "Successfully !",
                 text: "Data inserted!",
                
             }, function() {
                 window.location = "addbrand.php";
             });
         }, 100);
     </script>';
      }
       // echo "<script>alert('Data enterd successful')</script>";
    }
}
?>
<body>
 <div class="container" style="font-family: serif; border-style: solid; border-width: 5px;border-radius: 20px; max-width:1100px;border-color:#EB984E;">

   <div class="row" >
     <div class="col-md-4"></div>
    <div class="col-md-4">
    <h2 align="center" style="background-color: #F4D03F;color:black;border-radius: 5px">Add Company</h2>
    <form method="POST">

   
    
    <div class="form-group">
                                <label>Select Fertilizer Name:</label>
                                <select name="fname" class="form-control"  required>
                                <option value="">---------------Select Fertilizer---------------</option>
                            <?php
                               $sql = mysql_query("SELECT fertiname from ferti_name");
                                $row = mysql_num_rows($sql);

                                while ($row = mysql_fetch_array($sql))
                              {
                                  echo "<option value='". $row['fertiname'] ."'>" .$row['fertiname'] ."</option>";
                              }
                          
                            ?>
                        </select>
                                
                            </div>

    <div class="form-group"><label for="bname">Enter Company Name:</label>
    <input type="text" class="form-control" onchange="isalpha(this);"  placeholder="Enter Brand Name" name="bname" required></div>
    
    <div align="center">
     <button type="submit" name="s2" class="btn btn-primary" >Submit</button>
     <button  type="reset" name="c1" style="background-color:#D32F2F;color: white" class="btn btn-default">Cancel</button>
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



