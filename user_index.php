<?php include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="bakeryjs.js"></script>
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
	
	<div class="bottom">

		<div class="container">
			<!-- <div class="left"><b> < </b></div>
			<div class="right"><b> > </b></div> -->
			<div class="img_text">
				<h1> Choose from our wide variety of eggless-cakes! </h1>
				<a href="menu.php"><button class="shop"> SHOP NOW >> </button></a>
			</div>
		</div>

	</div>

</body>
</html>