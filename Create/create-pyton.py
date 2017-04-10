import requests
import json

data = {
      "accountname" : "משה",
     "telephone1" : "036339060",
     "idnumber" : "1234",
     "billingcity" : "תל אביב"
}

url = 'https://secure.powerlink.co.il/api/record/account'
token_id = '73994acf-cd16-48bd-b8e1-17bc8f'
headers = {'Content-type': 'application/json', 'tokenId': token_id}
response = requests.post(url, data=str(data), headers=headers)
return json.loads(response.content)['data']['Record']
