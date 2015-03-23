<?php
return [
	'controllers' => [
        'invokables' => [
            'market-index-controller'  => 'Market\Factory\IndexControllerFactory',
            'market-view-controller'   => 'Market\Factory\ViewControllerFactory',
        ],
        'factories' => [
            'market-post-controller' => 'Market\Factory\PostControllerFactory',
        ],
    ],
    'router' => [
        'routes' => [
            'market' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/market',
                    'defaults' => [
                        'controller'    => 'market-index-controller',
                        'action'        => 'index',
                        'module'        => 'market',
                    ],
                ],
        	],
        ],
    ],
];
