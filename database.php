<?php

$database = require_once 'config/database.php';

$dsn = sprintf(
    'mysql:host=%s;port=%s;dbname=%s',
    $database['host'],
    $database['port'],
    $database['name']
);

$db = new PDO(
    $dsn,
    $database['user'],
    $database['password']
);