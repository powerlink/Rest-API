$objectid = '332DB2BF-3694-4F80-B82F-99F812345';		
$url =https://secure.powerlink.co.il/api/record/account/'.$objectid;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: 0588209E-2715-419F-A913-732DABB12345',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
