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

// 	$sql = "CREATE TABLE CakesOrdered (
// 	cart_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// 	uid INT(6) NOT NULL,
// 	cid INT(6) NOT NULL,
// 	qty INT(6) NOT NULL
// 	)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table CakesOrdered created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

$sql="CREATE TABLE Address (
address_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
mobileno BIGINT(10) NOT NULL,
altno BIGINT(10),
houseno VARCHAR(10) NOT NULL,
street VARCHAR(30) NOT NULL,
pincode INT(10) NOT NULL,
city VARCHAR(20) NOT NULL,
state VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Address created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// mysqli_close($conn);

?>