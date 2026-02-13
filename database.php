<?php

$dbHost = 'mysql_app';
$dbName = 'mydb';
$dbUser = 'user';
$dbPassword = 'password';

$dsn = sprintf(
    'mysql:host=%s;dbname=%s',
    $dbHost,
    $dbName
);

$database = new PDO(
    $dsn,
    $dbUser,
    $dbPassword
);