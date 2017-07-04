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

		$user_query=mysqli_query($conn, "SELECT uname FROM Users WHERE uid='$uid'");
		$user_res=mysqli_fetch_array($user_query);

		$uname=$user_res['uname'];

		$_SESSION['uname']=$uname;

		echo "<script>window.location='user_account.php'</script>";
	}

	else {
		echo mysqli_error($conn);
	}
// }
	}

	
?>