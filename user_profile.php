<?php 

	include "cake_sql.php";

	session_start();

	$uid=$_SESSION['uid'];
	$uname = $contact = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// if ((isset($_POST['name'])) && (isset($_POST['contactno'])) && (isset($_POST['emailid']))) {
		$uname=$_POST['uname'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];

		$save_query=mysqli_query($conn, "UPDATE Users SET uname='$uname', contact='$contact', email='$email' WHERE uid='$uid'");

	if ($save_query) {
		echo "<script>alert('Your profile has been updated!')</script>";
		echo "<script>window.location='user_account.php'</script>";
	}

	else {
		echo mysqli_error($conn);
	}
// }
	}

	
?>