#!/usr/bin/env python

import RPi.GPIO as GPIO
import time
import MySQLdb
from dhtsensor import read_dht11_dat

DHTPIN = 17
result = read_dht11_dat()
temperature, humidity = result

if humidity is not None and temperature is not None:
    print 'Temperature={0:0.1f} Humidity={1:0.1f}'.format(humidity, temperature)
else:
    print 'Failed to get a reading. Please try again!'

db = MySQLdb.connect("localhost", "root", "smartvehicle", "temp_database")
c = db.cursor()

humidity1 = humidity
print temperature
temperature1 = temperature
print humidity

sql= ("INSERT INTO tempLog (temperature, humidity) VALUES (%s,%s)", (humidity1,temperature1))
try:
   print "Writing to database..."
   c.execute(*sql)
   db.commit()
   print "Write Complete"
except:
    b.rollback()
    print "failed"

c.close()
db.close()

