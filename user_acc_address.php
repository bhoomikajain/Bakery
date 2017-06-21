<?php include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_address.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<!-- <script type="text/javascript" src="user_bakeryjs_address.js"></script> -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
    		function cancel(){
        		$.ajax({
            		type:"POST",
		            url:"ajax_address_cancel.php",
		            data:{action:'call_this'},
		            // success:function(data){
		            //     alert('Deleted');
		            // }
       			});
    		}
    		$(".cancel").click(function(){
    			cancel();
			});
    	});
    	
	</script> -->
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
				<li><a class="orders" href="user_acc_orders.php"> My Orders</a></li>
				<li><a class="password" href="user_acc_password.php"> Change Password </a></li>
			</ul>
		</div>

	</div>

	<div class="bottom">
	<?php

		$address_query=mysqli_query($conn, "SELECT * FROM Address WHERE uid=$uid");
		$address_rows=mysqli_num_rows($address_query);

		if ($address_rows > 0) {

			$address_id[]=array();

			while ($address_res=mysqli_fetch_array($address_query)) {

				$address_id=$address_res['address_id'];

				// print_r($address_id);

				echo "<div class='container'>";
					echo "<form name='cancel_address' class='cancel_address' method='POST' action='user_acc_cancel_address.php'>";
					echo "<input type='submit' name='cancel[$address_id]' class='cancel' value='x'>";
					echo "</form>";

					// echo "<input type='button' onclick='return cancel()' name='cancel' class='cancel' value='x'>";
					echo "<span class='fullname'>" . $address_res['fname'] . " " . $address_res['lname'] . "</span><br><br>";
					echo "<span class='fulladdress'>" . $address_res['houseno'] . ", " . $address_res['street'] . "<br>" . $address_res['city'] . ", " . $address_res['pincode'] . "<br>" . $address_res['state'] . ", " . $address_res['country'] . "</span><br><br>";
					echo "<span class='contact'> Mobile Number: " . $address_res['mobileno'] . "<br> Alternate Number: " . $address_res['altno'] . "</span>";
				echo "</div>";
			}
		}
	?>
		<a href="user_acc_add_address.php"><button class="new_address"> + ADD NEW ADDRESS </button></a>
	</div>

	
	
</body>
</html>