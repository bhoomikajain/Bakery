<?php include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_add_address.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="user_bakeryjs_add_address.js"></script>
</head>

<body>

	<div class="top">
		
		<div class="log">
			<h3> Hello <?php $uname=$_SESSION['uname']; echo $uname; ?>!</h3> 
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

		<div class="myacc">
			<ul>
				<li><a class="profile" href="user_account.php"> Profile </a></li>
				<li><a class="address" href="user_acc_address.php"> Address </a></li>
				<li><a class="orders" href="user_acc_orders.php"> My Orders</a></li>
				<li><a class="password" href="user_acc_password.php"> Change Password </a></li>
			</ul>
		</div>

	</div>

	<div class="bottom">
		
		<form name="user_address" class="user_address" method="POST" action="user_acc_submit_address.php">
			
			<table>
				<tr>
					<td>
						First Name <br>
						<input type="text" name="fname"><font color="red">*</font> <br>
					</td>
					<td>
						Last Name <br>
						<input type="text" name="lname"><font color="red">*</font> <br>
					</td>
				</tr>
				
				<tr>
					<td>
						Mobile Number <br>
						<input type="text" name="mobileno"><font color="red">*</font> <br>
					</td>
					<td>
						Alternate Number <br>
						<input type="text" name="altno"> <br>
					</td>
				</tr>
			
				<tr>
					<td>
						Flat/ House No./ Building <br>
						<input type="text" name="houseno"><font color="red">*</font> <br>
					</td>
					<td>
						Colony/ Street/ Locality <br>
						<input type="text" name="street"><font color="red">*</font> <br>
					</td>
				</tr>
				<tr>
					<td>
						Pincode <br>
						<input type="text" name="pincode"><font color="red">*</font> <br>
					</td>
					<td>
						City <br>
						<input type="text" name="city"><font color="red">*</font> <br>
					</td>
				</tr>
				<tr>
					<td>
						State <br>
						<input type="text" name="state"><font color="red">*</font> <br>
					</td>
					<td>
						Country <br>
						<input type="text" name="country"><font color="red">*</font> <br>
					</td>
				</tr>
			</table>

			<input type="submit" class="submit_address" value="SUBMIT">
			<button class="cancel"><a href="user_acc_address.php"> CANCEL </a></button>

		</form>

	</div>
	
	
</body>
</html>