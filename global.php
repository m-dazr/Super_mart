<?php

 



 

// Connect to server and select database. 
	$con = mysql_connect("localhost","root","");	
	if (!$con)
	{
		die('Could not connect:'.mysql_error());
	}
 
	mysql_select_db("supermart",$con);




?>