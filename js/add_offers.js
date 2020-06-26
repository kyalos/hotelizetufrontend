function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;


}

// call and fetch returns from url
var number = getUrlVars()["id"];


const add_offers = () => {



	let raw = {
		"offer":CKEDITOR.instances.offers.getData(),
		"price":document.querySelector('#price').value,
		"hotel_id": 1
	};

	console.log(raw);



	var requestOptions = {
		method: 'POST',
		body: JSON.stringify(raw),
		headers: {
			"Content-Type": "application/json"
		},
		redirect: 'follow'
	}
	;

	fetch("https://hotelizetu.herokuapp.com/api/offer", requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		if(result.status == 200)
		{
			Toastnotify.create({
				text:result.success,
				type:'dark',
				important:true,
				callbackOk:()=>{
					console.log('Precionado OK');
				},
				callbackCancel:()=>{
					console.log('Precionado Cancelado');
				}
			});
		}

	});


}


const offers = (id) => {
	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/offer/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {


		let ouroffers = document.querySelector('#ouroffers');

		result.offers.forEach(element => {

			ouroffers.innerHTML+=`
			<tr>
			<td><input type="text" value="`+element.offer +`"</td>
			<td><input type="text" value="`+element.price+`"</td>
			<td><button class="w3-button w3-red">Delete</button></td>
			</tr>
			`
		});


	});

};

offers(number);

