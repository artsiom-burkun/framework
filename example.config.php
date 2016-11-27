<?php

return [
    'database' => [
        'user' => '',
        'password' => '',
        'connection' => 'sqlite:db.sqlite',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]
    ]
];