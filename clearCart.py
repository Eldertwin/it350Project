import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.FFFF
search = {}
FFFF = db.FFFF.deleteMany(search)

for document in FFFF:
	ob_start();
	print(document['name'] + '<br/>')
	ob_end_clean();