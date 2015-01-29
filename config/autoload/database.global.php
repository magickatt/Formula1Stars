<?php

return array(
    'db' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'sqlite:memory',
        'driver_options' => array(),
    ),
    'service_manager' => array(
        'factories' => array(
          'Db\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);