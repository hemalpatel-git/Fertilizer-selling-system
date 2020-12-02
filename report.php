<?php include("headeradm.php"); 

ob_start();
if (isset($_POST['s1'])) {
  
$dt1=$_POST['dt1'];
$dt2=$_POST['dt2'];
$date_now = date("Y-m-d");
if($dt1 > $date_now  || $dt2 > $date_now)
{
   echo '<script>
       swal({
        title: "Invalid Selection ! :(",
        text: "Future Date Selection is invalid.",
        type: "warning",
        showCancelButton: false,
        confirmButtonClass: "btn-danger",
        closeOnConfirm: false
      },
        function(){
        window.location = "report.php";
     });
    </script>';
}
else if($dt1 > $dt2)
{
     echo '<script>
      swal({
        title: "Invalid Selection ! :(",
        text: " please check it.",
        type: "warning",
        showCancelButton: false,
        confirmButtonClass: "btn-danger",
        closeOnConfirm: false
      },
        function(){
        window.location = "report.php";
     });
    </script>';
}
else{

   echo"<script>window.location='reportdb.php?y=".$dt1."&x=".$dt2."';</script>";
  //header("Location: reportdb.php?y=$dt1&x=$dt2");
} 
} 
 ?>  
    <div class="container"  style="border-style: solid; border-width: 5px;border-radius: 20px; max-width:1100px;border-color:#135b75;font-family: serif;">
      <div align="center" style="background-color:#F4D03F;border-radius: 5px;margin: 10px"><font size="4" style="background-color:;font-family:initial;border-radius: 5px;"><b>Selling Report</b></font></div>
      
        <div>
            <center><img src="./icon/record.png" class="img-responsive" width="200" height="200"/>
           </center>
           
        </div>

       <div style="margin-top: 15px;">
        <center>
         <form method="POST" action="#">
            <label for="datepicker">From Date:</label>
            <input type="text" name="dt1"  id="datepicker1"  onclick="$('#datepicker1').datepicker({dateFormat: 'yy-mm-dd'});$('#datepicker1').datepicker('show');"  autofocus required/>
            <label for="datepicker">To:</label>
            <input type="text" name="dt2"  id="datepicker2" onclick="$('#datepicker2').datepicker({dateFormat: 'yy-mm-dd'});$('#datepicker2').datepicker('show');" required/>
            <input type="submit" style="background-color:#cc2900;color: white" class="btn btn-default" name="s1" value="Generate Report">

        </form>
        </center>
        </div>
  </div>
 

<?php
  include'footer.php';
?>


