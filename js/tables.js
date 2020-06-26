function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;


}

// call and fetch returns from url
var number = getUrlVars()["id"];



const tableforone = (id) => {



	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/layout/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		console.log(result);

		let div = document.querySelector('#tablesforone');




		result.table_layout.forEach(element => {

			div.innerHTML+=`
			<div class="w3-row">
			<div class="w3-third">
			<center><p style="color: black" class="w3-margin-left w3-margin-top">`+element.table_details+`</p></center>


			</div>
			<div class="w3-third w3-margin-bottom">
			<center><img src="images/one.png" class=" w3-margin-top"></center>
			</div>
			<div class="w3-third">
			<center><p><button class="w3-button w3-black w3-hover-red w3-margin-top" onclick="window.location.href= 'table.php?table_id=`+element.table_id+`&branch_id=`+element.branch_id+`&hotel_id=`+element.hotel_id+`'; ">Reserve</button></p></center>
			</div>

			</div>

			<hr>
			
			`
		});

		

	});

}

// call tablesforone function
tableforone(number);





const tablefortwo = (id) => {



	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/layout2/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		console.log(result);

		let div = document.querySelector('#tablesfortwo');




		result.table_layout.forEach(element => {

			div.innerHTML+=`
			<div class="w3-row">
			<div class="w3-third">
			<center><p style="color: black" class=" w3-margin-top w3-margin-left">`+element.table_details+`</p></center>


			</div>
			<div class="w3-third w3-margin-bottom">
			<center><img src="images/two.png" class=" w3-margin-top"></center>
			</div>
			<div class="w3-third">
			<center><p><button class="w3-button w3-black w3-hover-red w3-margin-top" onclick="window.location.href= 'table.php?table_id=`+element.table_id+`&branch_id=`+element.branch_id+`&hotel_id=`+element.hotel_id+`'; ">Reserve</button></p></center>
			</div>

			</div>
			<hr>
			
			`
		});

		

	});

}

// call tablesforone function
tablefortwo(number);




const tableforthree = (id) => {



	var requestOptions = {
		method: 'GET',
		redirect: 'follow'
	};

	fetch("https://hotelizetu.herokuapp.com/api/layout3/"+id, requestOptions)
	.then(response => response.json())
	.catch(error => console.log('error', error))
	.then(result => {

		console.log(result);

		let div = document.querySelector('#tablesforthree');




		result.table_layout.forEach(element => {

			div.innerHTML+=`
			<div class="w3-row">
			<div class="w3-third">
			<center><p style="color: black" class="w3-margin-left w3-margin-top">`+element.table_details+`</p></center>


			</div>
			<div class="w3-third w3-margin-bottom">
			<center><img src="images/three.png" class=" w3-margin-top"></center>
			</div>
			<div class="w3-third">
			<center><p><button class="w3-button w3-black w3-hover-red w3-margin-top" onclick="window.location.href= 'table.php?table_id=`+element.table_id+`&branch_id=`+element.branch_id+`&hotel_id=`+element.hotel_id+`'; ">Reserve</button></p></center>
			</div>

			</div>

			<hr>
			
			`
		});

		

	});

}

// call tablesforone function
tableforthree(number);