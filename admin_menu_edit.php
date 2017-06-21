<?php
	include "cake_sql.php";

	session_start();

// 	$name_arr=array();
// 	$opt[]=array();
// 	if (isset($_POST['opt'])) {
// 		echo "asd";
// 	$opt=$_POST['opt'];
// }

// 	$name_arr=$_SESSION['name_arr'];

// 	print_r($name_arr);

// 	foreach ($name_arr as $key => $value) {
// 		print_r($value);
// 	}

	// $weight_query="SELECT weight FROM Cake WHERE name='$editcake'";
	// $weight_result=mysqli_query($conn, $weight_query);

	// echo $weight_result;
// print_r($_POST['s']);

   // if (isset($_POST['cake1'])) {
   // 	print_r($_POST['term']);
   // 	echo "abc";
   // }
 //  if(!empty($_POST['cake_name'])) {
	// $query =mysqli_query($conn,"SELECT weight FROM cake WHERE name = $_POST['cake_name']");
	// 	$query_res=mysqli_fetch_array($query);
	// 	echo "qwer";

		// while ($query_res) {
		// 	print_r($query_res['weight']);
		// }
echo "asd";
	if (isset($_POST['editcake'])) {
		echo $_POST['editcake'];
	}

	

?>