<!-- import header and navigations -->
<?php require("templates/header.php") ?>

<!-- Page content -->
<div class="w3-content w3-margin-bottom" style="max-width:1100px;">

	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>
	<div class="w3-row-padding w3-text-black">

		<div class="w3-row-padding" style="margin:0 -16px">
			<div class="row">
				
			</div>
			<div class="w3-card-4">
				<div class="w3-container w3-green">
					<h2>Reservation Form</h2>
				</div>

				<form class="w3-container">
					<p><label>Name</label></p>
					<input class="w3-input w3-margin-top" type="text" id="cname">

					<p>  <label>Phone number</label></p>   
					<input class="w3-input" type="text" id="phone">


					<p><label>Date and time</label></p>
					<input class="w3-input" id="date_of_reservation" name="last" type="datetime-local">

				</form><br>

					<center><p><button class="w3-button w3-blue-grey w3-margin-bottom" onclick="make_reservation()">Submit</button></p></center>
			</div>
			<!-- home content here -->
		</div>
	</div>

	<!-- End page content -->
</div>


<script>

	function openRightMenu() {
		document.getElementById("rightMenu").style.display = "block";
	}

	function closeRightMenu() {
		document.getElementById("rightMenu").style.display = "none";
	}
</script>


<!-- post data  -->
<script src="js/reservation.js"></script>


<script src="js/toastnotify.js"></script>


<!-- import footer and links -->
<?php require("templates/footer.php") ?>


