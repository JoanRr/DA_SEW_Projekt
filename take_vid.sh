#!/bin/bash

DATE=$(date +"%Y-%m-%d_%H%M")
# Capture 5 seconds of raw video at 640x480 and 150kB/s bit rate into a pivideo$
raspivid -t 5000 -w 640 -h 480 -fps 25 -b 1200000 -p 0,0,640,480 -o /var/www/html/dhtsensor/BildVideo/$DATE.h264
# Wrap the raw video with an MP4 container: 
MP4Box -add /var/www/html/dhtsensor/BildVideo/$DATE.h264 /var/www/html/dhtsensor/BildVideo/$DATE.mp4
# Remove the source raw file, leaving the remaining pivideo.mp4 file to play
rm /var/www/html/dhtsensor/BildVideo/$DATE.h264
