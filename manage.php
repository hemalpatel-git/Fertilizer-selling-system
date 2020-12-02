<?php
include('headeradm.php');
 include('conn.php');

$qry="select * from fertilizer";
$rs=mysql_query($qry);
 

?>

<html>
<head>
	<script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
    
</head>
<body>
<div class="container">
</br>
	<div class="form-group" style="background-color:#F4D03F;border-radius: 5px;">

	<center><label><font size="4" style="background-color:;font-family:initial;border-radius: 5px">Manage Fertilizer Details</font></label></center>
	</div>
 <div class="table-responsive">          
  <table class="table table-striped  table-bordered" style="color:#5D6D7E">
    <thead>
     <tr style="background-color: #EB984E;color: white;font-family:initial;">
     	<th>Name</th>
     	<th>Image</th>
     	<th>Quantity</th>
     	<th>Price</th>
     	<th>Edit</th>
     	<th>Delete</th>
     </tr>
    </thead>
    <tbody style="font-family:initial;">
     <?php
          while($rec=mysql_fetch_assoc($rs))
         { 
           $id=$rec['id'];
           echo"<input type='hidden' name='id' value=".$id.">";
	       echo"<tr>";
	       echo"<td>".$rec["fename"]."</td>";
	       echo"<td>".$rec["img"]."</td>";
	      
	       echo"<td>".$rec["qty"]."</td>";
	       echo"<td>".$rec["price"]."</td>";
	       echo"<td><a href='editferti.php?id=".$id."'><button class='btn btn-info'><i class='glyphicon glyphicon-pencil'></i>Edit</button></a></td>";  
		   echo"<td><button class='btn btn-danger' onClick='hi(".$id.");'>Delete</button></td>";
		   echo "</tr>";
	
	}
 ?>

 </tbody>
 </table>
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
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false
        },
        function(){
           
            window.location = "delete.php?id=" + id;
        });
    };
    </script>
</html>

<?php

 include('footer.php');
?>