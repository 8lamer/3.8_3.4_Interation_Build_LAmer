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
				<a href="indexV1.php" class="w3-bar-item w3-button"><b>logo</b> </a>
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
		<header class="w3-container w3-center w3-padding-16 w3-grey">
			<h1 class="w3-xxxlarge"><b>CONTACT US! </b></h1>
		</header>
		<div class="w3-container w3-content w3-center w3-padding-16 w3-blue" style="max-width:800px">
			<!-- Form -->
			<div class="contact_container ">
				<form action="connect.php" method="post">
					<div class="row">
						<div class="column">
							<label for="name">Full Name</label>
						</div>
						<div class="column2">
							<input type="text" id="name" name="name" placeholder="Your full name">
						</div>
					</div>
					<div class="row">
						<div class="column">
							<label for="email">Email Address</label>
						</div>
						<div class="column2">
							<input type="text" id="email" name="email" placeholder="Your email address">
						</div>
					</div>
					<div class="row">
						<div class="column ">
							<label for="phone">Contact Number</label>
						</div>
						<div class="column2">
							<input type="text" id="phone" name="phone" placeholder="A contact number">
						</div>
					</div>
					<div class="row">
						<div class="column">
							<label for="message">Subject</label>
						</div>
						<div class="column2">
							<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
		<!-- Footer -->
		<footer class="w3-center w3-black w3-padding-64">
			<p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
		</footer>
	</body>
</html> 
