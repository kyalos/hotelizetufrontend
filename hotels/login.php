<?php
require('../templates/hotelsheader.php');
?>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">
	
	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>
	<div class="w3-row-padding w3-text-black w3-large">

		<div class="w3-row-padding" style="margin:0 -16px">
			
			<div class="w3-card-4">
				<div class="w3-container w3-green">
					<h2>Login Form</h2>
				</div>

				<form class="w3-container">
					<br>
					<p><label>Phone number</label></p>
					<input class="w3-input w3-margin-top" type="number" id="phone">

					<p>  <label>Password</label></p>   
					<input class="w3-input" type="password" id="password">


					<center><input type="checkbox" onclick="myFunction()">  Show Password</center>

				</form><br>

				<center><p><button class="w3-button w3-blue-grey w3-margin-bottom" onclick="check_empty_login()">Submit</button></p></center>
			</div>
		</div>
	</div>
	<div class="w3-row-padding">&nbsp;</div>

	<!-- End page content -->
</div>
<script>
	function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>


<script src="../js/stafflogin.js"></script>

<script src="../js/toastnotify.js"></script>

<?php
require('../templates/footer.php');
?>