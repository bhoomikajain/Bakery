<?php include ("cake_sql.php"); 
	session_start();
?>

<html>
<head>
	<title> ONLINE BAKERY </title>
	<link rel="stylesheet" href="admin_bakery_menu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.validate.js"></script>
	<script type="text/javascript" src="admin_bakeryjs_menu.js"></script>

</head>

<body>

	<div class="top">
		
		<div class="log">
			<h3> Hello Admin! </h3> 
			<button class="logout"><a href="index.php"> LOGOUT </a></button>
			<br>	
		</div>
		<!-- <div class="text">To place an order you must first sign in. </div> -->
		<div class="bar">
			<ul>
				<li><a class="home" href="admin_index.php"> HOME </a></li>
				<li><a class="menu" href="admin_menu.php"> MENU </a></li>
				<li><a class="about" href="admin_about.php"> ABOUT </a></li>
				<li><a class="contact" href="admin_contact.php"> CONTACT </a></li>
			</ul>
		</div>

	</div>

	<div class="bottom">
		
		<div class="block">
			<fieldset>		 
				<legend>
					<div class="option"> ADD </div>
				</legend>	
				<form name="add" id="add" method="post" enctype="multipart/form-data" action="admin_menu_add.php">
				<table>
					<tr>
						<td> Cake Name </td>
						<td><input type="field" name="addcake"></td>
					</tr>
					<tr>
						<td> Weight </td>
						<td><input type="field" name="addweight" placeholder="Pounds"></td>
					</tr>
					<tr>
						<td> Price </td>
						<td><input type="field" name="addprice" placeholder="Rs."></td>
					</tr>
					<div class="uploadimage">
					<tr>
						<td> Select an image to upload </td>
						<td>
							<input type="file" name="image" id="image">
   						</td>
					</tr>
					</div>
				</table>
				<input type="submit" class="submitadd" value="ADD"> 
				</form>
			</fieldset>
		</div>
		
		<div class="block">
			<fieldset>		 
				<legend>
					<div class="option"> EDIT </div>
				</legend>

				<?php
							
					$name_query="SELECT DISTINCT name FROM Cake";
					$name_result=mysqli_query($conn, $name_query);


					$arr=array();
					$_SESSION['arr']=array();


				echo "<form name='edit_form' id='edit_form' action='admin_menu_edit.php' method='POST'>";

					echo "<table>";

					echo "<tr>";
						echo "<td> Cake </td>";
						
						echo "<td>";

						echo "<select name='editcake' id='editcake'>";
							echo "<option value=''>Choose Cake</option>";

							while ($name_row=mysqli_fetch_array($name_result)) {
								
								$name_arr=$name_row['name'];
								$_SESSION['name_arr']=$name_arr;

								echo "<optgroup value='" . $name_row['name'] ."' id='" . $name_row['name'] ."' label='" . $name_row['name'] . "'>";

								$weight_query="SELECT weight FROM Cake WHERE name='$name_arr'";
								$weight_result=mysqli_query($conn, $weight_query);

								while ($weight_row=mysqli_fetch_array($weight_result)) {

									$weight_arr=$weight_row['weight'];

									$arr[$name_arr][]=$weight_arr;
									$_SESSION['arr']=$arr;

									echo "<option name='edit[$name_arr]' value='" . $name_arr . ": " . $weight_row['weight'] ."'>" . $weight_row['weight'] . " lbs</option>";
								}

								echo "</optgroup>";
							}	
						echo "</select>";

						// print_r($arr);
						// print_r($_SESSION['arr']);

						echo "</td>";
					echo "</tr>";
						
					echo "</table>";

					echo "<input type='submit' name='submitedit' class='submitedit' value='EDIT'> ";
				echo "</form>";
						
				?>
				
				<form name="save" id="save" method="POST" enctype="multipart/form-data" action="admin_menu_save.php">

				<?php 
					$edit_name = $edit_weight = $edit_price = "";
					$edit_name=$_SESSION['edit_name'];
					$edit_weight=$_SESSION['edit_weight'];
					$edit_price=$_SESSION['edit_price'];
				?>

				<table>
					<tr>
						<td> Cake Name </td>
						<td><input type="field" name="editcake_text" class="editcake_text" value="<?php echo $edit_name; ?>"></td>
					</tr>
					<tr>
						<td> Weight </td>
						<td><input type="field" name="editweight_text" class="editweight_text"" value="<?php echo $edit_weight; ?>" placeholder="Pounds"></td>
					</tr>
					<tr>
						<td> Price </td>
						<td><input type="field" name="editprice_text" class="editprice_text" value="<?php echo $edit_price; ?>" placeholder="Rs."></td>
					</tr>
					<div class="uploadimage">
					<tr>
						<td> Select an image to upload </td>
						<td>
							<input type="file" name="editimage" id="editimage">
   						</td>
					</tr>
					</div>
				</table>
				<input type="submit" class="savechanges" value="SAVE CHANGES">
				</form>
			</fieldset>
		</div>
		
		<div class="block">
			<fieldset>		 
				<legend>
					<div class="option"> DELETE </div>
				</legend>	
				
				<?php
							
					$del_name_query="SELECT DISTINCT name FROM Cake";
					$del_name_result=mysqli_query($conn, $del_name_query);

					$arr=array();
					// $_SESSION['arr']=array();


				echo "<form name='del_form' id='del_form' action='admin_menu_delete.php' method='POST'>";

					echo "<table>";

					echo "<tr>";
						echo "<td> Cake </td>";
						
						echo "<td>";

						echo "<select name='delcake' id='delcake'>";
							echo "<option value=''>Choose Cake</option>";

							while ($del_name_row=mysqli_fetch_array($del_name_result)) {
								
								$name_arr=$del_name_row['name'];
								// $_SESSION['name_arr']=$name_arr;

								echo "<optgroup value='" . $del_name_row['name'] ."' id='" . $del_name_row['name'] ."' label='" . $del_name_row['name'] . "'>";

								$del_weight_query="SELECT weight FROM Cake WHERE name='$name_arr'";
								$del_weight_result=mysqli_query($conn, $del_weight_query);

								while ($del_weight_row=mysqli_fetch_array($del_weight_result)) {

									$weight_arr=$weight_row['weight'];

									$arr[$name_arr][]=$weight_arr;
									// $_SESSION['arr']=$arr;

									echo "<option name='delete[$name_arr]' value='" . $name_arr . ": " . $del_weight_row['weight'] ."'>" . $del_weight_row['weight'] . " lbs</option>";
								}

								echo "</optgroup>";
							}	
						echo "</select>";

						echo "</td>";
					echo "</tr>";
						
					echo "</table>";

					echo "<input type='submit' name='submitdelete' class='submitdelete' value='DELETE'> ";
				echo "</form>";
						
				?>
				
			</fieldset>
		</div>
		

	</div>
	
</body>
</html>