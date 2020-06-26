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
					<th>Name</th>
					<th>actions</th>
				</tr>
				<tbody id="reservations">

				</tbody>
			</table>


			<!-- ####################################################################################### -->

			<div id="modals">
				
			</div>

		</div>
		
		<br>
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

<script src="../js/branch_reservations.js"></script>



<?php
require('../templates/footer.php');
?>
