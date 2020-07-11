<?php
	header('Content-Type: application/json');

	$response = '{
		"ResultCode":0,
		"ResultDesc":Confirmation Received Successfully"
	}';

	////STEP TWO
	$mpesaResponse = file_get_contents('php://input');

	//log data

	$logfile = "mpesaResponse.txt";

	$jsonMpesaResponse = json_decode($mpesaResponse, true);

	///write file

	$log = fopen($logfile, "a");

	fwrite($log, $mpesaResponse);

	fclose($log);

	
	echo $response;
?>
