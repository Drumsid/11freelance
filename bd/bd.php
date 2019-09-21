<?php

define('HOST', 'localhost');
define('DBNAME', '11freelance');
define('DBUSER', 'root');
define('DBPASS', '12345678');
define('CHARSET', 'utf-8');// без чарсета могут быть некорректные знаки

// connect to db
$dbLink = new PDO("mysql:host=localhost;dbname=11freelance;charset=utf8", DBUSER, DBPASS) or die ("Ошибка" . mysqli_error($dbLink));
