<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Sound Wave</title>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "css/fonts.css">
		<link rel = "stylesheet" type = "text/css" href = "css/grids.css">
		<link rel = "stylesheet" href = "css/style.css"/>
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
		<br>
		<br>	

		<div class="w3-content w3-container w3-padding-64 w3-center w3-white" id="about">


			<h3 class="w3-center">COUNTRY</h3>


			<div class="w3-container w3-content w3-center w3-padding-14 w3-black" style="max-width:1200px">
				<heading1>
					<space></space>
					<Song_ID1><h4>#</h4></Song_ID1>
					<images1><h4>Image</h4></images1>
					<Title1><h4>Title</h4></Title1>
					<Artist1><h4>Artist</h4></Artist1>
					<Album1><h4>Album</h4></Album1>
					<Genre1><h4>Genre</h4></Genre1>
					<Size1><h4>Size</h4></Size1>
					<space></space>
				</heading1>
			</div>

			<br>
			<br>

			<!--  <img width="400" height="200" src="<?php include ('/images.php');?>" /> -->



			<content>
				<?php
				require "communityproject_mysqli.php";

				//Creates a variable to store the sql query
				$query = ("SELECT s.Song_ID, s.Images, s.Title, ar.Artist, al.Album, g.Genre, s.Size
								FROM songdetails AS s 
								INNER JOIN Album al ON s.Album_PK = al.Album_PK 
								JOIN songtoartist j ON s.Song_ID = j.Song_ID 
								JOIN Artist ar ON ar.Artist_PK = j.Artist_PK 
								JOIN songtogenre as gs ON s.Song_ID = gs.Song_ID
								JOIN Genre as g ON g.Genre_PK = gs.Genre_PK
								WHERE g.Genre = 'Country'
								OR g.Genre = 'Easy Listening'
								OR g.Genre = 'Jazz'
								OR g.Genre = 'Soul'
								OR g.Genre = 'Mellow'
								OR g.Genre = 'Vocal'
								OR g.Genre = 'Blues'
								OR g.Genre = 'Acoustic'
								OR g.Genre = 'Bluegrass'
								ORDER BY s.Song_ID ASC");


				//Runs and stores the query using the variable $con (see nav.php) and $query
				$result = mysqli_query($conn,$query);
				//runs in a 'while' loop
				while($output=mysqli_fetch_array($result))
				{
				?>
				<!--php is above. HTML is below. Used to output the query results -->


				<heading2>
					<space></space>

					<Song_ID2><p class = 'white'><?php echo $output['Song_ID']; ?></p></Song_ID2>
					<Images2><p class = 'white'><?php echo $output['Images']; ?></p></Images2>
					<Title2><p class = 'white'><?php echo $output['Title']; ?></p></Title2>
					<Artist2><p class = 'white'><?php echo $output['Artist']; ?></p></Artist2>
					<Album2><p class = 'white'><?php echo $output['Album']; ?></p></Album2>
					<Genre2><p class = 'white'><?php echo $output['Genre']; ?></p></Genre2>
					<Size2><p class = 'white'><?php echo $output['Size']; ?></p></Size2>
					<space></space>

				</heading2>
				<?php
					//Closes the output while loop
				}
				?>


			</content>


		</div>

		<!-- Footer -->
		<footer class="w3-center w3-black w3-padding-64">
			<p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
		</footer>



	</body>
</html>
