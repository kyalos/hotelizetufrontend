function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;


}

// call and fetch returns from url
var number = getUrlVars()["id"];


const branches = (id) =>{

	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/reservations/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))

	.then(result => {
		let div = document.querySelector('#reservations');

		let modals = document.querySelector('#modals');

		console.log(result);


		result.offers.forEach(element => {

			div.innerHTML+=`
			
			<tr class="w3-hover-red w3-border">
			<td>`+element.name+`</td>
			<td><button class="w3-button w3-block w3-black btn" onclick="document.getElementById('rsvp`+element.reservation_id+`').style.display='block'">View</button></td>
			</tr>`
		});

		result.offers.forEach(element => {

			modals.innerHTML+=`
			<!-- reservation modal -->
			<div id="rsvp`+element.reservation_id+`" class="w3-modal w3-display-middle">
			<div class="w3-modal-content w3-animate-right  w3-card-4">
			<header class="w3-container w3-green"> 
			<span onclick="document.getElementById('rsvp`+element.reservation_id+`').style.display='none'" 
			class="w3-button w3-display-topright">&times;</span>
			<h2>RESERVATIONS</h2>
			</header>
			<div class="w3-container w3-margin-top">
			<div class="w3-row">
			<div class="w3-half">
			<p><u><b>Table details</b></u></p>
			<p>`+element.table_id+`</p>
			</div>
			<div class="w3-half">
			<p><u><b>Time</b></u></p>
			<p>`+element.date_of_reservation+`</p>
			</div>
			</div>

			<center>
			<button class="w3-button w3-block w3-black" style="width:30%">Submit</button>
			</center>


			<div class="w3-container">
			<p class=" w3-right" 
			onclick="document.getElementById('rsvp`+element.reservation_id+`').style.display='none'" style="cursor: pointer; color: black">Close</p>
			</div>
			</div>
			</div>
			<!-- ############################################################################################### -->


			<!-- ################################################################################################ -->

			<!-- ####################################################################################################### -->
			</div>`
		});
	});

}
branches(number);
