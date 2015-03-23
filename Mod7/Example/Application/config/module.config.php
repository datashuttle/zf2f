<?php
/**
 * Route examples
 */

return array(
    'router' => [
        'routes' => [
            'test' => [
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => [
                    'route' => '/test[/:id]',
                    //'route' => '/test[/first/:first]',
                    //'route' => '/test[/first/:fname][/last/:lname]',
                    //'route' => '/test[/:fname][/:lname]',

                    //Or using something other than a slash
                    //'route' => '/test[#:fname][#:lname]',

                    'defaults' => [
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
);
