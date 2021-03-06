<?php
session_start();
 include 'admin/connect.php';
 include 'header.php';
?>

<div class="container">
    <div id="shopping_cart" align="left">
     <?php 
	    if(isset($_SESSION['login'])){
		
          echo "<b>Customer: </b> " . $_SESSION['login'];
          echo "<hr>";
		
		}else{
		
		  echo "";
		}
	  ?> 
        <b style="color:navy">Your Cart - </b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?>   
    </div>
</div>

<?php

include 'footer.php';
?>