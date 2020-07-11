var requestOptions = {
	method: 'GET',
	redirect: 'follow'
};

fetch("https://hotelizetu.herokuapp.com/api/allhotels", requestOptions)
.then(response => response.json())
.catch(error => console.log('error', error))
.then(result =>{

	let div = document.querySelector('#hotels');
	
	console.log(result);
	

	result.all_hotels.forEach(element => {

		div.innerHTML+=`
        <div class="w3-col rgrid w3-margin-bottom">
          <div class="w3-display-container w3-border">
            <img src="images/java.jpg" alt="New York" style="width:100%" class="w3-grayscale-min w3-hover-sepia logos" onclick="window.location.href= 'branch.php?id=`+element.hotel_id+`'; storehotelid(`+element.hotel_id+`) ">
            <span class="w3-display-bottomleft w3-padding w3-red">`+element.name+`</span>
          </div>
        </div>
		`
	});


});
