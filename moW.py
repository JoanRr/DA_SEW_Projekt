#!/usr/bin/python

import RPi.GPIO as GPIO
import time

motorPin = 38
GPIO.setmode( GPIO.BOARD)
GPIO.setup( motorPin, GPIO.OUT)

 # 50Hz PWM Frequency
pwm_motor = GPIO.PWM( motorPin, 50)

pwm_motor.start(100)

try:
  duty_s = 50

  duty = int(duty_s)

  pwm_motor.ChangeDutyCycle(duty)

  time.sleep(3)

except KeyboardInterrupt:
  print "Exiting Program"

except:
  print "Error Occurs, Exiting Program"

finally:
  GPIO.cleanup()
