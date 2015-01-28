<?php

return array(
    'router' => array(
        'routes' => array(
            'driver' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/driver',
                    'defaults' => array(
                        'controller' => 'Driver\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(),
    'controllers' => array(
        'invokables' => array(
            'Driver\Controller\Index' => 'Driver\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
