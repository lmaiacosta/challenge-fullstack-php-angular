<?php

return [
    'settings' => [
        'production' => false,
        'displayErrorDetails' => true,
        'addContentLengthHeader' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'avalyst_mysql',
            'database' => 'avalyst_teste',
            'username' => 'dev',
            'password' => 'dev',
            'charset'  => 'utf8',
            'collation' => 'utf8_general_ci',
            'options' => array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET lc_time_names = \'pt_br\''
            )
        ]
    ]
];
