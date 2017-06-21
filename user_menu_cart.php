<?php
	include "cake_sql.php";
	include "user_menu.php";

	$c=$_GET['cname'];
	$w=$_GET['wt'];

	$uid=$_SESSION['uid'];

	$cart_query="INSERT INTO Cart (uid, cid) VALUES ($uid, (SELECT cid FROM Cake WHERE name='$c' && weight='$w'))";

if (mysqli_query($conn, $cart_query)) {
    
    echo "<script>window.location = 'user_menu.php'</script>";
} else {
    echo "<script>alert('Error inserting values into the table: '" . mysqli_error($conn) . ")</script>";
}

?>
