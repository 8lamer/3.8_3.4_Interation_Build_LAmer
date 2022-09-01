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

				<!-- Float links to the right. Hide them on small screens -->
				<div class="w3-right w3-hide-small">	
					<a href="indexV1.php" class="w3-bar-item w3-button">Home</a>
					<a href="playlistV1.php" class="w3-bar-item w3-button">Playlist </a>	
					<a href="contact.html" class="w3-bar-item w3-button" >Contact</a>
					<a href="03_add_user(settings).php" class="w3-bar-item w3-button">Settings</a>	
				</div>
			</div>
		</div>


		<br>
		<br>
		<br>


		<div class="w3-sidebar w3-bar-block w3-border-right" style="width:8%">
			<a href="03_add_user(settings).php" class="w3-bar-item w3-button w3-xxlarge material-icons">person_add</a> 
			<a href="02_show_user.php" class="w3-bar-item w3-button w3-xxlarge material-icons">visibility</a> 
			<a href="04_update_user.php" class="w3-bar-item w3-button w3-xxlarge material-icons">manage_accounts</a>
			<a href="05_delete_user.php" class="w3-bar-item w3-button w3-xxlarge material-icons">person_remove</a>
		</div>


		<div style="margin-left:8%">

			<div class="w3-container w3-dark-grey">
				<h1>Show User</h1>
			</div>

			<div class="w3-container">
				<h5><user1>USERS</user1>
					<password1>PASSWORDS</password1></h5>
				<h6><section1>
					<?php
					//connect.php (tells where to connect servername, username, password, dbaseName)
					require "communityproject_mysqli.php";

					//create a variable to store sql code for the 'display all users' query
					$query = ("SELECT * FROM users");

					//run the query
					$result = mysqli_query($conn,$query);

					while ($output = mysqli_fetch_array($result))
					{
						echo "<user2>". $output['User_ID']."</user2><br>";
						//closes the while loop
					}
					?>
					</section1></h6>
				<h6><section2>
					<?php
					//run the query
					$result = mysqli_query($conn,$query);

					while ($output = mysqli_fetch_array($result))
					{
						echo "<user2>". $output['Password']."</user2><br>";
						//closes the while loop
					}
					?>
					</section2></h6>
			</div>
		</div>

		<div class="w3-container"><!-- Holds the main page content -->
			<br>
		</div>
		<br>				


		<!-- Footer -->
		<footer class="w3-center w3-black w3-padding-64">
			<p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
		</footer>

	</body>
</html>
