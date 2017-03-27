import requests
import json

url = 'https://secure.powerlink.co.il/api/record/account/'
token_id = '73994acf-cd16-48bd-b8e1-17bc8f'
object_id = '12345f-cd16-48bd-b8'

headers = {'Content-type': 'application/json', 'tokenId': token_id, 'utc_time' : str(1)}
response = requests.delete(url + str(object_id), headers=headers)
return json.loads(response.content)['data']
