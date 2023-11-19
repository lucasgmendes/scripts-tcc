#!/bin/bash

sudo su
apt update
apt upgrade -y
apt install apache2 php libapache2-mod-php php-mysql zip -y
service apache2 restart
touch /var/www/html/data.txt
cd /var/www/html/
rm index.html
unzip /caminho/do/seu/arquivo.zip