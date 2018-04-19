import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.FFFF
FFFF = db.FFFF

insert = {
	"name": "Shield"
	
}


result = FFFF.insert_one(insert)