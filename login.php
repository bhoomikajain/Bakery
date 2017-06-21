<?php include("sql.php"); 
	
	$emailno = $password = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (isset($_POST["emailno"]) && isset($_POST["emailno"])) {
			$emailno = $_POST["emailno"];
			$password = $_POST["pwrd"];
		}
	}

	if(!empty($_POST)) {
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($conn, "select * from Users where pwd='$password' AND (email='$emailno' || contact='$emailno')");
		// echo $query;
		$query_row=mysqli_fetch_array($query);

		$rows = mysqli_num_rows($query);
		
		$role = mysqli_query($conn, "select rid from Users where pwd='$password' AND (email='$emailno' || contact='$emailno')");
		$roleid = mysqli_fetch_array($role);

		if ($rows == 1) {
			if ($roleid['rid'] == 1) {
				echo "<script>window.location = 'admin_index.php'</script>";
			}
			else {
				echo "<script>window.location = 'user_index.php'</script>";
			}
		} 
		else {
			echo "<script type='text/javascript'>alert('Incorrect email/contact number or password')</script>";
			echo "<script>window.location = 'signin.php'</script>";
		}

		session_start();
		$_SESSION['uid']=$query_row['uid'];
		$_SESSION['uname']=$query_row['uname'];
		$_SESSION['pwd']=$query_row['pwd'];
	}
?>