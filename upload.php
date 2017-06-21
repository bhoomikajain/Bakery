<?php include("sql.php"); 
	
	$image = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(isset($_FILES['image'])){
		    $errors= array();
		    $file_name = $_FILES['image']['name'];
		    $file_size =$_FILES['image']['size'];
		    $file_tmp =$_FILES['image']['tmp_name'];
		    $file_type=$_FILES['image']['type'];
		    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		      
		    $expensions= array("jpeg","jpg","png");
		      
		    if(in_array($file_ext,$expensions)=== false){
		    	echo "<script type='text/javascript'>alert('extension not allowed, please choose a JPEG or PNG file.')</script>";
				// echo "<script>window.location = 'signin.php'</script>";
		    	// $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		    }
		      
		    if($file_size > 2097152){
		    	echo "<script type='text/javascript'>alert('File size must be excately 2 MB.')</script>";
		         // $errors[]='File size must be excately 2 MB';
		    }
		      
		    if(empty($errors)==true){
		         move_uploaded_file($file_tmp,"images/".$file_name);
		         echo "<script type='text/javascript'>alert('Success')</script>";
		         // echo "Success";
		    }
		    // }else{
		    //      print_r($errors);
		    // }
    	}

	}

?>