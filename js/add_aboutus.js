function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;


}

// call and fetch returns from url
var number = getUrlVars()["id"];

function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;


}

// call and fetch returns from url
var number = getUrlVars()["id"];


const check_empty_about = () => {

	let about = CKEDITOR.instances.about.getData();

	console.log(offers);


	if(about != ""|| about == "null" || about == "NULL" || typeof about == "undefined" )
	{
		add_aboutus();	
	}
	else
	{
		Toastnotify.create({
			text:"Enter your about us content",
			type:'dark',
			important:true,
			callbackOk:()=>{
				console.log('Precionado OK');
			}
		});
	}

}

const add_aboutus = () => {

	let raw = {
		"aboutusinfo":CKEDITOR.instances.about.getData(),
		"hotel_id": 1
	};




	var requestOptions = {
		method: 'POST',
		body: JSON.stringify(raw),
		headers: {
			"Content-Type": "application/json"
		},
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/addaboutus", requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		console.log(result);
		if(result.status == 200)
		{
			Toastnotify.create({
				text:result.success,
				type:'dark',
				important:true,
				callbackOk:()=>{
					console.log('Precionado OK');
				}
			});
		}
		else
		{
			Toastnotify.create({
				text:result.success,
				type:'dark',
				important:true,
				callbackOk:()=>{
					console.log('Precionado OK');
				}
			});
		}

	});
}

const aboutus = (id) =>{

	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/aboutus/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		let about = document.querySelector('#about');
		

		result.about_us.forEach(element => {

			about.innerHTML+=`
			<center><h3 class="w3-tag w3-black">Explore our history</h3></center>
			<p>`+element.aboutusinfo+`</p>
			`
		});

	});

};

aboutus(number);
