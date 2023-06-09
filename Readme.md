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
## Prevent SQL Injection
Comment [rootxran.php#L107](https://github.com/rootxran/SQL-Injection-app/blob/c2658455568a9d91569032bf8a7ea1710ecaf1de/rootxran.php#L107)<br>
Uncomment [rootxran.php#L108](https://github.com/rootxran/SQL-Injection-app/blob/c2658455568a9d91569032bf8a7ea1710ecaf1de/rootxran.php#L108)
