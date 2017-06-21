<?php
	include "cake_sql.php";

	session_start();

	$uid=$_SESSION['uid'];

	$cancel=array();
	$cancel=$_POST['cancel'];
	

	foreach ($cancel as $key => $value) {
		// if(isset($_POST['cancel'])) {
			$query=mysqli_query($conn, "DELETE FROM Address WHERE address_id='$key' && uid='$uid'");
			if ($query) {
				echo "<script>window.location='user_acc_address.php'</script>";
			}
		// }
	}

?>