<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Sound Wave</title>
		<meta charset = "utf-8">
		<!-- styles -->
		<link rel = "stylesheet" type = "text/css" href = "css/fonts.css">
		<link rel = "stylesheet" type = "text/css" href = "css/grids.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- favicon -->
		<link rel="icon" type="image/x-icon" href="images/favicon1.ico">
		
		<meta name = "Keywords" content = "Graeme, Music Database, Soundwave, Music, Tunes"/>
		<meta name = "Author" content = "Liv Amer"/>
		<meta name = "Description" content = "Graeme's Music Database"/>
		<meta name = "viewport" content = "width=device-width,initial-scale=1"/>

		<!-- internal style sheet -->
		<style>
			h2 {
				font-family: 'Helvetica', 'Arial', sans-serif;
				font-size: 30px;
				color: white;

			}
		</style>

	</head>
	<body>

		<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<div class="w3-bar w3-white w3-padding w3-card">
				<div class="w3-left">
				<img src="images/logo.jpg" alt="logo" width="40" height="40">
				</div>
				<a href="indexV1.php" class="w3-bar-item w3-button"><b>Soundwave</b> </a>

				<!-- Float links to the right -->
				<div class="w3-right">
					<a href="indexV1.php" class="w3-bar-item w3-button w3-xxlarge fa fa-home"></a>
					<a href="playlistV1.php" class="w3-bar-item w3-button w3-xxlarge material-icons">playlist_add</a>	
					<a href="contact.php" class="w3-bar-item w3-button w3-xxlarge material-icons" >contact_support</a>

					<a href="signout.php" class="w3-bar-item w3-button w3-xxlarge material-icons">logout</a>
				</div>
			</div>
		</div>


		<br>
		<br>
		<br>


		<!-- side navbar for admin + php codes -->
		<div class="w3-sidebar w3-bar-block w3-border-right" style="width:8%">
			<a href="03_add_user(settings).php" class="w3-bar-item w3-button w3-xxlarge material-icons">person_add</a> 
			<a href="02_show_user.php" class="w3-bar-item w3-button w3-xxlarge material-icons">visibility</a> 
			<a href="04_update_user.php" class="w3-bar-item w3-button w3-xxlarge material-icons">manage_accounts</a>
			<a href="05_delete_user.php" class="w3-bar-item w3-button w3-xxlarge material-icons">person_remove</a>

		</div>


		<!-- Title for query: Update Users -->
		<div style="margin-left:8%">
			<div class="container5">
				<h2>Update User</h2>
			</div>

			<div class="w3-container">
				<div class="content"><!-- Holds the update users content -->

					<form method = "post" id= "05_update_user.php">
						<h6><label>Existing User Name:</label>
							<input type = "text" name = "ExistingUserName" placeholder="Enter existing user name"/></h6>
						<h6><label>New User Name:</label>
							<input type = "text" name = "NewUserName" placeholder="Enter new user name"/></h6>
						<h6><input class="w3-padding-small w3-button w3-green" type = "submit" value = "Update" /></h6><br>
					</form>

					<?php
					require "communityproject_mysqli.php";
					print "<p class = 'yellow'>Connected to server</p>";

					$ExistingUserID = isset($_POST['ExistingUserName']) ?$_POST['ExistingUserName']: '';
					$NewUserID =  isset($_POST['NewUserName']) ?$_POST['NewUserName']: '';

					//create a variable to store sql code for the 'Add Users' query
					$updatequery = "UPDATE users SET User_ID = '$NewUserID' WHERE User_ID = '$ExistingUserID'";
					if (mysqli_query($conn, $updatequery))
					{
						echo "<p>Record updated</p>";
					}
					else
					{
						echo "<p>Error updating record: </p>";
					}
					?>

				</div>
			</div>
		</div>


		<!-- Footer -->
		<footer class="w3-bottom w3-center w3-black w3-padding-64">
			<p1>Created by <a href= "indexV1.php" target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
		</footer>


	</body>
</html>	
