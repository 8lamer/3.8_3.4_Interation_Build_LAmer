<?php   
		session_start(); //to ensure you are using same session
		if(!isset($_SESSION['login_user'])){
				header("location:01_login.php");
				}
		else{
			$User = $_SESSION['login_user'];
				}
		// destroy the session
		session_destroy(); //destroy the session
		header("location:01_login.php"); //to redirect back to "index.php" after logging out
		exit();
?>
