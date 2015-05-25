<font  size="2" face="verdana">
<?php error_reporting(0);?>
<?php

session_start(); 

$page = 'shopcart.php';


mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('supermart') or die(mysql_error());

//----------------------------add/delete/minus---------------------------

if(isset($_GET['add']))
{
    $quantity = mysql_query('SELECT id, available FROM products WHERE id = '.mysql_real_escape_string((int)$_GET['add']));
    while($quantity_row = mysql_fetch_assoc($quantity))
    {
        if($quantity_row['available'] !=$_SESSION['cart_'.(int)$_GET['add']]) 
        {
            $_SESSION['cart_'.(int)$_GET['add']]+='1';            
        }
    }
    header('Location: '.$page);
}

if(isset($_GET['remove'])){
    $_SESSION['cart_'.(int)$_GET['remove']]--;
    header('Location: '.$page);
}

if(isset($_GET['delete'])){
    $_SESSION['cart_'.(int)$_GET['delete']]='0';
    header('Location: '.$page);
}

 
//-------------Cart for the shopcart.php-------//
 
function cart()
{
	$total = 0;
    foreach ($_SESSION as $name => $value)
    {
        if($value > 0){
           if(substr($name, 0 , 5) == 'cart_')
            {
               $id = substr($name, 5, (strlen($name)-5));
               $get = mysql_query('SELECT id, PName, Price FROM products WHERE id ='.mysql_real_escape_string((int)$id));
               while ($get_row = mysql_fetch_assoc($get))
               {
                   $sub = $get_row['Price'] * $value; 
                   echo $get_row['PName'].' x '.$value.' @ S$'.number_format($get_row['Price'], 2).' = S$'.number_format($sub, 2).' <a href="cart.php?remove='.$id.'">[-remove]</a> <a href="cart.php?add='.$id.'">[+add]</a> <a href="cart.php?delete='.$id.'">[Clear] <br /></a>';
					
				 
					$total += $sub;
				 
			   }                             
           }
         
		    
        }                
    }
    if($total == 0)
    {
        echo "Your cart is empty.";
    }
    else
    {	echo '</br></br>';
		echo '-------------------------------------';
		echo '</br>';
       echo 'Total: S$' .  number_format($total, 2);
		echo '</br>';
		 
		echo '</br>';
	 
		echo '</br>';
		 
		echo '</br>';
		
		 
		
        ?>
			
        <?php                   
    }
    
}

//-------------Cart2 for the payment page include PAYPAL checkout button-------//
 
function cart2()
{
	echo "<u>Products Ordered:</u></br>";
	$total = 0;
    foreach ($_SESSION as $name => $value)
    {
        if($value > 0){
           if(substr($name, 0 , 5) == 'cart_')
            {
               $id = substr($name, 5, (strlen($name)-5));
               $get = mysql_query('SELECT id, PName, Price FROM products WHERE id ='.mysql_real_escape_string((int)$id));
			   
			  
               while ($get_row = mysql_fetch_assoc($get))
               {
				   	
                   $sub = $get_row['Price'] * $value; 
                   echo $get_row['PName'].' x '.$value.' @ S$'.number_format($get_row['Price'], 2).' = S$'.number_format($sub, 2).'  <br />';
					
					 
					$total += $sub;
					 
			   }                             
           }
         
		    
        }                
    }
    if($total == 0)
    {
        echo "Your cart is empty.";
    }
    else
    {	echo '</br></br>';
		echo '-------------------------------------';
		echo '</br>';
       echo 'Total: S$' .  number_format($total, 2);
		echo '</br>';
	 
		echo '</br>';
	 
		echo '</br>';
	 
		echo '</br></br> ';
		
		 
		
        ?>
			 
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="upload" value="1" />
                
				<input type="hidden" name="business" value="esmart_1319079368_biz@gmail.com" />
                <?php paypal_items(); ?>
                <input type="hidden" name="currency_code" value="SGD" />
                <input type="hidden" name="amount" value="<?php echo $shipping; ?>" />
                <input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
            </form>    
			
		 
        <?php                   
    }
    
}


//-----------------------------------Check-out function--------------------------
function paypal_items()
{
    $num = 0;
    foreach($_SESSION as $name => $value)
    {
        if($value != 0)
        {
            if(substr($name, 0, 5) == 'cart_')
            {
			
                $id = substr($name, 5, strlen($name-5));
				 
                $get = mysql_query('SELECT id, PName, Price, shipping, available FROM products WHERE id = '.mysql_real_escape_string($id));
                
                while($get_row = mysql_fetch_assoc($get))
                {
                    $num++;                    
                    echo '<input type="hidden" name = "item_number_'.$num.'" value = "'.$id.'">';
                    echo '<input type="hidden" name = "item_name_'.$num.'" value = "'.$get_row['PName'].'">';
                    echo '<input type="hidden" name = "amount_'.$num.'" value = "'.$get_row['Price'].'">';
                   
                    echo '<input type="hidden" name = "quantity_'.$num.'" value = "'.$get_row['available'].'">';
                    echo '<input type="hidden" name = "quantity_'.$num.'" value = "'.$value.'">';
					
					
                }
				 
            }
			
        }
		//echo '<input type="hidden" name = "shipping_'.$num.'" value = "'. number_format(1, 2).'">';
		 
    }
	
}



?>