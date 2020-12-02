<?php
include("conn.php");
	$data= $_GET['datavalue'];

	$qry="Select * from brand where fertiname='$data'";
	$rs=mysql_query($qry);
	while ($row=mysql_fetch_assoc($rs)) {
         echo "<option>".$row['brandname']."</option>";    
	}
?>