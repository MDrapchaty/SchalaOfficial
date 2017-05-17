<?php
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




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Schala Offical Trance Music</title>
	<meta name="description" content="Offical Page For Trance Music Artist SCHALA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/styles.css">
	<script
     src="https://code.jquery.com/jquery-3.2.1.min.js"
     integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
     crossorigin="anonymous"></script>	
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1479178645434581',
	      xfbml      : true,
	      version    : 'v2.8'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	

	<div id="wrapper" class="container-fluid">
		<header>
			<h1>SCHALA</h1>
			<nav>
				<ul>
					<li> <a href="../index.php">logo</a> </li>
					<li> <a href="../index.php">home</a> </li>
					<li> <a href="music.php">music</a> </li>
					<li> <a href="about.php">about</a> </li>
					<li> <a href="https://trance.news/" target="_blank">news</a> </li>
				</ul>
			</nav>
		</header>
		<div class="fade">
			<div> <img src="../img/Schala1.jpg" alt="schala"> </div>
			<div> <img src="../img/Schala2.jpg" alt="schala"> </div>
			<div> <img src="../img/Schala3.jpg" alt="schala"> </div>
			<div> <img src="../img/Schala4.jpg" alt="schala"> </div>
		</div><!-- fade -->
		

		<div id="social">
			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>

			<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

			<a href="https://twitter.com/schalasf" class="twitter-follow-button" data-show-screen-name="false" data-lang="en" data-show-count="false">Follow @schalasf</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

			<a href="https://twitter.com/intent/tweet?screen_name=schalasf" class="twitter-mention-button" data-text=" " data-show-count="false">Tweet to @schalasf</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>	

			
	    </div><!-- social -->
	    <div id="about">
	    	<p> Hailing from the United States, "SCHALA" (born Sean Decker) has been interested in electronic music since early childhood. He began his music career playing in metal bands throughout Northern California, but started producing dance music shortley thereafter. Releasing his debut EP, "Alter Time" on Enhanced Music's Trance label, Enhanced Progressive, it quickly topped the charts and became the #1 Trance EP release for several days during 2016. It wasn't too long until he started receiving support from the world leading DJs across multiple genres; anywhere in the trance camp from Armin van Buuren and Above & Beyond, to even electro artists like Ummet Ozcan and VINAI. Being given consistent air time support from radio shows like Above & Beyond's Group Therapy, SCHALA is becoming internationally recognized for his heavy hitting rhythm and stormy melodic brand of Trance music. Having played for the Enhanced Music's Enhanced Sessions 350 special alongside artists like Tritonal, Breathe Carolina, BRKLYN, and Wrechiski, SCHALA began regularly playing clubs and parties throughout his home town. Originally from San Francisco CA, SCHALA relocated to the countryside of Colorado in 2017, while frequently also traveling to Denver, LA, and San Francisco for its prestigious night life and other musical endeavors.</p>
	    </div>
	    <div id="label">
	    	<img src="../img/Dansant-Logo.gif" alt="Dansant Schala Trance">
	    	<img src="../img/enhanced.png" alt="Enhanced Schala Trance">
	    </div>
		<footer>
			<form action="about.php" method="post">
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
<script src="../js/script.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.fade').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
    });
  });
 </script>

</body>
</html>