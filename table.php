<!-- import header and navigations -->
<?php require("templates/header.php") ?>

<script>
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>

<!-- Page content -->
<div class="w3-content w3-margin-bottom" style="max-width:1100px;">

	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>
	<div class="w3-row-padding w3-text-black">

		<div class="se-pre-con"></div>

		<div class="w3-row-padding" style="margin:0 -16px">
			<div class="row">
				
			</div>
			<div class="w3-card-4">
				<div class="w3-container w3-green">
					<h2>Reservation Form</h2>
				</div>

				<form class="w3-container">
					<!-- stk months and date -->
					<?php  $m = date("m");
					$h = date("h");
					$d = date("d");
					$i = date("i");
					$s = date("s");
					?>

					<!-- ########################## -->
					<input type="hidden" name="" value="<?php echo $m; ?>" id="month">
					<input type="hidden" name="" value="<?php  echo $h;?>" id="hour">

					<input type="hidden" name="" value="<?php  echo $d;?>" id="days">

					<input type="hidden" name="" value="<?php  echo $i;?>" id="minutes">

					<input type="hidden" name="" value="<?php  echo $s;?>" id="seconds">
					<!-- ########################## -->
					<p><label>Name</label></p>
					<input class="w3-input w3-margin-top" type="text" id="cname">

					<p>  <label>Phone number</label></p>   
					<input class="w3-input" type="text" id="phone" placeholder="2547XXXXXXXX">


					<p><label>Date and time</label></p>
					<input class="w3-input" id="date_of_reservation" name="last" type="time">

				</form><br>

				<center><p><button class="w3-button w3-round w3-blue-grey w3-margin-bottom" onclick="checkempty()">Submit</button></p></center>
			</div>
			<!-- home content here -->

			<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

					<div class="w3-center w3-green"><br>
						<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						<center><h3>Confirm</h3></center>
					</div>
					<div class="w3-container w3-margin-top w3-center">
						<p class="w3-wide"><b>Are you sure you want to reserve this table?</b></p>
					</div>
					<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-round w3-red">Cancel</button>
						<button id="bn" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-round w3-green w3-right">Ok</button>
					</div>

				</div>
			</div>

			<div id="id02" class="w3-modal">
				<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

					<div class="w3-center w3-green"><br>
						<span onclick="enableBtn(); document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						<center><h3>Confirm</h3></center>
					</div>
					<div class="w3-container w3-margin-top w3-center">
						<p class="w3-wide"><b>In order to reserve the table, 100 shillings will be deducted from your Mpesa?</b></p>
					</div>
					<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						<button onclick="enableBtn(); document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-round w3-red">Cancel</button>
						<button id="bns" onclick="pay(); this.disabled=true;" type="button" class="w3-button w3-round w3-green w3-right">Ok</button>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- End page content -->
</div>
<!-- enable the pay button after left -->

<script>
function enableBtn() {
  document.getElementById("bns").disabled = false;
}
</script>

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


<script src="js/js-snackbar.js?v=1.1.0"></script>

<script src="js/paytest.js"></script>


<script src="js/loader.js"></script>

<script src="js/empty_validation.js"></script>


<!-- import footer and links -->
<?php require("templates/footer.php") ?>


