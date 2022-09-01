<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("location:01_login.php");
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
      <a href="signout.php" class="w3-bar-item w3-button w3-text-red">Log out</a>
    </div>
  </div>
</div>


<!-- opening image of main design  -->
<div class="w3-display-container">
  <img src="images/placeholder.jpg"  style="width:100%;height:800px">

  <div class="w3-display-middle" >
    <h1 class="w3-jumbo w3-animate-top">SOUNDWAVE</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Feel the music</p>
  </div>
</div>


<!-- container to create more padding and margin -->
<div class="w3-panel w3-padding-large w3-margin-left w3-margin-right w3-blue">




  <!-- slideshow for album covers  -->
  <div class="w3-panel w3-padding-large w3-black" style="width:100%">


    <!-- welcoming message -->
    <div class="w3-left-align"><p>welcoming message to server</p>


      <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <div class="mySlides w3-third">
          <img class="w3-large" src="images/placeholder.jpg" alt="Sandwich"   width="210" height="110" style="width:100%;max-width:230px">
          <h3>Album name</h3>

        </div>
        <div class="w3-third">
          <img class="w3-large"src="images/placeholder.jpg" alt="Steak" width="210" height="110" style="width:100%;max-width:230px">
          <h3>Album name</h3>

        </div>
        <div class="w3-third">
          <img class="w3-large" src="images/placeholder.jpg" alt="Cherries" width="210" height="110" style="width:100%;max-width:230px">
          <h3>Album name</h3>
        </div>	

        <div class="mySlides w3-third">
          <img class="w3-large" src="images/placeholder.jpg" alt="Steak" width="210" height="110" style="width:100%;max-width:230px">
          <h3>Album name</h3>

        </div>

        <div class="mySlides w3-third">
          <img  class="w3-large" src="images/placeholder.jpg" alt="Cherries" width="210" height="110" style="width:100%;max-width:230px">
          <h3>Album name</h3>
        </div>

        <div class="mySlides w3-third">
          <img class="w3-large" src="images/placeholder.jpg" alt="Cherries" width="210" height="110" style="width:100%;max-width:230px">
          <h3>Album name</h3>
        </div>

      </div>			


      <!-- script for slideshow technique -->
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



    </div>
  </div>


  <br>
  <br>



  <!-- Playlist photos / Queries -->
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">

    <div class="w3-col m3">
      <a href="Playlist_Genre.rock .php"> <img src="images/placeholder.jpg" style="width:100%" class="w3-hover-opacity" alt="The mist over the mountains"> </a>
    </div>

    <div class="w3-col m3">
      <a href="playlist_genre.php"> <img src="images/placeholder.jpg" style="width:100%" class="w3-hover-opacity" alt="The mist over the mountains"> </a>
    </div>

    <div class="w3-col m3">
      <a href="playlist_genre.php"> <img src="images/placeholder.jpg" style="width:100%" class="w3-hover-opacity" alt="The mist over the mountains"> </a>
    </div>

    <div class="w3-col m3">
      <a href="playlist_genre.php"> <img src="images/placeholder.jpg" style="width:100%" class="w3-hover-opacity" alt="The mist over the mountains"> </a>
    </div>
  </div>

</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p1>Created by <a target="_blank" class="w3-hover-text-orange">Soundwave</a> &copy; Copyright Liv Amer 2022</p1>
</footer>



</body>
</html>
