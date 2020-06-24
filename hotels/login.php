<?php
require('../templates/hotelsheader.php');
?>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">
	
	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>
	<div class="w3-row-padding w3-text-white w3-large">

		<div class="w3-row-padding" style="margin:0 -16px">
			<center>
				<h2 style="color: black"><b><u>LOGIN</u></b></h2><br>
				<form class="w3-container w3-light-grey">
					<label>Username</label>
					<input class="w3-input w3-border" type="text" style="width: 80%">
					<br>


					<label>Password</label>

					<input class="w3-input w3-border" type="password" style="width: 80%" id="pass"> <br>
					<input type="checkbox" onclick="myFunction()">  Show Password
					<br><br>


					<button class="w3-button w3-blue-grey">Submit</button>

				</form>
			</center>
		</div>
	</div>
	<div class="w3-row-padding">&nbsp;</div>

	<!-- End page content -->
</div>

<script>
	function myFunction() {
		var x = document.getElementById("pass");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>

<?php
require('../templates/footer.php');
?>