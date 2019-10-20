<?php
/* You need to replace the host value (localhost here) with the database host
 And the dbname value (php_mvc) with your database name */
define('DB_DSN', 'mysql:host=localhost;dbname=php_mvc');

/* You need to replace root with the user name of the database */
define('DB_USER', 'root');

/* You need to add the user password of the database
WARNING : Add this file name to.gitignore file before adding the password */
define('DB_PASS', '');

/* You don't need to change anything here : this array is for PDO options */
define('DB_OPTIONS', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
