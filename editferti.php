<?php
include('headeradm.php');
include('conn.php');

$id=$_GET['id'];
 $qry = "select * from fertilizer where id=".$id;
 $rs=mysql_query($qry);
$rec=mysql_fetch_assoc($rs);


?>
<?php
if(isset($_POST['s1']))
{
   
	$qry = "UPDATE fertilizer set fename='".$_POST['name']."',qty='".$_POST['qty']."',price='".$_POST['price']."'  where id=".$id; 
      	 $result=mysql_query($qry); 
      	 if($result)
      	 {
      	 echo '<script>
    setTimeout(function() {
        swal({
            title: "Successfully !",
            text: "Data Upaded...:)",
            
        }, function() {
            window.location = "manage.php";
        });
    }, 100);
</script>';
      	 }
      	 else
      	 {
      	 	echo ":( Problems.....";
      	 }
}
?>

<html>
<head>
<script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<body>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-3">
	<form role="form" method="post">

					<fieldset class="form-group">
						<label>Name</label>
						<input type="text" class="form-control"  placeholder="Name" name="name" id="name" value="<?php echo $rec['fename'] ?>" onchange="isalpha(this);" maxlength="30">
					</fieldset>
					<fieldset class="form-group">
						<label>Quantity</label>
						<input type="text" class="form-control"  placeholder="Quantity" name="qty" id="qty" value="<?php echo $rec['qty'] ?>" onchange="isnum(this);" >
					</fieldset>
					<fieldset class="form-group">
						<label>Price</label>
						<input type="text" class="form-control"  placeholder="Price" name="price" id="price" value="<?php echo $rec['price'] ?>" onchange="isnum(this);" >
					</fieldset>
					
					<button class="btn btn-success btn-lg btn-block"  id="s1" name="s1"><span class="glyphicon glyphicon-ok"></span>Update</button>	
              <button id="cancel" type="reset" name="cancel" style="background-color:#D32F2F;color: white" class="btn btn-lg btn-block">Cancel</button>  
   </div>
			<div class="col-sm-3">
				<img src="upload/<?=$rec['img']?>" width="300" height="300">
		    </div>
		</form>
	</div>
	<div class="col-sm-3"></div>
</div>
</body>
 
</html>

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

                function isnum(ele)
                {
					var r=/[^\u0ae6-\u0aef,0-9]+/i;
                   // var r=/\D$/i;
                    if(r.test(ele.value))
                     {
                         alert("Only Numbers are accepted!");
                         ele.value="";
                         ele.focus();
                     }
                }
</script>    




			


