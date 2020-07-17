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
					<th>Table</th>
					<th>Actions</th>
				</tr>
				<tbody id="reservations">

				</tbody>


				
			</table>


			<!-- ####################################################################################### -->

			<div id="modals">
				
			</div>

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
		function Search() 
		{
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


  <!-- track activities -->
  <script src="../js/syslogs.js"></script>

  <?php
  require('../templates/footer.php');
  ?>
