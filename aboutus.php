<?php
require('templates/header.php');
?>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;margin-top: 10px">
	<div class="w3-row w3-text-black w3-large w3-margin-top">
		<div class="w3-row-padding w3-margin-bottom" id="about">
			<center><button class="w3-hover-red w3-border-2px">About us</button></center><br>
			<div class="w3-col l7 12">


				<h3><u><b>About us</b></u></h3>
				<h6>During and post Covid 19, we are reinventing the hospitality industry, we give you the convenience to
				make reservations at your favorite eatery with your safety as our priority.</h6>

				<h3><u><b>Our vision</b></u></h3>
				<h6>To be the leading platform for eateries and restaurant reservations.</h6>

				<h3><u><b>Our mision</b></u></h3>
				<h6>Transform the culture in restaurants and eateries.</h6>

				<h3><u><b>Who we are</b></u></h3>
				<h6>HoteliZetu is a product birthed during a global pandemic ravaging the world and literally changing
					almost all aspects of the human life. Using the power of imagination, we envisioned how different the
				culture in eateries and restaurants would be during and post Covid 19.</h6>
				<h6>We are that culture.</h6>
				<h6>HoteliZetu is a bold platform for eateries and restaurants to conveniently meet the dynamic needs of
				their customers in the new normal birthed post Covid 19.</h6>


			</div>
			<div class="w3-col l5 12">
				<!-- Image of location/map -->
				<img src="images/undraw_questions_75e0.svg" class="w3-image" style="width:100%;">
			</div>
		</div> 
	</div>
</header>


<script>

	function openRightMenu() {
		document.getElementById("rightMenu").style.display = "block";
	}

	function closeRightMenu() {
		document.getElementById("rightMenu").style.display = "none";
	}
</script>

<?php
require('templates/footer.php');
?>