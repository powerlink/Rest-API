$data = '{
      "page_number": 1,
      "objecttype": 1,
      "page_size":100,
      "query":"(statuscode = 1)",    //optional field
      "fields":"accountid",    //optional field
      "sort_by":"createdon",    //optional field
      "sort_type":"desc" //optional field
        }';
$url='https://api.powerlink.co.il/api/query';
$data_string = json_encode($data);  
$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);                                                                   
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: 0588209E-2715-419F-A913-732D1234',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 
$result = curl_exec($curl);
curl_close($curl);
