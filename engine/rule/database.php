<?php
/**
* Database rule file Uinsu-Web-Framework
*/

/**
* Database server (cth : localhost)
*/
$dbServer = 'ec2-52-86-116-94.compute-1.amazonaws.com';

/**
* Database port (cth : 8888)
*/
$dbPort = 5432;

/**
* Database user
*/
$dbUser = 'bmsdyrtrkmdlll';

/**
* Database password
*/
$dbPassword = '180bd3f1e7bd56082cd4bad13c38832c76da338b47e9cb0d8734ff9137c27553';

/**
* Database name
*/
$dbName = 'd35j372no93fvq';

/**
* Database driver
*/
$dbDriver = 'pgsql';

/**
* Query builder
*/

$insert = 'INSERT INTO ';
$select = 'SELECT ';
$delete = 'DELETE FROM ';
$update = 'UPDATE ';

/**
* Define to public
*/

define('DB_DRIVER',$dbDriver);
define('DB_SERVER',$dbServer);
define('DB_PORT',$dbPort);
define('DB_USER',$dbUser);
define('DB_PASSWORD',$dbPassword);
define('DB_NAME',$dbName);

define('DB_INSERT', $insert);
define('DB_SELECT',$select);
define('DB_UPDATE',$update);
define('DB_DELETE',$delete);
