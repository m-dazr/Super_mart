
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <?php session_start();
  error_reporting(0); ?>
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
        	  
        <!--Top Header Menu-->
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
		<!--Left Side Menu-->	
		 <?php
		//if user is login display usermenu, else non-user menu
		if(isseT ($_SESSION['username'])){
			include 'leftmem.php';
			}
	 
		else{
		 include 'leftmenun.php';
		 }
		 ?>
		
		<!--Main Content-->
		<div id="content">

		  <div id="breadcrumb"> <a href="index.php">Home</a> /  <strong>Search</strong></div>
		  
		  
		 
 			<h2>Search Engine</h2>
				<form action='./search.php' method='get'>
					<input type='text' name='k' size='50' value='<?php echo $_GET['k']; ?>' /> 
					<input type='submit' value='Search'>
				</form>
				<hr />
			<?php
				// connect db
				mysql_connect("localhost", "root", "");
				mysql_select_db("supermart");
			
	
				$k = $_GET['k'];
				$terms = explode(" ", $k);
				$query = "SELECT * FROM products WHERE ";
				
				foreach ($terms as $each){
					$i=0;
					$i++;
					if ($i == 1)
						$query .= "keywords LIKE '%$each%' ";
					else
						$query .= "OR keywords LIKE '%$each%' ";
				}
				
				
				
				$query = mysql_query($query);
				
				$numrows = mysql_num_rows($query);
				
				if ($numrows > 0){
									
					while ($row = mysql_fetch_assoc($query)){
					
					echo "<table border='1'>
							<tr>
							<th>Product</th>
							<th>Description</th>
							<th>Price</th>
							<th></th>
							</tr>";
					
						$id = $row['id'];
						$imagepath = $row ['imagepath'];
						$PName = $row['PName'];
						$keywords = $row['keywords'];
						$PDesc = $row['PDesc'];
						$Price = $row['Price'];
						
						echo "<u>$PName</u>";
						?>
						
						<tr align='center'>
					
					<td width='100' height='100'>
					<?php echo "<img src=css/"."$imagepath"."> <br>"; ?>
					</td>
					
					 
									
					<td width='250'>
					<?php echo "$PDesc"; ?> 
					</td>
					
					<td width='100'>
					S$<?php echo number_format("$Price",2); ?>
					</td>
					
					<td width='75'>
					<?php 
					echo '<a href="cart.php?add='."$id".'">Add to Cart</a>'; ?>
					</td>
					
					</tr>
					
				
					<?php	
							
						}
						
					}
					else
						echo "No results found for \"<b>$k</b>\" </br></br></br></br></br></br></br>  ";
					
					// disconnect
					mysql_close();
				
					
						?>
					 
				 
		</div>
		
		<div id="poweredby"></div>
		
	</div>
	
</div>
</body>
</html>