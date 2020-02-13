<?php
/* Replace the host value (localhost here) with your database host & the dbname value (php_mvc) with your database name */
define('DB_DSN', 'mysql:host=localhost;dbname=php_mvc');

/* Replace root with the user name of your database */
define('DB_USER', 'root');

/* Add the user password of your database
WARNING : Add this file name to.gitignore file before adding the password */
define('DB_PASS', '');

define('DB_OPTIONS', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
