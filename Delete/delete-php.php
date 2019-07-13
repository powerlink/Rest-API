$objectid = 'xxxxxx-xxxxx-xxxxx-xxxxx';		
$url =https://secure.powerlink.co.il/api/record/account/'.$objectid;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: xxxxxx-xxxxx-xxxxx-xxxxx',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
