<?php
return [
    'db_host' => 'localhost',
    'db_name' => 'crud',
    'db_user' => 'crud',
    'db_password' => '123369',
    'db_charset' => 'utf8',
    'db_options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
];