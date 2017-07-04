<?php include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_menu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="user_bakeryjs_menu.js"></script>
</head>

<body>

	<a href="#go_up"><div class="up"><h2> ^ </h2></div></a>

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
		<h1 id="go_up"> Pick your favourite cakes! </h1>

	<?php

	$cake_name="SELECT DISTINCT name, image_name FROM Cake";
	$cake_name_result=mysqli_query($conn, $cake_name);


	while ($cake_name_row=mysqli_fetch_assoc($cake_name_result)) {
		$cake=$cake_name_row['name'];
		$image_name=$cake_name_row['image_name'];
		echo "<div class='container'>";	
		// echo "<img src=" . $image . "alt=" . $cake . "class='cakeimage'>";
		echo "<img src='" . $image_name . "' class='cakeimage'>";
			echo "<div class='cake'>";
				echo "<b>".$cake."</b>"; 
				echo "<br>";

	$cake_wp="SELECT weight, price FROM Cake where name='$cake' ORDER BY weight";
	$cake_wp_result=mysqli_query($conn, $cake_wp);
				while ($cake_wp_row=mysqli_fetch_assoc($cake_wp_result)) {
					$weight=$cake_wp_row['weight'];
					$price=$cake_wp_row['price'];
					echo $cake_wp_row['weight'] . " lbs: Rs." . $cake_wp_row['price'] . "    ";
					// echo "<h7 class='atc'>[+]</h7>";
					echo "<a class='atc' href='user_menu_cart.php?cname=$cake&wt=$weight'>[+]</a>";
					// echo "<h7>[+] <span class='tooltip'>Add to Cart</span></h7>";
					echo "<br>";
				}
			echo "</div>
		</div>";
	}
	
	?>

	</div>
	
</body>
</html>