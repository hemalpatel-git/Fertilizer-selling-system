<?php
	session_start();
	if(!empty($_SESSION["fid"]))
	{
		header("location: afterlgn.php");
	}
	if(!empty($_SESSION["admin"]))
	{
		header("location: add.php");
	}
?>