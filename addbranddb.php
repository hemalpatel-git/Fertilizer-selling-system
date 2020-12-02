<head>
	<script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>

<?php
 include("conn.php");
    
    
	$fname=addslashes($_POST["fname"]);
	$bname=addslashes($_POST["bname"]);

	$qry="INSERT INTO brand(fertiname,brandname) values ('$fname','$bname')";
	$rs=mysql_query($qry);
if($rs)
{
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
		else
			echo"FAIL".mysql_error();

?>
