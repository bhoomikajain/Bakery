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
// 	$sql = "CREATE TABLE Cake (
// 	cid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// 	name VARCHAR(50) NOT NULL,
// 	weight INT(11) NOT NULL,
// 	price INT(11) NOT NULL,
// 	image LONGBLOB
// 	)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table Users created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// session_start();
?>