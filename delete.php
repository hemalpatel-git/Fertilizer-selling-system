<?php 

include'conn.php';
     
	 $id=$_GET['id'];
	 $sql = "delete from fertilizer where id=".$id;
      
		$rs=mysql_query($sql);
		if($rs)
		{
			echo"";
			header("location: manage.php");
		}
		else
			echo"FAIL".mysql_error();


 ?>