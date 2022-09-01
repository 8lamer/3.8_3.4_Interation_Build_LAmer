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
		<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>

		<meta name = "Keywords" content = "Graeme, usic Database, Soundwave, Music, Tunes"/>
		<meta name = "Author" content = "Liv Amer"/>
		<meta name = "Description" content = "Graeme's Music Database"/>
		<meta name = "viewport" content = "width=device-width,initial-scale=1"/>

		<!-- internal style sheet -->
		<style>
			h1,h2 {
				font-family: 'Alegreya';
				font-size: 35w;
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
		</style>

	</head>
	<body>


		<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<div class="w3-bar w3-white w3-padding w3-card">
				<div class="w3-left">
				<img src="images/placeholder.jpg" width="45" height="40">
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
					<div class= "container w3-panel w3-padding-large" style="height:80%;width:80%; background-color:rgba(255, 255, 255, .2);">


						<!-- slideshow for album covers  -->
						<div class="w3-panel w3-padding-large" style="width:100%">
							<div class="w3-container w3-large">
								<div class="w3-left-align w3-animate-opacity"><h2>Welcome To SoundWave <?php echo $User;?>!<br/></h2></div>

								<div class="w3-row-padding w3-padding-16 w3-center">

									<div class="mySlides w3-third">
										<img class="w3-round-large" src="images/placeholder.jpg" alt="Sandwich"   width="210" height="110" style="width:100%;max-width:230px">
										<h4>Album name</h4>
									</div>

									<div class="w3-third">
										<img class="w3-round-large"src="images/placeholder.jpg" alt="Steak" width="210" height="110" style="width:100%;max-width:230px">
										<h4>Album name</h4>
									</div>


									<div class="w3-third">
										<img class="w3-round-large" src="images/placeholder.jpg" alt="Cherries" width="210" height="110" style="width:100%;max-width:230px">
										<h4>Album name</h4>
									</div>	

									<div class="mySlides w3-third">
										<img class="w3-round-large" src="images/placeholder.jpg" alt="Steak" width="210" height="110" style="width:100%;max-width:230px">
										<h4>Album name</h4>
									</div>

									<div class="mySlides w3-third">
										<img  class="w3-round-large" src="images/placeholder.jpg" alt="Cherries" width="210" height="110" style="width:100%;max-width:230px">
										<h4>Album name</h4>
									</div>

									<div class="mySlides w3-third">
										<img class="w3-round-large" src="images/placeholder.jpg" alt="Cherries" width="210" height="110" style="width:100%;max-width:230px">
										<h4>Album name</h4>
									</div>

								</div>			
							</div>


							<script>
								var slideIndex = 0;
								carousel();

								function carousel() {
									var i;
									var x = document.getElementsByClassName("mySlides");
									for (i = 0; i < x.length; i++) {
										x[i].style.display = "none";
									}
									slideIndex++;
									if (slideIndex > x.length) {slideIndex = 1}
									x[slideIndex-1].style.display = "block";
									setTimeout(carousel, 2000); // Change image every 2 seconds
								}
							</script>

							<br>
							<br>

							<!-- Playlist photos / Queries -->
							<!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->

							<div class="container w3-row-padding w3-center">
								<div class="w3-col m3">
									<a href="Playlist_Genre.rock .php"> <img src="images/placeholder.jpg" class="w3-button w3-round w3-opacity w3-hover-opacity-off" style="width:100%"  alt="ROCK"> </a>
								</div>


								<div class="w3-col m3">
									<a href="Playlist_Genre.pop.php"> <img src="images/placeholder.jpg" class="w3-button w3-round w3-opacity w3-hover-opacity-off" style="width:100%"  alt="POP"> </a>
								</div>



								<div class="w3-col m3">
									<a href="Playlist_Genre.country.php"> <img src="images/placeholder.jpg" class="w3-button w3-round w3-opacity w3-hover-opacity-off" style="width:100%"  alt="COUNTRY"> </a>
								</div>

								<div class="w3-col m3">
									<a href="Playlist_Genre.jazz.php"> <img src="images/placeholder.jpg" class="w3-button w3-round w3-opacity w3-hover-opacity-off" style="width:100%"  alt="COUNTRY"> </a>
								</div>


							</div>
						</div>
					</div>

					<br>


				</center>
				<!-- Footer -->
				<footer class="w3-container w3-padding-16 w3-center w3-white">
					<p>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p>
					<a href="#top" class="w3-button w3-grey">To the top </a>
				</footer>

			</div>
		</div>	

	</body>
</html>
