<?php
	session_start();
	if(empty($_SESSION["admin"]))
	{
		header("location: login.php");
	}
?>