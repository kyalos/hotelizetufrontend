function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;


}

// call and fetch returns from url
var hotel_id = getUrlVars()["hotel_id"];
var branch_id = getUrlVars()["branch_id"];
var table_id = getUrlVars()["table_id"];

console.log(hotel_id);
console.log(branch_id);
console.log(table_id);

const make_reservation = () => {



	let raw = {
		"name":document.querySelector('#cname').value,
		"phone":document.querySelector('#phone').value,
		"date_of_reservation":document.querySelector('#date_of_reservation').value,
		"table_id":table_id,
		"branch_id":branch_id,
		"hotel_id": hotel_id
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

	fetch("https://hotelizetu.herokuapp.com/api/reserve", requestOptions)
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
					console.log('OK');
				}
			});
		}
		else
		{
			Toastnotify.create({
				text:result.msg,
				type:'dark',
				important:true,
				callbackOk:()=>{
					console.log('OK');
				}
			});
		}

	});


}

