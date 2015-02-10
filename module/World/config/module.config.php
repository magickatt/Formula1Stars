<?php

return array(
    'router' => array(
        'routes' => array(
            'country' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/country',
                    'defaults' => array(
                        'controller' => 'World\Controller\Country',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(),
    'controllers' => array(
        'invokables' => array(
            'World\Controller\Country' => 'World\Controller\CountryController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);