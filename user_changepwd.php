<?php 
	include "cake_sql.php";
	session_start();

	$uid=$_SESSION['uid'];

	$old = $new = $confirm = "";

	$old_pwd_query=mysqli_query($conn, "SELECT pwd FROM Users WHERE uid=$uid");
	$old_pwd_res=mysqli_fetch_array($old_pwd_query);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['old']) && isset($_POST['new']) && isset($_POST['confirm'])) {
			$old=$_POST['old'];
			$new=$_POST['new'];
			$confirm=$_POST['confirm'];
		}
	}

	if ($old == $old_pwd_res['pwd']) {
		echo $uid;
		echo $new;
		$change_query=mysqli_query($conn, "UPDATE Users SET pwd='$new' WHERE uid='$uid'")or die("Query failed: " . mysqli_error($conn));

		if ($change_query) {
			echo $old;
			echo "<script>alert('Your password has been changed successfully!')</script>";
			echo "<script>window.location = 'user_acc_password.php'</script>";
		}
	}
	
	else {
		echo "<script>alert('Old password is incorrect.')</script>";
		echo "<script>window.location = 'user_acc_password.php'</script>";
	}



?>