#!/bin/sh
sudo apt-get update
sudo apt-get install nginx git mysql-client -y
rm -rf /tmp/website
sleep 1
git clone https://github.com/BlancasJ/AWSweb.git /tmp/website
sleep 1
sudo cp /tmp/website/* /var/www/html/
sudo service nginx stop
sleep 1
sudo service nginx start
touch /tmp/done.txt

##
