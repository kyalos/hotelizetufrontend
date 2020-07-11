const check_time = () => 
{


	let tt = document.querySelector('#tt');

	console.log(tt.value);
	var tty = tt.value;
	var dd = new Date();

	let yy = dd.getFullYear();

	let d = dd.getDate();
	let mo = dd.getMonth();
	let h = dd.getHours();
	let m = dd.getMinutes();
	let s = dd.getSeconds();
	console.log(yy+''+mo+''+d+''+h+''+m+''+s);

	var ret = tty.replace('-','');
	console.log(ret);   
	var ret2 = ret.replace('-','');
	console.log(ret2);  
}