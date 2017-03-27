GET:

import requests
import json

object_id = 123
url = ‘https://secure.powerlink.co.il/api/record/account/’
token_id = ’73994acf-cd16-48bd-b8e1-17bc8f'
headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = requests.get(url + str(object_id), headers=headers)
return json.loads(response.content)['data']['Record']

UPDATE:

import requests
import json

object_id = 123
url = ‘https://secure.powerlink.co.il/api/record/account/’
token_id = ’73994acf-cd16-48bd-b8e1-17bc8f'
headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = requests.get(url + str(object_id), data=str(data), headers=headers)
return json.loads(response.content)['data']


query:

import requests
import json

url = ‘https://secure.powerlink.co.il/api/query’
token_id = ’73994acf-cd16-48bd-b8e1-17bc8f'

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


DELETE:
import requests
import json

url = ‘https://secure.powerlink.co.il/api/record/1/’
token_id = ’73994acf-cd16-48bd-b8e1-17bc8f'
object_id = 123

headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = request.delete(url + str(object_id), headers=headers)
return json.loads(response.content)['data']
