  const mpesa = () => {

  	let url = "https://cors-anywhere.herokuapp.com/https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

  //const string = 'Ll0oT9j55HCcLSgoIG5vmj9F8EoLEHiM'+ ':' +'LZtrAyR0OZi08JyQ';

  let consumer_key = "Oa2lTfjYBNcsHEGPXxJ43ND3OseHwEAH";
  let consumer_secret = "4dqwsgA00Rx2O3wx";

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
  .then(data => {

  	// console.log(data.access_token);

  	var dat = data.access_token;

  	// #####################################################################

  	stk(dat);
  	// ##########################################################################

  });


};

mpesa();

const stk = (da) => {
let url2 = "https://cors-anywhere.herokuapp.com/https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

let auth2 = "Bearer " +da;

// start date
var d = new Date();
// full year
var years = d.getFullYear();
// month
var months = d.getMonth()+1;
// date
var days = d.getDate();
// hours
var hour = d.getHours();
// minutes
var minutes = d.getMinutes();
// seconds
var seconds = d.getSeconds();

let pnumber = "254712763780";

var timestamp = d.getFullYear()+''+0+''+months+''+d.getDate()+''+d.getHours()+''+0+''+d.getMinutes()+''+d.getSeconds();


console.log(timestamp);

let shortcode = "174379";

let passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";

let password = btoa(shortcode+''+passkey+''+timestamp);

let raw = {
	"BusinessShortCode": "174379",
	"Password": password,
	"Timestamp": timestamp,
	"TransactionType": "CustomerPayBillOnline",
	"Amount": 1,
	"PartyA": pnumber,
	"PartyB": "174379",
	"PhoneNumber": pnumber,
	"CallBackURL": "http://6ef70f7d89aa.ngrok.io/hotelizetufrontend/callback.php",
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


});
}