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
	
	<script
     src="https://code.jquery.com/jquery-3.2.1.min.js"
     integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
     crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/transitions.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
<script type="text/javascript" src="../js/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="../js/utils.js"></script>
<script type="text/javascript" src="../js/gallery.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

</head>
<body>
	<div id="wrapper" class="container">
		<header>
			<nav>
				<h1>SCHALA</h1>
				<ul>
					<li> <a href="../index.php">logo</a> </li>
					<li> <a href="../index.php">home</a> </li>
					<li> <a href="music.php">music</a> </li>
					<li> <a href="about.php">about</a> </li>
					<li> <a href="https://trance.news/" target="_blank" >news</a> </li>
				</ul>
			</nav>
		</header>
		
            
			<div id="gallery">
					<div id="carousel">
						<figure id="fig1" class="showFig dropdown">
							<div id="playNightSky" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:6vFlx8eNEMDUe0YuxdgkPa" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    				<button onclick="hideSpotify('playNightSky', 'nightSky')">Go back to Track Options</button>
							</div>
							<img id="nightSky" src="../img/night_sky.jpg" alt="schala trance music night sky" >
							<ul id="nightSkyLi" class="dropdown-content">
								
								<li>Spotify <a href="https://open.spotify.com/album/4ByNRizNMOGy5yKU1G46cL" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/night-sky-extended-mix/7891103" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album/SCHALA_Night_Sky?id=B2djb6szyburzp7bm6s7phhp4za" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/night-sky-extended-mix/id1104779785?i=1104779786" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Night-Sky-Schala/dp/B01F7XGGG6/ref=sr_1_1?s=dmusic&ie=UTF8&qid=1492045624&sr=1-1-mp3-albums-bar-strip-0&keywords=schala" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/night-sky-original-mix-out-now" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig2">
							<div id="playChalice" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:0eCtzeWQVvRS12VKa2eBE3" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playChalice', 'chalice')">Go back to Track Options</button>
							</div>
							<img id ="chalice" src="../img/chalice_alpha.jpg" alt="schala trance music chalice alpha shear" onclick="show('playChalice', 'chalice')">
							<ul id="chaliceLi" style="display: none;">
								<li>Chalice</li>
								<li>Spotify <a href="https://open.spotify.com/album/3b6CFTMqokOSlOD2hdiD9y" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/chalice-extended-mix/8863876" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album?id=Bbsqygyscq2ggosp6phitg2izc4&tid=song-Tfrj6wjsgq7ofil2nblkpx4djey" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/chalice-alpha-shear-ep/id1196105152">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Chalice-Alpha-Shear-Schala/dp/B01MS8MKCM/ref=sr_1_1?s=dmusic&ie=UTF8&qid=1492048489&sr=1-1-mp3-albums-bar-strip-0&keywords=schala+chalice" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/chalice-out-now" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig3">
							<div id="playAlpha" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:6wZyJZ19XXM6TxeUEDVMsG" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playAlpha', 'alpha')">Go back to Track Options</button>
							</div>
							<img id="alpha" src="../img/chalice_alpha.jpg" alt="schala trance music chalice alpha shear" onclick="show('playAlpha', 'alpha')">
							<ul id="alphaLi" style="display: none;">
								<li>Alpha Shear</li>
								<li>Spotify <a href="https://open.spotify.com/album/3b6CFTMqokOSlOD2hdiD9y" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/alpha-shear-extended-mix/8863877" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album?id=Bbsqygyscq2ggosp6phitg2izc4&tid=song-Tfrj6wjsgq7ofil2nblkpx4djey" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/chalice-alpha-shear-ep/id1196105152" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Chalice-Alpha-Shear-Schala/dp/B01MS8MKCM/ref=sr_1_1?s=dmusic&ie=UTF8&qid=1492048489&sr=1-1-mp3-albums-bar-strip-0&keywords=schala+chalice" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/alpha-shear" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig4">
							<div id="playAlgorithm" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:33aInm43T7vhq0F8nKgDzD" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playAlgorithm', 'algorithm')">Go back to Track Options</button>
							</div>
					
							<img id="algorithm" src="../img/algorithm_recourse.jpg" alt="schala trance music algorithm recourse" onclick="show('playAlgorithm', 'algorithm')">
							<ul id="algorithmLi" style="display: none;">
								<li>Algorithm </li>
								<li>Spotify <a href="https://open.spotify.com/search/results/algorithm%20schala" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/algorithm-extended-mix/7527632" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album?id=Bplaquo24r4ydkximc5niks2rxm&tid=song-Taptd7cq6ipd7xj54dcysngqmse" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/algorithm/id1073965946?i=1073965956" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Algorithm-Original-Mix/dp/B01B5Y9HJO/ref=sr_1_7?s=dmusic&ie=UTF8&qid=1492051222&sr=1-7&keywords=schala+algorithm" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/algorithm-original-mix-out-now" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig5">
							<div id="playRecourse" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:1WRv3tsTwBmKfx8AEz5ICP" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playRecourse', 'recourse')">Go back to Track Options</button>
							</div>
				
							<img id="recourse" src="../img/algorithm_recourse.jpg" alt="schala trance music algorithm recourse" onclick="show('playRecourse', 'recourse')">
							<ul id="recourseLi" style="display: none;">
								<li>Recourse</li>
								<li>Spotify <a href="https://open.spotify.com/search/results/recourse%20schala" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/recourse-extended-mix/7527633" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album?id=Bplaquo24r4ydkximc5niks2rxm&tid=song-Taptd7cq6ipd7xj54dcysngqmse" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/recourse/id1073965946?i=1073965957" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Recourse-Original-Mix/dp/B01B5Y9JSI/ref=sr_1_1?s=dmusic&ie=UTF8&qid=1492051714&sr=1-1&keywords=schala+recourse" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/recourse-original-mix-out-now" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig6">
							<div id="playLabyrinth" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:7umTt40UqmwxE5ZKWv0aJN" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playLabyrinth', 'labyrinth')">Go back to Track Options</button>
							</div>

							<img id="labyrinth" src="../img/labyrinth.jpg" alt="schala trance music labyrinth" onclick="show('playLabyrinth', 'labyrinth')">
							<ul id="labyrinthLi" style="display: none;">
								<li>Labyrinth</li>
								<li>Spotify <a href="https://open.spotify.com/album/6UcVIRKuRoyxcbKg9k37o3" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/labyrinth-original-mix/7932706" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album/SCHALA_Labyrinth?id=Bzxgtryf2hd3qtsjcwaor6scllm" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/labyrinth-single/id1112335986" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Labyrinth-Schala/dp/B01FEZSGWY/ref=sr_1_1?s=dmusic&ie=UTF8&qid=1492052186&sr=1-1-mp3-albums-bar-strip-0&keywords=schala+labyrinth" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/schala-labyrinth-original-mix-1" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig7">
							<div id="playTwoWorlds" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:3OFlyU1sPFQqCMsccnjz5p" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playTwoWorlds', 'twoWorlds')">Go back to Track Options</button>
							</div>

							<img id="twoWorlds" src="../img/two_worlds.jpg" alt="schala trance music two worlds" onclick="show('playTwoWorlds', 'twoWorlds')">
							<ul id="twoWorldsLi" style="display: none;">
								<li>Two Worlds</li>
								<li>Spotify <a href="https://open.spotify.com/album/0E2vly5DB9fcifQPUaqzta" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/two-worlds-original-mix/6526601" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album?id=Bmadbxumhxqcm3ogycygn4u67sq&tid=song-Tiq5tnyisamgjbtk3c2fxic55aa" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/us/album/two-worlds-single/id982758467" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Two-Worlds-Schala/dp/B00VJAGKBS/ref=sr_1_1?s=dmusic&ie=UTF8&qid=1492052573&sr=1-1-mp3-albums-bar-strip-0&keywords=schala+two+worlds" target="_blank">Download</a></li>
								<li>Soundcloud <a href="https://soundcloud.com/schalala/schala-two-worlds-original-mix" target="_blank">Download</a></li>
							</ul>
						</figure>
						<figure id="fig8">
							<div id="playResort" style="display: none;" >
				    			<iframe src="https://open.spotify.com/embed?uri=spotify:track:6f27ysAy8OVizM3XKgh521" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				    			<button onclick="hideSpotify('playResort', 'resort')">Go back to Track Options</button>
							</div>

							<img id="resort" src="../img/resort.jpg" alt="schala trance music two worlds" onclick="show('playResort', 'resort')">
							<ul id="resortLi" style="display: none;">
								<li>Resort</li>
								<li>Spotify <a href="https://open.spotify.com/album/3uQOlQrYZviFyDdhK5ejm0" target="_blank">Play</a></li>
								<li>Beatport <a href="https://www.beatport.com/track/resort-original-mix/6623149" target="_blank">Download</a></li>
								<li>Google Play <a href="https://play.google.com/store/music/album/SCHALA_Resort?id=Boiau5r6o4rjdbypuqp3ltaglzy&hl=en" target="_blank">Download</a></li>
								<li>itunes <a href="https://itunes.apple.com/gb/album/resort-single/id990072852" target="_blank">Download</a></li>
								<li>Amazon Music <a href="https://www.amazon.com/Resort/dp/B00WS6GVV6" target="_blank">Download</a></li>
							</ul>
						</figure>
					</div>
				<div class="options">
					<p id="toggle"><button id="toggle-axis" style="display: none;">Toggle Axis</button></p>
					<p id="navigation">
						<input type="hidden" id="panel-count" value="8">
						<button id="previous" data-increment="-1">Previous</button>
						<button id="next" data-increment="1">Next</button>
					</p>
				</div><!-- end options -->
			</div><!-- end gallery -->
		
		<footer>
			<form action="music.php" method="post">
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


</body>
</html>