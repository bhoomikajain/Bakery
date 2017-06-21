<?php

	include "cake_sql.php";

	session_start();
	$uid=$_SESSION['uid'];

	$fname = $lname = $mobileno = $altno = $houseno = $street = $pincode = $city = $state = $country = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mobileno']) && isset($_POST['houseno']) && isset($_POST['street']) && isset($_POST['pincode']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['country'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mobileno=$_POST['mobileno'];
		$altno=$_POST['altno'];
		$houseno=$_POST['houseno'];
		$street=$_POST['street'];
		$pincode=$_POST['pincode'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$country=$_POST['country'];


	}
	$address_query=mysqli_query($conn, "INSERT INTO Address (uid, fname, lname, mobileno, altno, houseno, street, pincode, city, state, country) VALUES ('$uid', '$fname', '$lname', '$mobileno', '$altno', '$houseno', '$street', '$pincode', '$city', '$state', '$country')");

	if ($address_query) {
		echo "<script>alert('This address has been successfully added!')</script>";
		echo "<script>window.location='user_acc_address.php'</script>";
	}
	
	}

	
	


?>