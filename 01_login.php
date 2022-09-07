<!-- login session: php code -->
<?php
ob_start();
session_start();
$error = NULL;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//connect.php (tells where to connect servername, dbaseName, username, password)
	require "communityproject_mysqli.php";
	// username and password sent from form
	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
	$mypassword = mysqli_real_escape_string($conn,$_POST['password']);

	$query = "SELECT User_ID FROM users WHERE User_ID = '$myusername' and Password = '$mypassword'";

	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	// if result matched $myusername and $mypassword, table row must be 1 row
	if ($count == 1) {
		$_SESSION['login_user'] = $myusername;
		header ("location: indexV1.php");
	} else {
		$error = "ERROR! Your Login Name or Password is invalid";
	}
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Sound Wave</title>
		<meta charset = "utf-8">

		<!-- styles -->
		<link rel = "stylesheet" href = "css/fonts.css">
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
			h1 {
				font-family: 'Helvetica', 'Arial', sans-serif;
				font-size: 40px;
				color: white;
			}

			h2 {
				font-family: 'Helvetica', 'Arial', sans-serif;
				font-size: 25px;
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
					<img src="images/logo.jpg" width="40" height="40">
				</div>
				<a class="w3-bar-item"><b>Soundwave</b> </a>
			</div>
		</div>




		<!-- background container; colour orange -->
		<div class="w3-orange container w3-image">
			<div class="bg">


				<br>
				<br>
				<br>
				<br>


				<center>

					<!-- Clear Container -->
					<div class= "container w3-panel w3-padding-large-16" style="height:80%;width:80%; background-color:rgba(255, 255, 255, .2);">



						<!-- Container to keep content altogether -->
						<div class="w3-content w3-container w3-padding-64">

							<div class="w3-row">
								<div class="w3-col m6 w3-center w3-padding-large">
									<img src="images/download_low.png" class="w3-round w3-image" alt="logo brand" width="350" height="233">
								</div>


								<!-- Brand title + second title -->
								<div class="w3-col m6 w3-padding-large">
									<div class="content"style="margin-top: -25px;margin-right: 120px;">
										<h1>SOUNDWAVE</h1>
									</div>
									<div class="content"style="margin-top: -25px;margin-left: 140px;">
										<h2>FEEL THE MUSIC</h2>
									</div>


									<!-- login form -->
									<form method = "post" id= "01_loginV2">

										<div class="w3-row w3-section">
											<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"> </i></div>
											<div class="w3-rest">
												<input for='login' class="w3-input w3-border" type = "username" name = "username" placeholder="Username" style="width:100%" required/>
											</div>
										</div>

										<div class="w3-row w3-section">
											<div class="w3-col" style="width:50px"><span class="w3-xxlarge material-icons">lock</span></div>
											<div class="w3-rest">
												<input for='login' class="w3-input w3-border" type = "password" name = "password" placeholder="Password" style="width:100%" required/>
											</div>
										</div>
										<div class="w3-center">
											<button class="w3-button w3-section w3-green w3-ripple w3-hover-grey"> Log in </button>
										</div>

										<!-- creates a line to seperate both login form / register -->
										<hr>
										<div class="w3-center">
											<p1>Don't have an account?</p1>
										</div>

										<br>
										<div class="w3-center">
											<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-ripple w3-hover-grey">SIGN UP FOR SOUNDWAVE</button> 
										</div>

										<h3 class = "white"><?php echo $error; ?></h3>
										<br>
									</form>
								</div>
							</div>
						</div>

						<!-- register form - modal pop up -->
						<div id="id01" class="w3-modal">
							<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-white" style="max-width:600px">

								<div class="w3-center"><br>
									<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
								</div>

								<form class="w3-container w3-white" action="/action_page.php">
									<div class="w3-section">
										<label for = 'login'>Username:</label>
										<input type = "text" name = "username" placeholder="Enter user name" style="width:100%" required/><br />
										<label for = 'login'>Password:</label>
										<input type = "password" name = "password" placeholder="Enter user password" style="width:100%" required/><br />
										<a href="01_loginV2.php" class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Register </a>
									</div>


									<div class="w3-left">
										<?php
										//connect.php (tells where to connect servername, username, password, dbaseName)
										require "communityproject_mysqli.php";
										print "<p>Connected to server   <br>  </p>";


										$UserID = isset($_POST['username']) ?$_POST['username']: '';
										$PW =  isset($_POST['password']) ?$_POST['password']: '';

										//create a variable to store sql code for the 'Add Users' query
										$insertquery = "INSERT INTO users( User_ID, Password ) VALUES( '$UserID','$PW' )";

										if (mysqli_query($conn, $insertquery))
										{
											echo "<p class = white > Record inserted:</p>";
										}
										else
										{
											echo "<p class = 'white'>Error inserting record:</p>";
										}
										?>
									</div>

									<div class="w3-container w3-border-top w3-padding-16 w3-white">
										<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-right w3-button w3-red">Cancel</button>
									</div>

								</form>
							</div>
						</div>
					</div>

				</center>
				<br>
				<br>
			</div>
		</div>



		<!-- footer -->
		<footer class="w3-center w3-white w3-padding-32">
			<p>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p>
			<div class="w3-xlarge w3-section">
				<i class="fa fa-facebook-official w3-hover-opacity"></i>
				<i class="fa fa-instagram w3-hover-opacity"></i>
				<i class="fa fa-snapchat w3-hover-opacity"></i>
				<i class="fa fa-pinterest-p w3-hover-opacity"></i>
				<i class="fa fa-twitter w3-hover-opacity"></i>
				<i class="fa fa-linkedin w3-hover-opacity"></i>
			</div>
		</footer>




	</body>
</html>
