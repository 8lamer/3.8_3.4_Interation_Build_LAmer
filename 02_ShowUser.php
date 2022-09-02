<!DOCTYPE html>
<html lang = "eng">
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

		<meta name = "Keywords" content = "Graeme, usic Database, Soundwave, Music, Tunes"/>
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
			<div class="w3-bar w3-grey w3-padding w3-card">
				<div class="w3-left">
				<img src="images/placeholder.jpg" width="45" height="40">
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


		<!-- Title for query: show users -->
		<div style="margin-left:8%">
			<div class="w3-container w3-dark-grey">
				<h2>Show User</h2>
			</div>



			<div class="w3-container w3-dark-grey w3-display-middle">

				<div class="scroller w3-center w3-row w3-border w3-black">
					<div class="w3-cell-row" style="width:100%">

						<!-- Users php -->
						<div class="w3-container w3-white w3-cell">
							<p><user1>USERS</user1></p>
							
							<h6>
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
							</h6>
						</div>



						<!-- Passwords php -->
						<div class="w3-container w3-white w3-cell">
							<p><password1>PASSWORDS</password1></p>
							
							<h6>
								<?php
								//run the query
								$result = mysqli_query($conn,$query);

								while ($output = mysqli_fetch_array($result))
								{
									echo "<user2>". $output['Password']."</user2><br>";
									//closes the while loop
								}
								?>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- footer (sits at bottom of page) -->
		<footer class="w3-bottom w3-center w3-black w3-padding-64">
			<p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
		</footer>

	</body>
</html>
