<?php
// Connect to server and select database. 
	$con = mysql_connect("localhost","root","");	
	if (!$con)
	{
		die('Could not connect:'.mysql_error());
	}
 
	mysql_select_db("supermart",$con);


if(isset($_POST['submit'])){
  $comments=$_POST['comments'];
  $userid = $_POST['userid'];
  $q="INSERT INTO commentable (comments, userid) 
			VALUES ('$comments','$userid')";
$sql=mysql_query($q);
 

  
 header('Location:bsdetail.php');
} 
else
{ 
 echo 'ERROR';
 }
?>


