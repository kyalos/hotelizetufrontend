<?php

	$callbackResponseR = file_get_contents("php://input");
	//write file


	$logFile = "callbackResponse.txt";

	$log = fopen($logFile, "a");

	fwrite($log, $callbackResponseR);
	
	fclose($log); 

?>