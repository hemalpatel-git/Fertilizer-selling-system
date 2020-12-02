<?php 

include'conn.php';
     
	 $id=$_GET['id'];
	 $sql = "delete from user where id=".$id;
      
		$rs=mysql_query($sql);
		if($rs)
		{
			echo"";
			header("location: fdetails.php");
		}
		else
			echo"FAIL".mysql_error();


 ?>