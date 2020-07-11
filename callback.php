<?php
require 'db.php';
$postData = file_get_contents('php://input');
  //perform your processing here, e.g. log to file....

$data = json_decode($postData); 

$rs = $data->Body->stkCallback->ResultCode; 

$sql = "CREATE TABLE IF NOT EXISTS mpesaresponse
   (
   Id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   amount varchar(3),
   transtime varchar(15) NULL,
   phonenumber varchar(15) NULL,
   paid_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";
   if ($conn->query($sql) === TRUE)
    {
    	echo "table created";
    }
    else
    {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }

if($rs == 0)
{
    $file = fopen("log.txt", "a"); //url fopen should be allowed for this to occur

    if(fwrite($file, $postData) === FALSE)
    {
    	fwrite("Error: no data written");
    }

    fwrite("\r\n");
    fclose($file);


    $amount = $data->Body->stkCallback->CallbackMetadata->Item[0]->Value; 


    $timestamp = $data->Body->stkCallback->CallbackMetadata->Item[3]->Value; 


    $phonenumber = $data->Body->stkCallback->CallbackMetadata->Item[4]->Value; 

   // insert to db
    $sql2 = "INSERT INTO mpesaresponse (amount,transtime,phonenumber)
    VALUES ('$amount','$transtime','$phonenumber')";
    if ($conn->query($sql2) === TRUE)
    {

    	echo "New record created successfully.";

    } 
    else
    {

    	echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

}

?>
