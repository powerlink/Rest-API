<?php
$data = array(
      "accountname" => "משה",
      "telephone1" => "036339060",
      "idnumber" => "1234",
      "billingcity" => "תל אביב"
);
$url='https://api.powerlink.co.il/api/record/account';
$data_string = json_encode($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'tokenid: xxxxxxx-xxxxx-xxxxx-xxxxx
'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($curl);
curl_close($curl);

?>
