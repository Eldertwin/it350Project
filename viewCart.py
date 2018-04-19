import pymongo
import datetime
from pymongo import MongoClient

today = datetime.date.today()
client = MongoClient()
db = client.FFFF
search = {}
FFFF = db.FFFF.find(search)

for document in FFFF:
	print(today)
	print(document['name'] + '<br/>')
