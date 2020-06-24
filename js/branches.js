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

	fetch("https://hotelizetu.herokuapp.com/api/branches/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		let div = document.querySelector('#branches');




		result.branches.forEach(element => {

			div.innerHTML+=`
			<tr class="w3-hover-green">
			<td>`+element.name+`</td>
			<td><button class="w3-button w3-block w3-black btn" onclick="window.location.href='reservation.php?id=`+element.branch_id+`'">View</button></td>
			</tr>`
		});
	});

}

// call branches function
branches(number);

const measures = (id) =>{

	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/measure/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		let measures = document.querySelector('#hotelmeasures');
		

		result.measures.forEach(element => {

			measures.innerHTML+=`
			<li>`+element.measure+`</li>
			`
		});

	});

};

measures(number);


const offers = (id) => {
	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/offer/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {


		let offer = document.querySelector('#offer');

		result.offers.forEach(element => {

			offer.innerHTML+=`
			<li>`+element.offer +`    <span class="w3-green">KSH` +element.price+`</span></li>
			<hr>
			`
		});


	});

};

offers(number);


const aboutus = (id) =>{

	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/aboutus/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		let hotel = document.querySelector('#Hotel');
		

		result.about_us.forEach(element => {

			hotel.innerHTML+=`
			<center><h3 class="w3-tag w3-black">Explore our history</h3></center>
			<p>`+element.aboutusinfo+`</p>
			`
		});

	});

};

aboutus(number);
