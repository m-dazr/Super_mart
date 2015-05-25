
<?php 
	session_start();
	require 'global.php';			
	$type = $_GET['type'];
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E-Supermart</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6_or_less.css" />
<![endif]-->
<script type="text/javascript" src="js/common.js"></script>
 

</head>
<body id="type-b">


	<div id="wrap">
	<div id="header">
		<div id="site-name">
		 <img border="0" src="css/images/logo.gif" alt="Banner" />
		
		 
		</div>
		<div id="search"></div>
        	  
        <!------------------------------------Top Header Menu--------------------------->
		
		<?php

		//if user is login display usermenu, else non-user menu
		if(isseT ($_SESSION['username'])){
			include 'headmem.php';
			}
	 
		else{
		 include 'headern.php';
		 }
		 ?>
	
		<div id="content-wrap">
		
		<!--------------------------------------Left Side Menu------------------------------------>	
		<?php
		//if user is login display usermenu, else non-user menu
		if(isseT ($_SESSION['username'])){
			include 'leftmem.php';
			}
	 
		else{
		 include 'leftmenun.php';
		 }
		 ?>
		
		<!-------------------------------------------------Main Content------------------------------------->
		<div id="content">

		  <div id="breadcrumb"> <a href="index.php">Home</a> / <a href="products.php">Products</a></div>
		 
 				 
							
			 
		
				<font  size="2" face="verdana">
				<?php
			 
				//            MEMBER  /////
				//if user is login, ADD TO CART FEATURE is available
				if(isseT ($_SESSION['username'])){

				echo "<br><h2>Welcome, ".$_SESSION['username']."!</h2><br> ";
				
				$sql="Select id, PName, PDesc, Price, imagepath FROM products WHERE PType = '$type' and available > 0 ORDER by id DESC";
				$result = mysql_query($sql);
				
				echo"<h2><u>$type</u></h2></br></br>";
			?>
				
				<table border='1'>
					<tr>
					<th bgcolor="#C8C8C8">Product</th>
					<th bgcolor="#C8C8C8">Name</th>
					<th bgcolor="#C8C8C8">Description</th>
					<th bgcolor="#C8C8C8">Price</th>
					<th bgcolor="#C8C8C8"></th>
					 
					</tr>
			
	
	<?php
		 
        while($get_row = mysql_fetch_assoc($result)){
		?>
			<tr align='center'>
			
			<td width='100' height='100'>
		
			 <?php echo "<img border='0' src=css/".$get_row['imagepath']."> <br>"; ?>
			</td>
			
			<td width='150' height='40'>
			<?php echo	$get_row['PName'];	?>
			</td>
							
			<td width='250'>
			<?php echo $get_row['PDesc']; ?> 
			</td>
			
			<td width='100'>
			S$<?php echo number_format($get_row['Price'],2); ?>
			</td>
			
			<td>
			<?php 
			echo '<a href="cart.php?add='.$get_row['id'].'">Add to Cart</a>'; ?>
			</td>
			
			</tr>
			
			<?php
			
			}
			
			?>
			</table>
			
			<?php	
				 
				}
				
				else{
				  
			 	?>
				
		 
				<?php
				//////////     NON-MEMBER    ///////////////
				
				$sql="Select id, PName, PDesc, Price, imagepath FROM products WHERE PType = '$type' and available > 0 ORDER by id DESC";
				$result = mysql_query($sql);
				
				echo"<h2><u>$type</u></h2></br></br>";
				?>
				
				<table border='1' >
					<tr>
					<th bgcolor="#C8C8C8">Product</th>
					<th bgcolor="#C8C8C8">Name</th>
					<th bgcolor="#C8C8C8">Description</th>
					<th bgcolor="#C8C8C8">Price</th>
					 
					</tr>
			
	
	<?php
		 
        while($get_row = mysql_fetch_assoc($result)){
		?>
			<!--NO ADD TO CART-->
			<tr align='center'>
			
			<td width='100' height='100'>
			
			 <?php echo "<img border='0' src=css/".$get_row['imagepath']."> <br>"; ?>
			</td>
			
			<td width='150' height='40'>
			<?php echo	$get_row['PName'];	?>
			</td>
							
			<td width='250'>
			<?php echo $get_row['PDesc']; ?> 
			</td>
			
			<td width='100'>
			S$<?php echo number_format($get_row['Price'],2); ?>
			</td>
					
			</tr>
			
			<?php
			
			}
			
			?>
			</table>
			<?php
			}
		 ?>
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>