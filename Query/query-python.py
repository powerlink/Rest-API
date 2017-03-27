 import requests
import json

url = 'https://secure.powerlink.co.il/api/query'
token_id = '73994acf-cd16-48bd-b8e1-17bc8f'

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
