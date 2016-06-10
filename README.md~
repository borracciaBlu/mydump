mydump
======

Small script to dump some dbs in local.

**Possible uses:**  
- crontab 
- bash

## Case: 
Assuming you are in a server with some sites to manage.
One possible folder structure would be:  

    /var/www/
    |
    -- /site1
    |
    -- /site2

Assuming that for each site you have a db in mysql with the same user and you want to generate regular backup.

## What do you want to achieve?
Automate part of the process on making backups. 

## How to:
    
    ca /var/www
    git clone https://github.com/borracciaBlu/mydump.git
    vim mydump/mydump.php

Edit the following variables according to your case:

    $dbuser = 'dbUser';
    $dbpass = 'dbPass';
    $backup_dir = '~/Dir';
    $settings = array (
        array("db" => "db_site1"),
        array("db" => "db_site2"),
    );

After that you can run the script with:

    php mydump/mydump.php






