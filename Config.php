<?php
	$con = mysqli_connect("localhost","Your DB user name","your password","your db");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
?>