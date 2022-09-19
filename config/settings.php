<?php

return [
    'database' => [
        'dsn'      => 'sqlite:../data/app.db', # will be created if it doesn't exist.
        'username' => '',
        'password' => '',
        'options'  =>  [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
        ]
    ]
];