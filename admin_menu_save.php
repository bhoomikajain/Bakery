<?php
	include("cake_sql.php"); 

	session_start();

	$edit_name=$_SESSION['edit_name'];
	$edit_weight=$_SESSION['edit_weight'];
	$edit_price=$_SESSION['edit_price'];

	$editcake_text = $editweight_text = $editprice_text = $editimage = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$editcake_text = $_POST['editcake_text'];
			$editweight_text = $_POST['editweight_text'];
			$editprice_text = $_POST['editprice_text'];
		
		    $file_name = $_FILES['editimage']['name'];
		    $file_size = $_FILES['editimage']['size'];
		    $file_type = $_FILES['editimage']['type'];
		    $file_ext=strtolower(end(explode('.',$_FILES['editimage']['name'])));
		      
		    $extensions= array("jpeg","jpg","png","");
		    $imagetmp=addslashes (file_get_contents($_FILES['editimage']['tmp_name']));

			if(in_array($file_ext, $extensions) === false){
		    	echo "<script type='text/javascript'>alert('Extension not allowed. Please choose a JPEG, JPG or PNG file.')</script>";
				echo "<script>window.location = 'admin_menu.php'</script>";
		    }
		      
		    if($file_size > 2097152){
		    	echo "<script type='text/javascript'>alert('File size must not be more than 2 MB.')</script>";
		        echo "<script>window.location = 'admin_menu.php'</script>";
		    }

		if ((!empty($editcake_text)) && (!empty($editweight_text)) && (!empty($editprice_text)) && (in_array($file_ext, $extensions) === true) && ($file_size < 2097152)) {

			if ($file_size == 0) {
				$sql = "UPDATE Cake SET name='$editcake_text', weight='$editweight_text', price='$editprice_text' WHERE name='$edit_name' && weight='$edit_weight'";
			}

			else {
				$sql = "UPDATE Cake SET name='$editcake_text', weight='$editweight_text', price='$editprice_text', image_name='$file_name', image='$imagetmp' WHERE name='$edit_name' && weight='$edit_weight'";
			}
			
			if (mysqli_query($conn, $sql)) {

				$_SESSION['edit_name']="";
				$_SESSION['edit_weight']="";
				$_SESSION['edit_price']="";

				echo "<script type='text/javascript'>alert('This cake has been edited!')</script>";
				echo "<script>window.location = 'admin_menu.php'</script>";
			}
		}
	}
					
?>