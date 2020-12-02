<head>
	<script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<?php
include("conn.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


if (isset($_POST['sub'])) {
    

$fname=addslashes($_POST["fname"]);
$add=addslashes($_POST["add"]);
$city=$_POST["city"];
$pincode=$_POST["pc"];
$no=$_POST["no"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$psw=$_POST["psw"];

$qry1="select * from user where uname='$uname'";
$qry2="select * from user where email='$email'";
$sql1=mysql_query($qry1);
$sql2=mysql_query($qry2);

        if (mysql_num_rows($sql1) > 0) 
        {
             echo header("Location: registration.php?msg=1");
        }
        elseif(mysql_num_rows($sql2) > 0)
        {
            echo header("Location: registration.php?msg1=1");
        }
    

 else{
            
        $qry="INSERT INTO  user(fname,address,city,pincode,mo,email,uname,pass) values ('$fname','$add','$city',".$pincode.",".$no.",'$email','$uname','$psw')";

        $rs=mysql_query($qry);
        if($rs)
        {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "Successfully !",
                    text: "Your registration has been done successfully,THANK YOU !",
                    
                }, function() {
                    window.location = "login.php";
                });
            }, 100);
        </script>';
        		}
        		else
        			echo"FAIL".mysql_error();
    }
}

?>