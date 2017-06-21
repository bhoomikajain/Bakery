<?php
	
	$fname = $lname = $email = $gender = "";
	$fnameErr = $lnameErr = $emailErr = $genderErr = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["fname"])) {
			$fnameErr="First name is required."
		}
		else {
			$fname = test_input($_POST["fname"]);
		}

		if (empty($_POST["lname"])) {
			$lnameErr="Last name is required."
		}
		else {
			$lname = test_input($_POST["lname"]);
		}

		if (empty($_POST["email"])) {
			$emailErr="Email is required."
		}
		else {
			$email = test_input($_POST["email"]);
		}

		if (empty($_POST["gender"])) {
			$genderErr="Gender is required."
		}
		else {
			$gender = test_input($_POST["gender"]);
		}
	}

	function test_input($data) {
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

?>

<html>
<body>

<?php
	
	echo "Input: <br>";
	echo $fname . " " . $lname;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $gender;
	echo "<br>";

?>

</body>
</html>