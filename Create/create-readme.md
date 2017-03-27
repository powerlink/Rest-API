# Create

## JSON: <a href="https://github.com/powerlink/Rest-API/blob/master/Create/Create-json.json">=> Download</a>

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
       "accountname" : "משה",
      "telephone1" : "036339060",
      "idnumber" : "1234",
      "billingcity" : "תל אביב"
        }';                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('https://secure.powerlink.co.il/api/record/account');                                                                   
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'tokenid: 73994acf-cd16-48bd-b8e1-17bc8f',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
```

## python:

```python
import json
import urllib2

data = {
       "accountname" : "משה",
      "telephone1" : "036339060",
      "idnumber" : "1234",
      "billingcity" : "תל אביב"
}

req = urllib2.Request('https://secure.powerlink.co.il/api/record/account')
req.add_header('Content-Type', 'application/json')
req.add_header('tokenid', '73994acf-cd16-48bd-b8e1-17bc8f')

response = urllib2.urlopen(req, json.dumps(data))
```

## ASP.net:

```c#
var httpWebRequest = (HttpWebRequest)WebRequest.Create("https://secure.powerlink.co.il/api/record/account");
httpWebRequest.ContentType = "application/json";
httpWebRequest.Method = "POST";

using (var streamWriter = new StreamWriter(httpWebRequest.GetRequestStream()))
{
    string json = new JavaScriptSerializer().Serialize(new
                {
                  accountname = "משה",
                  telephone1 = "036339060",
                  idnumber = "1234",
                  billingcity= "תל אביב"
                });

    streamWriter.Write(json);
}

var httpResponse = (HttpWebResponse)httpWebRequest.GetResponse();
using (var streamReader = new StreamReader(httpResponse.GetResponseStream()))
{
    var result = streamReader.ReadToEnd();
}
