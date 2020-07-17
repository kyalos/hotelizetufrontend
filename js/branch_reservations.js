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
			<td>`+element.phone+`</td>
			<td>`+element.table_id+`</td>
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
			<p class="w3-margin-top">RESERVATIONS&nbsp;&nbsp;<span><button class="w3-button w3-round w3-black" onclick="document.getElementById('menu').style.display='block'">Menu</button></span></p>
			
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
			<div id="memb">
			</div>
			<p class="w3-wide"><b><u>Table members</u></b></p>
			<div id="time">
			<ol class="w3-ol" style="width:100%">
			<li>`+element.name+` `+element.phone+`</li>
			</ol>
			</div>


			<p class="w3-wide"><b><u>Add members</u></b></p>
			
			<div class="w3-row-padding">
			<div class="w3-half">
			<label>Name</label>
			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Name">
			</div>
			<div class="w3-half">
			<label>Phone number</label>
			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="phonenumber">
			</div>

			</div>

			</div>

			<center>
			<p><button class="w3-button w3-round w3-green">Submit</button></p>
			</center>
 

			<div class="w3-container">
			<p class=" w3-right" 
			onclick="location.reload(); document.getElementById('rsvp`+element.reservation_id+`').style.display='none'" style="cursor: pointer; color: black">Close</p>
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
