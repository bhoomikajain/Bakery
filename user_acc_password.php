<?php include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_password.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="user_bakeryjs_password.js"></script>
</head>

<body>

	<div class="top">
		
		<div class="log">
			<h2> Hello <?php $uname=$_SESSION['uname']; echo $uname; ?>!</h2> 
			<a href="logout.php"><button class="logout"> LOGOUT </button></a>
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

			$uid=$_SESSION['uid'];

			$user_query=mysqli_query($conn, "SELECT * FROM Users WHERE uid=$uid");
			$user_res=mysqli_fetch_array($user_query);

		?>
		<form name="user_changepwd" class="user_changepwd" method="POST" action="user_changepwd.php">

			Email <br>
			<input type="text" name="email" value="<?php echo $user_res['email'] ?>" disabled> <br><br>

			Old Password <br>
			<input type="password" name="old" class="old"><font color="red">*</font> <br><br>

			New Password <br>
			<input type="password" name="new" class="new"><font color="red">*</font> <br><br>

			Confirm Password <br>
			<input type="password" name="confirm" class="confirm"><font color="red">*</font> <br><br>

			<input type="submit" name="submit" class="submit">

		</form>
	</div>

	
	
</body>
</html>