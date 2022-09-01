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
		
		
		<?php
		//Get the connection to the database in phpMyAdmin
		require_once("communityproject_mysqli.php");
		?>
		
			<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<div class="w3-bar w3-white w3-wide w3-padding w3-card">
				<img src="images/placeholder.jpg" width="40" height="40">
   				<a href="indexV1.php" class="w3-bar-item w3-button"><b>logo</b> </a>
	  
	  
				<!-- Float links to the right. Hide them on small screens -->
				<div class="w3-right w3-hide-small">
					<a href="indexV1.php" class="w3-bar-item w3-button w3-xxlarge fa fa-home"></a>
				 	<a href="playlistV1.php" class="w3-bar-item w3-button w3-xxlarge material-icons">playlist_add</a>	
				 	<a href="contact.php" class="w3-bar-item w3-button w3-xxlarge material-icons" >contact_support</a>
					<a href="signout.php" class="w3-bar-item w3-button w3-xxlarge material-icons">logout</a>
				</div>
			</div>
		</div>
		
		<br>
		<br>
		
	
		
		<div class="w3-content w3-container w3-padding-64 w3-display-middle-large w3-yellow w3-image">
			<!-- Form -->
			<form action="connect.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"> 
			<h3 class="w3-center">CONTACT US</h3>

			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
					<div class="w3-rest">
			  			<input class="w3-input w3-border" id="name" name="name" type="text" placeholder="First Name">
					</div>
			</div>		

			<div class="w3-row w3-section">
		  		<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
					<div class="w3-rest">
			  			<input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
					</div>
			</div>

			<div class="w3-row w3-section">
		 		<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
					<div class="w3-rest">
			 			<input class="w3-input w3-border" id="email" name="email" type="text" placeholder="Email">
				</div>
			</div>

			<div class="w3-row w3-section">
		  		<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
					<div class="w3-rest">
			  			<input class="w3-input w3-border" id="phone" name="phone" placeholder="A contact number" >
				</div>
			</div>

			<div class="w3-row w3-section">
		  		<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
					<div class="w3-rest">
			  			<input class="w3-input w3-border" id="message" name="message" type="text" placeholder="Message">
				</div>
			</div>

			<p class="w3-center">
			<input class="w3-button w3-section w3-blue w3-ripple" type="submit" value="Submit"> 
			</p>
			</form>
			
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

	

		<!-- Footer -->
	<footer class="w3-bottom footer w3-center w3-black w3-padding-16">
	<p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
	<br>
	<br>
 	<a href="#top" class="back-to-top-link w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
	</footer>
		
	</body>
</html>
