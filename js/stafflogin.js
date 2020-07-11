const check_empty_login = () => {


	let phone = document.querySelector('#phone');
	let password = document.querySelector('#password');

	if(phone.value != ""|| phone.value == "null" || phone.value == "NULL" || typeof phone.value == "undefined" )
	{
		if(password.value != ""|| password.value == "null" || password.value == "NULL" || typeof password.value == "undefined")
		{
			login();
		}
		else
		{
			Toastnotify.create({
				text:"Enter your password",
				type:'dark',
				important:true,
				callbackOk:()=>{
					console.log('Precionado OK');
				}
			});
		}
	}
	else
	{
		Toastnotify.create({
			text:"Enter your phone number",
			type:'dark',
			important:true,
			callbackOk:()=>{
				console.log('Precionado OK');
			}
		});
	}

}


const login = () => {

	var myHeaders = new Headers();
	myHeaders.append("Content-Type", "application/json");

	var raw = JSON.stringify({
		"phone":document.querySelector('#phone').value,
		"password":document.querySelector('#password').value,
	});

	var requestOptions = {
		method: 'POST',
		headers: myHeaders,
		body: raw,
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/login/staff", requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {
		console.log(result);

	});
}