<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="admin_bakery.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="bakeryjs.js"></script>
</head>

<body>

	<div class="top">
		
		<div class="log">
			<h3> Hello Admin! </h3> 
			<button class="logout"><a href="logout.php"> LOGOUT </a></button>
			<br>	
		</div>
		<!-- <div class="text">To place an order you must first sign in. </div> -->
		<div class="bar">
			<ul>
				<li><a class="home" href="admin_index.php"> HOME </a></li>
				<li><a class="menu" href="admin_menu.php"> MENU </a></li>
				<li><a class="about" href="admin_about.php"> ABOUT </a></li>
				<li><a class="contact" href="admin_contact.php"> CONTACT </a></li>
			</ul>
		</div>

	</div>

	<!-- <div class="bottom">
		
		<form name="upload" id="upload" method="POST" enctype="multipart/form-data" action="admin_index_upload.php">
			<table cellpadding="10px" cellspacing="10px">
				<tr>
					<td> Select image to upload </td>
					<td> <input type="file" name="image" id="image"> </td>
				</tr>
			</table>
			<input type="submit" class="submit_upload" value="UPLOAD">
		</form>

	</div> -->

	<div class="bottom">
		<h2>Welcome, Admin!</h2>
		To add, edit, delete cakes from the menu, 
		<a href="admin_menu.php"><button class="click_here">CLICK HERE</button></a>
	</div>
	
</body>
</html>