<html>
<head>
<title> Form </title>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="jquery-3.2.1.min.js"></script>
<script src="jquery.validate.js"></script>
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script> -->
<script type="text/javascript" src="proj.js"></script>

</head>
<body>

<!-- <h1>Form</h1> -->

	<div class="container">
		<div id="signup"> 
			Sign Up 
		</div>
		<div id="signin"> 
			Sign In 
		</div>
	</div>

	<div id="main">
		<div> 
			<form id="registerform" method="post" action="formphp.php">
			Username <br>
			<input type="text" name="uname" id="uname" placeholder="Username"> <br>
			Contact Number <br>
			<input type="text" name="contact" id="contact" placeholder="Contact Number"> <br>
			Email <br>
			<input type="text" name="email" id="email" placeholder="Email"> <br>
			Password <br>
			<input type="password" name="pwd" id="pwd" placeholder="Password"> <br>
			Retype Password <br>
			<input type="password" name="rpwd" id="rpwd" placeholder="Retype Password"> <br>
			<div id="policy"><input type="checkbox" name="agree" id="agree">&nbsp; Accept the terms and policies</div> <br> 
			<input type="submit" name="register" id="register" value="SIGN UP"><br> <br>
			<hr>
			<center><h5> Already have an account? </h5></center>
			<center><input type="submit" name="signinbutton" id="signinbutton" value="SIGN IN"></center>
			</form>
		</div>
	</div>

	<div id="main2">
		<div> 
<!-- 			<div class="msg">
			<p class="login_success"> You have logged in successfully! </p>
			<p class="login_fail"> Incorrect email/contact number or password. </p>
			</div>
			 -->
			<form id="login" method="post" action="login.php">

			Email or Contact Number <br>
			<input type="text" name="emailno" id="emailno" placeholder="Email or Contact Number"> <br>
			Password <br>
			<input type="password" name="pwrd" id="pwrd" placeholder="Password"> <br> <br>
			<input type="submit" name="submit" id="submit" value="SIGN IN"><br> <br>
			<hr>
			<center>
				<a href="#"> Forgot password? </a> 
			</center>
			</form>
		</div>
	</div>

<!-- <?php 
	include("sql.php"); 
	
	$uname = $contact = $email = $pwd = $rpwd = $agree = "";
	$emailno = $password = "";

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (isset($_POST["emailno"]) && isset($_POST["emailno"])) {
		$emailno = $_POST["emailno"];
		$password = $_POST["pwrd"];
	}
		if (isset($_POST["email"]) && isset($_POST["uname"]) && isset($_POST["contact"]) && isset($_POST["pwd"]) && isset($_POST["rpwd"]) && isset($_POST["agree"])) {
		$uname = test_input($_POST["uname"]);
		$contact = test_input($_POST["contact"]);
		$email = test_input($_POST["email"]);
		$pwd = test_input($_POST["pwd"]);
		$rpwd = test_input($_POST["rpwd"]);
		$agree = test_input($_POST["agree"]);
	}
	}

	function test_input($data) {
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	if(!empty($_POST)) {
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($conn, "select * from Users where pwd='$password' AND (email='$emailno' || contact='$emailno')");
		$rows = mysqli_num_rows($query);
		$rid = mysqli_query($conn, "select rid from Users where pwd='bhoomika@22' AND (email='bhoomika.luhadiya@gmail.com' || contact='7506646812')");

		if ($rows == 1) {
			if ($rid == 1) {
				echo "<script>window.location = 'admin_index.php'</script>";
			}
			else {
				echo "<script>window.location = 'user_index.php'</script>";
			}
		} 
		else {
			echo "<script type='text/javascript'>alert('Incorrect email/contact number or password')</script>";

		}
	}

	$verifyemail = mysqli_query($conn, "select email from Users");

	if ($email == $verifyemail) {
		echo "This email id already exists.";
	}

	else {
		$sql = "INSERT INTO Users (rid, uname, contact, email, pwd) VALUES ('2','$uname', '$contact', '$email', '$pwd')";
	}
?> -->

</body>
</html>