<?php
require('templates/header.php');
?>
<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">
	
	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>
	<div class="w3-row-padding w3-text-black w3-large">

		<div class="w3-row-padding" style="margin:0 -16px">
			<br><br>
			<div class="w3-card-4">
				<div class="w3-container w3-green">
					<h2>Contact us Form</h2>
				</div>

				<form class="w3-container"><br>
					<p><label>Name</label></p>
					<input class="w3-input w3-margin-top" type="text" id="cname">


					<p><label>Email</label></p>
					<input class="w3-input w3-margin-top" type="email" id="cname">

					<p><b>Message</b></p>

					<textarea id="msg"></textarea>



				</form><br>

				<center><p><button class="w3-button w3-blue-grey w3-margin-bottom" onclick="login()">Submit</button></p></center>
			</div>
		</div>
	</div>
	<div class="w3-row-padding">&nbsp;</div>

	<!-- End page content -->
</div>


<script>
	CKEDITOR.replace( 'msg',{

		width: "100%",
		height: "200px"

	});
</script>

<?php
require('templates/footer.php');
?>
