<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Sound Wave</title>
        <meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "css/fonts.css">
		<link rel = "stylesheet" type = "text/css" href = "css/grids.css">
		<link rel = "stylesheet" href = "css/style.css"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		
        <meta name = "Keywords" content = "Graeme, Music Database, Soundwave, Music, Tunes"/>
        <meta name = "Author" content = "Liv Amer"/>
        <meta name = "Description" content = "Graeme's Music Database"/>
        <meta name = "viewport" content = "width=device-width,initial-scale=1"/>
        

	</head>
		<body>
		
			<!-- Navbar (sit on top) -->
			<div class="w3-top">
			 	<div class="w3-bar w3-white w3-wide w3-padding w3-card">
					<img src="images/placeholder.jpg" width="40" height="40">
					<a href="index.html" class="w3-bar-item w3-button"><b>logo</b> </a>
	  
		 <!-- Float links to the right -->
					<div class="w3-right" >
					  <a href="indexV1.php" class="w3-bar-item w3-button w3-xxlarge fa fa-home"></a>
					  <a href="playlistV1.php" class="w3-bar-item w3-button w3-xxlarge material-icons">playlist_add</a>	
					  <a href="contact.php" class="w3-bar-item w3-button w3-xxlarge material-icons" >contact_support</a>
					  <a href="settings.php" class="w3-bar-item w3-button w3-xxlarge material-icons">settings</a>	
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
		



			<div style="margin-left:8%">
				<div class="w3-container w3-dark-grey">
			 	 <h1>Delete User</h1>
				</div>

			<div class="w3-container">
				<div class="content"><!-- Holds the delete users content -->
					
						<form method = "post" id= "06_delete_user.php">
							<h4><label for = 'login'>User Name:</label>
							<input type = "text" name = "UserName" placeholder="Enter user name"/></h4>
							<h4><input type = "submit" value = "Delete" /></h4><br>
						</form>
							<?php
								require "communityproject_mysqli.php";
								print "<p class = 'yellow'>Connected to server</p>";
						
								$UserID = isset($_POST['UserName']) ?$_POST['UserName']: '';
						
								//create a variable to store sql code for the 'Add Users' query
								$deletequery = "DELETE FROM users WHERE User_ID = '$UserID'";
							
								if (mysqli_query($conn, $deletequery))
								{
								echo "<h3>Record deleted</h3>";
								}
								else
								{
								echo "<h3>Error deleting record: </h3>";
								}
							?>
					</div>
				</div>
			</div>

		
		<!-- Footer -->
		<footer class="w3-bottom w3-center w3-black w3-padding-64">
			<p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
		</footer>

	</body>
</html>
