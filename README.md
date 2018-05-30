# ide-at


## Start
```
docker-compose up
```

## Install
```
git clone https://github.com/AgenciaImplementacion/ide-at.git
cd ide-at
mkdir persistence-mariadb
sudo chown 1001:root persistence-mariadb/ -R
docker-compose up
```

## Configure
- Create .env file
- Create src/sites/default/service.yml y src/sites/default/settings.php
- Restore backup SQL
- Access with ```docker-compose exec web bash```
- Install dependencies in **/var/www/html** with command ```composer install```

## Restore database
```
 #mysql -u root -p < Drupal8Dump20180315.sql
 [root@web www]# mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 6108
Server version: 5.5.52-MariaDB MariaDB Server

Copyright (c) 2000, 2016, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use ideat;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [ideat]> \. Drupal8Dump20180315.sql
Query OK, 0 rows affected (0.00 sec)

```

## Reload cache
See https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache
```
docker-compose exec web drupal cc all
```
