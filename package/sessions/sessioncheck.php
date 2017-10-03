<?php
	include("package\dbconnections\sbabout.php");
	session_start();
	$userid;
	if(isset($_SESSION["userid"]))
	{
		$userid = $_SESSION['userid'];
	}
	else
	{
		header("location:login.php");
	}
	
?>	
