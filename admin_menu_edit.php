<?php
	include "cake_sql.php"; 

	session_start();

	$name_arr=$_SESSION['name_arr'];

	$arr[]=array();
	$arr=$_SESSION['arr'];

	$k=array();

	if (isset($_POST['editcake'])) {

		$k=explode(": ",$_POST['editcake']);

		$edit_name=$k[0];
		$edit_weight=$k[1];

		$_SESSION['edit_name']=$edit_name;
		$_SESSION['edit_weight']=$edit_weight;

		$price_query=mysqli_query($conn, "SELECT price FROM Cake WHERE name='$edit_name' && weight='$edit_weight'");

		$price=mysqli_fetch_array($price_query);

		$edit_price=$price['price'];
		$_SESSION['edit_price']=$edit_price;

		echo "<script>window.location = 'admin_menu.php'</script>";

	}

?>