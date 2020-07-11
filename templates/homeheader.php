<!DOCTYPE html>
<html>
<title>Hotelizetu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3css.css">
<link rel="stylesheet" href="css/stylestoo.css">
<link rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<link rel="stylesheet" href="css/js-snackbar.css?v=2.0.0">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169274245-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-169274245-1');
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
	.myLink {display: none}
</style>
<body class="w3-light-grey">

	<!-- Navigation Bar -->
	<div class="w3-bar w3-white w3-border-bottom w3-xlarge ">
		<a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red" id="llogo"><b><i class="fa fa-map-marker w3-margin-right"></i>Hoteli zetu</b></a>
		<div id="dissaper">
			<a href="eateries.php" class="w3-bar-item w3-button w3-mobile w3-hover-red w3-right">Eateries</a>
			<a href="nightsout.php" class="w3-bar-item w3-button w3-mobile w3-hover-red w3-right">Nights out</a>

		</div>
		<div id="appear">
			
			<i class="fa fa-bars w3-right w3-margin-right babars" aria-hidden="true" onclick="openRightMenu()" style="cursor: pointer"></i>
		</div>

	</div>

	<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
		<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large w3-red w3-hover-black">Close &times;</button>
		
		<a href="eateries.php" class="w3-bar-item w3-button">Eateries</a>
		<a href="nightsout.php" class="w3-bar-item w3-button">Nights out</a>
		
		<div class="w3-row">
			<div class="w3-container w3-center w3-opacity w3-margin-bottom">
				<h5>Find Us On</h5>
				<div class="w3-xlarge w3-padding-16">
					<i class="fa fa-facebook-official w3-hover-opacity"></i>
					<i class="fa fa-instagram w3-hover-opacity"></i>
					<i class="fa fa-snapchat w3-hover-opacity"></i>
					<i class="fa fa-pinterest-p w3-hover-opacity"></i>
					<i class="fa fa-twitter w3-hover-opacity"></i>
					<i class="fa fa-linkedin w3-hover-opacity"></i>
				</div>
				<p>Powered by Hotel covid <a href="" target="_blank" class="w3-hover-text-green">Hotel covid</a></p>
			</div>
		</div>
	</div>