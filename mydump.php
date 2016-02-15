#!/usr/bin/php
<?php
/**
 * Script to backup a db in local using mysqldump in a unix system
 */
$dbuser = 'dbUser';
$dbpass = 'dbPass';
$backup_dir = '~/Dir';

$settings = array (
    array("db" => "db_to_backup1"),
    array("db" => "db_to_backup2"),
);

echo "Start dump: \n";
foreach ($settings as $backup_details) {
    $db   = $backup_details['db'];
    $date = date(DATE_ISO8601); 
    $date = str_replace(':', '_', $date);
    $date = str_replace('+', '_', $date);
    
    $cmd  = "mysqldump -u{$dbuser} -p{$dbpass} $db > {$backup_dir}{$date}_{$db}.sql";
    $result = exec($cmd);
    
    echo $cmd . "\n";
    if (!empty($result)) {
        echo $result . "\n";
    }
}
