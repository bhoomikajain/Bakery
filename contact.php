<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="bakery_contact.css">
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
		<h2> Contact Us </h2>
			Call us: +91 7506646812 <br>
			Email us: bhoomika.luhadiya@gmail.com
		</div>
	</div>
	
</body>
</html>