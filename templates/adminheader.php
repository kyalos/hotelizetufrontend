<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3css.css">

<link rel="stylesheet" href="../css/tooltip.css">
<link rel="stylesheet" href="../css/messages.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>

	<!-- Sidebar -->
	<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
		<a href="allusers.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>All users</a>
		<a href="allreservations.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> All reservations</a>
		<a href="messages.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Messages</a>
		<a href="syslogs.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  System logs</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
	</div>
