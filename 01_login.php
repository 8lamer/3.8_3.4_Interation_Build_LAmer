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


	</head>
	<body>

		<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<div class="w3-bar w3-grey w3-padding w3-card">
				<img src="images/placeholder.jpg" width="40" height="40">
				<a class="w3-bar-item"><b>Soundwave</b> </a>
			</div>
		</div>


		<!-- background colour -->
		<div class="w3-black">
			<div class="w3-container w3-content w3-padding-64" style="max-width:100%">


				<!-- Container (placeholder) -->
				<div class="w3-content w3-container w3-padding-64">

					<div class="w3-row">
						<div class="w3-col m6 w3-center w3-padding-large">
							<img src="images/placeholder.jpg" class="w3-round w3-image w3-opacity" alt="placeholder" width="500" height="333">
						</div>


						<br>

						<!-- brand name: soundwave -->
						<div class="w3-col m6 w3-padding-large">
							<h1>SOUNDWAVE</h1>
							<form method = "post" id= "01_login">

								<!-- login form -->
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

								<p><button class="w3-button w3-section w3-white w3-ripple w3-hover-orange"  style="margin-left: 160px;"> Log in </button></p>


								<hr>
								<!-- register form; for new users -->
								<div style="margin-left: 139px;">
									<p1>Don't have an account?</p1>
								</div>

								<br>
								<div style="margin-left: 100px;">
									<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-ripple w3-hover-orange">SIGN UP FOR SOUNDWAVE</button> 
								</div>


								<h3 class = "white"><?php echo $error; ?></h3>
								<br>
							</form>
						</div>
					</div>
				</div>
				

				<div id="id01" class="w3-modal">
					<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-black" style="max-width:600px">

						<div class="w3-center"><br>
							<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
						</div>

						<form class="w3-container w3-black" action="/action_page.php">
							<div class="w3-section">
								<label for = 'login'>Username:</label>
								<input type = "text" name = "username" placeholder="Enter user name" style="width:100%" required/><br />
								<label for = 'login'>Password:</label>
								<input type = "password" name = "password" placeholder="Enter user password" style="width:100%" required/><br />
								<a href="01_loginV2.php" class="w3-button w3-block w3-orange w3-section w3-padding" type="submit">Register </a>

							</div>


							<!-- add user php-->
							<?php
							//connect.php (tells where to connect servername, username, password, dbaseName)
							require "communityproject_mysqli.php";
							print "<p1>Connected to server   <br>  </p1>";


							$UserID = isset($_POST['username']) ?$_POST['username']: '';
							$PW =  isset($_POST['password']) ?$_POST['password']: '';

							//create a variable to store sql code for the 'Add Users' query
							$insertquery = "INSERT INTO users( User_ID, Password ) VALUES( '$UserID','$PW' )";

							if (mysqli_query($conn, $insertquery))
							{
								echo "<p1 class = white > Record inserted:</p1>";
							}
							else
							{
								echo "<p1 class = 'white'>Error inserting record:</p1>";
							}
							?>

							<div class="w3-container w3-border-top w3-padding-16 w3-black">
								<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-right w3-button w3-red">Cancel</button>
							</div>

						</form>
					</div>
				</div>

				<br>
				<br>


			</div>
		</div>

		<!-- Footer (sit on bottom of screen) -->
		<footer class="w3-center w3-grey w3-padding-64">
			<p>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p>
		</footer>

	</body>
</html>
