$data = array(
      "accountname" => "מושון"
);
$objectid = '332DB2BF-3694-4F80-B82F-99F87B5AAB56';		
$url='https://api.powerlink.co.il/api/record/account/'.$objectid
$data_string = json_encode($data); 

$curl = curl_init();
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: xxxxxx-xxxxx-xxxxx-xxxxx',                                                                                
    'Content-Length: ' . strlen($data_string),
	'utc_time : "1"'
	)                                                                       
); 
$result = curl_exec($curl);
curl_close($curl);
