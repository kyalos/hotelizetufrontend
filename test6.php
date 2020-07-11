<!DOCTYPE html>
<html>
<head>
	<title>Read Data from HTML Table uisng JavaScript</title>
	<style>
		table, th, td 
		{
			border: solid 1px #DDD;
			border-collapse: collapse;
			padding: 2px 3px;
			text-align: center;
		}
		th {
			font-weight:bold;
		}
	</style>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
</head>
<body>

	<div id="content">
		<p>HEHEHEHEH</p>
	</div>

	<div id="elementH"></div>

</body>
<script>

// 	var doc = new jsPDF();
// 	var elementHTML = $('#content').html();
// 	var specialElementHandlers = {
// 		'#elementH': function (element, renderer) {
// 			return true;
// 		}
// 	};
// 	doc.fromHTML(elementHTML, 15, 15, {
// 		'width': 170,
// 		'elementHandlers': specialElementHandlers
// 	});

// // Save the PDF
// doc.save('sample-document.pdf');

$([
  {"name":"Lenovo Thinkpad 41A4298","website":"google222"},
  {"name":"Lenovo Thinkpad 41A2222","website":"google"}
  ])
    .filter(function (i,n){
        return n.website==='google';
    });
    
</script>
</html>