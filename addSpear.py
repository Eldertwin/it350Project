import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.FFFF
FFFF = db.FFFF

insert = {
	"name": "Spear"
	
}


result = FFFF.insert_one(insert)