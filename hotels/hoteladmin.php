<?php
require('../templates/hotelsheader.php');
?>

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;margin-top: 10px">

	<div class="w3-row w3-text-white w3-large w3-margin-top">
		<div class="w3-row-padding w3-margin-bottom">
			<div class="w3-quarter w3-margin-bottom">
				<div class="w3-container w3-red w3-padding-16" onclick="document.getElementById('id01').style.display='block'">
					<div class="w3-left"><i class="fa fa-comment w3-xxlarge"></i></div>
					<div class="w3-right">
						<h4>52</h4>
					</div>
					<div class="w3-clear"></div>
					<h4>Messages</h4>
				</div>
			</div>
			<div class="w3-quarter w3-margin-bottom">
				<div class="w3-container w3-blue w3-padding-16" onclick="document.getElementById('id02').style.display='block'">
					<div class="w3-center"><i class="fa fa-users w3-xxxlarge"></i></div>
					
					<div class="w3-clear"></div>
					<center><h4>STAFF</h4></center>
				</div>
			</div>
			<div class="w3-quarter w3-margin-bottom">
				<div class="w3-container w3-purple w3-padding-16" onclick="document.getElementById('id03').style.display='block'">
					<div class="w3-center"><i class="fa fa-gift w3-xxxlarge"></i></div>
					
					<div class="w3-clear"></div>
					<center><h4>OFFERS</h4></center>
				</div>
			</div>
			<div class="w3-quarter w3-margin-bottom">
				<div class="w3-container w3-brown w3-text-white w3-padding-16" onclick="document.getElementById('id04').style.display='block'">
					<div class="w3-center"><i class="fa fa-bed w3-xxxlarge"></i></div>
					
					<div class="w3-clear"></div>
					<center><h4>ABOUTUS</h4></center>
				</div>
			</div>
		</div>
		<!-- ################################################################################## -->
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4">
				<header class="w3-container w3-red"> 
					<span onclick="document.getElementById('id01').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2>Hchat</h2>
				</header>
				<div class="w3-container">
					<ul class="w3-ul w3-card-4">
						<li class="w3-bar" onclick="document.getElementById('id05').style.display='block';document.getElementById('id01').style.display='none'; fetchmessages()">
							
							<img src="../images/img_avatar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
							<div class="w3-bar-item">
								<span class="w3-large w3-text-black">Mike</span><br>
								<span class=" w3-text-black">Web Designer</span>
							</div>
						</li>

						<li class="w3-bar" onclick="document.getElementById('id05').style.display='block';document.getElementById('id01').style.display='none'">
							
							<img src="../images/img_avatar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
							<div class="w3-bar-item">
								<span class="w3-large w3-text-black">Jill</span><br>
								<span class=" w3-text-black">Support</span>
							</div>
						</li>

						<li class="w3-bar" onclick="document.getElementById('id05').style.display='block';document.getElementById('id01').style.display='none'">
							
							<img src="../images/img_avatar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
							<div class="w3-bar-item">
								<span class="w3-large w3-text-black">Jane</span><br>
								<span class=" w3-text-black">Accountant</span>
							</div>
						</li>
					</ul>



				</div>
				<footer class="w3-container w3-red">
					<p class="w3-right" onclick="document.getElementById('id01').style.display='none'">close</p>
				</footer>
			</div>
		</div>

		<div id="id05" class="w3-modal">
			<div class="w3-modal-content w3-card-4">
				<header class="w3-container w3-red">
					<span onclick="document.getElementById('id05').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2>Hchat</h2>
				</header>
				<div class="containermsg">
					<img src="../images/img_avatar.png" alt="Avatar" style="width:100%;">
					<p style="color: black">Hello. How are you today?</p>
					<span class="time-right">11:00</span>
				</div>

				<div class="containermsg darker">
					<img src="../images/img_avatar.png" alt="Avatar" class="right" style="width:100%;">
					<p style="color: black">Hey! I'm fine. Thanks for asking!</p>
					<span class="time-left">11:01</span>
				</div>
				<div class="w3-bar w3-mobile w3-margin-top w3-margin-left w3-margin-bottom">
					<center><input type="text" class="w3-bar-item w3-round w3-border w3-input" placeholder="Type..." style="width: 70%">
					<a href="#" class="w3-bar-item w3-button w3-green" style="margin-left: 3px"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></center>
				</div>

				<footer class="w3-container w3-red">
					<p class="w3-right" onclick="document.getElementById('id05').style.display='none'">close</p>
				</footer>
			</div>
		</div>

		<div id="id02" class="w3-modal">
			<div class="w3-modal-content w3-card-4">
				<header class="w3-container w3-blue"> 
					<span onclick="document.getElementById('id02').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2>Staff</h2>
				</header>
				<div class="w3-container">
					<form class="w3-container w3-margin-bottom w3-margin-top">

						<label style="color: black">Name</label>
						<input class="w3-input" type="text" id="name" autocomplete="off">

						<label style="color: black">Email</label>
						<input class="w3-input" type="email" id="email" autocomplete="off">

						<label style="color: black">Phone number</label>
						<input class="w3-input" type="number" id="phone" autocomplete="off">

						<label style="color: black">Password</label>
						<input class="w3-input" type="password" id="pass" autocomplete="off">


						<label style="color: black">Confirm Password</label>
						<input class="w3-input" type="password" id="cpass" autocomplete="off">

					</form>

					<center><p><button class="w3-button w3-dark-grey w3-round w3-margin-top" onclick="check_empty_register()">Submit</button></p></center>
				</div>
				<footer class="w3-container w3-blue">
					<p class="w3-right" onclick="document.getElementById('id02').style.display='none'">close</p>
				</footer>
			</div>
		</div>

		<div id="id03" class="w3-modal">
			<div class="w3-modal-content w3-card-4">
				<header class="w3-container w3-purple"> 
					<span onclick="document.getElementById('id03').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2>Hotel offers</h2>
				</header>


				<div class="w3-container">



					<form class="w3-container w3-margin-bottom w3-margin-top">


						<label style="color: black">Offer</label>
						<textarea id="offers"></textarea>

						<label style="color: black">Price</label>
						<input class="w3-input" type="number" id="price" placeholder="Price" autocomplete="off">
					</form>

					<div id="container" class="box">
					</div><br>

					<center><p><button class="w3-button w3-dark-grey w3-round w3-margin-top" onclick="check_empty_offers()">Submit</button></p></center>

					<div class="w3-bar w3-light-grey" style="float: center">
						<input type="text" class="w3-bar-item w3-input w3-margin-left w3-leftbar w3-border ss" placeholder="Search.." onkeyup="Search()" id="myInput" autocomplete="off">

					</div>
					<br>


					<table class="w3-table w3-striped w3-border w3-hoverable w3-text-black" id="myTable">
						<tr class="w3-hover-black w3-border w3-red">
							<th>Offer</th>
							<th>Price</th>
							<th style="background-color: #000000">Delete</th>
						</tr>
						<tbody id="ouroffers">

						</tbody>
					</table>
				</div>
				<footer class="w3-container w3-purple">
					<p class="w3-right" onclick="document.getElementById('id03').style.display='none'">close</p>
				</footer>
			</div>
		</div>

		<div id="id04" class="w3-modal">
			<div class="w3-modal-content w3-card-4">
				<header class="w3-container w3-brown"> 
					<span onclick="document.getElementById('id04').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2>About us</h2>
				</header>
				<div class="w3-container">
					<form class="w3-container w3-margin-bottom w3-margin-top">

						<textarea id="about"></textarea>

					</form>
					<center><p><button class="w3-button w3-dark-grey w3-round w3-margin-top" onclick="check_empty_about()">Submit</button></p></center>
				</div>
				<footer class="w3-container w3-brown">
					<p class="w3-right" onclick="document.getElementById('id04').style.display='none'">close</p>
				</footer>
			</div>
		</div>
		<!-- ###################################################################################### -->

		<div class="w3-row-padding w3-text-black w3-margin-bottom">
			<div class="w3-col s12 m12 l4 w3-margin-bottom ex1">
					<h4><u><b>Reservations</b></u></h4>
				<input type="text" class=" w3-input w3-leftbar w3-border ss" placeholder="Search.." onkeyup="Searchres()" id="myInputres" autocomplete="off">

				<table class="w3-table w3-striped w3-border w3-hoverable" id="myTableres">

				<tr class="w3-hover-black w3-border w3-red">
					<th>Name</th>
					<th>actions</th>
				</tr>
				<tbody id="reservations">

				</tbody>
			

				
			</table>
			</div>
		</div>

		<div id="modals" class="w3-text-black">
				
			</div>
	</div>
</header>

</div>

<script>

	function openRightMenu() {
		document.getElementById("rightMenu").style.display = "block";
	}

	function closeRightMenu() {
		document.getElementById("rightMenu").style.display = "none";
	}
</script>

<script>
	CKEDITOR.replace( 'offers',{

		width: "100%",
		height: "200px"

	});
</script>

<script>
	CKEDITOR.replace( 'about',{

		width: "100%",
		height: "300px"

	});
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

<script>
	function Searchres() {
		var input, filter, table, tr, td, i, txtValue;
  // fetch variables
  input = document.getElementById("myInputres");

  filter = input.value.toUpperCase();

  table = document.getElementById("myTableres");

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



<script src="../js/js-snackbar.js?v=1.1.0"></script>


<script src="../js/add_offers.js"></script>


<script src="../js/add_aboutus.js"></script>


<script src="../js/registerstaff.js"></script>


<script src="../js/branch_reservations.js"></script>

<script src="../js/toastnotify.js"></script>


<?php
require('../templates/footer.php');
?>