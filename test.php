<?php 
  
$json = '{"Body":{"stkCallback":{"MerchantRequestID":"12864-21460726-1","CheckoutRequestID":"ws_CO_300620202021359400","ResultCode":0,"ResultDesc":"The service request is processed successfully.","CallbackMetadata":{"Item":[{"Name":"Amount","Value":1.00},{"Name":"MpesaReceiptNumber","Value":"OFU5DL9GRT"},{"Name":"Balance"},{"Name":"TransactionDate","Value":20200630202148},{"Name":"PhoneNumber","Value":254712763780}]}}}}'; 
  
 $data = json_decode($json); 
  
// echo $data->Body->stkCallback->ResultCode;

echo $data->Body->stkCallback->CallbackMetadata->Item[0]->Value; 
echo "<br>";


echo $data->Body->stkCallback->CallbackMetadata->Item[3]->Value; 
echo "<br>";

echo $data->Body->stkCallback->CallbackMetadata->Item[4]->Value; 

?> 