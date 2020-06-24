const add_offers = () => 
{


	var raw = {
		offer: "Buy one Beef, Bacon or grilled chicken burger & Get one free",
		price: "880",
		hotel_id: "1"

	};

		var requestOptions = {
			method: 'POST',
			body: raw,
			redirect: 'follow'
		};

		fetch("https://hotelizetu.herokuapp.com/api/offer", requestOptions)
		.then(response => response.json())
		.then(result => console.log(result))
		.catch(error => console.log('error', error));

}


