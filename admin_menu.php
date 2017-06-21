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

<script>
$(document).ready(function() {
	// $("#editcake").on('change', function(event) {
	    // var cake=$(this).val();
	// });
	    // $("#edit_form").submit(function(){
	    	// alert("acb");
	    	// $.post("admin_menu_edit.php",
      //      {
      //        cake1: cake,

      //      });  
    //        event.preventDefault() ;

    //        var $form = $( this ),
    // term = cake,
    // url = $form.attr( "action" );
 
  // Send the data using post
  // var posting = $.post( url, { s: term } );
 
  // Put the results in a div
  // posting.done(function( data ) {
  // 	alert(term);
    // var content = $( data ).find( "#content" );
    // $( "#result" ).empty().append( content );
  // });
	 //    $.ajax({
  //   		url: "admin_menu_edit.php",
  //   		type: "POST",

  //   		data: { cake1: cake},
  //   		// success: function (result) {
  //     //       	alert('success');
        	
		// });
	// });
	// });
// 	function getWeight(val) {
// 		alert("acdv");
// 	$.ajax({
// 	type: "POST",
// 	url: "admin_menu_edit.php",
// 	data: 'cake_name='+val,
// 	success: function(data){
// 		$("#editweight").html(data);
// 	}
// 	});
// }


	// $("#example2").on('change', function () {
	//     //alert($(this).val());
	//     alert($(this).find('option:selected').attr('id'));
	// });
});
</script>

</head>

<body>

	<div class="top">
		
		<div class="log">
			<h2> Hello Admin! </h2> 
			<button class="logout"><a href="index.php"> LOGOUT </a></button>
			<br>	
		</div>
		<!-- <div class="text">To place an order you must first sign in. </div> -->
		<div class="bar">
			<ul>
				<li><a class="home" href="admin_index.php"> HOME </a></li>
				<li><a class="menu" href="admin_menu.php"> MODIFY MENU </a></li>
				<li><a class="about" href="admin_about.php"> ABOUT US </a></li>
				<li><a class="contact" href="admin_contact.php"> CONTACT US </a></li>
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
   							<!-- <a href = "upload.php"><input type="submit" value="Upload Image" name="submitimage"></a> -->
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
				<!-- <form name="edit" id="edit" method="post"> -->

				<?php
							
					$name_query="SELECT DISTINCT name FROM Cake";
					$name_result=mysqli_query($conn, $name_query);

				echo "<table>";

					echo "<tr>";
						echo "<td> Cake </td>";
						echo "<td>";

						echo "<form name='edit_form' id='edit_form' action='admin_menu_edit.php' method='POST'>";
							
							// echo "<select name='editcake' id='editcake' onChange='getWeight(this.value)'>";
							// echo "<option value=''>Choose Cake</option>";

							// $name_arr=array();
							// $_SESSION['name_arr']=array();

							// while ($name_row=mysqli_fetch_array($name_result)) {
							// 	// echo "<select name='editcake' id='editcake'>";
							// 	$name_arr[]=$name_row['name'];
							// 	$_SESSION['name_arr']=$name_arr;

							// 	echo "<option value='" . $name_row['name'] ."' id='" . $name_row['name'] ."'>" . $name_row['name'] . "</option>";
							// 	// echo "</select>";
							// }	
							// echo "</select>";

						echo "<select name='editcake' id='editcake'>";
							echo "<option value=''>Choose Cake</option>";

							// $name_arr=array();
							// $_SESSION['name_arr']=array();

							while ($name_row=mysqli_fetch_array($name_result)) {
								// echo "<select name='editcake' id='editcake'>";
								$name_arr=$name_row['name'];
								// $_SESSION['name_arr']=$name_arr;

								echo "<optgroup value='" . $name_row['name'] ."' id='" . $name_row['name'] ."' label='" . $name_row['name'] . "'>";

								$weight_query="SELECT weight FROM Cake WHERE name='$name_arr'";
								$weight_result=mysqli_query($conn, $weight_query);

								while ($weight_row=mysqli_fetch_array($weight_result)) {
								echo "<option value'" . $weight_row['weight'] ."'>" . $weight_row['weight'] . " lbs</option>";
							}

								echo "</optgroup>";
							}	
							echo "</select>";

							echo "<input type='submit' name='edit_submit' class='edit_submit' value='x'>";
						echo "</form>";


						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td> Weight </td>";
						echo "<td>";
							echo "<select name='editweight' id='editweight'>";
							echo "<option value=''>Choose Weight</option>";
							while ($weight_row=mysqli_fetch_array($weight_result)) {
								echo "<option value'" . $weight_row['weight'] ."'>" . $weight_row['weight'] . "</option>";
							}	
							echo "</select>";
						echo "</td>";
					echo "</tr>";

				echo "</table>";
				?>
				
				<input type="submit" name="submitedit" class="submitedit" value="EDIT"> 

				<!-- </form> -->

				<form name="save" id="save" method="post" action="admin_menu_save.php">

				<table>
					<tr>
						<td> Cake Name </td>
						<td><input type="field" name="editcake_text" class="editcake_text" disabled></td>
					</tr>
					<tr>
						<td> Weight </td>
						<td><input type="field" name="editweight_text" class="editweight_text" placeholder="Pounds" disabled></td>
					</tr>
					<tr>
						<td> Price </td>
						<td><input type="field" name="editprice_text" class="editprice_text" placeholder="Rs." disabled></td>
					</tr>
					<div class="image">
					<tr>
						<td> Select an image to upload </td>
						<td>
							<input type="file" value="Choose Image" id="fileToUpload" name="fileToUpload">
   							<!-- <input type="submit" value="Upload Image" id="submitimage" name="submitimage" disabled> -->
   						</td>
					</tr>
				</table>
				<input type="submit" class="savechanges" value="SAVE CHANGES" disabled>
				</form>
			</fieldset>
		</div>
		
		<div class="block">
			<fieldset>		 
				<legend>
					<div class="option"> DELETE </div>
				</legend>	
				<form name="delete" id="delete" method="post" action="admin_menu_delete.php">
				<?php
							
					$del_name_query="SELECT DISTINCT name FROM Cake";
					$del_name_result=mysqli_query($conn, $del_name_query);

				echo "<table>";

					echo "<tr>";
						echo "<td> Cake Name </td>";
						echo "<td>";
							echo "<select name='delcake' id='delcake'>";
							while ($del_name_row=mysqli_fetch_array($del_name_result)) {
								echo "<option value'" . $del_name_row['name'] ."'>" . $del_name_row['name'] . "</option>";
							}	
							echo "</select>";
						echo "</td>";
					echo "</tr>";

					$delcake = "";
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if (isset($_POST['delcake'])) {
							$delcake=$_POST['delcake'];
						}
					}
					
					$del_weight_query="SELECT weight FROM Cake WHERE name='$delcake'";
					$del_weight_result=mysqli_query($conn, $del_weight_query);

					echo "<tr>";
						echo "<td> Weight </td>";
						echo "<td>";
							echo "<select name='delweight'>";
							while ($del_weight_row=mysqli_fetch_array($del_weight_result)) {
								echo "<option value'" . $del_weight_row['weight'] ."'>" . $del_weight_row['weight'] . "</option>";
							}	
							echo "</select>";
						echo "</td>";
					echo "</tr>";

				echo "</table>";
				?>
				
				<input type="submit" class="submitdelete" value="DELETE"> 
				</form>
			</fieldset>
		</div>
		

	</div>
	
</body>
</html>