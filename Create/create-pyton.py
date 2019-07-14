import requests
import json

data = {
      "accountname" : "משה",
     "telephone1" : "036339060",
     "idnumber" : "1234",
     "billingcity" : "תל אביב"
}

url = 'https://secure.powerlink.co.il/api/record/account'
token_id = 'xxxxxxx-xxxxx-xxxxx-xxxxx'
headers = {'Content-type': 'application/json', 'tokenId': token_id}
response = requests.post(url, data=str(data), headers=headers)
return json.loads(response.content)['data']['Record']
