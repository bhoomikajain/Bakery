<?php
	include "cake_sql.php";

	session_start();

	$uid=$_SESSION['uid'];

	$query=mysqli_query($conn, "DELETE FROM Cart WHERE uid='$uid'");
	if ($query) {
		echo "<script>window.location='user_cart.php'</script>";
	}

?>