<?php
	include "cake_sql.php";

	session_start();

	$uid=$_SESSION['uid'];
	$cid=$_SESSION['cid'];

	if (isset($_POST['change'])) {
		$qty_new=array();
		$qty_new=$_POST['qty_new'];

		foreach ($qty_new as $key => $value) {
		
			$change_query=mysqli_query($conn, "UPDATE Cart SET qty=$value WHERE cid=$key && uid=$uid");

			if ($change_query) {
				echo "<script>window.location = 'user_cart.php'</script>";
			}
		}
	}
	
	if (isset($_POST['remove'])) {
		$cancel=array();
		$cancel=$_POST['cancel'];

		print_r($_POST['cancel']);

		foreach ($cancel as $key => $value) {
	
			$query=mysqli_query($conn, "DELETE FROM Cart WHERE cart_id='$key' && uid='$uid'");
			if ($query) {
				echo "<script>window.location='user_cart.php'</script>";
			}
			
		}
	}

?>