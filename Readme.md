# SQL Injection App

## Setup
```
create database rootxran
```
```
use rootxran;
```
### Create user
```
CREATE USER 'user'@localhost IDENTIFIED BY 'password';
```
### Grant privileges to `user` on `rootxran` database
```
GRANT ALL ON rootxran.* TO 'user'@localhost IDENTIFIED BY 'password';
```
## Restore database from sqlinjection.sql file
```
mysql -u root -p rootxran < sqlinjection.sql
```
