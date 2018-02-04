#!/bin/bash

echo 'Doing Backup'
mysqldump -u root --databases dbdrupal > /scripts/backup-dbdrupal-`date +%Y-%m-%d`.sql

# restore
# select default schema/database
