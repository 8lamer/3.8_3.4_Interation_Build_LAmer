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
		

		<meta name = "Keywords" content = "Graeme, Music Database, Soundwave, Music, Tunes"/>
		<meta name = "Author" content = "Liv Amer"/>
		<meta name = "Description" content = "Graeme's Music Database"/>
		<meta name = "viewport" content = "width=device-width,initial-scale=1"/>

		<!-- internal style sheet -->
		<style>
		
			body, html {
				height: 100%;
				margin: 0;

			}

			.bg {
				/* The image used */
				background-image: url("images/blackbg.jpg");

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
				font-size: 18px;
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
			<div class="w3-bar w3-grey w3-padding w3-card">
				<div class="w3-left">
					<img src="images/placeholder.jpg" width="40" height="40">
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
					<div class= "w3-container w3-panel w3-padding-large" style="height:80%;width:80%; background-color:rgba(0,0,0,0.3);">

						<!-- Container Queries -->

						<div class="w3-third">
			<a href="playlist_genre.php"> <img src="images/placeholder.jpg" class="w3-button w3-round w3-opacity w3-hover-opacity-off"  alt="sun" height="170" style="width:310px"> </a>
							<h3>GENRE / ARTIST A - Z</h3>
						</div>

						<div class="w3-third">
			<a href="playlistV1.php"> <img src="images/placeholder.jpg" class="w3-button w3-round w3-opacity w3-hover-opacity-off"  alt="Song A - Z" height="170" style="width:310px"> </a>
							<h3>SONG A - Z</h3>
						</div>

						<div class="w3-third">
		<a href="playlist_SongArtist.php"> <img src="images/placeholder.jpg" class=" w3-border w3-border-orange  w3-button w3-round w3-opacity w3-hover-opacity-off"  alt="sun" height="170" style="width:310px"> </a>
							<h3>SONG / ARTIST Z - A</h3>
							<br>
						</div>
						

						<heading1>

							<Song_ID1><h4>#</h4></Song_ID1>
							<Image1><h4>     </h4></Image1>
							<Title1><h4>Title</h4></Title1>
							<Artist1><h4>Artist</h4></Artist1>
							<Album1><h4>Album</h4></Album1>
							<Genre1><h4>Genre</h4></Genre1>
							<Size1><h4>Size</h4></Size1>
							<Duration1><h4>Duration</h4></Duration1>

						</heading1>


						<div class="overflowTest" >
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
								GROUP BY s.Song_ID 
								ORDER BY s.Title DESC, Artist DESC");


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
						
								
						<br>
						<div class="w3-container w3-right">
							<!-- query for total duration -->
							<?php
							require_once("communityproject_mysqli.php");
							$query = ("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(Duration))) AS Total_Duration FROM songdetails"); //This is the total duration query

							$result = mysqli_query($conn,$query);
							while($output=mysqli_fetch_array($result))
							{ 
							?>

							<p2>  Total time <?php echo $output['Total_Duration'];?></p2>

							<?php
							}
							?>  
							
							
						</div>
						
						<div class="w3-left">
							<p2>Songs sorted by Song and Artist</p2>
						</div>
					

						
					</div>



				</center>
				<!-- Footer -->
				<footer class="w3-container w3-padding-16 w3-center w3-grey">
					<p>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p>
					<a href="#top" class="w3-button w3-black">To the top </a>
					
				</footer>

			</div>
		</div>	

	</body>
</html>
