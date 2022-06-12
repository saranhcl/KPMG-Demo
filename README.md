# KPMG-Demo
Online Tech Challenge | KPMG - Saran



Repo to spin up a 3 tier application
Usage
When a user hits the web page, a dummy record is created in the mysql database while the web page shows the id of the latest entry inserted in the database, which can be tested by connecting to the database.

High Level design
This repo consists of a docker-compose file with configuration to start 3 Docker container(s) with "docker-compose up -d"

Database
PHP container (php-mysqli:7-apache)
Nginx
Database
MySql version 5.7 is used here as a database.

APP
PHP App container connects to MySql database

Web
Web container is based on Nginx, which passes the request to APP (PHP) which inturn connects to DB.
