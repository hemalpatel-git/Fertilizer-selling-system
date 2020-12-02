<?php 
     include'conn.php';
     include'headeradm.php';

      $qry="select * from user";
      $rs=mysql_query($qry);
?>
<html>
<head>
	<title>Farmers Detail</title>
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    
</head>
<body>
<div class="container">
	<div class="form-group">
    <div class="form-group" style="background-color:#F4D03F;border-radius: 5px;margin: 10px">

  <center><label><font size="4" style="font-family:initial;border-radius: 5px">Farmer Details</font></label></center>
  </div>
							

 <div class="table-responsive">          
  <table class="table table-striped  table-bordered">
    <thead>
      <tr style="background-color: #EB984E;color: white;font-family:initial;">
	    <th>Farmer Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>Remove</th>
		
      </tr>
    </thead>
    <tbody style="font-family:initial;" >
      <?php
       
            $tot=0;
          while($rec=mysql_fetch_assoc($rs))
         {

         $id=$rec['id'];
         echo"<input type='hidden' name='id' value=".$id.">";
	       echo"<tr>";
	       echo"<td>".$rec["fname"]."</td>";
	       echo"<td>".$rec["address"]."</td>";
	       echo"<td>".$rec["email"]."</td>";
	       echo"<td>".$rec["mo"]."</td>";
	       echo"<td>".$rec["city"]."</td>";
         echo"<td><button class='btn btn-danger' onClick='hi(".$id.");'>Remove</button></td>";

		   //$id= $rec["id"];
      // echo "".$id;
	       echo "</tr>";
		     $tot=$tot+$rec["fname"]=1;
	 
	      }
        echo "<div style='background-color:skyblue;color:darkred; font-family:initial;border-radius: 5px;text-align:center;width:300px;height:30;font-size:20'>";
        echo "<b>Registered Farmer:".$tot."</b>";
        echo "</div>";
        echo "<br>";
     
    
        
 ?>
    </tbody>
  </table>

  </div>
</div>
</div>
</body>	
<script>
        function hi(){
            //var a = "<?php echo $rec['id']; ?>";
            var id=arguments[0];
        swal({
            title: "Are you sure?",
            text: "You can not retrieve your data!!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, Remove it!',
            closeOnConfirm: false
        },
        function(){
           
            window.location = "deletefarmer.php?id=" + id;
        });
    };
    </script>	
</html>
<?php
include("footer.php");
?>
