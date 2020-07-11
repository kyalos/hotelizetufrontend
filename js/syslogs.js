document.querySelectorAll('.elem').forEach(element => {
	element.addEventListener('click', () => {
		var win = window.location.href;
		var t = element.innerHTML;
		console.log(t);

		console.log(win);

		let params = {

			t: t,
			win: win
		};
		console.log(params);
		let options = {
			method: "POST",
			headers: {
				"Content-Type": "application/json"
			},
			body: JSON.stringify(params)
		};
		let url = "";
		fetch(url, options)
		.then(resp => resp.json())
		.then(data => {


		});

	});
});







