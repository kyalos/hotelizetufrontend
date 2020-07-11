const pay = () => 
{

	// courtsey message
	let cname = document.querySelector('#cname').value;

	SnackBar({
		message: "Hi "+cname+", Please wait...",
		status: "success"
	});


	const mpesa = () => 
	{

		let url = "https://cors-anywhere.herokuapp.com/https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

		  //const string = 'Ll0oT9j55HCcLSgoIG5vmj9F8EoLEHiM'+ ':' +'LZtrAyR0OZi08JyQ';

		  let consumer_key = "n3PsdBnAItkUW5VDRA2oTNAVWyJ5gPG9";
		  let consumer_secret = "92hwJsXeTaMjnSbF";

		  pre_auth = consumer_key+ ":" +consumer_secret.toString("base64");

		  let auth = "Basic " +btoa(pre_auth);

		  console.log(auth);


		  let options = {
		  	headers: {
		  		"Content-Type": "application/json",
		  		"Authorization" : auth
		  	}
		  };

		  fetch(url, options)

		  .then(resp => resp.json())
		  .then(data => 
		  {

		  	// console.log(data.access_token);

		  	var dat = data.access_token;

		  	// #####################################################################

		  	stk(dat);
		  	// ##########################################################################

		  });


		};

		mpesa();


		const registerurl = (da) => {


			url3 = "https://cors-anywhere.herokuapp.com/https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl"
			auth3 = "Bearer " + da;

			let raw2 = {
				"ShortCode": "601449",
				"ResponseType": "Confirmed",
				"ConfirmationURL": "https://hotelizetu.co.ke/confirmationurl.php",
				"ValidationURL": "https://hotelizetu.co.ke/validationurl.php"
			}

			let options3 = {
				method: 'POST',
				body: JSON.stringify(raw2),
				headers: {
					"Content-Type": "application/json",
					"Authorization" : auth3
				},
				redirect: 'follow'
			};

			fetch(url3, options3)

			.then(resp => resp.json())
			.then(data => {

				console.log(data);


			});

		}

		const stk = (da) => 
		{
			let url2 = "https://cors-anywhere.herokuapp.com/https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

			let auth2 = "Bearer " +da;

				// start date
				var d = new Date();
				// full year
				var years = d.getFullYear();
				// month
				var months = document.querySelector('#month').value;
				// date
				var days = document.querySelector('#days').value;
				// hours
				var hours = document.querySelector('#hour').value;
				// minutes
				var minutes = document.querySelector('#minutes').value;
				// seconds
				var seconds = document.querySelector('#seconds').value;


				let pnumber = document.querySelector('#phone').value;


				let date_of_reservation = document.querySelector('#date_of_reservation').value;



				// var timestamp = d.getFullYear()+''+0+''+months+''+d.getDate()+''+d.getHours()+''+0+''+d.getMinutes()+''+d.getSeconds();

				var timestamp = d.getFullYear()+''+months+''+days+''+hours+''+minutes+''+seconds;

				console.log(timestamp);

				let shortcode = "174379";

				let passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";

				let password = btoa(shortcode+''+passkey+''+timestamp);

				let raw = 
				{
					"BusinessShortCode": "174379",
					"Password": password,
					"Timestamp": timestamp,
					"TransactionType": "CustomerPayBillOnline",
					"Amount": 1,
					"PartyA": pnumber,
					"PartyB": "174379",
					"PhoneNumber": pnumber,
					"CallBackURL": "https://hotelizetu.co.ke/callback.php",
					"AccountReference": "123121",
					"TransactionDesc": "123121"
				}

				let options2 = {
					method: 'POST',
					body: JSON.stringify(raw),
					headers: {
						"Content-Type": "application/json",
						"Authorization" : auth2
					},
					redirect: 'follow'
				};

				fetch(url2, options2)

				.then(resp => resp.json())
				.then(data => {

					console.log(data);
					if(data.errorMessage =="Bad Request - Invalid Timestamp")
					{
						SnackBar({
							message: "Hi "+cname+", We are experiencing a glitch, please try later",
							status: "danger"
						});
					}
					else if(data.errorMessage =="error on exit from activity, no matching transition")
					{
						SnackBar({
							message: "Hi "+cname+", We are experiencing a glitch, please try later",
							status: "danger"
						});
					}
					else if(data.errorMessage == "Bad Request - Invalid PhoneNumber")
					{
						SnackBar({
							message: "Hi "+cname+", Ensure your number is 2547XXXXXXXX",
							status: "danger"
						});
					}


				});


			}

			const enterpin = () => {
				SnackBar({
					message: "Hi "+cname+", Enter your mpesa pin to your phone...",
					status: "success"
				});

			}
			
			setTimeout(enterpin, 5000);
			

			setTimeout(enterpin, 7000);

		}