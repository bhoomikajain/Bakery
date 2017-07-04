<?php
	include("cake_sql.php"); 
	
	$image1 = $image2 = $image3 = $image4 = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_FILES["image"]) ) {
			$addcake = $_POST["addcake"];
			$addweight = $_POST["addweight"];
			$addprice = $_POST["addprice"];
		
		    $file_name = $_FILES['image']['name'];
		    $file_size = $_FILES['image']['size'];
		    $file_type = $_FILES['image']['type'];
		    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		      
		    $extensions= array("jpeg","jpg","png");
		    $imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));

		    if ((empty($addcake)) && (empty($addweight)) && (empty($addprice))) {
				echo "<script type='text/javascript'>alert('Please fill all the required details.')</script>";
				echo "<script>window.location = 'admin_menu.php'</script>";
			}

			if(in_array($file_ext, $extensions) === false){
		    	echo "<script type='text/javascript'>alert('Extension not allowed. Please choose a JPEG, JPG or PNG file.')</script>";
				echo "<script>window.location = 'admin_menu.php'</script>";
		    }
		      
		    if($file_size > 2097152){
		    	echo "<script type='text/javascript'>alert('File size must not be more than 2 MB.')</script>";
		        echo "<script>window.location = 'admin_menu.php'</script>";
		    }

		if ((!empty($addcake)) && (!empty($addweight)) && (!empty($addprice)) && (in_array($file_ext, $extensions) === true) && ($file_size < 2097152)) {

			$sql = "INSERT INTO Cake (name, weight, price, image_name, image) VALUES ('$addcake', '$addweight', '$addprice', '$file_name', '$imagetmp')";

			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>alert('This cake has been added!')</script>";
				echo "<script>window.location = 'admin_menu.php'</script>";
			}
		}

			
		     
    	}

    	
	}

	
			
?>