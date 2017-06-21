<?php
	include "cake_sql.php";

	session_start();
	$uid=$_SESSION['uid'];

	if($_POST['action'] == 'call_this') {
		$query=mysqli_query($conn, "DELETE FROM Address WHERE uid=$uid");
		if ($query) {
			echo "<script>window.location='user_acc_address.php'</script>";
		}
	}
?>