<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myFormDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 	$sql = "CREATE TABLE Users (
// 	rid INT(6) UNSIGNED,
// 	uid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// 	uname VARCHAR(30) NOT NULL,
// 	contact BIGINT(10) NOT NULL UNIQUE,
// 	email VARCHAR(50) NOT NULL UNIQUE,
// 	pwd VARCHAR(20) NOT NULL
// 	)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table Users created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);

?>