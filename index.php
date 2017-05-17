
<?php
/*
// connect to DB
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

global $mysqli;

$mysqli = new mysqli("localhost", "schala5_mysql", "Drap420", "schala5_email");



if (isset($_POST['submit'])) {   //check to see if submit has been posted, if so run block of code
	

	$stmt = $mysqli->prepare("INSERT INTO emails (email) VALUES (?)");  // preparing insert

	$stmt->bind_param('s', $email);  //bind params
	
	$email = $_POST['email'];  // gather user input from post

	$stmt->execute();  //run statment
	$stmt->close();
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Schala Offical Trance Music</title>
	<meta name="description" content="Offical Page For Trance Music Artist SCHALA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body id="body">
	<div class="container" id="wrapper">
			<header>
				<nav>
					<h1>SCHALA</h1>
					<ul>
						<li> <a href="index.php">logo</a> </li>
						<li> <a href="index.php">home</a> </li>
						<li> <a href="pages/music.php">music</a> </li>
						<li> <a href="pages/about.php">about</a> </li>
						<li> <a href="https://trance.news/" target="_blank">news</a> </li>
					</ul>
				</nav>
			</header>
		<div id="main">
			<video id="myVideo" onClick="playPause()">
				  <source src="vid/promo.mp4" type="video/mp4">
				  <source src="vid/promo.m4v" type="video/mp4">
				  <source src="vid/promo.ogg" type="video/ogg">
				  <source src="vid/promo.webm" type="video/webm">
				  Your browser does not support the video tag.
			</video>

		</div> <!-- main -->
		<footer>
			<form action="index.php" method="post">
			  <input type="text" name="email" value="" placeholder="Join Mailing List" required><br>
			  <input type="submit" name="submit" value="Submit">
			</form>
			<ul id="social_links">
				<li> <a href="https://www.facebook.com/schalamusic/" target="_blank">facebook</a> </li>
				<li> <a href="https://twitter.com/schalasf" target="_blank">twitter</a> </li>
				<li> <a href="https://soundcloud.com/schalala" target="_blank">soundcloud</a> </li>
				<li> <a href="https://www.beatport.com/artist/schala/464100" target="_blank">beatport</a> </li>
			</ul>
		</footer>

	</div><!-- wrapper -->
	<script src="js/script.js"></script>
</body>
</html>