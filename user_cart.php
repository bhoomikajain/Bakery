<?php 
	include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_cart.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="user_bakeryjs_cart.js"></script>
</head>

<body>

	<div class="top">
		
		<div class="log">
			<h3> Hello <?php $uname=$_SESSION['uname']; echo $uname; ?>! </h3> 
			<button class="logout"><a href="logout.php"> LOGOUT </a></button>
			<br>	
		</div>
		<!-- <div class="text">To place an order you must first sign in. </div> -->
		<div class="bar">
			<ul>
				<li><a class="home" href="user_index.php"> HOME </a></li>
				<li><a class="menu" href="user_menu.php"> MENU </a></li>
				<li><a class="about" href="user_about.php"> ABOUT </a></li>
				<li><a class="contact" href="user_contact.php"> CONTACT </a></li>
				<li><a class="cart" href="user_cart.php"> MY CART (
				<?php 
					$uid=$_SESSION['uid'];
					$count=mysqli_query($conn,"SELECT cart_id FROM Cart WHERE uid='$uid'");
					$count_row=mysqli_num_rows($count);
					echo $count_row;
				?>
				)</a></li>
				<li><a class="account" href="user_account.php"> MY ACCOUNT </a></li>
			</ul>
		</div>

	</div>

	<?php
		$cart_total=mysqli_query($conn,"SELECT SUM(ca.price * ct.qty)  FROM Cake as ca INNER JOIN Cart as ct ON ca.cid = ct.cid WHERE uid=$uid");
			$cart_res=mysqli_fetch_array($cart_total);
	

	if ($cart_res['SUM(ca.price * ct.qty)']!=0) {
	echo "<div class='order'>";

		echo "<div class='place'>";
			echo "<br>"; 
			echo "<div class='summary'><b>SUMMARY</b></div>";
			echo "<br>";
			echo "<div class='amt'>Payable Amount: Rs. " . $cart_res['SUM(ca.price * ct.qty)'] . " </div>";
			echo "<br> <br>";
			echo "<div class='order_button'><center><button class='place_order'><a href='user_cart_order.php'>PLACE ORDER</a></button></center></div>
		</div>";

	echo "</div>";
	}
	?>
	<div class="bottom">
	
	<?php
		echo "<h2>";
			
			if ($cart_res['SUM(ca.price * ct.qty)']==0) {
				echo "Your cart is empty!";
				echo "<button class='start_shopping' name='start_shopping'><a href='user_menu.php'>START SHOPPING</a></button>";
			} 

			else {
				echo  "My Cart: Rs.".$cart_res['SUM(ca.price * ct.qty)'];
			
				echo "</h2>"; 
				
				echo "<a href='user_cart_cancel.php'><button class='clr'>CLEAR ALL</button></a>";

				$cart_item=mysqli_query($conn, "SELECT * FROM Cake INNER JOIN Cart ON Cake.cid = Cart.cid WHERE uid=$uid");

				$cart_id[]=array();
				$_SESSION['cart_id']=array();
				
				$qty_old=array();
				$_SESSION['qty_old']=array();
				
				while ($cart_item_row=mysqli_fetch_assoc($cart_item)) {
					
					$cid=$cart_item_row['cid'];
					$qty=$cart_item_row['qty'];
					$cart_id=$cart_item_row['cart_id'];

					$qty_old[$cid]=$qty;

					$_SESSION['cid']=$cid;
					$_SESSION['qty_old']=$qty_old;
					$_SESSION['cart_id'][]=$cart_id;
							
					echo "<div class='container'>";

					echo "<form name='update_form' class='update_form' action='user_cart_qty.php' method='POST'>";
						
						echo "<div class='cancel'>Remove<input type='checkbox' name='cancel[$cart_id]'></div>";
				
						echo "<img src='" . $cart_item_row['image_name'] . "' class='cakeimage'>";

						echo "<div class='cake'>";
							echo "<b>".$cart_item_row['name']."</b>";  echo "<br><br>";
							

							echo "Quantity <input type='number' class='ch_qty' name='qty_new[$cid]' min='1' max='10' value='" . $cart_item_row['qty'] . "'>"; 

							echo "<br><br>";

							echo $cart_item_row['weight']." lbs"; echo "<br><br>";
							
							echo "Rs.".$cart_item_row['price'];
						
						echo "</div>";
					echo "</div>";			

				}
				echo "<input type='submit' class='remove' name='remove' value='REMOVE FROM CART'>";
				echo "<input type='submit' class='change' name='change' value='UPDATE QUANTITY'>";

				echo "<br><br>";

				echo "</form>";
				
				echo "<button class='continue_shopping' name='continue_shopping'><a href='user_menu.php'>CONTINUE SHOPPING</a></button>";

			}
	?>
	</div>

	
</body>
</html>