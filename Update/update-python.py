import requests
import json

object_id = 'e0f67202cae6cca49645cd076637e9e1f41b0eeawerwerwerwr'
url = 'https://secure.powerlink.co.il/api/record/account/'
token_id = 'e0f67202cae6cca49645cd076637e9e1f41b0eeawerwerwereww'
headers = {'Content-type': 'application/json', 'tokenId': token_id}
response = requests.get(url + str(object_id), data=str(data), headers=headers)
return json.loads(response.content)['data']
