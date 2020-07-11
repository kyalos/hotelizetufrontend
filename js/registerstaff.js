const check_empty_register = ()=> {
	let name = document.querySelector('#name');
	let email = document.querySelector('#email');
	let phone = document.querySelector('#phone');
	let password = document.querySelector('#pass');
	let confirm = document.querySelector('#cpass');

	if(name.value != ""|| name.value == "null" || name.value == "NULL" || typeof name.value == "undefined" )
	{
		if(email.value != ""|| email.value == "null" || email.value == "NULL" || typeof email.value == "undefined" )
		{
			if(phone.value != ""|| phone.value == "null" || phone.value == "NULL" || typeof phone.value == "undefined" )
			{
				if(password.value != ""|| password.value == "null" || password.value == "NULL" || typeof password.value == "undefined" )
				{

					if(confirm.value != ""|| confirm.value == "null" || confirm.value == "NULL" || typeof confirm.value == "undefined")
					{
						if(pass.value == cpass.value)
						{
							register();
						}
						else
						{
							Toastnotify.create({
								text:"The two passwords do not match",
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
							text:"Enter confirm password",
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
						text:"Enter the password",
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
					text:"Enter staff phone number",
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
				text:"Enter staff email",
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
				text:"Enter staff name",
				type:'dark',
				important:true,
				callbackOk:()=>{
					console.log('Precionado OK');
				}
			});
		}
}

	const register = ()=> {

		var myHeaders = new Headers();
		myHeaders.append("Content-Type", "application/json");

		var raw = JSON.stringify(
		{
			"name":document.querySelector('#name').value,
			"email":document.querySelector('#email').value,
			"phone":document.querySelector('#phone').value,
			"password":document.querySelector('#pass').value,
			"confirm":document.querySelector('#cpass').value,
		});

		var requestOptions = {
			method: 'POST',
			headers: myHeaders,
			body: raw,
			redirect: 'follow'
		};

		fetch("https://hotelizetu.herokuapp.com/api/signup/staff", requestOptions)
		.then(response => response.json())
		.catch(error => console.log('error', error))

		.then(result => {
			console.log(result);
		});

	}
