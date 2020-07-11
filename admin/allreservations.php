<?php
require('../templates/adminheader.php');
?>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
	<button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

	<a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red" id="llogo"><b><i class="fa fa-map-marker w3-margin-right" style="font-size: 40px"></i>Hoteli zetu</b></a>

	<div class="w3-container">

		<div class="w3-row">
			<div class="w3-twothird">
				<div class="tooltip">Hover over me
					<span class="tooltiptext">Tooltip text</span>
				</div>
				

				<div class="w3-bar w3-light-grey" style="float: center">
					<input type="text" class="w3-bar-item w3-input w3-margin-left w3-margin-top w3-margin-right w3-leftbar w3-border ss" placeholder="Search.." onkeyup="Search()" id="myInput" autocomplete="off" style="margin-bottom: 5px">

					<p><button class="w3-button w3-brown w3-bar-item" onclick="createpdf()">Print PDF</button></p>

				</div>


				<table class="w3-table w3-striped w3-border" id="myTable">
					<thead>
						<tr>
							<th>Hotel</th>
							<th>Branch</th>
							<th>Customer name</th>
							<th>Reserved on</th>
							<th>Table id</th>

						</tr>
					</thead>
					<div id="content">
					<tbody id="reservations">
						<p>HEHEHEH</p>

					</tbody>
				</div>
				</table>
				<p id="info" style="display: none;"></p>
			</div>
			<div class="w3-third">
				<div class="container w3-margin-top">
					<embed src="../files/ML_inR.pdf" type="application/pdf" width="100%" height="800px" />
				</div>
			</div>

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
  	td = tr[i].getElementsByTagName("td")[3];

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

<script src="../js/allreservations.js"></script>

<script src="../js/createpdf.js"></script>


<?php
require('../templates/footer.php');
?>

</body>
</html>
