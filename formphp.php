<?php 
	include("sql.php"); 
	
	$uname = $contact = $email = $pwd = $rpwd = $agree = $rid = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$uname = $_POST["uname"];
			$contact = $_POST["contact"];
			$email = $_POST["email"];
			$pwd = $_POST["pwd"];
			$rpwd = $_POST["rpwd"];
			$agree = $_POST["agree"];
		
	}

	$verifyemail = mysqli_query($conn, "select * from Users where email='$email'");
	$row = mysqli_num_rows($verifyemail);

	if ($row == 0) {
		if ($email == 'bhoomika.luhadiya@gmail.com' && $pwd == 'bhoomika@22') {
			$rid = 1;
		}
		else {
			$rid = 2;
		}
	
		$sql = "INSERT INTO Users (rid, uname, contact, email, pwd) VALUES ('$rid', '$uname', '$contact', '$email', '$pwd')";
		if (mysqli_query($conn, $sql)) {
			echo "<script type='text/javascript'>alert('Your account has been created!')</script>";
			if ($rid == 1) {
				echo "<script>window.location = 'admin_index.php'</script>";
					session_start();
			}
			elseif ($rid == 2) {
				echo "<script>window.location = 'user_index.php'</script>";
					session_start();
			}
		}
		
	}
	else {
		echo "<script type='text/javascript'>alert('This email id already exists.')</script>";
		echo "<script>window.location = 'signin.php'</script>";
	}
?>