
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

	fetch("https://hotelizetu.herokuapp.com/api/addnightout", requestOptions)
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

