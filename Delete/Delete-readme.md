# Delete

To delete row in your powerlink account you only need call this URL:

```
https://secure.powerlink.co.il/api/record/{ObjectType}/{ID}
```

## JSON: 

```javascript
no data
```

## PHP:
<a href="https://github.com/powerlink/Rest-API/blob/master/Delete/delete-php.php">=> Download</a>

```php
$objectid = '332DB2BF-3694-4F80-B82F-99F8712345';		
$url =https://secure.powerlink.co.il/api/record/account/'.$objectid;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: xxxxx-xxxx-xxxxx-xxxxx',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
```

## python:
<a href="https://github.com/powerlink/Rest-API/blob/master/Delete/delete-python.py">=> Download</a>

```python
import requests
import json

url = 'https://secure.powerlink.co.il/api/record/account/'
token_id = 'xxxxx-xxxx-xxxxx-xxxxx'
object_id = '12345f-cd16-48bd-b8'

headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = requests.delete(url + str(object_id), headers=headers)
return json.loads(response.content)['data']
```

## ASP.net:
<a href="https://github.com/powerlink/Rest-API/blob/master/Delete/delete-c/cs">=> Download</a>

```c#
using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

 using (WebClient client = new WebClient())
            {
                string tokenid = "xxxxx-xxxx-xxxxx-xxxxx"; 
                string objectid = "xxxxx-xxxx-xxxxx-xxxxx";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "DELETE", "");
            }
```
