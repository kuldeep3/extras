<?php

return [
    'database' => [
        'name' => 'php',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
        ]
];