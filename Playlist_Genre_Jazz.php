<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("location:01_loginV2.php");
}
else{
	$User = $_SESSION['login_user'];
}
?>

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
				font-size: 35px;
				color: white;

			}

			body, html {
				height: 100%;
				margin: 0;

			}

			.bg {
				/* The image used */
				background-image: url("images/orangebg.jpg");

				/* Full height */
				height: 100%;
				width: 100%;

				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;

			}

			h3 {
				font-family: 'Helvetica', 'Arial', sans-serif;
				font-size: 30px;
				color: white;

			}


			h4 {
				font-family: 'Helvetica', 'Arial', sans-serif;
				font-size: 1.5vw;
				color: white;

			}

		</style>


	</head>
	<body>

		<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<div class="w3-bar w3-white w3-padding w3-card">
				<div class="w3-left">
					<img src="images/logo.jpg" width="40" height="40">
				</div>
				<a href="indexV1.php" class="w3-bar-item w3-button"><b>Soundwave</b> </a>


				<!-- Float links to the right-->
				<div class="w3-right">
					<a href="indexV1.php" class="w3-bar-item w3-button w3-xxlarge fa fa-home"></a>
					<a href="playlistV1.php" class="w3-bar-item w3-button w3-xxlarge material-icons">playlist_add</a>	
					<a href="contact.php" class="w3-bar-item w3-button w3-xxlarge material-icons" >contact_support</a>
					<?php
					if ($_SESSION["login_user"] == "Graeme"){
						echo "<a href='03_add_user(settings).php' class='w3-bar-item w3-button w3-xxlarge material-icons'>settings</a>";}
					?>
					<a href="signout.php" class="w3-bar-item w3-button w3-xxlarge material-icons">logout</a>
				</div>
			</div>
		</div>


		<div class="w3-orange container w3-image">
			<div class="bg">


				<br>
				<br>
				<br>
				<br>

				<center>
					<!-- clear container for aesthetic -->
					<div class= "w3-container w3-panel w3-padding-large" style="height:80%;width:80%; background-color:rgba(255, 255, 255, .2);">

						<!-- picture for album -->
						<div class="w3-container" style="height:100%;width:100%;">	
							<img class="w3-round w3-left" src="images/placeholder.jpg" width="200" height="180">

							<div class="w3-container w3-left">
								<!-- title for genre + description -->
								<h2 class="w3-left-align">JAZZ</h2>
								<p3 class="w3-left-align"> Soft Jazz for your activites</p3>


							</div>
						</div>


						<heading1>

							<Song_ID1><h4>#</h4></Song_ID1>
							<image1><h4></h4></image1>
							<Title1><h4>Title</h4></Title1>
							<Artist1><h4>Artist</h4></Artist1>
							<Album1><h4>Album</h4></Album1>
							<Genre1><h4>Genre</h4></Genre1>
							<Size1><h4>Size</h4></Size1>
							<Duration1><h4>Duration</h4></Duration1>

						</heading1>



						<div class="overflowTest w3-center" >
							<content>
								<?php
								require "communityproject_mysqli.php";

								//Creates a variable to store the sql query
								$query = ("SELECT s.Song_ID, s.Images, s.Title, 
									GROUP_CONCAT(DISTINCT ar.Artist SEPARATOR ', ') AS 'Artist',
									GROUP_CONCAT(DISTINCT al.Album SEPARATOR ', ') AS 'Album',
									GROUP_CONCAT(DISTINCT g.Genre SEPARATOR ', ') AS 'Genre',
									s.Size, s.Seconds
									FROM songdetails AS s 
									INNER JOIN Album al ON s.Album_PK = al.Album_PK 
									JOIN songtoartist j ON s.Song_ID = j.Song_ID 
									JOIN Artist ar ON ar.Artist_PK = j.Artist_PK 
									JOIN songtogenre as gs ON s.Song_ID = gs.Song_ID
									JOIN Genre as g ON g.Genre_PK = gs.Genre_PK
									WHERE g.Genre = 'Blues'
									OR g.Genre = 'Jazz'
									OR g.Genre = 'Bluegrass'
									OR g.Genre = 'Folk'
									GROUP BY s.Song_ID 
									ORDER BY Song_ID ASC");


								//Runs and stores the query using the variable $con (see nav.php) and $query
								$result = mysqli_query($conn,$query);
								//runs in a 'while' loop
								while($output=mysqli_fetch_array($result))
								{
								?>
								<!--php is above. HTML is below. Used to output the query results -->


								<heading2>
									<space></space>

									<Song_ID2><p2 class = 'white'><?php echo $output['Song_ID']; ?></p2></Song_ID2>
									<img src="images/<?php echo $output['Images']; ?>" style="width: 4vw; height: 4vw;">
									<Title2><p2 class = 'white'><?php echo $output['Title']; ?></p2></Title2>
									<Artist2><p2 class = 'white'><?php echo $output['Artist']; ?></p2></Artist2>
									<Album2><p2 class = 'white'><?php echo $output['Album']; ?></p2></Album2>
									<Genre2><p2 class = 'white'><?php echo $output['Genre']; ?></p2></Genre2>
									<Size2><p2 class = 'white'><?php echo $output['Size']; ?></p2></Size2>
									<Duration2><p2 class = 'white'><?php echo $output['Seconds']; ?></p2></Duration2>
									<space></space>

								</heading2>
								<?php
									//Closes the output while loop
								}
								?>


							</content>
						</div>
					</div>

					<br>
					
				</center>	
				<!-- Footer -->
				<footer class="w3-container w3-padding-16 w3-center w3-white">
					<p>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p>
					<a href="#top" class="w3-button w3-grey">To the top </a>
					<div class="w3-xlarge w3-section">
						<i class="fa fa-facebook-official w3-hover-opacity"></i>
						<i class="fa fa-instagram w3-hover-opacity"></i>
						<i class="fa fa-snapchat w3-hover-opacity"></i>
						<i class="fa fa-pinterest-p w3-hover-opacity"></i>
						<i class="fa fa-twitter w3-hover-opacity"></i>
						<i class="fa fa-linkedin w3-hover-opacity"></i>
					</div>
				</footer>

			</div>
		</div>	

	</body>
</html>
