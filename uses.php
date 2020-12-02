<?php
	session_start();
	if(empty($_SESSION["fid"]))
	{
		header("location: login.php");
	}
?>