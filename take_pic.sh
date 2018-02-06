#!/bin/sh

DATE=$(date +"%Y-%m-%d_%H%M")
raspistill -o /var/www/html/dhtsensor/BildVideo/$DATE.jpg
