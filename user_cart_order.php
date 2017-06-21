<?php
	include "cake_sql.php";
	session_start();

	$uid=$_SESSION['uid'];
	$cart_id=$_SESSION['cart_id'];

	$order_table=mysqli_query($conn, "SELECT * FROM Orders");
	$order_table_count=mysqli_num_rows($order_table);

	if ($order_table_count==0) {
		$order_id=1;
	}
	else {
		$max_orderid=mysqli_query($conn, "SELECT MAX(order_id) FROM Orders");
		$max_orderid_res=mysqli_fetch_array($max_orderid);
		$order_id=$max_orderid_res['MAX(order_id)'] + 1;
	}

	foreach ($cart_id as $key => $value) {
		$order_query=mysqli_query($conn, "INSERT INTO Orders (order_id, cart_id, uid) VALUES ($order_id, $value, $uid)");
		$order_query=mysqli_query($conn, "INSERT INTO CakesOrdered SELECT * FROM Cart WHERE cart_id=$value");
		$order_del_cart=mysqli_query($conn, "DELETE FROM Cart WHERE cart_id=$value");
		if ($order_query && $order_del_cart) {
			echo "<script>window.location = 'user_cart.php'</script>";
		}
	}

?>
