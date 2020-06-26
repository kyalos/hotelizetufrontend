<?php
require('templates/header.php');
?>
<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>

	<img src="images/java.jpg" class="w3-round brand w3-margin-left w3-margin-bottom">

	<br>

	<div class="w3-row-padding w3-text-white w3-large w3-margin-top w3-margin-bottom">
		<button class="w3-button w3-ripple w3-red blink_me w3-margin-bottom"  onclick="document.getElementById('menu').style.display='block'">Special Menu</button>

		<div class="w3-row-padding" style="margin:0 -16px">
			<div class="w3-margin-bottom">
				<center>
					<div class="w3-display-container">
						<div class="w3-bar w3-border-bottom">
							<h5 style="color: black"><u><b>TABLES FOR ONE</b></u></h5>

						</div>

					</div>
				</center><br>
				<!-- loop here -->
				<div id="tablesforone" style="background-color: #c7d6dd">

				</div>
				<br>

				<center>
					<div class="w3-display-container">
						<div class="w3-bar w3-border-bottom">
							<h5 style="color: black"><u><b>TABLES FOR TWO</b></u></h5>

						</div>
					</div>
				</center><br>
				<!-- loop here -->
				<!-- loop here -->
				<div id="tablesfortwo" style="background-color: #ccc9c9">

				</div>
				<br>

				<center>
					<div class="w3-display-container">
						<div class="w3-bar w3-border-bottom">
							<h5 style="color: black"><u><b>TABLES FOR THREE</b></u></h5>

						</div>
					</div>
				</center><br>
				<!-- loop here -->
				<!-- loop here -->
				<div id="tablesforthree" style="background-color: #f4c6ab">

				</div>
				<br>

			</div>

		</div>



		<div class="w3-row w3-margin-bottom">
			<center>
				<div class="w3-display-container">
					<img src="images/sanfran.jpg" alt="San Francisco" class="w3-grayscale-min w3-hover-sepia logos" height="100px">

					<p style="color: black"> Second</p>
				</div>
			</center>
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

<!-- data entry -->
<script src="js/tables.js"></script>



<script src="js/toastnotify.js"></script>
<?php
require('templates/footer.php');
?>