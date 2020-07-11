const checkempty = () => 
{
	let pnumber = document.querySelector('#phone');

	let cname = document.querySelector('#cname');

	let date_of_reservation = document.querySelector('#date_of_reservation');

	// check if phone number field is empty

	if(cname.value != ""|| cname.value == "null" || cname.value == "NULL" || typeof cname.value == "undefined")
	{
		// check if name field is empty
		if(pnumber.value != ""|| pnumber.value == "null" || pnumber.value == "NULL" || typeof pnumber.value == "undefined")
		{
			// check if name field is empty
			if(date_of_reservation.value != ""|| date_of_reservation.value == "null" || date_of_reservation.value == "NULL" || typeof date_of_reservation.value == "undefined")
			{
				document.getElementById('id01').style.display='block'
			}
			else
			{
				SnackBar({
					message: "Please enter your time",
					status: "warning"
				});
			}
		}
		else
		{
			SnackBar({
				message: "Please enter your phone number",
				status: "warning"
			});
		}
	}
	else
	{
		SnackBar({
			message: "Please enter your name",
			status: "warning"
		});
	}
}