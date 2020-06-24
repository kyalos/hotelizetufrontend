<?php
require('../templates/hotelsheader.php');
?>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

	<!-- Good offers -->
	<div class="w3-container w3-margin-top">
	</div>
	<div class="w3-row-padding w3-text-black w3-large" style="margin:0 -16px">
		<div class="w3-mobile">
			<img src="../images/java.jpg" class="w3-round brand w3-margin-left">
		</div>


		<div class="w3-w3-mobile">
			<br>
			<div class="w3-bar w3-light-grey" style="float: center">
				<input type="text" class="w3-bar-item w3-input w3-margin-left w3-leftbar w3-border ss" placeholder="Search.." onkeyup="Search()" id="myInput" autocomplete="off">

			</div>
			<br>

			<table class="w3-table w3-striped w3-border w3-hoverable" id="myTable">
				<tr class="w3-hover-black w3-border w3-red">
					<th>Phone number</th>
					<th>actions</th>
				</tr>
				<tr class="w3-hover-green w3-border">
					<td>Maggie</td>

					<td><button class="w3-button w3-block w3-black btn">View</button></td>
				</tr>
				<tr class="w3-hover-red w3-border">
					<td>Jane</td>
					<td><button class="w3-button w3-block w3-black btn" onclick="document.getElementById('rsvp').style.display='block'">View</button></td>
				</tr>
			</table>


			<!-- ####################################################################################### -->
			<!-- reservation modal -->
			<div id="rsvp" class="w3-modal w3-display-middle">
				<div class="w3-modal-content w3-animate-right  w3-card-4">
					<header class="w3-container w3-green"> 
						<span onclick="document.getElementById('rsvp').style.display='none'" 
						class="w3-button w3-display-topright">&times;</span>
						<h2>RESERVATIONS</h2>
					</header>
					<div class="w3-container w3-margin-top">
						<div class="w3-row">
							<div class="w3-half">
								<p>Table details</p>
							</div>
							<div class="w3-half">
								<p>Time</p>
							</div>
						</div>

						<center>
							<button class="w3-button w3-block w3-black" style="width:30%">Submit</button>
						</center>


						<div class="w3-container">
							<p class=" w3-right" 
							onclick="document.getElementById('rsvp').style.display='none'" style="cursor: pointer; color: black">Close</p>
						</div>
					</div>
				</div>
				<!-- ############################################################################################### -->


				<!-- ################################################################################################ -->

				<!-- ####################################################################################################### -->
			</div>
		</div>
		
		<br>
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

	function openRightMenu() {
		document.getElementById("rightMenu").style.display = "block";
	}

	function closeRightMenu() {
		document.getElementById("rightMenu").style.display = "none";
	}
</script>

<!-- search bar logic -->
<script>
	function Search() {
		var input, filter, table, tr, td, i, txtValue;
  // fetch variables
  input = document.getElementById("myInput");

  filter = input.value.toUpperCase();

  table = document.getElementById("myTable");

  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
  	// use the second column of td
  	td = tr[i].getElementsByTagName("td")[0];

  	if (td) {
  		txtValue = td.textContent || td.innerText;

  		if (txtValue.toUpperCase().indexOf(filter) > -1) {
  			tr[i].style.display = "";
  		} else {
  			tr[i].style.display = "none";
  		}
  	}       
  }

}
</script>




<?php
require('../templates/footer.php');
?>
