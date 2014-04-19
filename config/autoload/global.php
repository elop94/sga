<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        ),
    ),
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'pgsql:dbname=postgres;host=localhost',
        'username' => 'postgres',
        'password' => 'root',
    ),

);
