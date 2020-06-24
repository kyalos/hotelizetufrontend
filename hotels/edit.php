<?php
require('../templates/hotelsheader.php');
?>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

	<!-- Good offers -->
	<div class="w3-container w3-margin-top">

	</div>
	<div class="w3-row-padding w3-text-white w3-large">

		<img src="../images/java.jpg" class="w3-round brand w3-margin-left w3-margin-bottom">


		<div class="w3-row-padding" style="margin:0 -16px">
			<div class="newtabbar w3-right w3-margin-right">
				<i class="fa fa-bars fa-2x" aria-hidden="true" style="color: red" onclick="openRightMenu()"></i>
			</div>


			<!-- ########################################################################################3 -->

			<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large w3-green w3-hover-black">Close &times;</button>
				<div class="w3-black">
					<button class="w3-bar-item w3-button tablink2 inntabs" onclick="openLink2(event, 'Offers');"><i class="fa fa-gift"></i>  Offers</button>
					<button class="w3-bar-item w3-button tablink2 inntabs" onclick="openLink2(event, 'About');"><i class="fa fa-bed"></i>  About us</button>
					<button class="w3-bar-item w3-button tablink2 inntabs" onclick="openLink2(event, 'Offers');"><i class="fa fa-gift"></i>  Offers</button>
					<button class="w3-bar-item w3-button tablink2 inntabs" onclick="openLink2(event, 'Measures');"><i class="fa fa-exclamation-triangle"></i>  C19 Measures</button>
				</div>
			</div>

			<!-- ################################################################################################### -->

			<div class="w3-bar w3-black tabbars">
				<button class="w3-bar-item w3-button tablink inntabs" onclick="openLink(event, 'Offers');"><i class="fa fa-gift"></i>  Offers</button>
				<button class="w3-bar-item w3-button tablink inntabs" onclick="openLink(event, 'About');"><i class="fa fa-bed"></i>  About us</button>
				<button class="w3-bar-item w3-button tablink inntabs" onclick="openLink(event, 'Offers');"><i class="fa fa-gift"></i>  Offers</button>
				<button class="w3-bar-item w3-button tablink inntabs" onclick="openLink(event, 'Measures');"><i class="fa fa-exclamation-triangle"></i>  C19 Measures</button>
			</div>


			<!-- Tabs -->
			<div id="Offers" class="w3-container w3-white w3-padding-16 myLink">

				<div class="w3-container w3-card-4">
					<p><b>ADD OFFERS</b></p>

					<label><b>Offer</b></label>
					<textarea id="offers"></textarea>
					<br>
					<br>
					<hr>
					<label><b>Price</b></label>
					<input class="w3-input w3-border w3-padding w3-leftbar" type="number" id="price" placeholder="Price">

					<br><br>
					<center><button class="w3-button w3-black" onclick="add_offers()">Submit</button></center>
					<br>
				</div>

			</div>



			<div id="About" class="w3-container w3-white w3-padding-16 myLink">

				<div class="w3-container w3-card-4">
					<p><b>ABOUT US</b></p>

					<textarea id="about"></textarea>
		

					<br><br>
					<center><button class="w3-button w3-black" onclick="add_aboutus()">Submit</button></center>
					<br>
				</div>

			</div>

			<div id="Offers" class="w3-container w3-white w3-padding-16 myLink">

				<center><span class="w3-tag w3-deep-orange">DISCOUNTS!</span></center>
				<ol id="offer">

				</ol>

			</div>

			<div id="Measures" class="w3-container w3-white w3-padding-16 myLink">
				<ol id="hotelmeasures">

				</ol>

			</div>



			<!-- ####################################################################################### -->
			<!-- Menu Modal -->
			<div id="menu" class="w3-modal">
				<div class="w3-modal-content w3-animate-zoom">
					<div class="w3-container w3-black w3-display-container">
						<span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
						<h1>Starters</h1>
					</div>
					<div class="w3-container">
						<h5 style="color: black">Tomato Soup <b>$2.50</b></h5>
						<h5 style="color: black">Chicken Salad <b>$3.50</b></h5>
						<h5 style="color: black">Bread and Butter <b>$1.00</b></h5>
					</div>
					<div class="w3-container w3-black">
						<h1>Main Courses</h1>
					</div>
					<div class="w3-container">
						<h5 style="color: black">Grilled Fish and Potatoes <b>$8.50</b></h5>
						<h5 style="color: black">Italian Pizza <b>$5.50</b></h5>
						<h5 style="color: black">Veggie Pasta <b>$4.00</b></h5>
						<h5 style="color: black">Chicken and Potatoes <b>$6.50</b></h5>
						<h5 style="color: black">Deluxe Burger <b>$5.00</b></h5>
					</div>
					<div class="w3-container w3-black">
						<h1>Desserts</h1>
					</div>
					<div class="w3-container">
						<h5 style="color: black">Fruit Salad <b>$2.50</b></h5>
						<h5 style="color: black">Ice cream <b>$2.00</b></h5>
						<h5 style="color: black">Chocolate Cake <b>$4.00</b></h5>
						<h5 style="color: black">Cheese <b>$5.50</b></h5>
					</div>
				</div>
			</div>
			<!-- ############################################################################################### -->


			<!-- ################################################################################################ -->

			<!-- ####################################################################################################### -->
		</div>
	</div>

	<!-- End page content -->
</div>

<script>
// Tabs
function openLink(evt, linkName) {
	var i, x, tablinks;
	x = document.getElementsByClassName("myLink");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < x.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	}
	document.getElementById(linkName).style.display = "block";
	evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>


<script>
// Tabs
function openLink2(evt, linkName) {
	var i, x, tablinks;
	x = document.getElementsByClassName("myLink");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink2");
	for (i = 0; i < x.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	}
	document.getElementById(linkName).style.display = "block";
	evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink2")[0].click();
</script>

<script>

	function openRightMenu() {
		document.getElementById("rightMenu").style.display = "block";
	}

	function closeRightMenu() {
		document.getElementById("rightMenu").style.display = "none";
	}
</script>

<script>
	CKEDITOR.replace( 'offers',{

		width: "100%",
		height: "300px"

	});
</script>

<script>
	CKEDITOR.replace( 'about',{

		width: "100%",
		height: "300px"

	});
</script>


<script src="../js/add_offers.js"></script>

<script src="../js/toastnotify.js"></script>


<?php
require('../templates/footer.php');
?>
