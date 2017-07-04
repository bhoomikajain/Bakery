<?php
	include "cake_sql.php"; 

	session_start();

	$name_arr=$_SESSION['name_arr'];

	$arr[]=array();
	$arr=$_SESSION['arr'];

	$k=array();

	if (isset($_POST['delcake'])) {

		$k=explode(": ",$_POST['delcake']);

		$del_name=$k[0];
		$del_weight=$k[1];

		// $_SESSION['del_name']=$del_name;
		// $_SESSION['edit_weight']=$edit_weight;

		$price_query=mysqli_query($conn, "DELETE FROM Cake WHERE name='$del_name' && weight='$del_weight'");

		if ($price_query) {
			echo "<script>alert('Deleted!')</script>";
			echo "<script>window.location = 'admin_menu.php'</script>";
		}

	}

?>