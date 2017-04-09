# Update

## JSON: 
<a href="">=> Download</a>

```javascript
{
 "accountname" : "משה",
 "telephone1" : "036339060",
 "idnumber" : "1234",
 "billingcity" : "תל אביב"
}
```

## PHP:

```php
$data = '{
       "accountname" : "מושון"
        }';
$objectid = '332DB2BF-3694-4F80-B82F-99F87B5123456';		
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
    'tokenid: 0588209E-2715-419F-A913-732DA123456',                                                                                
    'Content-Length: ' . strlen($data_string),
	'utc_time : "1"'
	)                                                                       
); 
$result = curl_exec($curl);
curl_close($curl);
```

## python:

```python
import requests
import json

object_id = '12345cf-cd16-48bd-b8e1'
url = 'https://secure.powerlink.co.il/api/record/account/'
token_id = '73994acf-cd16-48bd-b8e1-17bc8f'
headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = requests.get(url + str(object_id), data=str(data), headers=headers)
return json.loads(response.content)['data']
```

## ASP.net:

```c#
using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "0588209E-2715-419F-7777-732DABBDFE61"; //זה של dev אז להחליף לפני שמעלים
                string objectid = "332DB2BF-3694-4F80-7777-99F87B5AAB56";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string json = new JavaScriptSerializer().Serialize(new
                {
                    accountname = "מושון"
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "PUT", json);
            }
```
