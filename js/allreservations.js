var requestOptions = {
	method: 'GET',
	redirect: 'follow'
};

fetch("https://hotelizetu.herokuapp.com/api/allreservations", requestOptions)
.then(response => response.json())
.catch(error => console.log('error', error))

.then(result => {
	let div = document.querySelector('#reservations');

	console.log(result);


	result.all_javahouses.forEach(element => {

		div.innerHTML+=`
		<tr>
		<td>`+element.hotel_id+`</td>
		<td>`+element.branch_id+`</td>
		<td>`+element.name+`</td>
		<td>`+element.date_of_reservation+`</td>
		<td>`+element.table_id+`</td>
		</tr>`
	});
});