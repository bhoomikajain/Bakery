<?php include("cake_sql.php"); ?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="bakery_menu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="bakeryjs_menu.js"></script>
</head>

<body>

	<div class="top">
		
		<div class="log">
			<button class="signin"><a href="signin.php"> SIGN IN </a></button>
			<br>	
		</div>
		<div class="text">To place an order you must first sign in. </div>
		<div class="bar">
			<ul>
				<li><a class="home" href="index.php"> HOME </a></li>
				<li><a class="menu" href="menu.php"> MENU </a></li>
				<li><a class="about" href="about.php"> ABOUT </a></li>
				<li><a class="contact" href="contact.php"> CONTACT </a></li>
			</ul>
		</div>

	</div>

	<div class="bottom">
		<h1> Pick your favourite cakes! </h1>

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

	$cake_wp="SELECT weight, price FROM Cake where name='$cake'";
	$cake_wp_result=mysqli_query($conn, $cake_wp);
				while ($cake_wp_row=mysqli_fetch_assoc($cake_wp_result)) {
					echo $cake_wp_row['weight'] . "pounds: Rs." . $cake_wp_row['price'] . "    ";
					echo "<h7 class='atc'>[+]</h7>";
					// echo "<h7>[+] <span class='tooltip'>Add to Cart</span></h7>";
					echo "<br>";
				}
			echo "</div>
		</div>";
	}
	?>

		<div class="container">
			<img src="Oreo Cheesecake.jpg" alt="Oreo Cheesecake" class="image">
			<div class="cake">
				Oreo Cheesecake <br>
				100 pounds: Rs. 350
			</div>
		</div>

		<div class="container">
			<img src="Red Velvet Cake.jpg" alt="Red Velvet Cake" class="image">
			<div class="cake">
				Red Velvet Cake <br>
				100 pounds: Rs. 400
			</div>
		</div>

		<div class="container">
			<img src="CHOCOLATE-TRUFFLE-CAKE.jpg" alt="Chocolate Truffle Cake" class="image">
			<div class="cake">
				Chocolate Truffle Cake <br>
				100 pounds: Rs. 300
			</div>
		</div>

		<div class="container">
			<img src="Chocolate Chip Cake.jpg" alt="Chocolate Chip Cake" class="image">
			<div class="cake">
				Chocolate Chip Cake <br>
				100 pounds: Rs. 300
			</div>
		</div>

		<div class="container">
			<img src="Mixed Fruit Cake.jpg" alt="Mixed Fruit Cake" class="image">
			<div class="cake">
				Mixed Fruit Cake <br>
				100 pounds: Rs. 350
			</div>
		</div>

		<div class="container">
			<img src="Chocolate Mousse Cake.jpg" alt="Chocolate Mousse Cake" class="image">
			<div class="cake">
				Chocolate Mousse Cake <br>
				100 pounds: Rs. 300
			</div>
		</div>

		<div class="container">
			<img src="Strawberry Cake.jpg" alt="Strawberry Cake" class="image">
			<div class="cake">
				Strawberry Cake <br>
				100 pounds: Rs. 250
			</div>
		</div>

		<div class="container">
			<img src="Black Forest Cake.jpg" alt="Black Forest Cake" class="image">
			<div class="cake">
				Black Forest Cake <br>
				100 pounds: Rs. 300
			</div>
		</div>

		<div class="container">
			<img src="Pineapple Cake.jpg" alt="Pineapple Cake" class="image">
			<div class="cake">
				Pineapple Cake <br>
				100 pounds: Rs. 250
			</div>
		</div>

	</div>
	
</body>
</html>