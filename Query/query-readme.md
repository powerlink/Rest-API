# Query


## JSON: 
<a href="https://github.com/powerlink/Rest-API/blob/master/Query/query-json.json">=> Download</a>

```javascript
{
      "page_number": 1,
      "objecttype": 1,
      "page_size":100,
      "query":"(statuscode = 1)",    //optional field
      "fields":"accountid",    //optional field
      "sort_by":"createdon",    //optional field
      "sort_type":"desc" //optional field
}
```

## PHP:
<a href="https://github.com/powerlink/Rest-API/blob/master/Query/query-php.php">=> Download</a>

```php
$data = '{
      "page_number": 1,
      "objecttype": 1,
      "page_size":100,
      "query":"(statuscode = 1)",    //optional field
      "fields":"accountid",    //optional field
      "sort_by":"createdon",    //optional field
      "sort_type":"desc" //optional field
        }';
$url='https://secure.powerlink.co.il/api/query'
$data_string = json_encode($data);  
$curl = curl_init();
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);                                                                   
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: xxxxxxx-xxxxx-xxxxx-xxxxx',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 
$result = curl_exec($curl);
curl_close($curl);

```

## python:
<a href="https://github.com/powerlink/Rest-API/blob/master/Query/query-python.py">=> Download</a>

```python
import requests
import json

url = 'https://secure.powerlink.co.il/api/query'
token_id = 'xxxxxxx-xxxxx-xxxxx-xxxxx'

data = {
   “page_number": 1,
    "objecttype" : 1,
    "page_size" : 100,
    "query" :“(id = 123)"    #optional field
    “fields”: ”id”,    #optional field
    "sort_by": “createdon”,    #optional field
    “sort_type”: ”desc”, #optional field
}

headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = requests.post(url + "/api/query", data=json.dumps(data), headers=headers)
return json.loads(response.content)['data']
```

## ASP.net:
<a href="https://github.com/powerlink/Rest-API/blob/master/Query/query-c.cs">=> Download</a>

```c#
using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "xxxxxxx-xxxxx-xxxxx-xxxxx"; 
                client.Headers.Set("tokenId", tokenid);
                client.Headers.Set("ContentType", "application/json");
                client.Headers.Set("utc_time", "1");
                client.Encoding = System.Text.Encoding.UTF8;
                string json = new JavaScriptSerializer().Serialize(new
                {
                    page_number = 1,
                    objecttype = 1,
                    page_size = 100,
                    query = "(statuscode = 1)",    //optional field
                    fields = "accountid",    //optional field
                    sort_by = "createdon",    //optional field
                    sort_type = "desc" //optional field
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/query", "POST", json);
            }
```
