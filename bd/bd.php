<?php

define('HOST', 'localhost');
define('DBNAME', '11freelance');
define('DBUSER', 'root');
define('DBPASS', '');

// connect to db
$dbLink = new PDO('mysql:host=localhost;dbname=11freelance', DBUSER, DBPASS) or die ("Ошибка" . mysqli_error($dbLink));