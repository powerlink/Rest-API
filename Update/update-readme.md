# Update

## JSON: 
<a href="https://github.com/powerlink/Rest-API/blob/master/Update/update-json.json">=> Download</a>

```javascript
{
 "accountname" : "משה",
 "telephone1" : "036339060",
 "idnumber" : "1234",
 "billingcity" : "תל אביב"
}
```

## PHP:
<a href="https://github.com/powerlink/Rest-API/blob/master/Update/update-php.php">=> Download</a>

```php
$data = '{
       "accountname" : "מושון"
        }';
$objectid = 'xxxxx-xxxx-xxxxx-xxxxx';		
$url='https://secure.powerlink.co.il/api/record/account/'.$objectid
$data_string = json_encode($data);  
$curl = curl_init();
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));                                                                   
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: xxxxx-xxxx-xxxxx-xxxxx',                                                                                
    'Content-Length: ' . strlen($data_string),
	'utc_time : "1"'
	)                                                                       
); 
$result = curl_exec($curl);
curl_close($curl);
```

## python:
<a href="https://github.com/powerlink/Rest-API/blob/master/Update/update-python.py">=> Download</a>

```python
import requests
import json

object_id = '12345cf-cd16-48bd-b8e1'
url = 'https://secure.powerlink.co.il/api/record/account/'
token_id = 'xxxxxxx-xxxxx-xxxxx-xxxxx'
headers = {'Content-type': 'application/json', 'tokenId': token_id}
response = requests.get(url + str(object_id), data=str(data), headers=headers)
return json.loads(response.content)['data']
```

## ASP.net:
<a href="https://github.com/powerlink/Rest-API/blob/master/Update/update-c.cs">=> Download</a>

```c#
using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "xxxxxxx-xxxxx-xxxxx-xxxxx"; 
                string objectid = "xxxxxxx-xxxxx-xxxxx-xxxxx";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string json = new JavaScriptSerializer().Serialize(new
                {
                    accountname = "מושון"
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "PUT", json);
            }
```
