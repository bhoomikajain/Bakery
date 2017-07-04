<?php include("cake_sql.php"); 	
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="user_bakery_contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="user_bakeryjs_menu.js"></script>
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

		<div class="feedback">
		<center><h3> FEEDBACK </h3></center>
		<form name="contactform" method="post" action="send_form_email.php">
			<table width="400px">
			<tr>
			 <td valign="top">
			  <label for="first_name">First Name *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="first_name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top"">
			  <label for="last_name">Last Name *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="last_name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="email">Email Address *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="email" maxlength="80" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="telephone">Telephone Number</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="telephone" maxlength="30" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="comments">Comments *</label>
			 </td>
			 <td valign="top">
			  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
			 </td>
			</tr>
			<tr>
			 <td colspan="2" style="text-align:center">
			  <input type="submit" value="Submit" class="submit_contact"> 	 
			 </td>
			</tr>
			</table>
		</form>
		</div>

		<div class="contact_details">
		<h1> Contact Us </h1>
			Call us: +91 7506646812 <br>
			Email us: bhoomika.luhadiya@gmail.com
		</div>
	</div>
	
</body>
</html>