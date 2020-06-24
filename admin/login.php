<?php
require('../templates/adminheader.php');
?>
	<!-- Page Content -->
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

	<div>
		<button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

		<a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red" id="llogo"><b><i class="fa fa-map-marker w3-margin-right" style="font-size: 40px"></i>Hoteli zetu</b></a>

		<div class="w3-container">
			<div class="w3-row-padding" style="margin:0 -16px">
				<center>
					<h2 style="color: black"><b><u>ADMIN LOGIN</u></b></h2><br>
					<form class="w3-container w3-light-grey">
						<label>Username</label>
						<input class="w3-input w3-border" type="text" style="width: 80%">
						<br>


						<label>Password</label>

						<input class="w3-input w3-border" type="password" style="width: 80%" id="pass"> <br>
						<input type="checkbox" onclick="myFunction()">  Show Password
						<br><br>


						<button class="w3-button w3-block w3-black" style="width:30%">Submit</button>

					</form>
				</center>
			</div>
		</div>
	</div>

	<script>
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}

		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}
	</script>

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


</body>
</html>





