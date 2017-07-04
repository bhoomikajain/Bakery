<?php include("cake_sql.php"); 	
	session_start();

	$uid=$_SESSION['uid'];
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_orders.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="user_bakeryjs_profile.js"></script>
</head>

<body>

	<div class="top">
		
		<div class="log">
			<h3> Hello <?php $uname=$_SESSION['uname']; echo $uname; ?>!</h3> 
			<a href="logout.php"><button class="logout"> LOGOUT </button></a>
			<br>	
		</div>
		<!-- <div class="text">To place an order you must first sign in. </div> -->
		<div class="bar">
			<ul class="bar_content">
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
				<li><a class="account" href="user_account.php"> MY ACCOUNT </a>
				<!-- <div class="acc">
					<ul class="acc_content">
						<li><a class="a_profile" href="user_account.php"> Profile </a></li>
						<li><a class="a_address" href="user_acc_address.php"> Address </a></li>
						<li><a class="a_orders" href="user_acc_orders.php"> My Orders </a></li>
						<li><a class="a_password" href="user_acc_password.php"> Change Password </a></li>
					</ul>
				</div> -->
				</li>
			</ul>
		</div>

		<div class="myacc">
			<ul>
				<li><a class="profile" href="user_account.php"> Profile </a></li>
				<li><a class="address" href="user_acc_address.php"> Address </a></li>
				<li><a class="orders" href="user_acc_orders.php"> My Orders </a></li>
				<li><a class="password" href="user_acc_password.php"> Change Password </a></li>
			</ul>
		</div>

	</div>




	<div class="bottom">
		
		<?php
			$order_query=mysqli_query($conn, "SELECT order_id, DATE(order_date) FROM Orders WHERE uid=$uid");
			
			$ordered_item=mysqli_query($conn, "SELECT * FROM Cake INNER JOIN CakesOrdered ON Cake.cid = CakesOrdered.cid WHERE uid=$uid");
			

			while(($ordered_item_row=mysqli_fetch_assoc($ordered_item)) && ($order_row=mysqli_fetch_assoc($order_query))) {
				echo "<div class='container'>";
					echo "<span class='orderid'><b>Order ID: " . $order_row['order_id'] . "</b></span>";
					echo "<span class='date'><b>Date: " . $order_row['DATE(order_date)'] . "</b></span>";
					echo "<img src='" . $ordered_item_row['image_name'] . "' class='cakeimage'>";
					echo "<div class='cdetails'>";
						echo "<span class='cname'><b>" . $ordered_item_row['name'] . "</b></span><br><br>";
						echo "<span class='qty'>Quantity: " . $ordered_item_row['qty'] . "</span><br><br>";
						echo "<span class='weight'>" . $ordered_item_row['weight'] . " lbs</span><br><br>";
						echo "<span class='price'>Rs." . $ordered_item_row['price'] . "</span><br><br>";
					echo "</div>";
				echo "</div>";
			}
	

		?>
		
	</div>

	
	
</body>
</html>